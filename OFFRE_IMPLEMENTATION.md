# Implémentation de l'entité Offre - Documentation

## 📋 Résumé des modifications

Une nouvelle entité **Offre** a été créée avec une relation bidirectionnelle avec l'entité **Listing** (Annonce).

---

## 🏗️ Structure de l'Entité Offre

### Attributs

| Attribut | Type | Description |
|----------|------|-------------|
| `id` | `int` | Identifiant auto-incrémenté (clé primaire) |
| `listing` | `Listing` | Relation ManyToOne vers l'annonce |
| `utilisateur` | `User` | Relation ManyToOne vers l'acheteur |
| `prixPropose` | `decimal(10,2)` | Prix proposé par l'acheteur |
| `datePropose` | `datetime` | Date/heure de création de l'offre |
| `statut` | `string(50)` | Statut : "En attente", "Acceptée", "Refusée" |
| `commentaire` | `text` | Optionnel : message ou commentaire |

### Relations Doctrine

**Côté Offre (ManyToOne) :**
```php
#[ORM\ManyToOne(targetEntity: Listing::class, inversedBy: "offres")]
#[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
private ?Listing $listing = null;

#[ORM\ManyToOne(targetEntity: User::class)]
#[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
private ?User $utilisateur = null;
```

**Côté Listing (OneToMany) :**
```php
#[ORM\OneToMany(mappedBy: 'listing', targetEntity: Offre::class, cascade: ['persist', 'remove'])]
private Collection $offres;
```

---

## 📁 Fichiers créés

### Entités
- ✅ `src/Entity/Offre.php` - Entité Offre avec tous les attributs et relations

### Repository
- ✅ `src/Repository/OffreRepository.php` - Méthodes de requête personnalisées :
  - `findByListing($listingId)` - Récupère les offres d'une annonce
  - `findByUtilisateur($utilisateurId)` - Récupère les offres d'un utilisateur
  - `findByStatut($statut)` - Récupère les offres par statut
  - `findPendingByListing($listingId)` - Offres en attente d'une annonce (triées par prix décroissant)

### Formulaire
- ✅ `src/Form/OffreType.php` - Formulaire Symfony complet avec tous les champs

### Contrôleur
- ✅ `src/Controller/OffreController.php` - CRUD complet avec les actions :
  - `index()` - Liste toutes les offres
  - `byListing($listing)` - Affiche les offres pour une annonce spécifique
  - `new()` - Créer une nouvelle offre
  - `show($offre)` - Afficher les détails d'une offre
  - `edit($offre)` - Éditer une offre existante
  - `accept($offre)` - Accepter une offre
  - `refuse($offre)` - Refuser une offre
  - `delete($offre)` - Supprimer une offre
  - `myOffres()` - Voir ses propres offres
  - `byStatus($statut)` - Filtrer par statut

### Templates Twig
- ✅ `templates/offre/index.html.twig` - Liste de toutes les offres
- ✅ `templates/offre/new.html.twig` - Formulaire de création d'offre
- ✅ `templates/offre/show.html.twig` - Détails d'une offre
- ✅ `templates/offre/edit.html.twig` - Formulaire d'édition
- ✅ `templates/offre/listing_offres.html.twig` - Offres d'une annonce spécifique
- ✅ `templates/offre/my_offres.html.twig` - Mes offres (utilisateur connecté)
- ✅ `templates/offre/by_status.html.twig` - Offres filtrées par statut

---

## 🔄 Relations dans la Base de Données

### Table `offre`
```sql
CREATE TABLE offre (
    id INT AUTO_INCREMENT PRIMARY KEY,
    listing_id INT NOT NULL,
    utilisateur_id INT NOT NULL,
    prix_propose DECIMAL(10,2) NOT NULL,
    date_propose DATETIME NOT NULL,
    statut VARCHAR(50) NOT NULL,
    commentaire LONGTEXT NULL,
    
    FOREIGN KEY (listing_id) REFERENCES listing(id) ON DELETE CASCADE,
    FOREIGN KEY (utilisateur_id) REFERENCES user(id) ON DELETE CASCADE,
    
    INDEX (listing_id),
    INDEX (utilisateur_id)
);
```

---

## 🛣️ Routes disponibles

| Route | Méthode | Description |
|-------|---------|-------------|
| `/offre` | GET | Liste toutes les offres |
| `/offre/new` | GET, POST | Créer une nouvelle offre |
| `/offre/{id}` | GET | Afficher une offre |
| `/offre/{id}/edit` | GET, POST | Éditer une offre |
| `/offre/{id}/accept` | POST | Accepter une offre |
| `/offre/{id}/refuse` | POST | Refuser une offre |
| `/offre/{id}/delete` | POST | Supprimer une offre |
| `/offre/listing/{id}` | GET | Offres d'une annonce |
| `/offre/my-offres` | GET | Mes offres (utilisateur connecté) |
| `/offre/by-status/{statut}` | GET | Offres filtrées par statut |

---

## 🚀 Utilisation

### Créer une offre
```bash
# Visitez /offre/new ou utilisez le formulaire dans l'application
```

### Voir les offres d'une annonce
```bash
# Visitez /offre/listing/{id}
```

### Accepter/Refuser une offre
```bash
# Depuis la page de détails de l'offre (/offre/{id})
# Cliquez sur "Accepter" ou "Refuser"
```

### Voir ses propres offres
```bash
# Visitez /offre/my-offres (authentification requise)
```

---

## ✨ Fonctionnalités

✅ Gestion complète des offres (CRUD)
✅ Relation OneToMany/ManyToOne avec Listing et User
✅ Workflow de statut (En attente → Acceptée/Refusée)
✅ Commentaires et messages
✅ Filtrage par annonce, utilisateur et statut
✅ Interface utilisateur professionnelle avec Bootstrap
✅ Sécurité CSRF sur les actions POST
✅ Cascade delete pour éviter les données orphelines

---

## 📝 Prochaines étapes possibles

- [ ] Ajouter des notifications lorsqu'une offre est créée/acceptée/refusée
- [ ] Implémenter un système de compteur de prix (highest offer)
- [ ] Ajouter un système de messagerie entre l'acheteur et le vendeur
- [ ] Créer un API REST pour les offres
- [ ] Ajouter des tests unitaires
- [ ] Implémenter un système de permissions plus granulaire
