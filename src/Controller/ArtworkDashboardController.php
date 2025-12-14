<?php

namespace App\Controller;

use App\Entity\Artwork;
use App\Entity\Category;
use App\Repository\ArtworkRepository;
use App\Repository\CategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin/artworks')]
#[IsGranted('ROLE_ADMIN')]
class ArtworkDashboardController extends AbstractController
{
    public function __construct(
        private ArtworkRepository $artworkRepository,
        private CategoryRepository $categoryRepository,
        private EntityManagerInterface $em,
        private \App\Service\HarvardArtService $harvardArtService,
        private \App\Repository\CatalogueRepository $catalogueRepository
    ) {
    }

    #[Route('', name: 'admin_artworks_list', methods: ['GET'])]
    public function list(Request $request): Response
    {
        $filters = [
            'category' => $request->query->get('category'),
            'status' => $request->query->get('status'),
            'sort' => $request->query->get('sort'),
            'direction' => $request->query->get('direction'),
        ];
        
        $artworks = $this->artworkRepository->findAllWithFilters($filters, true); // true = isAdmin

        $categories = $this->categoryRepository->findAll();
        $stats = $this->getStatistics();

        return $this->render('artwork/admin_index.html.twig', [
            'artworks' => $artworks,
            'categories' => $categories,
            'stats' => $stats,
            'categoryId' => $filters['category'],
            'status' => $filters['status'],
            'filters' => $filters, // Pass all filters for UI state
        ]);
    }

    #[Route('/statistics', name: 'admin_artworks_stats', methods: ['GET'])]
    public function statistics(): Response
    {
        $stats = $this->getStatistics();
        
        return $this->render('artwork/admin_stats.html.twig', [
            'stats' => $stats,
        ]);
    }

    private function getStatistics(): array
    {
        $byCategory = [];
        $categories = $this->categoryRepository->findAll();
        
        foreach ($categories as $category) {
            $count = $this->artworkRepository->createQueryBuilder('a')
                ->select('COUNT(a.id)')
                ->where('a.category = :category')
                ->setParameter('category', $category)
                ->getQuery()
                ->getSingleScalarResult();
            
            $byCategory[$category->getName()] = $count;
        }

        return [
            'total' => $this->artworkRepository->count([]),
            'by_category' => $byCategory,
            'visible' => $this->artworkRepository->count(['status' => 'visible']),
            'hidden' => $this->artworkRepository->count(['status' => 'hidden']),
        ];
    }

    #[Route('/new', name: 'admin_artwork_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        if ($request->isMethod('POST')) {
            $title = $request->request->get('title');
            $artistUuid = $request->request->get('artist_uuid');

