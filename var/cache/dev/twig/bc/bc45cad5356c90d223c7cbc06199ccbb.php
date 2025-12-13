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

/* marketplace/admin_offre_form.html.twig */
class __TwigTemplate_aaf55a044700d59862b9742ac18cae94 extends Template
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
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/admin_offre_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/admin_offre_form.html.twig"));

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

        if (((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 3, $this->source); })()) == "new")) {
            yield "Créer";
        } else {
            yield "Éditer";
        }
        yield " une Offre - Admin";
        
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
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <h1 class=\"mb-4\">
                <i class=\"fas fa-";
        // line 10
        if (((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 10, $this->source); })()) == "new")) {
            yield "plus";
        } else {
            yield "edit";
        }
        yield "-circle\"></i>
                ";
        // line 11
        if (((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 11, $this->source); })()) == "new")) {
            yield "Créer une Nouvelle Offre";
        } else {
            yield "Éditer l'Offre #";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11), "html", null, true);
        }
        // line 12
        yield "            </h1>

            <div class=\"card\">
                <div class=\"card-body\">
                    <form method=\"POST\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(((((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 17, $this->source); })()) == "new")) ? ("create_offre_admin") : (("edit_offre_" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17))))), "html", null, true);
        yield "\">

                        <!-- Annonce -->
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Annonce *</label>
                            <select name=\"listing_id\" class=\"form-select\" required ";
        // line 22
        if (((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 22, $this->source); })()) == "edit")) {
            yield "disabled";
        }
        yield ">
                                <option value=\"\">Sélectionnez une annonce</option>
                                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["listings"]) || array_key_exists("listings", $context) ? $context["listings"] : (function () { throw new RuntimeError('Variable "listings" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["listing"]) {
            // line 25
            yield "                                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["listing"], "id", [], "any", false, false, false, 25), "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 25, $this->source); })()), "listing", [], "any", false, false, false, 25) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 25, $this->source); })()), "listing", [], "any", false, false, false, 25), "id", [], "any", false, false, false, 25) == CoreExtension::getAttribute($this->env, $this->source, $context["listing"], "id", [], "any", false, false, false, 25)))) {
                yield "selected";
            }
            yield ">
                                        #";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["listing"], "id", [], "any", false, false, false, 26), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["listing"], "price", [], "any", false, false, false, 26), "html", null, true);
            yield " €
                                    </option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['listing'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        yield "                            </select>
                            ";
        // line 30
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 30, $this->source); })()), "listing", [], "any", false, false, false, 30)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 31
            yield "                                <input type=\"hidden\" name=\"listing_id\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 31, $this->source); })()), "listing", [], "any", false, false, false, 31), "id", [], "any", false, false, false, 31), "html", null, true);
            yield "\">
                            ";
        }
        // line 33
        yield "                        </div>

                        <!-- Acheteur (pour création) -->
                        ";
        // line 36
        if (((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 36, $this->source); })()) == "new")) {
            // line 37
            yield "                        <div class=\"mb-3\">
                            <label class=\"form-label\">Acheteur *</label>
                            <input type=\"email\" name=\"utilisateur_id\" class=\"form-control\" placeholder=\"ID ou Email de l'acheteur\" required>
                            <small class=\"text-muted\">Note: À améliorer avec un sélecteur d'utilisateurs</small>
                        </div>
                        ";
        }
        // line 43
        yield "
                        <!-- Acheteur (affichage pour édition) -->
                        ";
        // line 45
        if ((((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 45, $this->source); })()) == "edit") && CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 45, $this->source); })()), "utilisateur", [], "any", false, false, false, 45))) {
            // line 46
            yield "                        <div class=\"mb-3\">
                            <label class=\"form-label\">Acheteur</label>
                            <input type=\"text\" class=\"form-control\" value=\"";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 48, $this->source); })()), "utilisateur", [], "any", false, false, false, 48), "email", [], "any", false, false, false, 48), "html", null, true);
            yield "\" disabled>
                        </div>
                        ";
        }
        // line 51
        yield "
                        <!-- Prix Proposé -->
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Prix Proposé (€) *</label>
                            <input type=\"number\" name=\"prix_propose\" class=\"form-control\" step=\"0.01\" value=\"";
        // line 55
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 55, $this->source); })()), "prixPropose", [], "any", false, false, false, 55)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 55, $this->source); })()), "prixPropose", [], "any", false, false, false, 55), "html", null, true)) : (""));
        yield "\" required>
                        </div>

                        <!-- Statut -->
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Statut *</label>
                            <select name=\"statut\" class=\"form-select\" required>
                                <option value=\"En attente\" ";
        // line 62
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 62, $this->source); })()), "statut", [], "any", false, false, false, 62) == "En attente")) {
            yield "selected";
        }
        yield ">En attente</option>
                                <option value=\"Acceptée\" ";
        // line 63
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 63, $this->source); })()), "statut", [], "any", false, false, false, 63) == "Acceptée")) {
            yield "selected";
        }
        yield ">Acceptée</option>
                                <option value=\"Refusée\" ";
        // line 64
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 64, $this->source); })()), "statut", [], "any", false, false, false, 64) == "Refusée")) {
            yield "selected";
        }
        yield ">Refusée</option>
                            </select>
                        </div>

                        <!-- Commentaire -->
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Commentaire</label>
                            <textarea name=\"commentaire\" class=\"form-control\" rows=\"4\">";
        // line 71
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 71, $this->source); })()), "commentaire", [], "any", false, false, false, 71)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 71, $this->source); })()), "commentaire", [], "any", false, false, false, 71), "html", null, true)) : (""));
        yield "</textarea>
                        </div>

                        <!-- Boutons -->
                        <div class=\"d-flex gap-2\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                <i class=\"fas fa-save\"></i>
                                ";
        // line 78
        if (((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 78, $this->source); })()) == "new")) {
            yield "Créer l'Offre";
        } else {
            yield "Mettre à Jour";
        }
        // line 79
        yield "                            </button>
                            <a href=\"";
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_offre_list");
        yield "\" class=\"btn btn-secondary\">
                                <i class=\"fas fa-arrow-left\"></i> Annuler
                            </a>
                        </div>
                    </form>
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
        return "marketplace/admin_offre_form.html.twig";
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
        return array (  273 => 80,  270 => 79,  264 => 78,  254 => 71,  242 => 64,  236 => 63,  230 => 62,  220 => 55,  214 => 51,  208 => 48,  204 => 46,  202 => 45,  198 => 43,  190 => 37,  188 => 36,  183 => 33,  177 => 31,  175 => 30,  172 => 29,  161 => 26,  152 => 25,  148 => 24,  141 => 22,  133 => 17,  126 => 12,  119 => 11,  111 => 10,  105 => 6,  92 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}{% if action == 'new' %}Créer{% else %}Éditer{% endif %} une Offre - Admin{% endblock %}

