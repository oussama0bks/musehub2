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

/* community/show.html.twig */
class __TwigTemplate_e1f83fd8329658249dc071f3dbfbcd49 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "community/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "community/show.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["community"]) || array_key_exists("community", $context) ? $context["community"] : (function () { throw new RuntimeError('Variable "community" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        yield " - MuseHub";
        
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
        yield "<div class=\"container mt-5\" style=\"max-width: 900px;\">
    <div class=\"card shadow-sm rounded-4\">
        ";
        // line 8
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["community"]) || array_key_exists("community", $context) ? $context["community"] : (function () { throw new RuntimeError('Variable "community" does not exist.', 8, $this->source); })()), "imageUrl", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield "            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["community"]) || array_key_exists("community", $context) ? $context["community"] : (function () { throw new RuntimeError('Variable "community" does not exist.', 9, $this->source); })()), "imageUrl", [], "any", false, false, false, 9), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["community"]) || array_key_exists("community", $context) ? $context["community"] : (function () { throw new RuntimeError('Variable "community" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9), "html", null, true);
            yield "\" class=\"card-img-top object-fit-cover\" style=\"height: 350px;\">
        ";
        } else {
            // line 11
            yield "            <div class=\"bg-secondary d-flex align-items-center justify-content-center text-white fs-1\" style=\"height: 350px;\">
                <i class=\"fas fa-users\"></i>
            </div>
        ";
        }
        // line 15
        yield "
        <div class=\"card-body\">
            <h2 class=\"card-title fw-bold mb-3\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["community"]) || array_key_exists("community", $context) ? $context["community"] : (function () { throw new RuntimeError('Variable "community" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), "html", null, true);
        yield "</h2>
            <span class=\"badge bg-primary rounded-pill px-3 py-2 text-uppercase fw-semibold mb-3\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["community"] ?? null), "category", [], "any", true, true, false, 18)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["community"]) || array_key_exists("community", $context) ? $context["community"] : (function () { throw new RuntimeError('Variable "community" does not exist.', 18, $this->source); })()), "category", [], "any", false, false, false, 18), "Uncategorized")) : ("Uncategorized")), "html", null, true);
        yield "</span>
            <p class=\"card-text fs-5 text-muted mb-4\">
                ";
        // line 20
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["community"]) || array_key_exists("community", $context) ? $context["community"] : (function () { throw new RuntimeError('Variable "community" does not exist.', 20, $this->source); })()), "description", [], "any", false, false, false, 20)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["community"]) || array_key_exists("community", $context) ? $context["community"] : (function () { throw new RuntimeError('Variable "community" does not exist.', 20, $this->source); })()), "description", [], "any", false, false, false, 20), "html", null, true)) : ("No description provided."));
        yield "
            </p>

            <div class=\"d-flex align-items-center mb-4\">
                <i class=\"fas fa-users me-2 text-primary\"></i>
                <span class=\"fw-semibold\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["community"]) || array_key_exists("community", $context) ? $context["community"] : (function () { throw new RuntimeError('Variable "community" does not exist.', 25, $this->source); })()), "memberCount", [], "any", false, false, false, 25), "html", null, true);
        yield " member";
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["community"]) || array_key_exists("community", $context) ? $context["community"] : (function () { throw new RuntimeError('Variable "community" does not exist.', 25, $this->source); })()), "memberCount", [], "any", false, false, false, 25) > 1)) ? ("s") : (""));
        yield "</span>
            </div>

            <a href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_community_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["community"]) || array_key_exists("community", $context) ? $context["community"] : (function () { throw new RuntimeError('Variable "community" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28)]), "html", null, true);
        yield "\" class=\"btn btn-outline-primary rounded-pill px-4 py-2 me-3 fw-semibold\">
                <i class=\"fas fa-edit me-2\"></i> Edit
            </a>
            <form method=\"post\" action=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_community_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["community"]) || array_key_exists("community", $context) ? $context["community"] : (function () { throw new RuntimeError('Variable "community" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31)]), "html", null, true);
        yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Are you sure you want to delete this community?');\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["community"]) || array_key_exists("community", $context) ? $context["community"] : (function () { throw new RuntimeError('Variable "community" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32))), "html", null, true);
        yield "\">
                <button class=\"btn btn-danger rounded-pill px-4 py-2 fw-semibold\">
                    <i class=\"fas fa-trash me-2\"></i> Delete
                </button>
            </form>
            <a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_community_index");
        yield "\" class=\"btn btn-link ms-3\">Back to communities</a>
        </div>
    </div>
</div>

<style>
    .object-fit-cover {
        object-fit: cover;
        object-position: center;
    }
</style>
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
        return "community/show.html.twig";
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
        return array (  168 => 37,  160 => 32,  156 => 31,  150 => 28,  142 => 25,  134 => 20,  129 => 18,  125 => 17,  121 => 15,  115 => 11,  107 => 9,  105 => 8,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ community.name }} - MuseHub{% endblock %}

{% block body %}
<div class=\"container mt-5\" style=\"max-width: 900px;\">
    <div class=\"card shadow-sm rounded-4\">
        {% if community.imageUrl %}
            <img src=\"{{ community.imageUrl }}\" alt=\"{{ community.name }}\" class=\"card-img-top object-fit-cover\" style=\"height: 350px;\">
        {% else %}
            <div class=\"bg-secondary d-flex align-items-center justify-content-center text-white fs-1\" style=\"height: 350px;\">
                <i class=\"fas fa-users\"></i>
            </div>
        {% endif %}

        <div class=\"card-body\">
            <h2 class=\"card-title fw-bold mb-3\">{{ community.name }}</h2>
            <span class=\"badge bg-primary rounded-pill px-3 py-2 text-uppercase fw-semibold mb-3\">{{ community.category|default('Uncategorized') }}</span>
            <p class=\"card-text fs-5 text-muted mb-4\">
                {{ community.description ?: 'No description provided.' }}
            </p>

            <div class=\"d-flex align-items-center mb-4\">
                <i class=\"fas fa-users me-2 text-primary\"></i>
                <span class=\"fw-semibold\">{{ community.memberCount }} member{{ community.memberCount > 1 ? 's' : '' }}</span>
            </div>

            <a href=\"{{ path('app_community_edit', {'id': community.id}) }}\" class=\"btn btn-outline-primary rounded-pill px-4 py-2 me-3 fw-semibold\">
                <i class=\"fas fa-edit me-2\"></i> Edit
            </a>
            <form method=\"post\" action=\"{{ path('app_community_delete', {'id': community.id}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Are you sure you want to delete this community?');\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ community.id) }}\">
                <button class=\"btn btn-danger rounded-pill px-4 py-2 fw-semibold\">
                    <i class=\"fas fa-trash me-2\"></i> Delete
                </button>
            </form>
            <a href=\"{{ path('app_community_index') }}\" class=\"btn btn-link ms-3\">Back to communities</a>
        </div>
    </div>
</div>

<style>
    .object-fit-cover {
        object-fit: cover;
        object-position: center;
    }
</style>
{% endblock %}
", "community/show.html.twig", "C:\\xampp\\htdocs\\MuseHub-my-work\\MuseHub-my-work\\templates\\community\\show.html.twig");
    }
}
