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

/* user/admin_form.html.twig */
class __TwigTemplate_fac6e3c741ae04c4a034b035d4dcf0c4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/admin_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/admin_form.html.twig"));

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
        yield ((((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 4, $this->source); })()) == "new")) ? ("Nouvel utilisateur") : ("Modifier utilisateur"));
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
        yield "<div class=\"mb-4 d-flex align-items-center gap-3\">
    <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_list");
        yield "\" class=\"btn btn-link text-decoration-none\">
        <i class=\"fas fa-arrow-left me-2\"></i>Retour
    </a>
    <div>
        <h1 class=\"h3 mb-0\">
            ";
        // line 14
        yield ((((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 14, $this->source); })()) == "new")) ? ("Créer un utilisateur") : ("Modifier un utilisateur"));
        yield "
        </h1>
        <p class=\"text-muted mb-0\">Définir les accès et le statut</p>
    </div>
</div>

";
        // line 20
        $context["formAction"] = ((((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 20, $this->source); })()) == "new")) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_new")) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source,         // line 22
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22)])));
        // line 24
        $context["csrfIntention"] = ((((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 24, $this->source); })()) == "new")) ? ("create_user") : (("edit_user_" . CoreExtension::getAttribute($this->env, $this->source,         // line 26
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26))));
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
            <div class=\"row g-4\">
                <div class=\"col-md-6\">
                    <label class=\"form-label\">Email *</label>
                    <input type=\"email\" name=\"email\" value=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 36, $this->source); })()), "email", [], "any", false, false, false, 36), "html", null, true);
        yield "\" class=\"form-control\" required>
                </div>
                <div class=\"col-md-6\">
                    <label class=\"form-label\">Nom d'utilisateur</label>
                    <input type=\"text\" name=\"username\" value=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 40, $this->source); })()), "username", [], "any", false, false, false, 40), "html", null, true);
        yield "\" class=\"form-control\" placeholder=\"Optionnel\">
                </div>
                <div class=\"col-md-6\">
                    <label class=\"form-label\">
                        Mot de passe ";
        // line 44
        yield ((((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 44, $this->source); })()) == "edit")) ? ("(laisser vide pour conserver)") : ("*"));
        yield "
                    </label>
                    <input type=\"password\" name=\"password\" class=\"form-control\" ";
        // line 46
        yield ((((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 46, $this->source); })()) == "new")) ? ("required") : (""));
        yield ">
                </div>
                <div class=\"col-md-6\">
                    <label class=\"form-label\">Statut</label>
                    <div class=\"form-check form-switch mt-2\">
                        <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"isActiveSwitch\" name=\"is_active\" value=\"1\" ";
        // line 51
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 51, $this->source); })()), "isActive", [], "any", false, false, false, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
        yield ">
                        <label class=\"form-check-label\" for=\"isActiveSwitch\">Compte actif</label>
                    </div>
                </div>
                <div class=\"col-12\">
                    <label class=\"form-label d-block\">Rôles</label>
                    <div class=\"d-flex flex-wrap gap-3\">
                        ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["roleOptions"]) || array_key_exists("roleOptions", $context) ? $context["roleOptions"] : (function () { throw new RuntimeError('Variable "roleOptions" does not exist.', 58, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 59
            yield "                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"role_";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 60), "html", null, true);
            yield "\" name=\"roles[]\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["role"], "html", null, true);
            yield "\" ";
            yield ((CoreExtension::inFilter($context["role"], CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 60, $this->source); })()), "roles", [], "any", false, false, false, 60))) ? ("checked") : (""));
            yield ">
                                <label class=\"form-check-label\" for=\"role_";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 61), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["role"], "html", null, true);
            yield "</label>
                            </div>
                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        yield "                    </div>
                    <small class=\"text-muted d-block mt-2\">
                        ROLE_USER est attribué automatiquement s'il n'est pas sélectionné.
                    </small>
                </div>
            </div>
            <div class=\"d-flex justify-content-end gap-3 mt-4\">
                <a href=\"";
        // line 71
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_list");
        yield "\" class=\"btn btn-outline-secondary\">Annuler</a>
                <button type=\"submit\" class=\"btn btn-primary\">
                    ";
        // line 73
        yield ((((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 73, $this->source); })()) == "new")) ? ("Créer") : ("Mettre à jour"));
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
        return "user/admin_form.html.twig";
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
        return array (  244 => 73,  239 => 71,  230 => 64,  211 => 61,  203 => 60,  200 => 59,  183 => 58,  173 => 51,  165 => 46,  160 => 44,  153 => 40,  146 => 36,  139 => 32,  135 => 31,  130 => 28,  128 => 26,  127 => 24,  125 => 22,  124 => 20,  115 => 14,  107 => 9,  104 => 8,  91 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}
    {{ action == 'new' ? 'Nouvel utilisateur' : 'Modifier utilisateur' }} - MuseHub Admin
{% endblock %}

