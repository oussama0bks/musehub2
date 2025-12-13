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

/* artwork/admin_index.html.twig */
class __TwigTemplate_d0f3bb8a1e93e385a197c767988b3843 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "artwork/admin_index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "artwork/admin_index.html.twig"));

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

        yield "Administration des œuvres";
        
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
        yield "<div class=\"mb-4\">
    <div class=\"d-flex justify-content-between align-items-center\">
        <div>
            <h1 class=\"h3 mb-0\">Gestion des Œuvres</h1>
            <p class=\"text-muted\">Gérer les créations artistiques</p>
        </div>
        <div>
            <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_artwork_new");
        yield "\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus me-2\"></i>Nouvelle œuvre
            </a>
            <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_category_index");
        yield "\" class=\"btn btn-outline-primary\">
                <i class=\"fas fa-tags me-2\"></i>Catégories
            </a>
        </div>
    </div>
</div>

<!-- Statistiques -->
";
        // line 24
        if ((array_key_exists("stats", $context) && (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 24, $this->source); })()))) {
            // line 25
            yield "<div class=\"row g-4 mb-4\">
    <div class=\"col-md-3\">
        <div class=\"card\" style=\"border-radius: 15px; border-left: 4px solid #3b82f6;\">
            <div class=\"card-body\">
                <h3 class=\"text-primary\">";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 29, $this->source); })()), "total", [], "any", false, false, false, 29), "html", null, true);
            yield "</h3>
                <p class=\"text-muted mb-0\">Total</p>
            </div>
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"card\" style=\"border-radius: 15px; border-left: 4px solid #10b981;\">
            <div class=\"card-body\">
                <h3 class=\"text-success\">";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 37, $this->source); })()), "visible", [], "any", false, false, false, 37), "html", null, true);
            yield "</h3>
                <p class=\"text-muted mb-0\">Visibles</p>
            </div>
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"card\" style=\"border-radius: 15px; border-left: 4px solid #6b7280;\">
            <div class=\"card-body\">
                <h3 class=\"text-secondary\">";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 45, $this->source); })()), "hidden", [], "any", false, false, false, 45), "html", null, true);
            yield "</h3>
                <p class=\"text-muted mb-0\">Cachées</p>
            </div>
        </div>
    </div>
    <div class=\"col-md-3\">
        <a href=\"";
            // line 51
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_artworks_stats");
            yield "\" class=\"card text-decoration-none\" style=\"border-radius: 15px; border-left: 4px solid #f59e0b;\">
            <div class=\"card-body\">
                <h3 class=\"text-warning\"><i class=\"fas fa-chart-bar\"></i></h3>
                <p class=\"text-muted mb-0\">Statistiques</p>
            </div>
        </a>
    </div>
</div>
";
        }
        // line 60
        yield "
<!-- Filtres -->
<div class=\"card mb-4\" style=\"border-radius: 15px; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.1);\">
    <div class=\"card-body\">
        <form method=\"GET\" class=\"d-flex gap-3\">
            <select name=\"category\" class=\"form-select\" style=\"max-width: 200px;\">
                <option value=\"\">Toutes les catégories</option>
                ";
        // line 67
        if (array_key_exists("categories", $context)) {
            // line 68
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 68, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 69
                yield "                        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 69), "html", null, true);
                yield "\" ";
                if ((array_key_exists("categoryId", $context) && ((isset($context["categoryId"]) || array_key_exists("categoryId", $context) ? $context["categoryId"] : (function () { throw new RuntimeError('Variable "categoryId" does not exist.', 69, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 69)))) {
                    yield "selected";
                }
                yield ">
                            ";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 70), "html", null, true);
                yield "
                        </option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            yield "                ";
        }
        // line 74
        yield "            </select>
            <select name=\"status\" class=\"form-select\" style=\"max-width: 200px;\">
                <option value=\"\">Tous les statuts</option>
                <option value=\"visible\" ";
        // line 77
        if ((array_key_exists("status", $context) && ((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 77, $this->source); })()) == "visible"))) {
            yield "selected";
        }
        yield ">Visible</option>
                <option value=\"hidden\" ";
        // line 78
        if ((array_key_exists("status", $context) && ((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 78, $this->source); })()) == "hidden"))) {
            yield "selected";
        }
        yield ">Caché</option>
            </select>
            <button type=\"submit\" class=\"btn btn-primary\">Filtrer</button>
            <a href=\"";
        // line 81
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_artworks_list");
        yield "\" class=\"btn btn-outline-secondary\">Réinitialiser</a>
        </form>
    </div>
</div>

