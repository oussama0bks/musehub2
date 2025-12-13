<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* front/artworks.html.twig */
class __TwigTemplate_996b3bab3dd918295a78cfb2de9d46a6 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "front/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/artworks.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/artworks.html.twig"));

        $this->parent = $this->load("front/base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Œuvres - MuseHub";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"container my-5\">
    <div class=\"text-center mb-5\">
        <h1 class=\"display-4 fw-bold mb-3\">Galerie d'Œuvres</h1>
        <p class=\"lead text-muted\">Découvrez notre collection d'œuvres d'art</p>
    </div>

    <!-- Formulaire de création d'œuvre -->
    ";
        // line 13
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13) && (CoreExtension::inFilter("ROLE_ARTIST", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13), "roles", [], "any", false, false, false, 13)) || CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13), "roles", [], "any", false, false, false, 13))))) {
            // line 14
            yield "    <div class=\"card mb-5\">
        <div class=\"card-body\">
            <h5 class=\"card-title mb-3\">
                <i class=\"fas fa-plus-circle me-2\"></i>Ajouter une nouvelle œuvre
            </h5>
            <form action=\"";
            // line 19
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("web_artworks_create");
            yield "\" method=\"POST\" enctype=\"multipart/form-data\" id=\"artworkForm\">
                <div class=\"row\">
                    <div class=\"col-md-6 mb-3\">
                        <label class=\"form-label\">Titre *</label>
                        <input type=\"text\" class=\"form-control\" name=\"title\" required>
                    </div>
                    <div class=\"col-md-6 mb-3\">
                        <label class=\"form-label\">Prix (€)</label>
                        <input type=\"number\" step=\"0.01\" class=\"form-control\" name=\"price\">
                    </div>
                </div>
                <div class=\"mb-3\">
                    <label class=\"form-label\">Description</label>
                    <textarea class=\"form-control\" name=\"description\" rows=\"3\"></textarea>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-6 mb-3\">
                        <label class=\"form-label\">
                            <i class=\"fas fa-upload me-2\"></i>Image de l'œuvre (depuis votre PC)
                        </label>
                        <input type=\"file\" class=\"form-control\" name=\"image_file\" accept=\"image/*\" id=\"image_file_input\">
                        <small class=\"form-text text-muted\">Formats acceptés: JPG, PNG, GIF, WEBP (max 5MB)</small>
                        <div class=\"mt-2\">
                            <img id=\"imagePreview\" src=\"\" alt=\"Aperçu\" style=\"max-width: 200px; max-height: 200px; display: none; border-radius: 8px; margin-top: 10px;\">
                        </div>
                    </div>
                    <div class=\"col-md-6 mb-3\">
                        <label class=\"form-label\">Catégorie</label>
                        <select class=\"form-select\" name=\"category_id\">
                            <option value=\"\">Aucune catégorie</option>
                            ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 49, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 50
                yield "                                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 50), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 50), "html", null, true);
                yield "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            yield "                        </select>
                    </div>
                </div>
                <div class=\"mb-3\">
                    <label class=\"form-label\">
                        <i class=\"fas fa-link me-2\"></i>Ou URL de l'image (optionnel)
                    </label>
                    <input type=\"url\" class=\"form-control\" name=\"image_url\" id=\"image_url_input\" placeholder=\"https://...\">
                    <small class=\"form-text text-muted\">Si vous préférez utiliser une URL au lieu d'uploader un fichier</small>
                </div>
                <div class=\"mb-3\">
                    <label class=\"form-label\">Statut</label>
                    <select class=\"form-select\" name=\"status\">
                        <option value=\"visible\" selected>Visible</option>
                        <option value=\"hidden\">Masqué</option>
                    </select>
                </div>
                <div class=\"d-flex justify-content-end\">
                    <button type=\"submit\" class=\"btn btn-primary\">
                        <i class=\"fas fa-save me-2\"></i>Créer l'œuvre
                    </button>
                </div>
            </form>
            
            <script>
                // Preview image before upload
                const imageFileInput = document.getElementById('image_file_input');
                const imageUrlInput = document.getElementById('image_url_input');
                
                if (imageFileInput) {
                    imageFileInput.addEventListener('change', function(e) {
                        const file = e.target.files[0];
                        if (file) {
                            const reader = new FileReader();
                            reader.onload = function(e) {
                                const preview = document.getElementById('imagePreview');
                                preview.src = e.target.result;
                                preview.style.display = 'block';
                            };
                            reader.readAsDataURL(file);
                            // Clear URL input when file is selected
                            if (imageUrlInput) {
                                imageUrlInput.value = '';
                            }
                        }
                    });
                }
                
                // Clear file input when URL is entered
                if (imageUrlInput) {
                    imageUrlInput.addEventListener('input', function() {
                        if (this.value && imageFileInput) {
                            imageFileInput.value = '';
                            const preview = document.getElementById('imagePreview');
                            if (preview) {
                                preview.style.display = 'none';
                            }
                        }
                    });
                }
                
                // Form validation - require either file or URL
                document.getElementById('artworkForm')?.addEventListener('submit', function(e) {
                    const hasFile = imageFileInput && imageFileInput.files.length > 0;
                    const hasUrl = imageUrlInput && imageUrlInput.value.trim() !== '';
                    
                    if (!hasFile && !hasUrl) {
                        e.preventDefault();
                        alert('Veuillez soit uploader une image, soit fournir une URL d\\'image.');
                        return false;
                    }
                });
            </script>
        </div>
    </div>
    ";
        }
        // line 128
        yield "
    <div class=\"row g-4\">
        ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["artworks"]) || array_key_exists("artworks", $context) ? $context["artworks"] : (function () { throw new RuntimeError('Variable "artworks" does not exist.', 130, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["artwork"]) {
            // line 131
            yield "        <div class=\"col-md-6 col-lg-4\">
            <div class=\"card h-100\">
                ";
            // line 133
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["artwork"], "imageUrl", [], "any", false, false, false, 133)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 134
                yield "                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["artwork"], "imageUrl", [], "any", false, false, false, 134), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["artwork"], "title", [], "any", false, false, false, 134), "html", null, true);
                yield "\" class=\"artwork-image\">
                ";
            } else {
                // line 136
                yield "                    <div class=\"artwork-image bg-secondary d-flex align-items-center justify-content-center text-white\">
                        <i class=\"fas fa-image fa-3x\"></i>
                    </div>
                ";
            }
            // line 140
            yield "                <div class=\"card-body\">
                    <h5 class=\"card-title\">";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["artwork"], "title", [], "any", false, false, false, 141), "html", null, true);
            yield "</h5>
                    <p class=\"text-muted small mb-2\">
                        ";
            // line 143
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["artwork"], "category", [], "any", false, false, false, 143)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 144
                yield "                            <span class=\"badge bg-info\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["artwork"], "category", [], "any", false, false, false, 144), "name", [], "any", false, false, false, 144), "html", null, true);
                yield "</span>
                        ";
            }
            // line 146
            yield "                        <span class=\"badge bg-";
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["artwork"], "status", [], "any", false, false, false, 146) == "visible")) ? ("success") : ("secondary"));
            yield "\">
                            ";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["artwork"], "status", [], "any", false, false, false, 147), "html", null, true);
            yield "
                        </span>
                    </p>
                    ";
            // line 150
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["artwork"], "description", [], "any", false, false, false, 150)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 151
                yield "                        <p class=\"card-text\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["artwork"], "description", [], "any", false, false, false, 151), 0, 150), "html", null, true);
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["artwork"], "description", [], "any", false, false, false, 151)) > 150)) {
                    yield "...";
                }
                yield "</p>
                    ";
            }
            // line 153
            yield "                    <div class=\"d-flex justify-content-between align-items-center mt-3\">
                        ";
            // line 154
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["artwork"], "price", [], "any", false, false, false, 154)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 155
                yield "                            <span class=\"text-primary fw-bold fs-5\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["artwork"], "price", [], "any", false, false, false, 155), "html", null, true);
                yield " €</span>
                        ";
            } else {
                // line 157
                yield "                            <span class=\"text-muted\">Prix sur demande</span>
                        ";
            }
            // line 159
            yield "                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("artwork_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["artwork"], "id", [], "any", false, false, false, 159)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-primary\">Voir détails</a>
                    </div>
                </div>
            </div>
        </div>
        ";
            $context['_iterated'] = true;
        }
        // line 164
        if (!$context['_iterated']) {
            // line 165
            yield "        <div class=\"col-12\">
            <div class=\"alert alert-info text-center\">
                <i class=\"fas fa-info-circle me-2\"></i>Aucune œuvre disponible pour le moment.
                <br>
                <a href=\"";
            // line 169
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
            yield "\" class=\"btn btn-primary mt-3\">Ajouter une œuvre (Admin)</a>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['artwork'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        yield "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/artworks.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  355 => 173,  345 => 169,  339 => 165,  337 => 164,  326 => 159,  322 => 157,  316 => 155,  314 => 154,  311 => 153,  302 => 151,  300 => 150,  294 => 147,  289 => 146,  283 => 144,  281 => 143,  276 => 141,  273 => 140,  267 => 136,  259 => 134,  257 => 133,  253 => 131,  248 => 130,  244 => 128,  166 => 52,  155 => 50,  151 => 49,  118 => 19,  111 => 14,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block title %}Œuvres - MuseHub{% endblock %}

