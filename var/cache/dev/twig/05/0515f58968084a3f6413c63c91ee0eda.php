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

/* security/register.html.twig */
class __TwigTemplate_5f2d998452f4e9bd5cc3adab9b790ef3 extends Template
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
        return "front/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $this->parent = $this->load("front/base.html.twig", 1);
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

        yield "Inscription - MuseHub";
        
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
        yield "<div class=\"container my-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-6\">
            <div class=\"card\">
                <div class=\"card-body p-4 p-lg-5\">
                    <div class=\"text-center mb-4\">
                        <h1 class=\"h3 mb-2\">Créer un compte</h1>
                        <p class=\"text-muted mb-0\">Rejoignez la communauté MuseHub</p>
                    </div>
                    <form method=\"POST\" action=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
        yield "\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("register_form"), "html", null, true);
        yield "\">
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Adresse email *</label>
                            <input type=\"email\" name=\"email\" class=\"form-control\" value=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "email", [], "any", false, false, false, 19), "html", null, true);
        yield "\" required>
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Nom d'utilisateur</label>
                            <input type=\"text\" name=\"username\" class=\"form-control\" value=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "username", [], "any", false, false, false, 23), "html", null, true);
        yield "\">
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Mot de passe *</label>
                            <input type=\"password\" name=\"password\" class=\"form-control\" required minlength=\"6\">
                            <small class=\"text-muted\">Minimum 6 caractères.</small>
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Confirmer le mot de passe *</label>
                            <input type=\"password\" name=\"password_confirm\" class=\"form-control\" required minlength=\"6\">
                        </div>
                        <div class=\"mb-4\">
                            <label class=\"form-label d-block\">Type de compte *</label>
                            <div class=\"row g-3\">
                                <div class=\"col-md-6\">
                                    <div class=\"border rounded-4 p-3 h-100 ";
        // line 38
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "account_type", [], "any", false, false, false, 38) == "ROLE_USER")) {
            yield "border-primary shadow-sm";
        } else {
            yield "border-light";
        }
        yield "\">
                                        <div class=\"form-check\">
                                            <input class=\"form-check-input\" type=\"radio\" name=\"account_type\" id=\"account_user\" value=\"ROLE_USER\" ";
        // line 40
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "account_type", [], "any", false, false, false, 40) != "ROLE_ARTIST")) ? ("checked") : (""));
        yield ">
                                            <label class=\"form-check-label fw-semibold\" for=\"account_user\">
                                                Collectionneur / Amateur
                                            </label>
                                        </div>
                                        <p class=\"text-muted small mb-0 ms-4\">Parcourir, commenter, participer aux événements.</p>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"border rounded-4 p-3 h-100 ";
        // line 49
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "account_type", [], "any", false, false, false, 49) == "ROLE_ARTIST")) {
            yield "border-primary shadow-sm";
        } else {
            yield "border-light";
        }
        yield "\">
                                        <div class=\"form-check\">
                                            <input class=\"form-check-input\" type=\"radio\" name=\"account_type\" id=\"account_artist\" value=\"ROLE_ARTIST\" ";
        // line 51
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "account_type", [], "any", false, false, false, 51) == "ROLE_ARTIST")) ? ("checked") : (""));
        yield ">
                                            <label class=\"form-check-label fw-semibold\" for=\"account_artist\">
                                                Artiste
                                            </label>
                                        </div>
                                        <p class=\"text-muted small mb-0 ms-4\">Publier vos œuvres, gérer votre vitrine MuseHub.</p>
                                    </div>
                                </div>
                            </div>
                            <small class=\"text-muted d-block mt-2\"><i class=\"fas fa-info-circle me-1\"></i>Seuls les artistes et administrateurs peuvent publier des œuvres.</small>
                        </div>
                        <div class=\"form-check mb-4\">
                            <input class=\"form-check-input\" type=\"checkbox\" value=\"1\" id=\"acceptTerms\" name=\"accept_terms\" ";
        // line 63
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "accept_terms", [], "any", false, false, false, 63)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
        yield " required>
                            <label class=\"form-check-label\" for=\"acceptTerms\">
                                J'accepte les conditions d'utilisation de MuseHub.
                            </label>
                        </div>
                        <div class=\"d-grid mb-3\">
                            <button type=\"submit\" class=\"btn btn-primary\">Créer mon compte</button>
                        </div>
                        <p class=\"text-center text-muted mb-0\">
                            Déjà inscrit ? <a href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        yield "\">Se connecter</a>
                        </p>
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
        return "security/register.html.twig";
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
        return array (  203 => 72,  191 => 63,  176 => 51,  167 => 49,  155 => 40,  146 => 38,  128 => 23,  121 => 19,  115 => 16,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block title %}Inscription - MuseHub{% endblock %}