<!-- Liste des œuvres -->
<div class=\"card\" style=\"border-radius: 15px; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.1);\">
    <div class=\"card-body\">
        <div class=\"table-responsive\">
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titre</th>
                        <th>Artiste UUID</th>
                        <th>Catégorie</th>
                        <th>Prix</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["artworks"]) || array_key_exists("artworks", $context) ? $context["artworks"] : (function () { throw new RuntimeError('Variable "artworks" does not exist.', 103, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["artwork"]) {
            // line 104
            yield "                    <tr>
                        <td>";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["artwork"], "id", [], "any", false, false, false, 105), "html", null, true);
            yield "</td>
                        <td><strong>";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["artwork"], "title", [], "any", false, false, false, 106), "html", null, true);
            yield "</strong></td>
                        <td><code>";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["artwork"], "artistUuid", [], "any", false, false, false, 107), 0, 8), "html", null, true);
            yield "...</code></td>
                        <td>
                            ";
            // line 109
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["artwork"], "category", [], "any", false, false, false, 109)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 110
                yield "                                <span class=\"badge bg-info\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["artwork"], "category", [], "any", false, false, false, 110), "name", [], "any", false, false, false, 110), "html", null, true);
                yield "</span>
                            ";
            } else {
                // line 112
                yield "                                <span class=\"text-muted\">—</span>
                            ";
            }
            // line 114
            yield "                        </td>
                        <td>";
            // line 115
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["artwork"], "price", [], "any", false, false, false, 115)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["artwork"], "price", [], "any", false, false, false, 115) . " €"), "html", null, true)) : ("—"));
            yield "</td>
                        <td>
                            <span class=\"badge bg-";
            // line 117
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["artwork"], "status", [], "any", false, false, false, 117) == "visible")) ? ("success") : ("secondary"));
            yield "\">
                                ";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["artwork"], "status", [], "any", false, false, false, 118), "html", null, true);
            yield "
                            </span>
                        </td>
                        <td>
                            <a href=\"";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_artwork_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["artwork"], "id", [], "any", false, false, false, 122)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-primary\">
                                <i class=\"fas fa-edit me-1\"></i>Modifier
                            </a>
                            <form action=\"";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_artwork_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["artwork"], "id", [], "any", false, false, false, 125)]), "html", null, true);
            yield "\" method=\"post\" style=\"display:inline\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_artwork_" . CoreExtension::getAttribute($this->env, $this->source, $context["artwork"], "id", [], "any", false, false, false, 126))), "html", null, true);
            yield "\">
                                <button type=\"submit\" class=\"btn btn-sm btn-danger\" onclick=\"return confirm('Supprimer cette œuvre ?');\">
                                    <i class=\"fas fa-trash me-1\"></i>Supprimer
                                </button>
                            </form>
                        </td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 133
        if (!$context['_iterated']) {
            // line 134
            yield "                    <tr>
                        <td colspan=\"7\" class=\"text-center py-4\">
                            <i class=\"fas fa-paint-brush fa-2x text-muted mb-2\"></i>
                            <p class=\"text-muted\">Aucune œuvre trouvée</p>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['artwork'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        yield "                </tbody>
            </table>
        </div>
    </div>
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
        return "artwork/admin_index.html.twig";
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
        return array (  346 => 141,  334 => 134,  332 => 133,  320 => 126,  316 => 125,  310 => 122,  303 => 118,  299 => 117,  294 => 115,  291 => 114,  287 => 112,  281 => 110,  279 => 109,  274 => 107,  270 => 106,  266 => 105,  263 => 104,  258 => 103,  233 => 81,  225 => 78,  219 => 77,  214 => 74,  211 => 73,  202 => 70,  193 => 69,  188 => 68,  186 => 67,  177 => 60,  165 => 51,  156 => 45,  145 => 37,  134 => 29,  128 => 25,  126 => 24,  115 => 16,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Administration des œuvres{% endblock %}

{% block body %}
<div class=\"mb-4\">
    <div class=\"d-flex justify-content-between align-items-center\">
        <div>
            <h1 class=\"h3 mb-0\">Gestion des Œuvres</h1>
            <p class=\"text-muted\">Gérer les créations artistiques</p>
        </div>
        <div>
            <a href=\"{{ path('admin_artwork_new') }}\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus me-2\"></i>Nouvelle œuvre
            </a>
            <a href=\"{{ path('admin_category_index') }}\" class=\"btn btn-outline-primary\">
                <i class=\"fas fa-tags me-2\"></i>Catégories
            </a>
        </div>
    </div>
</div>

<!-- Statistiques -->
{% if stats is defined and stats %}
<div class=\"row g-4 mb-4\">
    <div class=\"col-md-3\">
        <div class=\"card\" style=\"border-radius: 15px; border-left: 4px solid #3b82f6;\">
            <div class=\"card-body\">
                <h3 class=\"text-primary\">{{ stats.total }}</h3>
                <p class=\"text-muted mb-0\">Total</p>
            </div>
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"card\" style=\"border-radius: 15px; border-left: 4px solid #10b981;\">
            <div class=\"card-body\">
                <h3 class=\"text-success\">{{ stats.visible }}</h3>
                <p class=\"text-muted mb-0\">Visibles</p>
            </div>
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"card\" style=\"border-radius: 15px; border-left: 4px solid #6b7280;\">
            <div class=\"card-body\">
                <h3 class=\"text-secondary\">{{ stats.hidden }}</h3>
                <p class=\"text-muted mb-0\">Cachées</p>
            </div>
        </div>
    </div>
    <div class=\"col-md-3\">
        <a href=\"{{ path('admin_artworks_stats') }}\" class=\"card text-decoration-none\" style=\"border-radius: 15px; border-left: 4px solid #f59e0b;\">
            <div class=\"card-body\">
                <h3 class=\"text-warning\"><i class=\"fas fa-chart-bar\"></i></h3>
                <p class=\"text-muted mb-0\">Statistiques</p>
            </div>
        </a>
    </div>
</div>
{% endif %}

<!-- Filtres -->
<div class=\"card mb-4\" style=\"border-radius: 15px; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.1);\">
    <div class=\"card-body\">
        <form method=\"GET\" class=\"d-flex gap-3\">
            <select name=\"category\" class=\"form-select\" style=\"max-width: 200px;\">
                <option value=\"\">Toutes les catégories</option>
                {% if categories is defined %}
                    {% for category in categories %}
                        <option value=\"{{ category.id }}\" {% if categoryId is defined and categoryId == category.id %}selected{% endif %}>
                            {{ category.name }}
                        </option>
                    {% endfor %}
                {% endif %}
            </select>
            <select name=\"status\" class=\"form-select\" style=\"max-width: 200px;\">
                <option value=\"\">Tous les statuts</option>
                <option value=\"visible\" {% if status is defined and status == 'visible' %}selected{% endif %}>Visible</option>
                <option value=\"hidden\" {% if status is defined and status == 'hidden' %}selected{% endif %}>Caché</option>
            </select>
            <button type=\"submit\" class=\"btn btn-primary\">Filtrer</button>
            <a href=\"{{ path('admin_artworks_list') }}\" class=\"btn btn-outline-secondary\">Réinitialiser</a>
        </form>
    </div>
</div>

<!-- Liste des œuvres -->
<div class=\"card\" style=\"border-radius: 15px; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.1);\">
    <div class=\"card-body\">
        <div class=\"table-responsive\">
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titre</th>
                        <th>Artiste UUID</th>
                        <th>Catégorie</th>
                        <th>Prix</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for artwork in artworks %}
                    <tr>
                        <td>{{ artwork.id }}</td>
                        <td><strong>{{ artwork.title }}</strong></td>
                        <td><code>{{ artwork.artistUuid|slice(0, 8) }}...</code></td>
                        <td>
                            {% if artwork.category %}
                                <span class=\"badge bg-info\">{{ artwork.category.name }}</span>
                            {% else %}
                                <span class=\"text-muted\">—</span>
                            {% endif %}
                        </td>
                        <td>{{ artwork.price ? artwork.price ~ ' €' : '—' }}</td>
                        <td>
                            <span class=\"badge bg-{{ artwork.status == 'visible' ? 'success' : 'secondary' }}\">
                                {{ artwork.status }}
                            </span>
                        </td>
                        <td>
                            <a href=\"{{ path('admin_artwork_edit', {id: artwork.id}) }}\" class=\"btn btn-sm btn-primary\">
                                <i class=\"fas fa-edit me-1\"></i>Modifier
                            </a>
                            <form action=\"{{ path('admin_artwork_delete', {id: artwork.id}) }}\" method=\"post\" style=\"display:inline\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_artwork_' ~ artwork.id) }}\">
                                <button type=\"submit\" class=\"btn btn-sm btn-danger\" onclick=\"return confirm('Supprimer cette œuvre ?');\">
                                    <i class=\"fas fa-trash me-1\"></i>Supprimer
                                </button>
                            </form>
                        </td>
                    </tr>
                    {% else %}
                    <tr>
                        <td colspan=\"7\" class=\"text-center py-4\">
                            <i class=\"fas fa-paint-brush fa-2x text-muted mb-2\"></i>
                            <p class=\"text-muted\">Aucune œuvre trouvée</p>
                        </td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
</div>
{% endblock %}

", "artwork/admin_index.html.twig", "C:\\xampp\\htdocs\\MuseHub-my-work\\MuseHub-my-work\\templates\\artwork\\admin_index.html.twig");
    }
}
