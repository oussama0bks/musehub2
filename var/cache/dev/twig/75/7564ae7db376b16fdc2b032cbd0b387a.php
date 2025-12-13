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

/* offre/show.html.twig */
class __TwigTemplate_51a1082122e9700df605e81c8f371e76 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre/show.html.twig"));

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

        yield "Détails de l'Offre #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        
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
        <div class=\"col-md-8\">
            <div class=\"card shadow\">
                <div class=\"card-header bg-primary text-white\">
                    <h4 class=\"mb-0\">
                        <i class=\"fas fa-handshake\"></i> Offre #";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        yield "
                    </h4>
                </div>
                <div class=\"card-body\">
                    <div class=\"row mb-4\">
                        <div class=\"col-md-6\">
                            <h5>Annonce</h5>
                            <p>
                                <a href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offre_by_listing", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 20, $this->source); })()), "listing", [], "any", false, false, false, 20), "id", [], "any", false, false, false, 20)]), "html", null, true);
        yield "\">
                                    Listing #";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 21, $this->source); })()), "listing", [], "any", false, false, false, 21), "id", [], "any", false, false, false, 21), "html", null, true);
        yield "
                                </a>
                            </p>
                        </div>
                        <div class=\"col-md-6\">
                            <h5>Statut</h5>
                            <p>
                                ";
        // line 28
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 28, $this->source); })()), "statut", [], "any", false, false, false, 28) == "En attente")) {
            // line 29
            yield "                                    <span class=\"badge bg-warning\">En attente</span>
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 30
(isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 30, $this->source); })()), "statut", [], "any", false, false, false, 30) == "Acceptée")) {
            // line 31
            yield "                                    <span class=\"badge bg-success\">Acceptée</span>
                                ";
        } else {
            // line 33
            yield "                                    <span class=\"badge bg-danger\">Refusée</span>
                                ";
        }
        // line 35
        yield "                            </p>
                        </div>
                    </div>

                    <div class=\"row mb-4\">
                        <div class=\"col-md-6\">
                            <h5>Acheteur</h5>
                            <p>";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 42, $this->source); })()), "utilisateur", [], "any", false, false, false, 42), "email", [], "any", false, false, false, 42), "html", null, true);
        yield "</p>
                        </div>
                        <div class=\"col-md-6\">
                            <h5>Prix Proposé</h5>
                            <p><strong class=\"text-success\">";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 46, $this->source); })()), "prixPropose", [], "any", false, false, false, 46), "html", null, true);
        yield " €</strong></p>
                        </div>
                    </div>

                    <div class=\"row mb-4\">
                        <div class=\"col-md-12\">
                            <h5>Date de l'Offre</h5>
                            <p>";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 53, $this->source); })()), "datePropose", [], "any", false, false, false, 53), "d/m/Y à H:i:s"), "html", null, true);
        yield "</p>
                        </div>
                    </div>

                    ";
        // line 57
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 57, $this->source); })()), "commentaire", [], "any", false, false, false, 57)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 58
            yield "                        <div class=\"row mb-4\">
                            <div class=\"col-md-12\">
                                <h5>Commentaire</h5>
                                <p class=\"text-muted\">";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 61, $this->source); })()), "commentaire", [], "any", false, false, false, 61), "html", null, true);
            yield "</p>
                            </div>
                        </div>
                    ";
        }
        // line 65
        yield "                </div>
                <div class=\"card-footer\">
                    <div class=\"d-flex gap-2 flex-wrap\">
                        <a href=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offre_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 68, $this->source); })()), "id", [], "any", false, false, false, 68)]), "html", null, true);
        yield "\" class=\"btn btn-warning\">
                            <i class=\"fas fa-edit\"></i> Éditer
                        </a>

                        ";
        // line 72
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 72, $this->source); })()), "statut", [], "any", false, false, false, 72) == "En attente")) {
            // line 73
            yield "                            <form method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offre_accept", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 73, $this->source); })()), "id", [], "any", false, false, false, 73)]), "html", null, true);
            yield "\" style=\"display: inline;\">
                                <input type=\"hidden\" name=\"_method\" value=\"POST\">
                                <button class=\"btn btn-success\" type=\"submit\" onclick=\"return confirm('Êtes-vous sûr de vouloir accepter cette offre ?')\">
                                    <i class=\"fas fa-check\"></i> Accepter
                                </button>
                            </form>

                            <form method=\"post\" action=\"";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offre_refuse", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 80, $this->source); })()), "id", [], "any", false, false, false, 80)]), "html", null, true);
            yield "\" style=\"display: inline;\">
                                <input type=\"hidden\" name=\"_method\" value=\"POST\">
                                <button class=\"btn btn-danger\" type=\"submit\" onclick=\"return confirm('Êtes-vous sûr de vouloir refuser cette offre ?')\">
                                    <i class=\"fas fa-times\"></i> Refuser
                                </button>
                            </form>
                        ";
        }
        // line 87
        yield "
                        <form method=\"post\" action=\"";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offre_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 88, $this->source); })()), "id", [], "any", false, false, false, 88)]), "html", null, true);
        yield "\" style=\"display: inline;\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 89, $this->source); })()), "id", [], "any", false, false, false, 89))), "html", null, true);
        yield "\">
                            <button class=\"btn btn-danger\" type=\"submit\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette offre ?')\">
                                <i class=\"fas fa-trash\"></i> Supprimer
                            </button>
                        </form>

                        <a href=\"";
        // line 95
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offre_index");
        yield "\" class=\"btn btn-secondary\">
                            <i class=\"fas fa-arrow-left\"></i> Retour
                        </a>
                    </div>
                </div>
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
        return "offre/show.html.twig";
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
        return array (  247 => 95,  238 => 89,  234 => 88,  231 => 87,  221 => 80,  210 => 73,  208 => 72,  201 => 68,  196 => 65,  189 => 61,  184 => 58,  182 => 57,  175 => 53,  165 => 46,  158 => 42,  149 => 35,  145 => 33,  141 => 31,  139 => 30,  136 => 29,  134 => 28,  124 => 21,  120 => 20,  109 => 12,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails de l'Offre #{{ offre.id }}{% endblock %}

{% block content %}
<div class=\"container mt-5\">
    <div class=\"row\">
        <div class=\"col-md-8\">
            <div class=\"card shadow\">
                <div class=\"card-header bg-primary text-white\">
                    <h4 class=\"mb-0\">
                        <i class=\"fas fa-handshake\"></i> Offre #{{ offre.id }}
                    </h4>
                </div>
                <div class=\"card-body\">
                    <div class=\"row mb-4\">
                        <div class=\"col-md-6\">
                            <h5>Annonce</h5>
                            <p>
                                <a href=\"{{ path('offre_by_listing', {id: offre.listing.id}) }}\">
                                    Listing #{{ offre.listing.id }}
                                </a>
                            </p>
                        </div>
                        <div class=\"col-md-6\">
                            <h5>Statut</h5>
                            <p>
                                {% if offre.statut == 'En attente' %}
                                    <span class=\"badge bg-warning\">En attente</span>
                                {% elseif offre.statut == 'Acceptée' %}
                                    <span class=\"badge bg-success\">Acceptée</span>
                                {% else %}
                                    <span class=\"badge bg-danger\">Refusée</span>
                                {% endif %}
                            </p>
                        </div>
                    </div>

                    <div class=\"row mb-4\">
                        <div class=\"col-md-6\">
                            <h5>Acheteur</h5>
                            <p>{{ offre.utilisateur.email }}</p>
                        </div>
                        <div class=\"col-md-6\">
                            <h5>Prix Proposé</h5>
                            <p><strong class=\"text-success\">{{ offre.prixPropose }} €</strong></p>
                        </div>
                    </div>

                    <div class=\"row mb-4\">
                        <div class=\"col-md-12\">
                            <h5>Date de l'Offre</h5>
                            <p>{{ offre.datePropose|date('d/m/Y à H:i:s') }}</p>
                        </div>
                    </div>

                    {% if offre.commentaire %}
                        <div class=\"row mb-4\">
                            <div class=\"col-md-12\">
                                <h5>Commentaire</h5>
                                <p class=\"text-muted\">{{ offre.commentaire }}</p>
                            </div>
                        </div>
                    {% endif %}
                </div>
                <div class=\"card-footer\">
                    <div class=\"d-flex gap-2 flex-wrap\">
                        <a href=\"{{ path('offre_edit', {id: offre.id}) }}\" class=\"btn btn-warning\">
                            <i class=\"fas fa-edit\"></i> Éditer
                        </a>

                        {% if offre.statut == 'En attente' %}
                            <form method=\"post\" action=\"{{ path('offre_accept', {id: offre.id}) }}\" style=\"display: inline;\">
                                <input type=\"hidden\" name=\"_method\" value=\"POST\">
                                <button class=\"btn btn-success\" type=\"submit\" onclick=\"return confirm('Êtes-vous sûr de vouloir accepter cette offre ?')\">
                                    <i class=\"fas fa-check\"></i> Accepter
                                </button>
                            </form>

                            <form method=\"post\" action=\"{{ path('offre_refuse', {id: offre.id}) }}\" style=\"display: inline;\">
                                <input type=\"hidden\" name=\"_method\" value=\"POST\">
                                <button class=\"btn btn-danger\" type=\"submit\" onclick=\"return confirm('Êtes-vous sûr de vouloir refuser cette offre ?')\">
                                    <i class=\"fas fa-times\"></i> Refuser
                                </button>
                            </form>
                        {% endif %}

                        <form method=\"post\" action=\"{{ path('offre_delete', {id: offre.id}) }}\" style=\"display: inline;\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ offre.id) }}\">
                            <button class=\"btn btn-danger\" type=\"submit\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette offre ?')\">
                                <i class=\"fas fa-trash\"></i> Supprimer
                            </button>
                        </form>

                        <a href=\"{{ path('offre_index') }}\" class=\"btn btn-secondary\">
                            <i class=\"fas fa-arrow-left\"></i> Retour
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "offre/show.html.twig", "C:\\xampp\\htdocs\\MuseHub-my-work\\MuseHub-my-work\\templates\\offre\\show.html.twig");
    }
}
