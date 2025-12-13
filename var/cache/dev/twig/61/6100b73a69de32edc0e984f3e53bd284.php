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

/* front/marketplace_offer.html.twig */
class __TwigTemplate_299851236a26b70b2d8565cc003f7a1f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/marketplace_offer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/marketplace_offer.html.twig"));

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

        yield "Offre #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new RuntimeError('Variable "listing" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        yield " - Marketplace";
        
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
    <a href=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace");
        yield "\" class=\"btn btn-link mb-4\">
        <i class=\"fas fa-arrow-left me-2\"></i>Retour à la marketplace
    </a>

    <div class=\"row g-4\">
        <div class=\"col-lg-8\">
            <div class=\"card h-100\">
                <div class=\"card-body\">
                    <span class=\"badge bg-secondary mb-3\">Offre #";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new RuntimeError('Variable "listing" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15), "html", null, true);
        yield "</span>
                    <h1 class=\"h3 mb-3\">Détails de l'offre</h1>
                    <p class=\"text-muted mb-4\">
                        UUID œuvre : <code>";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new RuntimeError('Variable "listing" does not exist.', 18, $this->source); })()), "artworkUuid", [], "any", false, false, false, 18), "html", null, true);
        yield "</code><br>
                        Publiée le ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new RuntimeError('Variable "listing" does not exist.', 19, $this->source); })()), "createdAt", [], "any", false, false, false, 19), "d/m/Y à H:i"), "html", null, true);
        yield "
                    </p>
                    <div class=\"d-flex align-items-baseline gap-3 mb-3\">
                        <span class=\"display-5 text-primary fw-bold\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new RuntimeError('Variable "listing" does not exist.', 22, $this->source); })()), "price", [], "any", false, false, false, 22), "html", null, true);
        yield " €</span>
                        ";
        // line 23
        $context["badge"] = (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new RuntimeError('Variable "listing" does not exist.', 23, $this->source); })()), "status", [], "any", false, false, false, 23) == "available")) ? ("success") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new RuntimeError('Variable "listing" does not exist.', 23, $this->source); })()), "status", [], "any", false, false, false, 23) == "paused")) ? ("warning") : ("danger"))));
        // line 24
        yield "                        <span class=\"badge bg-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["badge"]) || array_key_exists("badge", $context) ? $context["badge"] : (function () { throw new RuntimeError('Variable "badge" does not exist.', 24, $this->source); })()), "html", null, true);
        yield "\">
                            ";
        // line 25
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new RuntimeError('Variable "listing" does not exist.', 25, $this->source); })()), "status", [], "any", false, false, false, 25) == "available")) ? ("Disponible") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new RuntimeError('Variable "listing" does not exist.', 25, $this->source); })()), "status", [], "any", false, false, false, 25) == "paused")) ? ("En pause") : ("Épuisé"))));
        yield "
                        </span>
                    </div>
                    <p class=\"lead\">
                        ";
        // line 29
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new RuntimeError('Variable "listing" does not exist.', 29, $this->source); })()), "stock", [], "any", false, false, false, 29) > 0)) {
            // line 30
            yield "                            <strong>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new RuntimeError('Variable "listing" does not exist.', 30, $this->source); })()), "stock", [], "any", false, false, false, 30), "html", null, true);
            yield "</strong> pièce(s) restantes.
                        ";
        } else {
            // line 32
            yield "                            Stock non communiqué.
                        ";
        }
        // line 34
        yield "                    </p>
                    <p class=\"text-muted\">
                        Cette page vous permet de consulter toutes les informations publiques de l'offre.
                        Pour finaliser l'achat, utilisez le bouton ci-dessous; si vous n'êtes pas connecté, vous serez redirigé vers la page de connexion.
                    </p>
                </div>
            </div>
        </div>
        <div class=\"col-lg-4\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Passer commande</h5>
                    ";
        // line 46
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new RuntimeError('Variable "listing" does not exist.', 46, $this->source); })()), "status", [], "any", false, false, false, 46) != "available")) {
            // line 47
            yield "                        <div class=\"alert alert-warning\">
                            Cette offre n'est pas disponible pour le moment.
                        </div>
                    ";
        } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,         // line 50
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 51
            yield "                        <p class=\"text-muted\">Connecté en tant que ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "email", [], "any", false, false, false, 51), "html", null, true);
            yield "</p>
                        <a href=\"";
            // line 52
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace");
            yield "#listing-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new RuntimeError('Variable "listing" does not exist.', 52, $this->source); })()), "id", [], "any", false, false, false, 52), "html", null, true);
            yield "\" class=\"btn btn-primary w-100\">
                            <i class=\"fas fa-shopping-cart me-2\"></i>Commander depuis la liste
                        </a>
                    ";
        } else {
            // line 56
            yield "                        <p class=\"text-muted\">Connectez-vous pour acheter cette œuvre.</p>
                        <a href=\"";
            // line 57
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            yield "\" class=\"btn btn-outline-primary w-100\">
                            Se connecter
                        </a>
                    ";
        }
        // line 61
        yield "                </div>
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
        return "front/marketplace_offer.html.twig";
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
        return array (  209 => 61,  202 => 57,  199 => 56,  190 => 52,  185 => 51,  183 => 50,  178 => 47,  176 => 46,  162 => 34,  158 => 32,  152 => 30,  150 => 29,  143 => 25,  138 => 24,  136 => 23,  132 => 22,  126 => 19,  122 => 18,  116 => 15,  105 => 7,  102 => 6,  89 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block title %}Offre #{{ listing.id }} - Marketplace{% endblock %}

