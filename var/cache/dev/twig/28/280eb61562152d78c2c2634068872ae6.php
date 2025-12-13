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

/* offre/my_offres.html.twig */
class __TwigTemplate_97e41e9b4b58d7682a5b528337db6d76 extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre/my_offres.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre/my_offres.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
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

        yield "Mes Offres";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        yield "<div class=\"container mt-5\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <h1 class=\"mb-4\">
                <i class=\"fas fa-user-check\"></i> Mes Offres
            </h1>

            ";
        // line 13
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["offres"]) || array_key_exists("offres", $context) ? $context["offres"] : (function () { throw new RuntimeError('Variable "offres" does not exist.', 13, $this->source); })()))) {
            // line 14
            yield "                <div class=\"alert alert-info\">
                    <i class=\"fas fa-info-circle\"></i> Vous n'avez pas encore fait d'offre.
                </div>
            ";
        } else {
            // line 18
            yield "                <div class=\"table-responsive\">
                    <table class=\"table table-hover\">
                        <thead class=\"table-light\">
                            <tr>
                                <th>Annonce</th>
                                <th>Prix Proposé</th>
                                <th>Date</th>
                                <th>Statut</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["offres"]) || array_key_exists("offres", $context) ? $context["offres"] : (function () { throw new RuntimeError('Variable "offres" does not exist.', 30, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
                // line 31
                yield "                                <tr>
                                    <td>
                                        <a href=\"";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offre_by_listing", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "listing", [], "any", false, false, false, 33), "id", [], "any", false, false, false, 33)]), "html", null, true);
                yield "\">
                                            Listing #";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "listing", [], "any", false, false, false, 34), "id", [], "any", false, false, false, 34), "html", null, true);
                yield "
                                        </a>
                                    </td>
                                    <td><strong>";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "prixPropose", [], "any", false, false, false, 37), "html", null, true);
                yield " €</strong></td>
                                    <td>";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "datePropose", [], "any", false, false, false, 38), "d/m/Y H:i"), "html", null, true);
                yield "</td>
                                    <td>
                                        ";
                // line 40
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "statut", [], "any", false, false, false, 40) == "En attente")) {
                    // line 41
                    yield "                                            <span class=\"badge bg-warning\">En attente</span>
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 42
$context["offre"], "statut", [], "any", false, false, false, 42) == "Acceptée")) {
                    // line 43
                    yield "                                            <span class=\"badge bg-success\">Acceptée</span>
                                        ";
                } else {
                    // line 45
                    yield "                                            <span class=\"badge bg-danger\">Refusée</span>
                                        ";
                }
                // line 47
                yield "                                    </td>
                                    <td>
                                        <a href=\"";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offre_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 49)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-info\">
                                            <i class=\"fas fa-eye\"></i> Voir
                                        </a>
                                        ";
                // line 52
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "statut", [], "any", false, false, false, 52) == "En attente")) {
                    // line 53
                    yield "                                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offre_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 53)]), "html", null, true);
                    yield "\" class=\"btn btn-sm btn-warning\">
                                                <i class=\"fas fa-edit\"></i> Modifier
                                            </a>
                                        ";
                }
                // line 57
                yield "                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['offre'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            yield "                        </tbody>
                    </table>
                </div>
            ";
        }
        // line 64
        yield "
            <div class=\"mt-4\">
                <a href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offre_new");
        yield "\" class=\"btn btn-primary\">
                    <i class=\"fas fa-plus\"></i> Nouvelle Offre
                </a>
            </div>
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
        return "offre/my_offres.html.twig";
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
        return array (  211 => 66,  207 => 64,  201 => 60,  193 => 57,  185 => 53,  183 => 52,  177 => 49,  173 => 47,  169 => 45,  165 => 43,  163 => 42,  160 => 41,  158 => 40,  153 => 38,  149 => 37,  143 => 34,  139 => 33,  135 => 31,  131 => 30,  117 => 18,  111 => 14,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes Offres{% endblock %}

{% block content %}
<div class=\"container mt-5\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <h1 class=\"mb-4\">
                <i class=\"fas fa-user-check\"></i> Mes Offres
            </h1>

            {% if offres is empty %}
                <div class=\"alert alert-info\">
                    <i class=\"fas fa-info-circle\"></i> Vous n'avez pas encore fait d'offre.
                </div>
            {% else %}
                <div class=\"table-responsive\">
                    <table class=\"table table-hover\">
                        <thead class=\"table-light\">
                            <tr>
                                <th>Annonce</th>
                                <th>Prix Proposé</th>
                                <th>Date</th>
                                <th>Statut</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for offre in offres %}
                                <tr>
                                    <td>
                                        <a href=\"{{ path('offre_by_listing', {id: offre.listing.id}) }}\">
                                            Listing #{{ offre.listing.id }}
                                        </a>
                                    </td>
                                    <td><strong>{{ offre.prixPropose }} €</strong></td>
                                    <td>{{ offre.datePropose|date('d/m/Y H:i') }}</td>
                                    <td>
                                        {% if offre.statut == 'En attente' %}
                                            <span class=\"badge bg-warning\">En attente</span>
                                        {% elseif offre.statut == 'Acceptée' %}
                                            <span class=\"badge bg-success\">Acceptée</span>
                                        {% else %}
                                            <span class=\"badge bg-danger\">Refusée</span>
                                        {% endif %}
                                    </td>
                                    <td>
                                        <a href=\"{{ path('offre_show', {id: offre.id}) }}\" class=\"btn btn-sm btn-info\">
                                            <i class=\"fas fa-eye\"></i> Voir
                                        </a>
                                        {% if offre.statut == 'En attente' %}
                                            <a href=\"{{ path('offre_edit', {id: offre.id}) }}\" class=\"btn btn-sm btn-warning\">
                                                <i class=\"fas fa-edit\"></i> Modifier
                                            </a>
                                        {% endif %}
                                    </td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            {% endif %}

            <div class=\"mt-4\">
                <a href=\"{{ path('offre_new') }}\" class=\"btn btn-primary\">
                    <i class=\"fas fa-plus\"></i> Nouvelle Offre
                </a>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "offre/my_offres.html.twig", "C:\\xampp\\htdocs\\MuseHub-my-work\\MuseHub-my-work\\templates\\offre\\my_offres.html.twig");
    }
}
