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

/* community/admin_form.html.twig */
class __TwigTemplate_d5087f90521b2e0600063226b7054dab extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "community/admin_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "community/admin_form.html.twig"));

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
        yield ((((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 4, $this->source); })()) == "new")) ? ("Nouveau post") : ("Modifier post"));
        yield " - Communauté
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
        yield "<div class=\"mb-4 d-flex align-items-center gap-3\">
    <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_community_list");
        yield "\" class=\"btn btn-link text-decoration-none\">
        <i class=\"fas fa-arrow-left me-2\"></i>Retour
    </a>
    <div>
        <h1 class=\"h3 mb-0\">
            ";
        // line 14
        yield ((((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 14, $this->source); })()) == "new")) ? ("Créer un post") : ("Modifier un post"));
        yield "
        </h1>
        <p class=\"text-muted mb-0\">Publier des annonces officielles ou corriger le contenu</p>
    </div>
</div>

";
        // line 20
        $context["formAction"] = ((((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 20, $this->source); })()) == "new")) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_community_post_new")) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_community_post_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source,         // line 22
(isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22)])));
        // line 24
        $context["csrfIntention"] = ((((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 24, $this->source); })()) == "new")) ? ("create_admin_post") : (("edit_admin_post_" . CoreExtension::getAttribute($this->env, $this->source,         // line 26
(isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26))));
        // line 28
        yield "
<div class=\"card\" style=\"border-radius: 15px; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.1);\">
    <div class=\"card-body\">
        <form method=\"POST\" action=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["formAction"]) || array_key_exists("formAction", $context) ? $context["formAction"] : (function () { throw new RuntimeError('Variable "formAction" does not exist.', 31, $this->source); })()), "html", null, true);
        yield "\">
            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken((isset($context["csrfIntention"]) || array_key_exists("csrfIntention", $context) ? $context["csrfIntention"] : (function () { throw new RuntimeError('Variable "csrfIntention" does not exist.', 32, $this->source); })())), "html", null, true);
        yield "\">
            <div class=\"mb-3\">
                <label class=\"form-label\">UUID Auteur</label>
                ";
        // line 35
        $context["defaultAuthor"] = (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 35, $this->source); })()), "authorUuid", [], "any", false, false, false, 35))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 35, $this->source); })()), "authorUuid", [], "any", false, false, false, 35)) : ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), "uuid", [], "any", false, false, false, 35)) : (""))));
        // line 36
        yield "                <input type=\"text\" name=\"author_uuid\" class=\"form-control\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["defaultAuthor"]) || array_key_exists("defaultAuthor", $context) ? $context["defaultAuthor"] : (function () { throw new RuntimeError('Variable "defaultAuthor" does not exist.', 36, $this->source); })()), "html", null, true);
        yield "\">
                <small class=\"text-muted\">Utilisez votre UUID admin ou celui du créateur du post.</small>
            </div>
            <div class=\"mb-3\">
                <label class=\"form-label\">Contenu *</label>
                <textarea name=\"content\" rows=\"5\" class=\"form-control\" required>";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 41, $this->source); })()), "content", [], "any", false, false, false, 41), "html", null, true);
        yield "</textarea>
            </div>
            <div class=\"mb-3\">
                <label class=\"form-label\">Image (URL)</label>
                <input type=\"url\" name=\"image_url\" class=\"form-control\" value=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 45, $this->source); })()), "imageUrl", [], "any", false, false, false, 45), "html", null, true);
        yield "\">
            </div>
            <div class=\"d-flex justify-content-end gap-3\">
                <a href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_community_list");
        yield "\" class=\"btn btn-outline-secondary\">Annuler</a>
                <button type=\"submit\" class=\"btn btn-primary\">
                    ";
        // line 50
        yield ((((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 50, $this->source); })()) == "new")) ? ("Publier") : ("Mettre à jour"));
        yield "
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
        return "community/admin_form.html.twig";
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
        return array (  174 => 50,  169 => 48,  163 => 45,  156 => 41,  147 => 36,  145 => 35,  139 => 32,  135 => 31,  130 => 28,  128 => 26,  127 => 24,  125 => 22,  124 => 20,  115 => 14,  107 => 9,  104 => 8,  91 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}
    {{ action == 'new' ? 'Nouveau post' : 'Modifier post' }} - Communauté
{% endblock %}

{% block body %}
<div class=\"mb-4 d-flex align-items-center gap-3\">
    <a href=\"{{ path('admin_community_list') }}\" class=\"btn btn-link text-decoration-none\">
        <i class=\"fas fa-arrow-left me-2\"></i>Retour
    </a>
    <div>
        <h1 class=\"h3 mb-0\">
            {{ action == 'new' ? 'Créer un post' : 'Modifier un post' }}
        </h1>
        <p class=\"text-muted mb-0\">Publier des annonces officielles ou corriger le contenu</p>
    </div>
</div>

{% set formAction = action == 'new'
    ? path('admin_community_post_new')
    : path('admin_community_post_edit', {id: post.id})
%}
{% set csrfIntention = action == 'new'
    ? 'create_admin_post'
    : 'edit_admin_post_' ~ post.id
%}

<div class=\"card\" style=\"border-radius: 15px; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.1);\">
    <div class=\"card-body\">
        <form method=\"POST\" action=\"{{ formAction }}\">
            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token(csrfIntention) }}\">
            <div class=\"mb-3\">
                <label class=\"form-label\">UUID Auteur</label>
                {% set defaultAuthor = post.authorUuid is not null ? post.authorUuid : (app.user ? app.user.uuid : '') %}
                <input type=\"text\" name=\"author_uuid\" class=\"form-control\" value=\"{{ defaultAuthor }}\">
                <small class=\"text-muted\">Utilisez votre UUID admin ou celui du créateur du post.</small>
            </div>
            <div class=\"mb-3\">
                <label class=\"form-label\">Contenu *</label>
                <textarea name=\"content\" rows=\"5\" class=\"form-control\" required>{{ post.content }}</textarea>
            </div>
            <div class=\"mb-3\">
                <label class=\"form-label\">Image (URL)</label>
                <input type=\"url\" name=\"image_url\" class=\"form-control\" value=\"{{ post.imageUrl }}\">
            </div>
            <div class=\"d-flex justify-content-end gap-3\">
                <a href=\"{{ path('admin_community_list') }}\" class=\"btn btn-outline-secondary\">Annuler</a>
                <button type=\"submit\" class=\"btn btn-primary\">
                    {{ action == 'new' ? 'Publier' : 'Mettre à jour' }}
                </button>
            </div>
        </form>
    </div>
</div>
{% endblock %}


", "community/admin_form.html.twig", "C:\\xampp\\htdocs\\MuseHub-my-work\\MuseHub-my-work\\templates\\community\\admin_form.html.twig");
    }
}
