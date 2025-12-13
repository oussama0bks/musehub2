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

/* marketplace/admin_listing_form.html.twig */
class __TwigTemplate_bff3e08002bd38feacaae96fd262bf15 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/admin_listing_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/admin_listing_form.html.twig"));

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
        yield ((((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 4, $this->source); })()) == "new")) ? ("Nouvelle annonce") : ("Modifier annonce"));
        yield " - Marketplace
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_marketplace_list");
        yield "\" class=\"btn btn-link text-decoration-none\">
        <i class=\"fas fa-arrow-left me-2\"></i>Retour
    </a>
    <div>
        <h1 class=\"h3 mb-0\">
            ";
        // line 14
        yield ((((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 14, $this->source); })()) == "new")) ? ("Créer une annonce") : ("Modifier une annonce"));
        yield "
        </h1>
        <p class=\"text-muted mb-0\">Publier des offres marketplace ou corriger leurs informations</p>
    </div>
</div>

";
        // line 20
        $context["formAction"] = ((((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 20, $this->source); })()) == "new")) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_marketplace_listing_new")) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_marketplace_listing_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source,         // line 22
(isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new RuntimeError('Variable "listing" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22)])));
        // line 24
        $context["csrfIntention"] = ((((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 24, $this->source); })()) == "new")) ? ("create_listing_admin") : (("edit_listing_" . CoreExtension::getAttribute($this->env, $this->source,         // line 26
(isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new RuntimeError('Variable "listing" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26))));
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
                    <label class=\"form-label\">Artwork UUID *</label>
                    <input type=\"text\" name=\"artwork_uuid\" class=\"form-control\" value=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new RuntimeError('Variable "listing" does not exist.', 36, $this->source); })()), "artworkUuid", [], "any", false, false, false, 36), "html", null, true);
        yield "\" required>
                    <small class=\"text-muted\">Associer l'annonce à l'œuvre (uuid artiste + id œuvre).</small>
                    <div class=\"text-danger small mt-1\">
                        L'UUID doit être au format UUID valide (ex: 550e8400-e29b-41d4-a716-446655440000)
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label\">Prix (€) *</label>
                    <input type=\"number\" step=\"0.01\" min=\"0\" name=\"price\" class=\"form-control\" value=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new RuntimeError('Variable "listing" does not exist.', 44, $this->source); })()), "price", [], "any", false, false, false, 44), "html", null, true);
        yield "\" required>
                    <div class=\"text-danger small mt-1\">
                        Le prix doit être positif (format: 99.99)
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label\">Stock</label>
                    <input type=\"number\" min=\"0\" name=\"stock\" class=\"form-control\" value=\"";
        // line 51
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["listing"] ?? null), "stock", [], "any", true, true, false, 51) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new RuntimeError('Variable "listing" does not exist.', 51, $this->source); })()), "stock", [], "any", false, false, false, 51)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new RuntimeError('Variable "listing" does not exist.', 51, $this->source); })()), "stock", [], "any", false, false, false, 51), "html", null, true)) : (1));
        yield "\">
                    <div class=\"text-danger small mt-1\">
                        Le stock ne peut pas être négatif
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <label class=\"form-label\">Statut</label>
                    <select name=\"status\" class=\"form-select\">
                        ";
        // line 59
        $context["statuses"] = ["available" => "Disponible", "paused" => "En pause", "sold_out" => "Épuisé"];
        // line 60
        yield "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statuses"]) || array_key_exists("statuses", $context) ? $context["statuses"] : (function () { throw new RuntimeError('Variable "statuses" does not exist.', 60, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["label"]) {
            // line 61
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new RuntimeError('Variable "listing" does not exist.', 61, $this->source); })()), "status", [], "any", false, false, false, 61) == $context["key"])) ? ("selected") : (""));
            yield ">
                                ";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield "
                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['label'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        yield "                    </select>
                    <div class=\"text-danger small mt-1\">
                        Le statut doit être: available, paused ou sold_out
                    </div>
                </div>
            </div>
            <div class=\"d-flex justify-content-end gap-3 mt-4\">
                <a href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_marketplace_list");
        yield "\" class=\"btn btn-outline-secondary\">Annuler</a>
                <button type=\"submit\" class=\"btn btn-primary\">
                    ";
        // line 74
        yield ((((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 74, $this->source); })()) == "new")) ? ("Créer") : ("Mettre à jour"));
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
        return "marketplace/admin_listing_form.html.twig";
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
        return array (  215 => 74,  210 => 72,  201 => 65,  192 => 62,  185 => 61,  180 => 60,  178 => 59,  167 => 51,  157 => 44,  146 => 36,  139 => 32,  135 => 31,  130 => 28,  128 => 26,  127 => 24,  125 => 22,  124 => 20,  115 => 14,  107 => 9,  104 => 8,  91 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}
    {{ action == 'new' ? 'Nouvelle annonce' : 'Modifier annonce' }} - Marketplace
{% endblock %}

