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

/* artwork/admin_stats.html.twig */
class __TwigTemplate_b1e8f3756733ee9aec469a7e9d552ac0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "artwork/admin_stats.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "artwork/admin_stats.html.twig"));

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

        yield "Statistiques Œuvres - MuseHub Admin";
        
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
    <a href=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_artworks_list");
        yield "\" class=\"btn btn-outline-secondary mb-3\">
        <i class=\"fas fa-arrow-left me-2\"></i>Retour aux œuvres
    </a>
    <h1 class=\"h3 mb-0\">Statistiques des Œuvres</h1>
    <p class=\"text-muted\">Vue détaillée des statistiques</p>
</div>

<!-- Statistiques générales -->
<div class=\"row g-4 mb-4\">
    <div class=\"col-md-4\">
        <div class=\"card\" style=\"border-radius: 15px; border-left: 4px solid #3b82f6;\">
            <div class=\"card-body\">
                <h3 class=\"text-primary\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 19, $this->source); })()), "total", [], "any", false, false, false, 19), "html", null, true);
        yield "</h3>
                <p class=\"text-muted mb-0\">Total œuvres</p>
            </div>
        </div>
    </div>
    <div class=\"col-md-4\">
        <div class=\"card\" style=\"border-radius: 15px; border-left: 4px solid #10b981;\">
            <div class=\"card-body\">
                <h3 class=\"text-success\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 27, $this->source); })()), "visible", [], "any", false, false, false, 27), "html", null, true);
        yield "</h3>
                <p class=\"text-muted mb-0\">Visibles</p>
            </div>
        </div>
    </div>
    <div class=\"col-md-4\">
        <div class=\"card\" style=\"border-radius: 15px; border-left: 4px solid #6b7280;\">
            <div class=\"card-body\">
                <h3 class=\"text-secondary\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 35, $this->source); })()), "hidden", [], "any", false, false, false, 35), "html", null, true);
        yield "</h3>
                <p class=\"text-muted mb-0\">Cachées</p>
            </div>
        </div>
    </div>
</div>

<!-- Statistiques par catégorie -->
<div class=\"card\" style=\"border-radius: 15px; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.1);\">
    <div class=\"card-header bg-white\">
        <h5 class=\"mb-0\"><i class=\"fas fa-chart-pie me-2\"></i>Répartition par catégorie</h5>
    </div>
    <div class=\"card-body\">
        ";
        // line 48
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "by_category", [], "any", true, true, false, 48) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 48, $this->source); })()), "by_category", [], "any", false, false, false, 48)) > 0))) {
            // line 49
            yield "        <div class=\"table-responsive\">
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th>Catégorie</th>
                        <th>Nombre d'œuvres</th>
                        <th>Pourcentage</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 59
            $context["total"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 59, $this->source); })()), "total", [], "any", false, false, false, 59);
            // line 60
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 60, $this->source); })()), "by_category", [], "any", false, false, false, 60));
            foreach ($context['_seq'] as $context["categoryName"] => $context["count"]) {
                // line 61
                yield "                    <tr>
                        <td><strong>";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["categoryName"], "html", null, true);
                yield "</strong></td>
                        <td>";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["count"], "html", null, true);
                yield "</td>
                        <td>
                            ";
                // line 65
                if (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 65, $this->source); })()) > 0)) {
                    // line 66
                    yield "                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((($context["count"] / (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 66, $this->source); })())) * 100), 1), "html", null, true);
                    yield "%
                            ";
                } else {
                    // line 68
                    yield "                                0%
                            ";
                }
                // line 70
                yield "                        </td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['categoryName'], $context['count'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            yield "                </tbody>
            </table>
        </div>
        ";
        } else {
            // line 77
            yield "        <div class=\"text-center py-4\">
            <i class=\"fas fa-chart-pie fa-2x text-muted mb-2\"></i>
            <p class=\"text-muted\">Aucune statistique par catégorie disponible</p>
        </div>
        ";
        }
        // line 82
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
        return "artwork/admin_stats.html.twig";
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
        return array (  222 => 82,  215 => 77,  209 => 73,  201 => 70,  197 => 68,  191 => 66,  189 => 65,  184 => 63,  180 => 62,  177 => 61,  172 => 60,  170 => 59,  158 => 49,  156 => 48,  140 => 35,  129 => 27,  118 => 19,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Statistiques Œuvres - MuseHub Admin{% endblock %}

{% block body %}
<div class=\"mb-4\">
    <a href=\"{{ path('admin_artworks_list') }}\" class=\"btn btn-outline-secondary mb-3\">
        <i class=\"fas fa-arrow-left me-2\"></i>Retour aux œuvres
    </a>
    <h1 class=\"h3 mb-0\">Statistiques des Œuvres</h1>
    <p class=\"text-muted\">Vue détaillée des statistiques</p>
</div>

<!-- Statistiques générales -->
<div class=\"row g-4 mb-4\">
    <div class=\"col-md-4\">
        <div class=\"card\" style=\"border-radius: 15px; border-left: 4px solid #3b82f6;\">
            <div class=\"card-body\">
                <h3 class=\"text-primary\">{{ stats.total }}</h3>
                <p class=\"text-muted mb-0\">Total œuvres</p>
            </div>
        </div>
    </div>
    <div class=\"col-md-4\">
        <div class=\"card\" style=\"border-radius: 15px; border-left: 4px solid #10b981;\">
            <div class=\"card-body\">
                <h3 class=\"text-success\">{{ stats.visible }}</h3>
                <p class=\"text-muted mb-0\">Visibles</p>
            </div>
        </div>
    </div>
    <div class=\"col-md-4\">
        <div class=\"card\" style=\"border-radius: 15px; border-left: 4px solid #6b7280;\">
            <div class=\"card-body\">
                <h3 class=\"text-secondary\">{{ stats.hidden }}</h3>
                <p class=\"text-muted mb-0\">Cachées</p>
            </div>
        </div>
    </div>
</div>

<!-- Statistiques par catégorie -->
<div class=\"card\" style=\"border-radius: 15px; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.1);\">
    <div class=\"card-header bg-white\">
        <h5 class=\"mb-0\"><i class=\"fas fa-chart-pie me-2\"></i>Répartition par catégorie</h5>
    </div>
    <div class=\"card-body\">
        {% if stats.by_category is defined and stats.by_category|length > 0 %}
        <div class=\"table-responsive\">
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th>Catégorie</th>
                        <th>Nombre d'œuvres</th>
                        <th>Pourcentage</th>
                    </tr>
                </thead>
                <tbody>
                    {% set total = stats.total %}
                    {% for categoryName, count in stats.by_category %}
                    <tr>
                        <td><strong>{{ categoryName }}</strong></td>
                        <td>{{ count }}</td>
                        <td>
                            {% if total > 0 %}
                                {{ ((count / total) * 100)|number_format(1) }}%
                            {% else %}
                                0%
                            {% endif %}
                        </td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
        {% else %}
        <div class=\"text-center py-4\">
            <i class=\"fas fa-chart-pie fa-2x text-muted mb-2\"></i>
            <p class=\"text-muted\">Aucune statistique par catégorie disponible</p>
        </div>
        {% endif %}
    </div>
</div>
{% endblock %}


", "artwork/admin_stats.html.twig", "C:\\xampp\\htdocs\\MuseHub-my-work\\MuseHub-my-work\\templates\\artwork\\admin_stats.html.twig");
    }
}
