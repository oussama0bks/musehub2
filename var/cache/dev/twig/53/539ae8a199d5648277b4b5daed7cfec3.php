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

/* offre/listing_offres.html.twig */
class __TwigTemplate_072df3213b3a0cad513274702528e110 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre/listing_offres.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre/listing_offres.html.twig"));

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

        yield "Offres pour Listing #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new RuntimeError('Variable "listing" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        
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
                <i class=\"fas fa-list\"></i> Offres pour l'Annonce #";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new RuntimeError('Variable "listing" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10), "html", null, true);
        yield "
            </h1>

            <div class=\"alert alert-info mb-4\">
                <strong>Prix de vente :</strong> ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new RuntimeError('Variable "listing" does not exist.', 14, $this->source); })()), "price", [], "any", false, false, false, 14), "html", null, true);
        yield " € | 
                <strong>Stock :</strong> ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new RuntimeError('Variable "listing" does not exist.', 15, $this->source); })()), "stock", [], "any", false, false, false, 15), "html", null, true);
        yield " | 
                <strong>Statut :</strong> ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new RuntimeError('Variable "listing" does not exist.', 16, $this->source); })()), "status", [], "any", false, false, false, 16), "html", null, true);
        yield "
            </div>

            ";
        // line 19
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["offres"]) || array_key_exists("offres", $context) ? $context["offres"] : (function () { throw new RuntimeError('Variable "offres" does not exist.', 19, $this->source); })()))) {
            // line 20
            yield "                <div class=\"alert alert-warning\">
                    <i class=\"fas fa-exclamation-triangle\"></i> Aucune offre pour cette annonce.
                </div>
            ";
        } else {
            // line 24
            yield "                <div class=\"table-responsive\">
                    <table class=\"table table-hover\">
                        <thead class=\"table-light\">
                            <tr>
                                <th>Acheteur</th>
                                <th>Prix Proposé</th>
                                <th>Date</th>
                                <th>Statut</th>
                                <th>Commentaire</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["offres"]) || array_key_exists("offres", $context) ? $context["offres"] : (function () { throw new RuntimeError('Variable "offres" does not exist.', 37, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
                // line 38
                yield "                                <tr>
                                    <td>";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "utilisateur", [], "any", false, false, false, 39), "email", [], "any", false, false, false, 39), "html", null, true);
                yield "</td>
                                    <td><strong>";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "prixPropose", [], "any", false, false, false, 40), "html", null, true);
                yield " €</strong></td>
                                    <td>";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "datePropose", [], "any", false, false, false, 41), "d/m/Y H:i"), "html", null, true);
                yield "</td>
                                    <td>
                                        ";
                // line 43
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "statut", [], "any", false, false, false, 43) == "En attente")) {
                    // line 44
                    yield "                                            <span class=\"badge bg-warning\">En attente</span>
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 45
$context["offre"], "statut", [], "any", false, false, false, 45) == "Acceptée")) {
                    // line 46
                    yield "                                            <span class=\"badge bg-success\">Acceptée</span>
                                        ";
                } else {
                    // line 48
                    yield "                                            <span class=\"badge bg-danger\">Refusée</span>
                                        ";
                }
                // line 50
                yield "                                    </td>
                                    <td>
                                        ";
                // line 52
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "commentaire", [], "any", false, false, false, 52)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 53
                    yield "                                            <small>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "commentaire", [], "any", false, false, false, 53), 0, 30), "html", null, true);
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "commentaire", [], "any", false, false, false, 53)) > 30)) {
                        yield "...";
                    }
                    yield "</small>
                                        ";
                } else {
                    // line 55
                    yield "                                            <span class=\"text-muted\">-</span>
                                        ";
                }
                // line 57
                yield "                                    </td>
                                    <td>
                                        <a href=\"";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offre_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 59)]), "html", null, true);
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
            // line 65
            yield "                        </tbody>
                    </table>
                </div>
            ";
        }
        // line 69
        yield "
            <div class=\"mt-4\">
                <a href=\"";
        // line 71
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offre_new");
        yield "\" class=\"btn btn-primary\">
                    <i class=\"fas fa-plus\"></i> Nouvelle Offre
                </a>
                <a href=\"";
        // line 74
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offre_index");
        yield "\" class=\"btn btn-secondary\">
                    <i class=\"fas fa-arrow-left\"></i> Retour aux Offres
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
        return "offre/listing_offres.html.twig";
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
        return array (  237 => 74,  231 => 71,  227 => 69,  221 => 65,  209 => 59,  205 => 57,  201 => 55,  192 => 53,  190 => 52,  186 => 50,  182 => 48,  178 => 46,  176 => 45,  173 => 44,  171 => 43,  166 => 41,  162 => 40,  158 => 39,  155 => 38,  151 => 37,  136 => 24,  130 => 20,  128 => 19,  122 => 16,  118 => 15,  114 => 14,  107 => 10,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Offres pour Listing #{{ listing.id }}{% endblock %}

{% block content %}
<div class=\"container mt-5\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <h1 class=\"mb-4\">
                <i class=\"fas fa-list\"></i> Offres pour l'Annonce #{{ listing.id }}
            </h1>

            <div class=\"alert alert-info mb-4\">
                <strong>Prix de vente :</strong> {{ listing.price }} € | 
                <strong>Stock :</strong> {{ listing.stock }} | 
                <strong>Statut :</strong> {{ listing.status }}
            </div>

            {% if offres is empty %}
                <div class=\"alert alert-warning\">
                    <i class=\"fas fa-exclamation-triangle\"></i> Aucune offre pour cette annonce.
                </div>
            {% else %}
                <div class=\"table-responsive\">
                    <table class=\"table table-hover\">
                        <thead class=\"table-light\">
                            <tr>
                                <th>Acheteur</th>
                                <th>Prix Proposé</th>
                                <th>Date</th>
                                <th>Statut</th>
                                <th>Commentaire</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for offre in offres %}
                                <tr>
                                    <td>{{ offre.utilisateur.email }}</td>
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
                                        {% if offre.commentaire %}
                                            <small>{{ offre.commentaire|slice(0, 30) }}{% if offre.commentaire|length > 30 %}...{% endif %}</small>
                                        {% else %}
                                            <span class=\"text-muted\">-</span>
                                        {% endif %}
                                    </td>
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
                <a href=\"{{ path('offre_new') }}\" class=\"btn btn-primary\">
                    <i class=\"fas fa-plus\"></i> Nouvelle Offre
                </a>
                <a href=\"{{ path('offre_index') }}\" class=\"btn btn-secondary\">
                    <i class=\"fas fa-arrow-left\"></i> Retour aux Offres
                </a>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "offre/listing_offres.html.twig", "C:\\xampp\\htdocs\\MuseHub-my-work\\MuseHub-my-work\\templates\\offre\\listing_offres.html.twig");
    }
}
