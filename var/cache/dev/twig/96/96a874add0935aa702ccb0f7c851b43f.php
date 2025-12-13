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

/* artwork/admin_category_form.html.twig */
class __TwigTemplate_89510ee484b728a6febc915f11019d90 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "artwork/admin_category_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "artwork/admin_category_form.html.twig"));

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
        if ((($tmp = (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 4, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "Éditer une catégorie";
        } else {
            yield "Nouvelle catégorie";
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
        yield (((($tmp = (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 12, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("edit") : ("plus-circle"));
        yield " me-2\"></i>
                ";
        // line 13
        if ((($tmp = (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 13, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "Éditer une catégorie";
        } else {
            yield "Nouvelle catégorie";
        }
        // line 14
        yield "            </h1>
            <p class=\"text-muted\">";
        // line 15
        if ((($tmp = (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 15, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "Modifier les informations de la catégorie";
        } else {
            yield "Créer une nouvelle catégorie d'œuvres";
        }
        yield "</p>
        </div>
        <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_category_index");
        yield "\" class=\"btn btn-outline-secondary\">
            <i class=\"fas fa-arrow-left me-2\"></i>Retour à la liste
        </a>
    </div>
</div>

<div class=\"card\" style=\"border-radius: 15px; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.1);\">
    <div class=\"card-body p-4\">
        <form method=\"post\">
            <div class=\"mb-3\">
                <label for=\"name\" class=\"form-label fw-bold\">
                    <i class=\"fas fa-tag me-2 text-primary\"></i>Nom de la catégorie *
                </label>
                <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" 
                       value=\"";
        // line 31
        yield (((($tmp = (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 31, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 31, $this->source); })()), "name", [], "any", false, false, false, 31), "html", null, true)) : (""));
        yield "\" required 
                       placeholder=\"Ex: Peinture, Sculpture, Photographie...\">
            </div>

            <div class=\"mb-4\">
                <label for=\"description\" class=\"form-label fw-bold\">
                    <i class=\"fas fa-align-left me-2 text-primary\"></i>Description
                </label>
                <textarea class=\"form-control\" id=\"description\" name=\"description\" rows=\"4\" 
                          placeholder=\"Description de la catégorie...\">";
        // line 40
        yield (((($tmp = (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 40, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 40, $this->source); })()), "description", [], "any", false, false, false, 40), "html", null, true)) : (""));
        yield "</textarea>
            </div>

            <div class=\"d-flex justify-content-between align-items-center pt-3 border-top\">
                <a href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_category_index");
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
        return "artwork/admin_category_form.html.twig";
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
        return array (  172 => 44,  165 => 40,  153 => 31,  136 => 17,  127 => 15,  124 => 14,  118 => 13,  114 => 12,  108 => 8,  95 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}
    {% if category %}Éditer une catégorie{% else %}Nouvelle catégorie{% endif %} - MuseHub Admin
{% endblock %}

{% block body %}
<div class=\"mb-4\">
    <div class=\"d-flex justify-content-between align-items-center\">
        <div>
            <h1 class=\"h3 mb-0\">
                <i class=\"fas fa-{{ category ? 'edit' : 'plus-circle' }} me-2\"></i>
                {% if category %}Éditer une catégorie{% else %}Nouvelle catégorie{% endif %}
            </h1>
            <p class=\"text-muted\">{% if category %}Modifier les informations de la catégorie{% else %}Créer une nouvelle catégorie d'œuvres{% endif %}</p>
        </div>
        <a href=\"{{ path('admin_category_index') }}\" class=\"btn btn-outline-secondary\">
            <i class=\"fas fa-arrow-left me-2\"></i>Retour à la liste
        </a>
    </div>
</div>

<div class=\"card\" style=\"border-radius: 15px; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.1);\">
    <div class=\"card-body p-4\">
        <form method=\"post\">
            <div class=\"mb-3\">
                <label for=\"name\" class=\"form-label fw-bold\">
                    <i class=\"fas fa-tag me-2 text-primary\"></i>Nom de la catégorie *
                </label>
                <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" 
                       value=\"{{ category ? category.name : '' }}\" required 
                       placeholder=\"Ex: Peinture, Sculpture, Photographie...\">
            </div>

            <div class=\"mb-4\">
                <label for=\"description\" class=\"form-label fw-bold\">
                    <i class=\"fas fa-align-left me-2 text-primary\"></i>Description
                </label>
                <textarea class=\"form-control\" id=\"description\" name=\"description\" rows=\"4\" 
                          placeholder=\"Description de la catégorie...\">{{ category ? category.description : '' }}</textarea>
            </div>

            <div class=\"d-flex justify-content-between align-items-center pt-3 border-top\">
                <a href=\"{{ path('admin_category_index') }}\" class=\"btn btn-outline-secondary\">
                    <i class=\"fas fa-times me-2\"></i>Annuler
                </a>
                <button type=\"submit\" class=\"btn btn-primary\">
                    <i class=\"fas fa-save me-2\"></i>Enregistrer
                </button>
            </div>
        </form>
    </div>
</div>
{% endblock %}
", "artwork/admin_category_form.html.twig", "C:\\xampp\\htdocs\\MuseHub-my-work\\MuseHub-my-work\\templates\\artwork\\admin_category_form.html.twig");
    }
}
