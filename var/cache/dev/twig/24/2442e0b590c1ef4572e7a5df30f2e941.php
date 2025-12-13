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

/* event/admin_form.html.twig */
class __TwigTemplate_480cda93cdc39dc92d5ea0e1436e125a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/admin_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/admin_form.html.twig"));

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
        yield ((((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 4, $this->source); })()) == "new")) ? ("Nouvel événement") : ("Modifier événement"));
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_events_list");
        yield "\" class=\"btn btn-link text-decoration-none\">
        <i class=\"fas fa-arrow-left me-2\"></i>Retour
    </a>
    <div>
        <h1 class=\"h3 mb-0\">
            ";
        // line 14
        yield ((((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 14, $this->source); })()) == "new")) ? ("Créer un événement") : ("Modifier un événement"));
        yield "
        </h1>
        <p class=\"text-muted mb-0\">Planifier et publier les événements de MuseHub</p>
    </div>
</div>

";
        // line 20
        $context["formAction"] = ((((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 20, $this->source); })()) == "new")) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_events_new")) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_events_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source,         // line 22
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22)])));
        // line 24
        $context["csrfIntention"] = ((((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 24, $this->source); })()) == "new")) ? ("create_event") : (("edit_event_" . CoreExtension::getAttribute($this->env, $this->source,         // line 26
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26))));
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
                    <label class=\"form-label\">Titre *</label>
                    <input type=\"text\" name=\"title\" class=\"form-control\" value=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 36, $this->source); })()), "title", [], "any", false, false, false, 36), "html", null, true);
        yield "\" required>
                </div>
                <div class=\"col-md-6\">
                    <label class=\"form-label\">Date & heure *</label>
                    <input type=\"datetime-local\" name=\"date_time\"
                        id=\"eventDateTime\"
                        class=\"form-control\"
                        value=\"";
        // line 43
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 43, $this->source); })()), "dateTime", [], "any", false, false, false, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 43, $this->source); })()), "dateTime", [], "any", false, false, false, 43), "Y-m-d\\TH:i"), "html", null, true)) : (""));
        yield "\"
                        required>
                </div>
                <div class=\"col-12\">
                    <label class=\"form-label\">Type d'événement</label>
                    <select name=\"event_type_id\" class=\"form-select\" id=\"eventTypeSelect\">
                        <option value=\"\">-- Aucun type --</option>
                        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["eventTypes"]) || array_key_exists("eventTypes", $context) ? $context["eventTypes"] : (function () { throw new RuntimeError('Variable "eventTypes" does not exist.', 50, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 51
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 51), "html", null, true);
            yield "\" 
                                    ";
            // line 52
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 52, $this->source); })()), "eventType", [], "any", false, false, false, 52) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 52, $this->source); })()), "eventType", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52) == CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 52)))) ? ("selected") : (""));
            yield "
                                    data-description=\"";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "description", [], "any", false, false, false, 53), "html", null, true);
            yield "\">
                                ";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "name", [], "any", false, false, false, 54), "html", null, true);
            yield "
                                ";
            // line 55
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["type"], "requiresPayment", [], "any", false, false, false, 55)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "💰";
            }
            // line 56
            yield "                                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["type"], "certificateEnabled", [], "any", false, false, false, 56)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "🎓";
            }
            // line 57
            yield "                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['type'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        yield "                    </select>
                    <small class=\"text-muted\" id=\"typeDescription\"></small>
                </div>
                <div class=\"col-12\">
                    <label class=\"form-label\">Description</label>
                    <textarea name=\"description\" rows=\"4\" class=\"form-control\">";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 64, $this->source); })()), "description", [], "any", false, false, false, 64), "html", null, true);
        yield "</textarea>
                </div>
                <div class=\"col-md-4\">
                    <label class=\"form-label\">Lieu</label>
                    <select name=\"location\" class=\"form-select\">
                        <option value=\"online\" ";
        // line 69
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 69, $this->source); })()), "location", [], "any", false, false, false, 69) == "online")) ? ("selected") : (""));
        yield ">En ligne</option>
                        <option value=\"offline\" ";
        // line 70
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 70, $this->source); })()), "location", [], "any", false, false, false, 70) == "offline")) ? ("selected") : (""));
        yield ">Présentiel</option>
                    </select>
                </div>
                <div class=\"col-md-4\">
                    <label class=\"form-label\">Organisateur (UUID)</label>
                    ";
        // line 75
        $context["defaultOrganiser"] = (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 75, $this->source); })()), "organiserUuid", [], "any", false, false, false, 75))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 75, $this->source); })()), "organiserUuid", [], "any", false, false, false, 75)) : ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "user", [], "any", false, false, false, 75)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "user", [], "any", false, false, false, 75), "uuid", [], "any", false, false, false, 75)) : (""))));
        // line 76
        yield "                    <input type=\"text\" name=\"organiser_uuid\" class=\"form-control\"
                        value=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["defaultOrganiser"]) || array_key_exists("defaultOrganiser", $context) ? $context["defaultOrganiser"] : (function () { throw new RuntimeError('Variable "defaultOrganiser" does not exist.', 77, $this->source); })()), "html", null, true);
        yield "\">
                    <small class=\"text-muted\">Par défaut : votre UUID admin.</small>
                </div>
                <div class=\"col-md-4\">
                    <label class=\"form-label\">Statut</label>
                    <div class=\"form-check form-switch mt-2\">
                        <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"isActiveEvent\" name=\"is_active\" value=\"1\" ";
        // line 83
        yield (((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "isActive", [], "any", true, true, false, 83) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 83, $this->source); })()), "isActive", [], "any", false, false, false, 83)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 83, $this->source); })()), "isActive", [], "any", false, false, false, 83)) : (true))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
        yield ">
                        <label class=\"form-check-label\" for=\"isActiveEvent\">Événement actif</label>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <label class=\"form-label\">Latitude <i class=\"fas fa-map-marker-alt text-muted\"></i></label>
                    <input type=\"number\" name=\"latitude\" class=\"form-control\" 
                        value=\"";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 90, $this->source); })()), "latitude", [], "any", false, false, false, 90), "html", null, true);
        yield "\" 
                        step=\"0.000001\" 
                        placeholder=\"Ex: 48.8566\">
                    <small class=\"text-muted\">Coordonnée GPS latitude (ex: 48.8566 pour Paris)</small>
                </div>
                <div class=\"col-md-6\">
                    <label class=\"form-label\">Longitude <i class=\"fas fa-globe text-muted\"></i></label>
                    <input type=\"number\" name=\"longitude\" class=\"form-control\" 
                        value=\"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 98, $this->source); })()), "longitude", [], "any", false, false, false, 98), "html", null, true);
        yield "\" 
                        step=\"0.000001\" 
                        placeholder=\"Ex: 2.3522\">
                    <small class=\"text-muted\">Coordonnée GPS longitude (ex: 2.3522 pour Paris)</small>
                </div>
            </div>
            <div class=\"d-flex justify-content-end gap-3 mt-4\">
                <a href=\"";
        // line 105
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_events_list");
        yield "\" class=\"btn btn-outline-secondary\">Annuler</a>
                <button type=\"submit\" class=\"btn btn-primary\">
                    ";
        // line 107
        yield ((((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 107, $this->source); })()) == "new")) ? ("Créer") : ("Mettre à jour"));
        yield "
                </button>
            </div>
        </form>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const eventTypeSelect = document.getElementById('eventTypeSelect');
    const typeDescription = document.getElementById('typeDescription');
    const eventDateTime = document.getElementById('eventDateTime');
    
    // Définir la date/heure minimum (maintenant)
    const now = new Date();
    now.setMinutes(now.getMinutes() - now.getTimezoneOffset()); // Ajuster pour le fuseau horaire
    const minDateTime = now.toISOString().slice(0, 16); // Format: YYYY-MM-DDTHH:mm
    eventDateTime.setAttribute('min', minDateTime);
    
    // Ajouter une validation lors de la soumission
    eventDateTime.addEventListener('change', function() {
        const selectedDate = new Date(this.value);
        const currentDate = new Date();
        
        if (selectedDate < currentDate) {
            alert('⚠️ Veuillez choisir une date future. Les dates passées ne sont pas autorisées.');
            this.value = '';
        }
    });
    
    function updateTypeDescription() {
        const selectedOption = eventTypeSelect.options[eventTypeSelect.selectedIndex];
        if (selectedOption.value && selectedOption.dataset.description) {
            typeDescription.textContent = selectedOption.dataset.description;
            typeDescription.style.color = selectedOption.dataset.color || '#6b7280';
        } else {
            typeDescription.textContent = '';
        }
    }
    
    eventTypeSelect.addEventListener('change', updateTypeDescription);
    updateTypeDescription();
});
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
        return "event/admin_form.html.twig";
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
        return array (  280 => 107,  275 => 105,  265 => 98,  254 => 90,  244 => 83,  235 => 77,  232 => 76,  230 => 75,  222 => 70,  218 => 69,  210 => 64,  203 => 59,  196 => 57,  191 => 56,  187 => 55,  183 => 54,  179 => 53,  175 => 52,  170 => 51,  166 => 50,  156 => 43,  146 => 36,  139 => 32,  135 => 31,  130 => 28,  128 => 26,  127 => 24,  125 => 22,  124 => 20,  115 => 14,  107 => 9,  104 => 8,  91 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}
    {{ action == 'new' ? 'Nouvel événement' : 'Modifier événement' }} - MuseHub Admin
{% endblock %}