{% block body %}
<div class=\"container my-5\">
    <div class=\"text-center mb-5\">
        <h1 class=\"display-4 fw-bold mb-3\">Galerie d'Œuvres</h1>
        <p class=\"lead text-muted\">Découvrez notre collection d'œuvres d'art</p>
    </div>

    <!-- Formulaire de création d'œuvre -->
    {% if app.user and ('ROLE_ARTIST' in app.user.roles or 'ROLE_ADMIN' in app.user.roles) %}
    <div class=\"card mb-5\">
        <div class=\"card-body\">
            <h5 class=\"card-title mb-3\">
                <i class=\"fas fa-plus-circle me-2\"></i>Ajouter une nouvelle œuvre
            </h5>
            <form action=\"{{ path('web_artworks_create') }}\" method=\"POST\" enctype=\"multipart/form-data\" id=\"artworkForm\">
                <div class=\"row\">
                    <div class=\"col-md-6 mb-3\">
                        <label class=\"form-label\">Titre *</label>
                        <input type=\"text\" class=\"form-control\" name=\"title\" required>
                    </div>
                    <div class=\"col-md-6 mb-3\">
                        <label class=\"form-label\">Prix (€)</label>
                        <input type=\"number\" step=\"0.01\" class=\"form-control\" name=\"price\">
                    </div>
                </div>
                <div class=\"mb-3\">
                    <label class=\"form-label\">Description</label>
                    <textarea class=\"form-control\" name=\"description\" rows=\"3\"></textarea>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-6 mb-3\">
                        <label class=\"form-label\">
                            <i class=\"fas fa-upload me-2\"></i>Image de l'œuvre (depuis votre PC)
                        </label>
                        <input type=\"file\" class=\"form-control\" name=\"image_file\" accept=\"image/*\" id=\"image_file_input\">
                        <small class=\"form-text text-muted\">Formats acceptés: JPG, PNG, GIF, WEBP (max 5MB)</small>
                        <div class=\"mt-2\">
                            <img id=\"imagePreview\" src=\"\" alt=\"Aperçu\" style=\"max-width: 200px; max-height: 200px; display: none; border-radius: 8px; margin-top: 10px;\">
                        </div>
                    </div>
                    <div class=\"col-md-6 mb-3\">
                        <label class=\"form-label\">Catégorie</label>
                        <select class=\"form-select\" name=\"category_id\">
                            <option value=\"\">Aucune catégorie</option>
                            {% for category in categories %}
                                <option value=\"{{ category.id }}\">{{ category.name }}</option>
                            {% endfor %}
                        </select>
                    </div>
                </div>
                <div class=\"mb-3\">
                    <label class=\"form-label\">
                        <i class=\"fas fa-link me-2\"></i>Ou URL de l'image (optionnel)
                    </label>
                    <input type=\"url\" class=\"form-control\" name=\"image_url\" id=\"image_url_input\" placeholder=\"https://...\">
                    <small class=\"form-text text-muted\">Si vous préférez utiliser une URL au lieu d'uploader un fichier</small>
                </div>
                <div class=\"mb-3\">
                    <label class=\"form-label\">Statut</label>
                    <select class=\"form-select\" name=\"status\">
                        <option value=\"visible\" selected>Visible</option>
                        <option value=\"hidden\">Masqué</option>
                    </select>
                </div>
                <div class=\"d-flex justify-content-end\">
                    <button type=\"submit\" class=\"btn btn-primary\">
                        <i class=\"fas fa-save me-2\"></i>Créer l'œuvre
                    </button>
                </div>
            </form>
            
            <script>
                // Preview image before upload
                const imageFileInput = document.getElementById('image_file_input');
                const imageUrlInput = document.getElementById('image_url_input');
                
                if (imageFileInput) {
                    imageFileInput.addEventListener('change', function(e) {
                        const file = e.target.files[0];
                        if (file) {
                            const reader = new FileReader();
                            reader.onload = function(e) {
                                const preview = document.getElementById('imagePreview');
                                preview.src = e.target.result;
                                preview.style.display = 'block';
                            };
                            reader.readAsDataURL(file);
                            // Clear URL input when file is selected
                            if (imageUrlInput) {
                                imageUrlInput.value = '';
                            }
                        }
                    });
                }
                
                // Clear file input when URL is entered
                if (imageUrlInput) {
                    imageUrlInput.addEventListener('input', function() {
                        if (this.value && imageFileInput) {
                            imageFileInput.value = '';
                            const preview = document.getElementById('imagePreview');
                            if (preview) {
                                preview.style.display = 'none';
                            }
                        }
                    });
                }
                
                // Form validation - require either file or URL
                document.getElementById('artworkForm')?.addEventListener('submit', function(e) {
                    const hasFile = imageFileInput && imageFileInput.files.length > 0;
                    const hasUrl = imageUrlInput && imageUrlInput.value.trim() !== '';
                    
                    if (!hasFile && !hasUrl) {
                        e.preventDefault();
                        alert('Veuillez soit uploader une image, soit fournir une URL d\\'image.');
                        return false;
                    }
                });
            </script>
        </div>
    </div>
    {% endif %}

    <div class=\"row g-4\">
        {% for artwork in artworks %}
        <div class=\"col-md-6 col-lg-4\">
            <div class=\"card h-100\">
                {% if artwork.imageUrl %}
                    <img src=\"{{ artwork.imageUrl }}\" alt=\"{{ artwork.title }}\" class=\"artwork-image\">
                {% else %}
                    <div class=\"artwork-image bg-secondary d-flex align-items-center justify-content-center text-white\">
                        <i class=\"fas fa-image fa-3x\"></i>
                    </div>
                {% endif %}
                <div class=\"card-body\">
                    <h5 class=\"card-title\">{{ artwork.title }}</h5>
                    <p class=\"text-muted small mb-2\">
                        {% if artwork.category %}
                            <span class=\"badge bg-info\">{{ artwork.category.name }}</span>
                        {% endif %}
                        <span class=\"badge bg-{{ artwork.status == 'visible' ? 'success' : 'secondary' }}\">
                            {{ artwork.status }}
                        </span>
                    </p>
                    {% if artwork.description %}
                        <p class=\"card-text\">{{ artwork.description|slice(0, 150) }}{% if artwork.description|length > 150 %}...{% endif %}</p>
                    {% endif %}
                    <div class=\"d-flex justify-content-between align-items-center mt-3\">
                        {% if artwork.price %}
                            <span class=\"text-primary fw-bold fs-5\">{{ artwork.price }} €</span>
                        {% else %}
                            <span class=\"text-muted\">Prix sur demande</span>
                        {% endif %}
                        <a href=\"{{ path('artwork_show', {id: artwork.id}) }}\" class=\"btn btn-sm btn-primary\">Voir détails</a>
                    </div>
                </div>
            </div>
        </div>
        {% else %}
        <div class=\"col-12\">
            <div class=\"alert alert-info text-center\">
                <i class=\"fas fa-info-circle me-2\"></i>Aucune œuvre disponible pour le moment.
                <br>
                <a href=\"{{ path('admin_dashboard') }}\" class=\"btn btn-primary mt-3\">Ajouter une œuvre (Admin)</a>
            </div>
        </div>
        {% endfor %}
    </div>
</div>
{% endblock %}


", "front/artworks.html.twig", "C:\\xampp\\htdocs\\MuseHub-my-work\\MuseHub-my-work\\templates\\front\\artworks.html.twig");
    }
}