{% block body %}
<div class=\"container my-5\">
    <a href=\"{{ path('marketplace') }}\" class=\"btn btn-link mb-4\">
        <i class=\"fas fa-arrow-left me-2\"></i>Retour à la marketplace
    </a>

    <div class=\"row g-4\">
        <div class=\"col-lg-8\">
            <div class=\"card h-100\">
                <div class=\"card-body\">
                    <span class=\"badge bg-secondary mb-3\">Offre #{{ listing.id }}</span>
                    <h1 class=\"h3 mb-3\">Détails de l'offre</h1>
                    <p class=\"text-muted mb-4\">
                        UUID œuvre : <code>{{ listing.artworkUuid }}</code><br>
                        Publiée le {{ listing.createdAt|date('d/m/Y à H:i') }}
                    </p>
                    <div class=\"d-flex align-items-baseline gap-3 mb-3\">
                        <span class=\"display-5 text-primary fw-bold\">{{ listing.price }} €</span>
                        {% set badge = listing.status == 'available' ? 'success' : (listing.status == 'paused' ? 'warning' : 'danger') %}
                        <span class=\"badge bg-{{ badge }}\">
                            {{ listing.status == 'available' ? 'Disponible' : (listing.status == 'paused' ? 'En pause' : 'Épuisé') }}
                        </span>
                    </div>
                    <p class=\"lead\">
                        {% if listing.stock > 0 %}
                            <strong>{{ listing.stock }}</strong> pièce(s) restantes.
                        {% else %}
                            Stock non communiqué.
                        {% endif %}
                    </p>
                    <p class=\"text-muted\">
                        Cette page vous permet de consulter toutes les informations publiques de l'offre.
                        Pour finaliser l'achat, utilisez le bouton ci-dessous; si vous n'êtes pas connecté, vous serez redirigé vers la page de connexion.
                    </p>
                </div>
            </div>
        </div>
        <div class=\"col-lg-4\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Passer commande</h5>
                    {% if listing.status != 'available' %}
                        <div class=\"alert alert-warning\">
                            Cette offre n'est pas disponible pour le moment.
                        </div>
                    {% elseif app.user %}
                        <p class=\"text-muted\">Connecté en tant que {{ app.user.email }}</p>
                        <a href=\"{{ path('marketplace') }}#listing-{{ listing.id }}\" class=\"btn btn-primary w-100\">
                            <i class=\"fas fa-shopping-cart me-2\"></i>Commander depuis la liste
                        </a>
                    {% else %}
                        <p class=\"text-muted\">Connectez-vous pour acheter cette œuvre.</p>
                        <a href=\"{{ path('login') }}\" class=\"btn btn-outline-primary w-100\">
                            Se connecter
                        </a>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}


", "front/marketplace_offer.html.twig", "C:\\xampp\\htdocs\\MuseHub-my-work\\MuseHub-my-work\\templates\\front\\marketplace_offer.html.twig");
    }
}
