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

/* marketplace/admin_offre_new.html.twig */
class __TwigTemplate_33dc3df939d0fc7e68de1865f97b659f extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/admin_offre_new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/admin_offre_new.html.twig"));

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

        yield "Nouvelle Offre - MuseHub Admin";
        
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
        yield "<div class=\"container-fluid px-4\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <h1 class=\"h3 mb-0\">Nouvelle Offre</h1>
            <p class=\"text-muted mb-0\">Créer une nouvelle offre manuellement</p>
        </div>
        <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_offre_list");
        yield "\" class=\"btn btn-outline-secondary\">
            <i class=\"fas fa-arrow-left me-2\"></i>Retour à la liste
        </a>
    </div>

    <div class=\"card\">
        <div class=\"card-body\">
            ";
        // line 19
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "
                <div class=\"row mb-3\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group mb-3\">
                            ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "listing", [], "any", false, false, false, 23), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Annonce"]);
        yield "
                            ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "listing", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                            <div class=\"invalid-feedback\">
                                ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "listing", [], "any", false, false, false, 26), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group mb-3\">
                            ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "utilisateur", [], "any", false, false, false, 32), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Acheteur"]);
        yield "
                            ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "utilisateur", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-select"]]);
        // line 37
        yield "
                            <div class=\"invalid-feedback\">
                                ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "utilisateur", [], "any", false, false, false, 39), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"row mb-3\">
                    <div class=\"col-md-4\">
                        <div class=\"form-group mb-3\">
                            ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "prixPropose", [], "any", false, false, false, 48), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Prix proposé (€)"]);
        yield "
                            <div class=\"input-group\">
                                ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "prixPropose", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control", "step" => "0.01", "min" => "0"]]);
        yield "
                                <span class=\"input-group-text\">€</span>
                            </div>
                            <div class=\"invalid-feedback\">
                                ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "prixPropose", [], "any", false, false, false, 54), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"form-group mb-3\">
                            ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "statut", [], "any", false, false, false, 60), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Statut"]);
        yield "
                            ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "statut", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                            <div class=\"invalid-feedback\">
                                ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "statut", [], "any", false, false, false, 63), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"form-group mb-3\">
                            ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "datePropose", [], "any", false, false, false, 69), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date de l'offre"]);
        yield "
                            ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "datePropose", [], "any", false, false, false, 70), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            <div class=\"invalid-feedback\">
                                ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "datePropose", [], "any", false, false, false, 72), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"form-group mb-4\">
                    ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "commentaire", [], "any", false, false, false, 79), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Commentaire"]);
        yield "
                    ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "commentaire", [], "any", false, false, false, 80), 'widget', ["attr" => ["class" => "form-control", "rows" => 3]]);
        yield "
                    <div class=\"invalid-feedback\">
                        ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "commentaire", [], "any", false, false, false, 82), 'errors');
        yield "
                    </div>
                </div>

                <div class=\"d-flex justify-content-end gap-2\">
                    <a href=\"";
        // line 87
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_offre_list");
        yield "\" class=\"btn btn-outline-secondary\">
                        <i class=\"fas fa-times me-2\"></i>Annuler
                    </a>
                    <button type=\"submit\" class=\"btn btn-primary\">
                        <i class=\"fas fa-save me-2\"></i>Enregistrer
                    </button>
                </div>
            ";
        // line 94
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), 'form_end');
        yield "
        </div>
    </div>
</div>

";
        // line 99
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 117
        yield "