{% block content %}
<div class=\"container mt-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <h1 class=\"mb-4\">
                <i class=\"fas fa-{% if action == 'new' %}plus{% else %}edit{% endif %}-circle\"></i>
                {% if action == 'new' %}Créer une Nouvelle Offre{% else %}Éditer l'Offre #{{ offre.id }}{% endif %}
            </h1>

            <div class=\"card\">
                <div class=\"card-body\">
                    <form method=\"POST\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token(action == 'new' ? 'create_offre_admin' : 'edit_offre_' ~ offre.id) }}\">

                        <!-- Annonce -->
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Annonce *</label>
                            <select name=\"listing_id\" class=\"form-select\" required {% if action == 'edit' %}disabled{% endif %}>
                                <option value=\"\">Sélectionnez une annonce</option>
                                {% for listing in listings %}
                                    <option value=\"{{ listing.id }}\" {% if offre.listing and offre.listing.id == listing.id %}selected{% endif %}>
                                        #{{ listing.id }} - {{ listing.price }} €
                                    </option>
                                {% endfor %}
                            </select>
                            {% if offre.listing %}
                                <input type=\"hidden\" name=\"listing_id\" value=\"{{ offre.listing.id }}\">
                            {% endif %}
                        </div>

                        <!-- Acheteur (pour création) -->
                        {% if action == 'new' %}
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Acheteur *</label>
                            <input type=\"email\" name=\"utilisateur_id\" class=\"form-control\" placeholder=\"ID ou Email de l'acheteur\" required>
                            <small class=\"text-muted\">Note: À améliorer avec un sélecteur d'utilisateurs</small>
                        </div>
                        {% endif %}

                        <!-- Acheteur (affichage pour édition) -->
                        {% if action == 'edit' and offre.utilisateur %}
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Acheteur</label>
                            <input type=\"text\" class=\"form-control\" value=\"{{ offre.utilisateur.email }}\" disabled>
                        </div>
                        {% endif %}

                        <!-- Prix Proposé -->
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Prix Proposé (€) *</label>
                            <input type=\"number\" name=\"prix_propose\" class=\"form-control\" step=\"0.01\" value=\"{{ offre.prixPropose ?: '' }}\" required>
                        </div>

                        <!-- Statut -->
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Statut *</label>
                            <select name=\"statut\" class=\"form-select\" required>
                                <option value=\"En attente\" {% if offre.statut == 'En attente' %}selected{% endif %}>En attente</option>
                                <option value=\"Acceptée\" {% if offre.statut == 'Acceptée' %}selected{% endif %}>Acceptée</option>
                                <option value=\"Refusée\" {% if offre.statut == 'Refusée' %}selected{% endif %}>Refusée</option>
                            </select>
                        </div>

                        <!-- Commentaire -->
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Commentaire</label>
                            <textarea name=\"commentaire\" class=\"form-control\" rows=\"4\">{{ offre.commentaire ?: '' }}</textarea>
                        </div>

                        <!-- Boutons -->
                        <div class=\"d-flex gap-2\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                <i class=\"fas fa-save\"></i>
                                {% if action == 'new' %}Créer l'Offre{% else %}Mettre à Jour{% endif %}
                            </button>
                            <a href=\"{{ path('admin_offre_list') }}\" class=\"btn btn-secondary\">
                                <i class=\"fas fa-arrow-left\"></i> Annuler
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "marketplace/admin_offre_form.html.twig", "C:\\xampp\\htdocs\\MuseHub-my-work\\MuseHub-my-work\\templates\\marketplace\\admin_offre_form.html.twig");
    }
}