{% block body %}
<div class=\"mb-4 d-flex align-items-center gap-3\">
    <a href=\"{{ path('admin_marketplace_list') }}\" class=\"btn btn-link text-decoration-none\">
        <i class=\"fas fa-arrow-left me-2\"></i>Retour
    </a>
    <div>
        <h1 class=\"h3 mb-0\">
            {{ action == 'new' ? 'Créer une annonce' : 'Modifier une annonce' }}
        </h1>
        <p class=\"text-muted mb-0\">Publier des offres marketplace ou corriger leurs informations</p>
    </div>
</div>

{% set formAction = action == 'new'
    ? path('admin_marketplace_listing_new')
    : path('admin_marketplace_listing_edit', {id: listing.id})
%}
{% set csrfIntention = action == 'new'
    ? 'create_listing_admin'
    : 'edit_listing_' ~ listing.id
%}

<div class=\"card\" style=\"border-radius: 15px; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.1);\">
    <div class=\"card-body\">
        <form method=\"POST\" action=\"{{ formAction }}\">
            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token(csrfIntention) }}\">
            <div class=\"row g-4\">
                <div class=\"col-md-6\">
                    <label class=\"form-label\">Artwork UUID *</label>
                    <input type=\"text\" name=\"artwork_uuid\" class=\"form-control\" value=\"{{ listing.artworkUuid }}\" required>
                    <small class=\"text-muted\">Associer l'annonce à l'œuvre (uuid artiste + id œuvre).</small>
                    <div class=\"text-danger small mt-1\">
                        L'UUID doit être au format UUID valide (ex: 550e8400-e29b-41d4-a716-446655440000)
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label\">Prix (€) *</label>
                    <input type=\"number\" step=\"0.01\" min=\"0\" name=\"price\" class=\"form-control\" value=\"{{ listing.price }}\" required>
                    <div class=\"text-danger small mt-1\">
                        Le prix doit être positif (format: 99.99)
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label\">Stock</label>
                    <input type=\"number\" min=\"0\" name=\"stock\" class=\"form-control\" value=\"{{ listing.stock ?? 1 }}\">
                    <div class=\"text-danger small mt-1\">
                        Le stock ne peut pas être négatif
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <label class=\"form-label\">Statut</label>
                    <select name=\"status\" class=\"form-select\">
                        {% set statuses = {'available': 'Disponible', 'paused': 'En pause', 'sold_out': 'Épuisé'} %}
                        {% for key, label in statuses %}
                            <option value=\"{{ key }}\" {{ listing.status == key ? 'selected' : '' }}>
                                {{ label }}
                            </option>
                        {% endfor %}
                    </select>
                    <div class=\"text-danger small mt-1\">
                        Le statut doit être: available, paused ou sold_out
                    </div>
                </div>
            </div>
            <div class=\"d-flex justify-content-end gap-3 mt-4\">
                <a href=\"{{ path('admin_marketplace_list') }}\" class=\"btn btn-outline-secondary\">Annuler</a>
                <button type=\"submit\" class=\"btn btn-primary\">
                    {{ action == 'new' ? 'Créer' : 'Mettre à jour' }}
                </button>
            </div>
        </form>
    </div>
</div>
{% endblock %}


", "marketplace/admin_listing_form.html.twig", "C:\\xampp\\htdocs\\MuseHub-my-work\\MuseHub-my-work\\templates\\marketplace\\admin_listing_form.html.twig");
    }
}
