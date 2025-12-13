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

/* artwork/admin_form.html.twig */
class __TwigTemplate_7618e715d145435a564071d3a5536f30 extends Template
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
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "artwork/admin_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "artwork/admin_form.html.twig"));

        $this->parent = $this->load("admin/base.html.twig", 1);
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

        // line 4
        yield "    ";
        if ((($tmp = (isset($context["artwork"]) || array_key_exists("artwork", $context) ? $context["artwork"] : (function () { throw new RuntimeError('Variable "artwork" does not exist.', 4, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "Éditer une œuvre";
        } else {
            yield "Nouvelle œuvre";
        }
        yield " - MuseHub Admin
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "<div class=\"mb-4\">
    <div class=\"d-flex justify-content-between align-items-center\">
        <div>
            <h1 class=\"h3 mb-0\">
                <i class=\"fas fa-";
        // line 12
        yield (((($tmp = (isset($context["artwork"]) || array_key_exists("artwork", $context) ? $context["artwork"] : (function () { throw new RuntimeError('Variable "artwork" does not exist.', 12, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("edit") : ("plus-circle"));
        yield " me-2\"></i>
                ";
        // line 13
        if ((($tmp = (isset($context["artwork"]) || array_key_exists("artwork", $context) ? $context["artwork"] : (function () { throw new RuntimeError('Variable "artwork" does not exist.', 13, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "Éditer une œuvre";
        } else {
            yield "Nouvelle œuvre";
        }
        // line 14
        yield "            </h1>
            <p class=\"text-muted\">";
        // line 15
        if ((($tmp = (isset($context["artwork"]) || array_key_exists("artwork", $context) ? $context["artwork"] : (function () { throw new RuntimeError('Variable "artwork" does not exist.', 15, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "Modifier les informations de l'œuvre";
        } else {
            yield "Créer une nouvelle œuvre d'art";
        }
        yield "</p>
        </div>
        <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_artwork_index");
        yield "\" class=\"btn btn-outline-secondary\">
            <i class=\"fas fa-arrow-left me-2\"></i>Retour à la liste
        </a>
    </div>
</div>

<div class=\"card\" style=\"border-radius: 15px; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.1);\">
    <div class=\"card-body p-4\">
        <form method=\"post\" enctype=\"multipart/form-data\">
            <div class=\"row\">
                <div class=\"col-md-6 mb-3\">
                    <label for=\"title\" class=\"form-label fw-bold\">
                        <i class=\"fas fa-heading me-2 text-primary\"></i>Titre *
                    </label>
                    <input type=\"text\" class=\"form-control\" id=\"title\" name=\"title\" 
                           value=\"";
        // line 32
        yield (((($tmp = (isset($context["artwork"]) || array_key_exists("artwork", $context) ? $context["artwork"] : (function () { throw new RuntimeError('Variable "artwork" does not exist.', 32, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["artwork"]) || array_key_exists("artwork", $context) ? $context["artwork"] : (function () { throw new RuntimeError('Variable "artwork" does not exist.', 32, $this->source); })()), "title", [], "any", false, false, false, 32), "html", null, true)) : (""));
        yield "\" required 
                           placeholder=\"Titre de l'œuvre\">
                </div>
                <div class=\"col-md-6 mb-3\">
                    <label for=\"artist_uuid\" class=\"form-label fw-bold\">
                        <i class=\"fas fa-user me-2 text-primary\"></i>Artiste UUID *
                    </label>
                    <input type=\"text\" class=\"form-control\" id=\"artist_uuid\" name=\"artist_uuid\" 
                           value=\"";
        // line 40
        yield (((($tmp = (isset($context["artwork"]) || array_key_exists("artwork", $context) ? $context["artwork"] : (function () { throw new RuntimeError('Variable "artwork" does not exist.', 40, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["artwork"]) || array_key_exists("artwork", $context) ? $context["artwork"] : (function () { throw new RuntimeError('Variable "artwork" does not exist.', 40, $this->source); })()), "artistUuid", [], "any", false, false, false, 40), "html", null, true)) : ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), "uuid", [], "any", false, false, false, 40), "html", null, true)) : (""))));
        yield "\" required 
                           placeholder=\"UUID de l'artiste\">
                    <small class=\"text-muted\">UUID de l'artiste propriétaire</small>
                </div>
            </div>

            <div class=\"mb-3\">
                <label for=\"description\" class=\"form-label fw-bold\">
                    <i class=\"fas fa-align-left me-2 text-primary\"></i>Description
                </label>
                <textarea class=\"form-control\" id=\"description\" name=\"description\" rows=\"4\" 
                          placeholder=\"Description détaillée de l'œuvre...\">";
        // line 51
        yield (((($tmp = (isset($context["artwork"]) || array_key_exists("artwork", $context) ? $context["artwork"] : (function () { throw new RuntimeError('Variable "artwork" does not exist.', 51, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["artwork"]) || array_key_exists("artwork", $context) ? $context["artwork"] : (function () { throw new RuntimeError('Variable "artwork" does not exist.', 51, $this->source); })()), "description", [], "any", false, false, false, 51), "html", null, true)) : (""));
        yield "</textarea>
            </div>

            <div class=\"row\">
                <div class=\"col-md-6 mb-3\">
                    <label for=\"image_file\" class=\"form-label fw-bold\">
                        <i class=\"fas fa-upload me-2 text-primary\"></i>Image de l'œuvre
                    </label>
                    <input type=\"file\" class=\"form-control\" id=\"image_file\" name=\"image_file\" accept=\"image/*\">
                    <small class=\"form-text text-muted\">Formats acceptés: JPG, PNG, GIF, WEBP (max 5MB)</small>
                    ";
        // line 61
        if (((isset($context["artwork"]) || array_key_exists("artwork", $context) ? $context["artwork"] : (function () { throw new RuntimeError('Variable "artwork" does not exist.', 61, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["artwork"]) || array_key_exists("artwork", $context) ? $context["artwork"] : (function () { throw new RuntimeError('Variable "artwork" does not exist.', 61, $this->source); })()), "imageUrl", [], "any", false, false, false, 61))) {
            // line 62
            yield "                        <div class=\"mt-2\">
                            <p class=\"small text-muted mb-1\">Image actuelle:</p>
                            <img src=\"";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["artwork"]) || array_key_exists("artwork", $context) ? $context["artwork"] : (function () { throw new RuntimeError('Variable "artwork" does not exist.', 64, $this->source); })()), "imageUrl", [], "any", false, false, false, 64), "html", null, true);
            yield "\" alt=\"Image actuelle\" style=\"max-width: 200px; max-height: 200px; border-radius: 8px;\">
                        </div>
                    ";
        }
        // line 67
        yield "                    <div class=\"mt-2\">
                        <img id=\"imagePreview\" src=\"\" alt=\"Aperçu\" style=\"max-width: 200px; max-height: 200px; display: none; border-radius: 8px;\">
                    </div>
                </div>
                <div class=\"col-md-6 mb-3\">
                    <label for=\"image_url\" class=\"form-label fw-bold\">
                        <i class=\"fas fa-link me-2 text-primary\"></i>Ou URL de l'image (optionnel)
                    </label>
                    <input type=\"url\" class=\"form-control\" id=\"image_url\" name=\"image_url\" 
                           value=\"";
        // line 76
        yield ((((isset($context["artwork"]) || array_key_exists("artwork", $context) ? $context["artwork"] : (function () { throw new RuntimeError('Variable "artwork" does not exist.', 76, $this->source); })()) && (is_string($_v0 =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["artwork"]) || array_key_exists("artwork", $context) ? $context["artwork"] : (function () { throw new RuntimeError('Variable "artwork" does not exist.', 76, $this->source); })()), "imageUrl", [], "any", false, false, false, 76)) && is_string($_v1 = "/uploads/") && str_starts_with($_v0, $_v1)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["artwork"]) || array_key_exists("artwork", $context) ? $context["artwork"] : (function () { throw new RuntimeError('Variable "artwork" does not exist.', 76, $this->source); })()), "imageUrl", [], "any", false, false, false, 76), "html", null, true)) : (""));
        yield "\" 
                           placeholder=\"https://example.com/image.jpg\">
                    <small class=\"form-text text-muted\">Si vous préférez utiliser une URL au lieu d'uploader</small>
                </div>
                <div class=\"col-md-3 mb-3\">
                    <label for=\"price\" class=\"form-label fw-bold\">
                        <i class=\"fas fa-euro-sign me-2 text-primary\"></i>Prix (€)
                    </label>
                    <input type=\"number\" step=\"0.01\" class=\"form-control\" id=\"price\" name=\"price\" 
                           value=\"";
        // line 85
        yield (((($tmp = (isset($context["artwork"]) || array_key_exists("artwork", $context) ? $context["artwork"] : (function () { throw new RuntimeError('Variable "artwork" does not exist.', 85, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["artwork"]) || array_key_exists("artwork", $context) ? $context["artwork"] : (function () { throw new RuntimeError('Variable "artwork" does not exist.', 85, $this->source); })()), "price", [], "any", false, false, false, 85), "html", null, true)) : (""));
        yield "\" 
                           placeholder=\"0.00\">
                </div>
                <div class=\"col-md-3 mb-3\">
                    <label for=\"status\" class=\"form-label fw-bold\">
                        <i class=\"fas fa-eye me-2 text-primary\"></i>Statut
                    </label>
                    <select class=\"form-select\" id=\"status\" name=\"status\">
                        <option value=\"visible\" ";
        // line 93
        if (( !(isset($context["artwork"]) || array_key_exists("artwork", $context) ? $context["artwork"] : (function () { throw new RuntimeError('Variable "artwork" does not exist.', 93, $this->source); })()) || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["artwork"]) || array_key_exists("artwork", $context) ? $context["artwork"] : (function () { throw new RuntimeError('Variable "artwork" does not exist.', 93, $this->source); })()), "status", [], "any", false, false, false, 93) == "visible"))) {
            yield "selected";
        }
        yield ">Visible</option>
                        <option value=\"hidden\" ";
        // line 94
        if (((isset($context["artwork"]) || array_key_exists("artwork", $context) ? $context["artwork"] : (function () { throw new RuntimeError('Variable "artwork" does not exist.', 94, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["artwork"]) || array_key_exists("artwork", $context) ? $context["artwork"] : (function () { throw new RuntimeError('Variable "artwork" does not exist.', 94, $this->source); })()), "status", [], "any", false, false, false, 94) == "hidden"))) {
            yield "selected";
        }
        yield ">Caché</option>
                    </select>
                </div>
            </div>

            <div class=\"mb-4\">
                <label for=\"category_id\" class=\"form-label fw-bold\">
                    <i class=\"fas fa-tags me-2 text-primary\"></i>Catégorie
                </label>
                <select class=\"form-select\" id=\"category_id\" name=\"category_id\">
                    <option value=\"\">Aucune catégorie</option>
                    ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 105, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 106
            yield "                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 106), "html", null, true);
            yield "\" ";
            if ((((isset($context["artwork"]) || array_key_exists("artwork", $context) ? $context["artwork"] : (function () { throw new RuntimeError('Variable "artwork" does not exist.', 106, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["artwork"]) || array_key_exists("artwork", $context) ? $context["artwork"] : (function () { throw new RuntimeError('Variable "artwork" does not exist.', 106, $this->source); })()), "category", [], "any", false, false, false, 106)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["artwork"]) || array_key_exists("artwork", $context) ? $context["artwork"] : (function () { throw new RuntimeError('Variable "artwork" does not exist.', 106, $this->source); })()), "category", [], "any", false, false, false, 106), "id", [], "any", false, false, false, 106) == CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 106)))) {
                yield "selected";
            }
            yield ">
                            ";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 107), "html", null, true);
            yield "
                        </option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        yield "                </select>
            </div>

            <div class=\"d-flex justify-content-between align-items-center pt-3 border-top\">
                <a href=\"";
        // line 114
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_artwork_index");
        yield "\" class=\"btn btn-outline-secondary\">
                    <i class=\"fas fa-times me-2\"></i>Annuler
                </a>
                <button type=\"submit\" class=\"btn btn-primary\">
                    <i class=\"fas fa-save me-2\"></i>Enregistrer
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    // Preview image before upload
    document.querySelector('input[name=\"image_file\"]')?.addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const preview = document.getElementById('imagePreview');
                preview.src = e.target.result;
                preview.style.display = 'block';
            };
            reader.readAsDataURL(file);
        }
    });
</script>
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
        return "artwork/admin_form.html.twig";
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
        return array (  288 => 114,  282 => 110,  273 => 107,  264 => 106,  260 => 105,  244 => 94,  238 => 93,  227 => 85,  215 => 76,  204 => 67,  198 => 64,  194 => 62,  192 => 61,  179 => 51,  165 => 40,  154 => 32,  136 => 17,  127 => 15,  124 => 14,  118 => 13,  114 => 12,  108 => 8,  95 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}
    {% if artwork %}Éditer une œuvre{% else %}Nouvelle œuvre{% endif %} - MuseHub Admin
{% endblock %}

{% block body %}
<div class=\"mb-4\">
    <div class=\"d-flex justify-content-between align-items-center\">
        <div>
            <h1 class=\"h3 mb-0\">
                <i class=\"fas fa-{{ artwork ? 'edit' : 'plus-circle' }} me-2\"></i>
                {% if artwork %}Éditer une œuvre{% else %}Nouvelle œuvre{% endif %}
            </h1>
            <p class=\"text-muted\">{% if artwork %}Modifier les informations de l'œuvre{% else %}Créer une nouvelle œuvre d'art{% endif %}</p>
        </div>
        <a href=\"{{ path('admin_artwork_index') }}\" class=\"btn btn-outline-secondary\">
            <i class=\"fas fa-arrow-left me-2\"></i>Retour à la liste
        </a>
    </div>
</div>

<div class=\"card\" style=\"border-radius: 15px; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.1);\">
    <div class=\"card-body p-4\">
        <form method=\"post\" enctype=\"multipart/form-data\">
            <div class=\"row\">
                <div class=\"col-md-6 mb-3\">
                    <label for=\"title\" class=\"form-label fw-bold\">
                        <i class=\"fas fa-heading me-2 text-primary\"></i>Titre *
                    </label>
                    <input type=\"text\" class=\"form-control\" id=\"title\" name=\"title\" 
                           value=\"{{ artwork ? artwork.title : '' }}\" required 
                           placeholder=\"Titre de l'œuvre\">
                </div>
                <div class=\"col-md-6 mb-3\">
                    <label for=\"artist_uuid\" class=\"form-label fw-bold\">
                        <i class=\"fas fa-user me-2 text-primary\"></i>Artiste UUID *
                    </label>
                    <input type=\"text\" class=\"form-control\" id=\"artist_uuid\" name=\"artist_uuid\" 
                           value=\"{{ artwork ? artwork.artistUuid : (app.user ? app.user.uuid : '') }}\" required 
                           placeholder=\"UUID de l'artiste\">
                    <small class=\"text-muted\">UUID de l'artiste propriétaire</small>
                </div>
            </div>

            <div class=\"mb-3\">
                <label for=\"description\" class=\"form-label fw-bold\">
                    <i class=\"fas fa-align-left me-2 text-primary\"></i>Description
                </label>
                <textarea class=\"form-control\" id=\"description\" name=\"description\" rows=\"4\" 
                          placeholder=\"Description détaillée de l'œuvre...\">{{ artwork ? artwork.description : '' }}</textarea>
            </div>

            <div class=\"row\">
                <div class=\"col-md-6 mb-3\">
                    <label for=\"image_file\" class=\"form-label fw-bold\">
                        <i class=\"fas fa-upload me-2 text-primary\"></i>Image de l'œuvre
                    </label>
                    <input type=\"file\" class=\"form-control\" id=\"image_file\" name=\"image_file\" accept=\"image/*\">
                    <small class=\"form-text text-muted\">Formats acceptés: JPG, PNG, GIF, WEBP (max 5MB)</small>
                    {% if artwork and artwork.imageUrl %}
                        <div class=\"mt-2\">
                            <p class=\"small text-muted mb-1\">Image actuelle:</p>
                            <img src=\"{{ artwork.imageUrl }}\" alt=\"Image actuelle\" style=\"max-width: 200px; max-height: 200px; border-radius: 8px;\">
                        </div>
                    {% endif %}
                    <div class=\"mt-2\">
                        <img id=\"imagePreview\" src=\"\" alt=\"Aperçu\" style=\"max-width: 200px; max-height: 200px; display: none; border-radius: 8px;\">
                    </div>
                </div>
                <div class=\"col-md-6 mb-3\">
                    <label for=\"image_url\" class=\"form-label fw-bold\">
                        <i class=\"fas fa-link me-2 text-primary\"></i>Ou URL de l'image (optionnel)
                    </label>
                    <input type=\"url\" class=\"form-control\" id=\"image_url\" name=\"image_url\" 
                           value=\"{{ artwork and not artwork.imageUrl starts with '/uploads/' ? artwork.imageUrl : '' }}\" 
                           placeholder=\"https://example.com/image.jpg\">
                    <small class=\"form-text text-muted\">Si vous préférez utiliser une URL au lieu d'uploader</small>
                </div>
                <div class=\"col-md-3 mb-3\">
                    <label for=\"price\" class=\"form-label fw-bold\">
                        <i class=\"fas fa-euro-sign me-2 text-primary\"></i>Prix (€)
                    </label>
                    <input type=\"number\" step=\"0.01\" class=\"form-control\" id=\"price\" name=\"price\" 
                           value=\"{{ artwork ? artwork.price : '' }}\" 
                           placeholder=\"0.00\">
                </div>
                <div class=\"col-md-3 mb-3\">
                    <label for=\"status\" class=\"form-label fw-bold\">
                        <i class=\"fas fa-eye me-2 text-primary\"></i>Statut
                    </label>
                    <select class=\"form-select\" id=\"status\" name=\"status\">
                        <option value=\"visible\" {% if not artwork or artwork.status == 'visible' %}selected{% endif %}>Visible</option>
                        <option value=\"hidden\" {% if artwork and artwork.status == 'hidden' %}selected{% endif %}>Caché</option>
                    </select>
                </div>
            </div>

            <div class=\"mb-4\">
                <label for=\"category_id\" class=\"form-label fw-bold\">
                    <i class=\"fas fa-tags me-2 text-primary\"></i>Catégorie
                </label>
                <select class=\"form-select\" id=\"category_id\" name=\"category_id\">
                    <option value=\"\">Aucune catégorie</option>
                    {% for category in categories %}
                        <option value=\"{{ category.id }}\" {% if artwork and artwork.category and artwork.category.id == category.id %}selected{% endif %}>
                            {{ category.name }}
                        </option>
                    {% endfor %}
                </select>
            </div>

            <div class=\"d-flex justify-content-between align-items-center pt-3 border-top\">
                <a href=\"{{ path('admin_artwork_index') }}\" class=\"btn btn-outline-secondary\">
                    <i class=\"fas fa-times me-2\"></i>Annuler
                </a>
                <button type=\"submit\" class=\"btn btn-primary\">
                    <i class=\"fas fa-save me-2\"></i>Enregistrer
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    // Preview image before upload
    document.querySelector('input[name=\"image_file\"]')?.addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const preview = document.getElementById('imagePreview');
                preview.src = e.target.result;
                preview.style.display = 'block';
            };
            reader.readAsDataURL(file);
        }
    });
</script>
{% endblock %}
", "artwork/admin_form.html.twig", "C:\\xampp\\htdocs\\MuseHub-my-work\\MuseHub-my-work\\templates\\artwork\\admin_form.html.twig");
    }
}
