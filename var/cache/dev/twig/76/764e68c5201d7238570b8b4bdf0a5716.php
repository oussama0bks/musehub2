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

/* offre/by_status.html.twig */
class __TwigTemplate_1ff115e7ba8828cc0acc0f5847dce4f9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre/by_status.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre/by_status.html.twig"));

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

        yield "Offres - Filtrées par Statut: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 3, $this->source); })()), "html", null, true);
        
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
                <i class=\"fas fa-filter\"></i> Offres - Statut: 
                ";
        // line 11
        if (((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 11, $this->source); })()) == "En attente")) {
            // line 12
            yield "                    <span class=\"badge bg-warning\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 12, $this->source); })()), "html", null, true);
            yield "</span>
                ";
        } elseif ((        // line 13
(isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 13, $this->source); })()) == "Acceptée")) {
            // line 14
            yield "                    <span class=\"badge bg-success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 14, $this->source); })()), "html", null, true);
            yield "</span>
                ";
        } else {
            // line 16
            yield "                    <span class=\"badge bg-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 16, $this->source); })()), "html", null, true);
            yield "</span>
                ";
        }
        // line 18
        yield "            </h1>

            ";
        // line 20
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["offres"]) || array_key_exists("offres", $context) ? $context["offres"] : (function () { throw new RuntimeError('Variable "offres" does not exist.', 20, $this->source); })()))) {
            // line 21
            yield "                <div class=\"alert alert-info\">
                    <i class=\"fas fa-info-circle\"></i> Aucune offre avec le statut \"";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 22, $this->source); })()), "html", null, true);
            yield "\".
                </div>
            ";
        } else {
            // line 25
            yield "                <div class=\"table-responsive\">
                    <table class=\"table table-hover\">
                        <thead class=\"table-light\">
                            <tr>
                                <th>ID</th>
                                <th>Annonce</th>
                                <th>Acheteur</th>
                                <th>Prix Proposé</th>
                                <th>Date de l'Offre</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["offres"]) || array_key_exists("offres", $context) ? $context["offres"] : (function () { throw new RuntimeError('Variable "offres" does not exist.', 38, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
                // line 39
                yield "                                <tr>
                                    <td><strong>#";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 40), "html", null, true);
                yield "</strong></td>
                                    <td>
                                        <a href=\"";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offre_by_listing", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "listing", [], "any", false, false, false, 42), "id", [], "any", false, false, false, 42)]), "html", null, true);
                yield "\">
                                            Listing #";
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "listing", [], "any", false, false, false, 43), "id", [], "any", false, false, false, 43), "html", null, true);
                yield "
                                        </a>
                                    </td>
                                    <td>";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "utilisateur", [], "any", false, false, false, 46), "email", [], "any", false, false, false, 46), "html", null, true);
                yield "</td>
                                    <td><strong>";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "prixPropose", [], "any", false, false, false, 47), "html", null, true);
                yield " €</strong></td>
                                    <td>";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "datePropose", [], "any", false, false, false, 48), "d/m/Y H:i"), "html", null, true);
                yield "</td>
                                    <td>
                                        <a href=\"";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offre_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 50)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-info\">
                                            <i class=\"fas fa-eye\"></i> Voir
                                        </a>
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['offre'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            yield "                        </tbody>
                    </table>
                </div>
            ";
        }
        // line 60
        yield "
            <div class=\"mt-4\">
                <a href=\"";
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offre_index");
        yield "\" class=\"btn btn-secondary\">
                    <i class=\"fas fa-arrow-left\"></i> Retour
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
        return "offre/by_status.html.twig";
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
        return array (  216 => 62,  212 => 60,  206 => 56,  194 => 50,  189 => 48,  185 => 47,  181 => 46,  175 => 43,  171 => 42,  166 => 40,  163 => 39,  159 => 38,  144 => 25,  138 => 22,  135 => 21,  133 => 20,  129 => 18,  123 => 16,  117 => 14,  115 => 13,  110 => 12,  108 => 11,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Offres - Filtrées par Statut: {{ statut }}{% endblock %}

{% block content %}
<div class=\"container mt-5\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <h1 class=\"mb-4\">
                <i class=\"fas fa-filter\"></i> Offres - Statut: 
                {% if statut == 'En attente' %}
                    <span class=\"badge bg-warning\">{{ statut }}</span>
                {% elseif statut == 'Acceptée' %}
                    <span class=\"badge bg-success\">{{ statut }}</span>
                {% else %}
                    <span class=\"badge bg-danger\">{{ statut }}</span>
                {% endif %}
            </h1>

            {% if offres is empty %}
                <div class=\"alert alert-info\">
                    <i class=\"fas fa-info-circle\"></i> Aucune offre avec le statut \"{{ statut }}\".
                </div>
            {% else %}
                <div class=\"table-responsive\">
                    <table class=\"table table-hover\">
                        <thead class=\"table-light\">
                            <tr>
                                <th>ID</th>
                                <th>Annonce</th>
                                <th>Acheteur</th>
                                <th>Prix Proposé</th>
                                <th>Date de l'Offre</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for offre in offres %}
                                <tr>
                                    <td><strong>#{{ offre.id }}</strong></td>
                                    <td>
                                        <a href=\"{{ path('offre_by_listing', {id: offre.listing.id}) }}\">
                                            Listing #{{ offre.listing.id }}
                                        </a>
                                    </td>
                                    <td>{{ offre.utilisateur.email }}</td>
                                    <td><strong>{{ offre.prixPropose }} €</strong></td>
                                    <td>{{ offre.datePropose|date('d/m/Y H:i') }}</td>
                                    <td>
                                        <a href=\"{{ path('offre_show', {id: offre.id}) }}\" class=\"btn btn-sm btn-info\">
                                            <i class=\"fas fa-eye\"></i> Voir
                                        </a>
                                    </td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            {% endif %}

            <div class=\"mt-4\">
                <a href=\"{{ path('offre_index') }}\" class=\"btn btn-secondary\">
                    <i class=\"fas fa-arrow-left\"></i> Retour
                </a>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "offre/by_status.html.twig", "C:\\xampp\\htdocs\\MuseHub-my-work\\MuseHub-my-work\\templates\\offre\\by_status.html.twig");
    }
}