";
        // line 118
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 99
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 100
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    /* Styles personnalisés pour le formulaire */
    .form-control:focus, .form-select:focus {
        border-color: #86b7fe;
        box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
    }
    .is-invalid {
        border-color: #dc3545;
    }
    .invalid-feedback {
        display: block;
        color: #dc3545;
        font-size: 0.875em;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 118
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 119
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
    // Activer les tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle=\"tooltip\"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    });

    // Validation du formulaire
    (function() {
        'use strict';
        
        // Récupérer les champs du formulaire
        var forms = document.querySelectorAll('.needs-validation');
        
        // Désactiver la soumission du formulaire s'il y a des champs invalides
        Array.prototype.slice.call(forms).forEach(function(form) {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                
                form.classList.add('was-validated');
            }, false);
        });
        
        // Initialisation de Select2 si disponible
        if (typeof \$ !== 'undefined' && \$.fn.select2) {
            \$('select.form-select').select2({
                theme: 'bootstrap-5',
                width: '100%',
                placeholder: 'Sélectionnez une option',
                allowClear: true
            });
        }
    })();
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
        return "marketplace/admin_offre_new.html.twig";
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
        return array (  330 => 119,  317 => 118,  289 => 100,  276 => 99,  265 => 118,  262 => 117,  260 => 99,  252 => 94,  242 => 87,  234 => 82,  229 => 80,  225 => 79,  215 => 72,  210 => 70,  206 => 69,  197 => 63,  192 => 61,  188 => 60,  179 => 54,  172 => 50,  167 => 48,  155 => 39,  151 => 37,  149 => 33,  145 => 32,  136 => 26,  131 => 24,  127 => 23,  120 => 19,  110 => 12,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Nouvelle Offre - MuseHub Admin{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <h1 class=\"h3 mb-0\">Nouvelle Offre</h1>
            <p class=\"text-muted mb-0\">Créer une nouvelle offre manuellement</p>
        </div>
        <a href=\"{{ path('admin_offre_list') }}\" class=\"btn btn-outline-secondary\">
            <i class=\"fas fa-arrow-left me-2\"></i>Retour à la liste
        </a>
    </div>

    <div class=\"card\">
        <div class=\"card-body\">
            {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}
                <div class=\"row mb-3\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group mb-3\">
                            {{ form_label(form.listing, 'Annonce', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.listing, {'attr': {'class': 'form-select'}}) }}
                            <div class=\"invalid-feedback\">
                                {{ form_errors(form.listing) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group mb-3\">
                            {{ form_label(form.utilisateur, 'Acheteur', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.utilisateur, {
                                'attr': {
                                    'class': 'form-select'
                                }
                            }) }}
                            <div class=\"invalid-feedback\">
                                {{ form_errors(form.utilisateur) }}
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"row mb-3\">
                    <div class=\"col-md-4\">
                        <div class=\"form-group mb-3\">
                            {{ form_label(form.prixPropose, 'Prix proposé (€)', {'label_attr': {'class': 'form-label'}}) }}
                            <div class=\"input-group\">
                                {{ form_widget(form.prixPropose, {'attr': {'class': 'form-control', 'step': '0.01', 'min': '0'}}) }}
                                <span class=\"input-group-text\">€</span>
                            </div>
                            <div class=\"invalid-feedback\">
                                {{ form_errors(form.prixPropose) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"form-group mb-3\">
                            {{ form_label(form.statut, 'Statut', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.statut, {'attr': {'class': 'form-select'}}) }}
                            <div class=\"invalid-feedback\">
                                {{ form_errors(form.statut) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"form-group mb-3\">
                            {{ form_label(form.datePropose, 'Date de l\\'offre', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.datePropose, {'attr': {'class': 'form-control'}}) }}
                            <div class=\"invalid-feedback\">
                                {{ form_errors(form.datePropose) }}
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"form-group mb-4\">
                    {{ form_label(form.commentaire, 'Commentaire', {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.commentaire, {'attr': {'class': 'form-control', 'rows': 3}}) }}
                    <div class=\"invalid-feedback\">
                        {{ form_errors(form.commentaire) }}
                    </div>
                </div>

                <div class=\"d-flex justify-content-end gap-2\">
                    <a href=\"{{ path('admin_offre_list') }}\" class=\"btn btn-outline-secondary\">
                        <i class=\"fas fa-times me-2\"></i>Annuler
                    </a>
                    <button type=\"submit\" class=\"btn btn-primary\">
                        <i class=\"fas fa-save me-2\"></i>Enregistrer
                    </button>
                </div>
            {{ form_end(form) }}
        </div>
    </div>
</div>

{% block stylesheets %}
{{ parent() }}
<style>
    /* Styles personnalisés pour le formulaire */
    .form-control:focus, .form-select:focus {
        border-color: #86b7fe;
        box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
    }
    .is-invalid {
        border-color: #dc3545;
    }
    .invalid-feedback {
        display: block;
        color: #dc3545;
        font-size: 0.875em;
    }
</style>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
    // Activer les tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle=\"tooltip\"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    });

    // Validation du formulaire
    (function() {
        'use strict';
        
        // Récupérer les champs du formulaire
        var forms = document.querySelectorAll('.needs-validation');
        
        // Désactiver la soumission du formulaire s'il y a des champs invalides
        Array.prototype.slice.call(forms).forEach(function(form) {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                
                form.classList.add('was-validated');
            }, false);
        });
        
        // Initialisation de Select2 si disponible
        if (typeof \$ !== 'undefined' && \$.fn.select2) {
            \$('select.form-select').select2({
                theme: 'bootstrap-5',
                width: '100%',
                placeholder: 'Sélectionnez une option',
                allowClear: true
            });
        }
    })();
</script>
{% endblock %}
{% endblock %}
", "marketplace/admin_offre_new.html.twig", "C:\\xampp\\htdocs\\MuseHub-my-work\\MuseHub-my-work\\templates\\marketplace\\admin_offre_new.html.twig");
    }
}