{% block body %}
<div class=\"mb-4 d-flex align-items-center gap-3\">
    <a href=\"{{ path('admin_events_list') }}\" class=\"btn btn-link text-decoration-none\">
        <i class=\"fas fa-arrow-left me-2\"></i>Retour
    </a>
    <div>
        <h1 class=\"h3 mb-0\">
            {{ action == 'new' ? 'Créer un événement' : 'Modifier un événement' }}
        </h1>
        <p class=\"text-muted mb-0\">Planifier et publier les événements de MuseHub</p>
    </div>
</div>

{% set formAction = action == 'new'
    ? path('admin_events_new')
    : path('admin_events_edit', {id: event.id})
%}
{% set csrfIntention = action == 'new'
    ? 'create_event'
    : 'edit_event_' ~ event.id
%}

<div class=\"card\" style=\"border-radius: 15px; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.1);\">
    <div class=\"card-body\">
        <form method=\"POST\" action=\"{{ formAction }}\">
            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token(csrfIntention) }}\">
            <div class=\"row g-4\">
                <div class=\"col-md-6\">
                    <label class=\"form-label\">Titre *</label>
                    <input type=\"text\" name=\"title\" class=\"form-control\" value=\"{{ event.title }}\" required>
                </div>
                <div class=\"col-md-6\">
                    <label class=\"form-label\">Date & heure *</label>
                    <input type=\"datetime-local\" name=\"date_time\"
                        id=\"eventDateTime\"
                        class=\"form-control\"
                        value=\"{{ event.dateTime ? event.dateTime|date('Y-m-d\\\\TH:i') : '' }}\"
                        required>
                </div>
                <div class=\"col-12\">
                    <label class=\"form-label\">Type d'événement</label>
                    <select name=\"event_type_id\" class=\"form-select\" id=\"eventTypeSelect\">
                        <option value=\"\">-- Aucun type --</option>
                        {% for type in eventTypes %}
                            <option value=\"{{ type.id }}\" 
                                    {{ event.eventType and event.eventType.id == type.id ? 'selected' : '' }}
                                    data-description=\"{{ type.description }}\">
                                {{ type.name }}
                                {% if type.requiresPayment %}💰{% endif %}
                                {% if type.certificateEnabled %}🎓{% endif %}
                            </option>
                        {% endfor %}
                    </select>
                    <small class=\"text-muted\" id=\"typeDescription\"></small>
                </div>
                <div class=\"col-12\">
                    <label class=\"form-label\">Description</label>
                    <textarea name=\"description\" rows=\"4\" class=\"form-control\">{{ event.description }}</textarea>
                </div>
                <div class=\"col-md-4\">
                    <label class=\"form-label\">Lieu</label>
                    <select name=\"location\" class=\"form-select\">
                        <option value=\"online\" {{ event.location == 'online' ? 'selected' : '' }}>En ligne</option>
                        <option value=\"offline\" {{ event.location == 'offline' ? 'selected' : '' }}>Présentiel</option>
                    </select>
                </div>
                <div class=\"col-md-4\">
                    <label class=\"form-label\">Organisateur (UUID)</label>
                    {% set defaultOrganiser = event.organiserUuid is not null ? event.organiserUuid : (app.user ? app.user.uuid : '') %}
                    <input type=\"text\" name=\"organiser_uuid\" class=\"form-control\"
                        value=\"{{ defaultOrganiser }}\">
                    <small class=\"text-muted\">Par défaut : votre UUID admin.</small>
                </div>
                <div class=\"col-md-4\">
                    <label class=\"form-label\">Statut</label>
                    <div class=\"form-check form-switch mt-2\">
                        <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"isActiveEvent\" name=\"is_active\" value=\"1\" {{ event.isActive ?? true ? 'checked' : '' }}>
                        <label class=\"form-check-label\" for=\"isActiveEvent\">Événement actif</label>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <label class=\"form-label\">Latitude <i class=\"fas fa-map-marker-alt text-muted\"></i></label>
                    <input type=\"number\" name=\"latitude\" class=\"form-control\" 
                        value=\"{{ event.latitude }}\" 
                        step=\"0.000001\" 
                        placeholder=\"Ex: 48.8566\">
                    <small class=\"text-muted\">Coordonnée GPS latitude (ex: 48.8566 pour Paris)</small>
                </div>
                <div class=\"col-md-6\">
                    <label class=\"form-label\">Longitude <i class=\"fas fa-globe text-muted\"></i></label>
                    <input type=\"number\" name=\"longitude\" class=\"form-control\" 
                        value=\"{{ event.longitude }}\" 
                        step=\"0.000001\" 
                        placeholder=\"Ex: 2.3522\">
                    <small class=\"text-muted\">Coordonnée GPS longitude (ex: 2.3522 pour Paris)</small>
                </div>
            </div>
            <div class=\"d-flex justify-content-end gap-3 mt-4\">
                <a href=\"{{ path('admin_events_list') }}\" class=\"btn btn-outline-secondary\">Annuler</a>
                <button type=\"submit\" class=\"btn btn-primary\">
                    {{ action == 'new' ? 'Créer' : 'Mettre à jour' }}
                </button>
            </div>
        </form>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const eventTypeSelect = document.getElementById('eventTypeSelect');
    const typeDescription = document.getElementById('typeDescription');
    const eventDateTime = document.getElementById('eventDateTime');
    
    // Définir la date/heure minimum (maintenant)
    const now = new Date();
    now.setMinutes(now.getMinutes() - now.getTimezoneOffset()); // Ajuster pour le fuseau horaire
    const minDateTime = now.toISOString().slice(0, 16); // Format: YYYY-MM-DDTHH:mm
    eventDateTime.setAttribute('min', minDateTime);
    
    // Ajouter une validation lors de la soumission
    eventDateTime.addEventListener('change', function() {
        const selectedDate = new Date(this.value);
        const currentDate = new Date();
        
        if (selectedDate < currentDate) {
            alert('⚠️ Veuillez choisir une date future. Les dates passées ne sont pas autorisées.');
            this.value = '';
        }
    });
    
    function updateTypeDescription() {
        const selectedOption = eventTypeSelect.options[eventTypeSelect.selectedIndex];
        if (selectedOption.value && selectedOption.dataset.description) {
            typeDescription.textContent = selectedOption.dataset.description;
            typeDescription.style.color = selectedOption.dataset.color || '#6b7280';
        } else {
            typeDescription.textContent = '';
        }
    }
    
    eventTypeSelect.addEventListener('change', updateTypeDescription);
    updateTypeDescription();
});
</script>
{% endblock %}", "event/admin_form.html.twig", "C:\\xampp\\htdocs\\MuseHub-my-work\\MuseHub-my-work\\templates\\event\\admin_form.html.twig");
    }
}