            if ($title && $artistUuid) {
                $artwork = new Artwork();
                $artwork->setTitle($title);
                $artwork->setArtistUuid($artistUuid);
                $artwork->setDescription($request->request->get('description') ?: null);
                
                // Validation: Image is mandatory on creation
                if (!$request->files->get('image_file') && !$request->request->get('image_url')) {
                    $this->addFlash('error', 'L\'image est obligatoire pour une nouvelle œuvre.');
                    return $this->redirectToRoute('admin_artwork_new');
                }

                // Validation: Price must be positive
                $price = $request->request->get('price');
                if ($price !== null && $price < 0) {
                    $this->addFlash('error', 'Le prix ne peut pas être négatif.');
                    return $this->redirectToRoute('admin_artwork_new');
                }

                // Validation: Category is mandatory
                $categoryId = $request->request->getInt('category_id');
                if (!$categoryId) {
                     $this->addFlash('error', 'La catégorie est obligatoire.');
                     return $this->redirectToRoute('admin_artwork_new');
                }

                $imageUrl = null;
                $uploadedFile = $request->files->get('image_file');
                
                if ($uploadedFile && $uploadedFile->isValid()) {
                    $allowedMimeTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
                    if (!in_array($uploadedFile->getMimeType(), $allowedMimeTypes)) {
                        $this->addFlash('error', 'Format d\'image non supporté.');
                        return $this->redirectToRoute('admin_artwork_new');
                    }
                    
                    if ($uploadedFile->getSize() > 5 * 1024 * 1024) {
                        $this->addFlash('error', 'L\'image est trop volumineuse (max 5MB).');
                        return $this->redirectToRoute('admin_artwork_new');
                    }
                    
                    $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
                    $extension = $uploadedFile->guessExtension();
                    $newFilename = $originalFilename . '_' . uniqid() . '.' . $extension;
                    
                    $uploadsDir = $this->getParameter('kernel.project_dir') . '/public/uploads/artworks';
                    if (!is_dir($uploadsDir)) {
                        mkdir($uploadsDir, 0755, true);
                    }
                    
                    try {
                        $uploadedFile->move($uploadsDir, $newFilename);
                        $imageUrl = '/uploads/artworks/' . $newFilename;
                    } catch (\Exception $e) {
                        $this->addFlash('error', 'Erreur lors de l\'upload: ' . $e->getMessage());
                        return $this->redirectToRoute('admin_artwork_new');
                    }
                } elseif ($request->request->get('image_url')) {
                    $imageUrl = $request->request->get('image_url');
                }
                
                $artwork->setImageUrl($imageUrl);
                $artwork->setPrice($price ?: null);
                $artwork->setStatus($request->request->get('status') ?: 'visible');

                // Category processing (Already validated presence)
                $category = $this->categoryRepository->find($categoryId);
                if ($category) {
                    $artwork->setCategory($category);
                } else {
                     $this->addFlash('error', 'Catégorie invalide.');
                     return $this->redirectToRoute('admin_artwork_new');
                }

                $this->em->persist($artwork);
                $this->em->flush();

                // Check for Automatic Catalogue Creation
                if ($this->getUser()) {
                    $user = $this->getUser();
                    $userArtworksCount = $this->artworkRepository->count(['artistUuid' => $user->getUuid()]); // Assuming artistUuid links to user. Or we should link via User entity if we changed it.
                    // Wait, Artwork stores artistUuid string, not User entity. 
                    // But in 'new', we set artistUuid from form or current user.
                    // Let's assume artistUuid == current user uuid.
                    if ($userArtworksCount >= 3) {
                         // Check if catalogue exists
                         $existingCatalogue = $this->catalogueRepository->findOneBy(['user' => $user]);
                         if (!$existingCatalogue) {
                             $catalogue = new \App\Entity\Catalogue();
                             $catalogue->setName('Catalogue de ' . ($user->getFirstName() ?: 'l\'artiste'));
                             $catalogue->setUser($user);
                             $this->em->persist($catalogue);
                             
                             // Add existing artworks to catalogue
                             $userArtworks = $this->artworkRepository->findBy(['artistUuid' => $user->getUuid()]);
                             foreach ($userArtworks as $art) {
                                 $art->setCatalogue($catalogue);
                             }
                             
                             $this->em->flush();
                             $this->addFlash('success', 'Félicitations ! Un catalogue a été généré automatiquement pour vos œuvres.');
                         }
                    }
                }

                $this->addFlash('success', 'Œuvre créée avec succès !');
                return $this->redirectToRoute('admin_artworks_list');
            }
        }

        $categories = $this->categoryRepository->findAll();

        return $this->render('artwork/admin_form.html.twig', [
            'categories' => $categories,
            'artwork' => null,
            'action' => 'new',
        ]);
    }

    #[Route('/{id}/edit', name: 'admin_artwork_edit', methods: ['GET', 'POST'])]
    public function edit(int $id, Request $request): Response
    {
        $artwork = $this->artworkRepository->find($id);
        if (!$artwork) {
            throw $this->createNotFoundException('Artwork not found');
        }

        if ($request->isMethod('POST')) {
            $title = $request->request->get('title');
            $artistUuid = $request->request->get('artist_uuid');

            if ($title && $artistUuid) {
                $artwork->setTitle($title);
                $artwork->setArtistUuid($artistUuid);
                $artwork->setDescription($request->request->get('description') ?: null);
                
                // Validation: Price must be positive
                $price = $request->request->get('price');
                if ($price !== null && $price < 0) {
                    $this->addFlash('error', 'Le prix ne peut pas être négatif.');
                    return $this->redirectToRoute('admin_artwork_edit', ['id' => $id]);
                }

                // Validation: Category is mandatory
                $categoryId = $request->request->getInt('category_id');
                if (!$categoryId) {
                     $this->addFlash('error', 'La catégorie est obligatoire.');
                     return $this->redirectToRoute('admin_artwork_edit', ['id' => $id]);
                }

                $uploadedFile = $request->files->get('image_file');
                
                if ($uploadedFile && $uploadedFile->isValid()) {
                    $allowedMimeTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
                    if (!in_array($uploadedFile->getMimeType(), $allowedMimeTypes)) {
                        $this->addFlash('error', 'Format d\'image non supporté.');
                        return $this->redirectToRoute('admin_artwork_edit', ['id' => $id]);
                    }
                    
                    if ($uploadedFile->getSize() > 5 * 1024 * 1024) {
                        $this->addFlash('error', 'L\'image est trop volumineuse (max 5MB).');
                        return $this->redirectToRoute('admin_artwork_edit', ['id' => $id]);
                    }
                    
                    $oldImageUrl = $artwork->getImageUrl();
                    if ($oldImageUrl && strpos($oldImageUrl, '/uploads/artworks/') === 0) {
                        $oldImagePath = $this->getParameter('kernel.project_dir') . '/public' . $oldImageUrl;
                        if (file_exists($oldImagePath)) {
                            @unlink($oldImagePath);
                        }
                    }
                    
                    $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
                    $extension = $uploadedFile->guessExtension();
                    $newFilename = $originalFilename . '_' . uniqid() . '.' . $extension;
                    
                    $uploadsDir = $this->getParameter('kernel.project_dir') . '/public/uploads/artworks';
                    if (!is_dir($uploadsDir)) {
                        mkdir($uploadsDir, 0755, true);
                    }
                    
                    try {
                        $uploadedFile->move($uploadsDir, $newFilename);
                        $artwork->setImageUrl('/uploads/artworks/' . $newFilename);
                    } catch (\Exception $e) {
                        $this->addFlash('error', 'Erreur lors de l\'upload: ' . $e->getMessage());
                        return $this->redirectToRoute('admin_artwork_edit', ['id' => $id]);
                    }
                } elseif ($request->request->get('image_url')) {
                    $artwork->setImageUrl($request->request->get('image_url'));
                }
                
                $artwork->setPrice($price ?: null);
                $artwork->setStatus($request->request->get('status') ?: 'visible');

                // Category processing (Already validated presence)
                $category = $this->categoryRepository->find($categoryId);
                if ($category) {
                    $artwork->setCategory($category);
                } else {
                     $this->addFlash('error', 'Catégorie invalide.');
                     return $this->redirectToRoute('admin_artwork_edit', ['id' => $id]);
                }

                $this->em->flush();
                
                $this->addFlash('success', 'Œuvre mise à jour avec succès !');
                return $this->redirectToRoute('admin_artworks_list');
            }
        }

        $categories = $this->categoryRepository->findAll();

        return $this->render('artwork/admin_form.html.twig', [
            'categories' => $categories,
            'artwork' => $artwork,
            'action' => 'edit',
        ]);
    }

    #[Route('/{id}/delete', name: 'admin_artwork_delete', methods: ['POST'])]
    public function delete(int $id, Request $request): Response
    {
        $artwork = $this->artworkRepository->find($id);
        if (!$artwork) {
            throw $this->createNotFoundException('Artwork not found');
        }

        if ($this->isCsrfTokenValid('delete_artwork_' . $id, $request->request->get('_token'))) {
            try {
                $this->em->remove($artwork);
                $this->em->flush();
                $this->addFlash('success', 'Œuvre supprimée avec succès.');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Erreur lors de la suppression : ' . $e->getMessage());
            }
        } else {
            $this->addFlash('error', 'Token CSRF invalide.');
        }

        return $this->redirectToRoute('admin_artworks_list');
    }

    #[Route('/categories', name: 'admin_category_index', methods: ['GET'])]
    public function categories(CategoryRepository $categoryRepository): Response
    {
        $categories = $categoryRepository->findAll();

        return $this->render('artwork/admin_categories.html.twig', [
            'categories' => $categories,
        ]);
    }

    #[Route('/categories/new', name: 'admin_category_new', methods: ['GET', 'POST'])]
    public function categoryNew(Request $request): Response
    {
        if ($request->isMethod('POST')) {
            $name = $request->request->get('name');
            if ($name) {
                $category = new Category();
                $category->setName($name);
                $category->setDescription($request->request->get('description') ?: null);

                $this->em->persist($category);
                $this->em->flush();

                return $this->redirectToRoute('admin_category_index');
            }
        }

        return $this->render('artwork/admin_category_form.html.twig', [
            'category' => null,
            'action' => 'new',
        ]);
    }

    #[Route('/categories/{id}/edit', name: 'admin_category_edit', methods: ['GET', 'POST'])]
    public function categoryEdit(int $id, Request $request): Response
    {
        $category = $this->categoryRepository->find($id);
        if (!$category) {
            throw $this->createNotFoundException('Category not found');
        }

        if ($request->isMethod('POST')) {
            $name = $request->request->get('name');
            if ($name) {
                $category->setName($name);
                $category->setDescription($request->request->get('description') ?: null);

                $this->em->flush();

                return $this->redirectToRoute('admin_category_index');
            }
        }

        return $this->render('artwork/admin_category_form.html.twig', [
            'category' => $category,
            'action' => 'edit',
        ]);
    }

    #[Route('/categories/{id}/delete', name: 'admin_category_delete', methods: ['POST'])]
    public function categoryDelete(int $id, Request $request): Response
    {
        $category = $this->categoryRepository->find($id);
        if (!$category) {
            throw $this->createNotFoundException('Category not found');
        }

        if ($this->isCsrfTokenValid('delete_category_' . $id, $request->request->get('_token'))) {
            // Check if category is used by any artworks
            $artworkRepository = $this->em->getRepository(Artwork::class);
            $artworksWithCategory = $artworkRepository->findBy(['category' => $category]);
            
            if (count($artworksWithCategory) > 0) {
                $this->addFlash('error', 'Cannot delete category: it is used by ' . count($artworksWithCategory) . ' artwork(s)');
            } else {
                $this->em->remove($category);
                $this->em->flush();
                $this->addFlash('success', 'Category deleted successfully');
            }
        }

        return $this->redirectToRoute('admin_category_index');
    }

    #[Route('/{id}/check-stolen', name: 'admin_artwork_check_stolen', methods: ['GET'])]
    public function checkStolen(int $id): Response
    {
        $artwork = $this->artworkRepository->find($id);
        if (!$artwork) {
            return $this->json(['error' => 'Artwork not found'], 404);
        }

        try {
            $results = $this->harvardArtService->searchArtworks($artwork->getTitle());
            return $this->json([
                'title' => $artwork->getTitle(),
                'matches' => $results['records'] ?? []
            ]);
        } catch (\Exception $e) {
            return $this->json(['error' => $e->getMessage()], 500);
        }
    }
}