{% block body %}
<div class=\"container my-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-6\">
            <div class=\"card\">
                <div class=\"card-body p-4 p-lg-5\">
                    <div class=\"text-center mb-4\">
                        <h1 class=\"h3 mb-2\">Créer un compte</h1>
                        <p class=\"text-muted mb-0\">Rejoignez la communauté MuseHub</p>
                    </div>
                    <form method=\"POST\" action=\"{{ path('register') }}\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('register_form') }}\">
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Adresse email *</label>
                            <input type=\"email\" name=\"email\" class=\"form-control\" value=\"{{ form.email }}\" required>
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Nom d'utilisateur</label>
                            <input type=\"text\" name=\"username\" class=\"form-control\" value=\"{{ form.username }}\">
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Mot de passe *</label>
                            <input type=\"password\" name=\"password\" class=\"form-control\" required minlength=\"6\">
                            <small class=\"text-muted\">Minimum 6 caractères.</small>
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Confirmer le mot de passe *</label>
                            <input type=\"password\" name=\"password_confirm\" class=\"form-control\" required minlength=\"6\">
                        </div>
                        <div class=\"mb-4\">
                            <label class=\"form-label d-block\">Type de compte *</label>
                            <div class=\"row g-3\">
                                <div class=\"col-md-6\">
                                    <div class=\"border rounded-4 p-3 h-100 {% if form.account_type == 'ROLE_USER' %}border-primary shadow-sm{% else %}border-light{% endif %}\">
                                        <div class=\"form-check\">
                                            <input class=\"form-check-input\" type=\"radio\" name=\"account_type\" id=\"account_user\" value=\"ROLE_USER\" {{ form.account_type != 'ROLE_ARTIST' ? 'checked' : '' }}>
                                            <label class=\"form-check-label fw-semibold\" for=\"account_user\">
                                                Collectionneur / Amateur
                                            </label>
                                        </div>
                                        <p class=\"text-muted small mb-0 ms-4\">Parcourir, commenter, participer aux événements.</p>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"border rounded-4 p-3 h-100 {% if form.account_type == 'ROLE_ARTIST' %}border-primary shadow-sm{% else %}border-light{% endif %}\">
                                        <div class=\"form-check\">
                                            <input class=\"form-check-input\" type=\"radio\" name=\"account_type\" id=\"account_artist\" value=\"ROLE_ARTIST\" {{ form.account_type == 'ROLE_ARTIST' ? 'checked' : '' }}>
                                            <label class=\"form-check-label fw-semibold\" for=\"account_artist\">
                                                Artiste
                                            </label>
                                        </div>
                                        <p class=\"text-muted small mb-0 ms-4\">Publier vos œuvres, gérer votre vitrine MuseHub.</p>
                                    </div>
                                </div>
                            </div>
                            <small class=\"text-muted d-block mt-2\"><i class=\"fas fa-info-circle me-1\"></i>Seuls les artistes et administrateurs peuvent publier des œuvres.</small>
                        </div>
                        <div class=\"form-check mb-4\">
                            <input class=\"form-check-input\" type=\"checkbox\" value=\"1\" id=\"acceptTerms\" name=\"accept_terms\" {{ form.accept_terms ? 'checked' : '' }} required>
                            <label class=\"form-check-label\" for=\"acceptTerms\">
                                J'accepte les conditions d'utilisation de MuseHub.
                            </label>
                        </div>
                        <div class=\"d-grid mb-3\">
                            <button type=\"submit\" class=\"btn btn-primary\">Créer mon compte</button>
                        </div>
                        <p class=\"text-center text-muted mb-0\">
                            Déjà inscrit ? <a href=\"{{ path('login') }}\">Se connecter</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}


", "security/register.html.twig", "C:\\xampp\\htdocs\\MuseHub-my-work\\MuseHub-my-work\\templates\\security\\register.html.twig");
    }
}