{% block body %}
<div class=\"mb-4 d-flex align-items-center gap-3\">
    <a href=\"{{ path('admin_users_list') }}\" class=\"btn btn-link text-decoration-none\">
        <i class=\"fas fa-arrow-left me-2\"></i>Retour
    </a>
    <div>
        <h1 class=\"h3 mb-0\">
            {{ action == 'new' ? 'Créer un utilisateur' : 'Modifier un utilisateur' }}
        </h1>
        <p class=\"text-muted mb-0\">Définir les accès et le statut</p>
    </div>
</div>

{% set formAction = action == 'new'
    ? path('admin_users_new')
    : path('admin_users_edit', {id: user.id})
%}
{% set csrfIntention = action == 'new'
    ? 'create_user'
    : 'edit_user_' ~ user.id
%}

<div class=\"card\" style=\"border-radius: 15px; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.1);\">
    <div class=\"card-body\">
        <form method=\"POST\" action=\"{{ formAction }}\">
            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token(csrfIntention) }}\">
            <div class=\"row g-4\">
                <div class=\"col-md-6\">
                    <label class=\"form-label\">Email *</label>
                    <input type=\"email\" name=\"email\" value=\"{{ user.email }}\" class=\"form-control\" required>
                </div>
                <div class=\"col-md-6\">
                    <label class=\"form-label\">Nom d'utilisateur</label>
                    <input type=\"text\" name=\"username\" value=\"{{ user.username }}\" class=\"form-control\" placeholder=\"Optionnel\">
                </div>
                <div class=\"col-md-6\">
                    <label class=\"form-label\">
                        Mot de passe {{ action == 'edit' ? '(laisser vide pour conserver)' : '*' }}
                    </label>
                    <input type=\"password\" name=\"password\" class=\"form-control\" {{ action == 'new' ? 'required' : '' }}>
                </div>
                <div class=\"col-md-6\">
                    <label class=\"form-label\">Statut</label>
                    <div class=\"form-check form-switch mt-2\">
                        <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"isActiveSwitch\" name=\"is_active\" value=\"1\" {{ user.isActive ? 'checked' : '' }}>
                        <label class=\"form-check-label\" for=\"isActiveSwitch\">Compte actif</label>
                    </div>
                </div>
                <div class=\"col-12\">
                    <label class=\"form-label d-block\">Rôles</label>
                    <div class=\"d-flex flex-wrap gap-3\">
                        {% for role in roleOptions %}
                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"role_{{ loop.index }}\" name=\"roles[]\" value=\"{{ role }}\" {{ role in user.roles ? 'checked' : '' }}>
                                <label class=\"form-check-label\" for=\"role_{{ loop.index }}\">{{ role }}</label>
                            </div>
                        {% endfor %}
                    </div>
                    <small class=\"text-muted d-block mt-2\">
                        ROLE_USER est attribué automatiquement s'il n'est pas sélectionné.
                    </small>
                </div>
            </div>
            <div class=\"d-flex justify-content-end gap-3 mt-4\">
                <a href=\"{{ path('admin_users_list') }}\" class=\"btn btn-outline-secondary\">Annuler</a>
                <button type=\"submit\" class=\"btn btn-primary\">
                    {{ action == 'new' ? 'Créer' : 'Mettre à jour' }}
                </button>
            </div>
        </form>
    </div>
</div>
{% endblock %}


", "user/admin_form.html.twig", "C:\\xampp\\htdocs\\MuseHub-my-work\\MuseHub-my-work\\templates\\user\\admin_form.html.twig");
    }
}
