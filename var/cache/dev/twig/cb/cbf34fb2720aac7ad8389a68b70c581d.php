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

/* event_type/admin_form.html.twig */
class __TwigTemplate_f0bcd36f2631683ec3f857252fd15029 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event_type/admin_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event_type/admin_form.html.twig"));

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
        yield ((((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 4, $this->source); })()) == "new")) ? ("Nouveau type d'événement") : ("Modifier type d'événement"));
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_event_types_list");
        yield "\" class=\"btn btn-link text-decoration-none\">
        <i class=\"fas fa-arrow-left me-2\"></i>Retour
    </a>
    <div>
        <h1 class=\"h3 mb-0\">
            ";
        // line 14
        yield ((((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 14, $this->source); })()) == "new")) ? ("Créer un type d'événement") : ("Modifier un type d'événement"));
        yield "
        </h1>
        <p class=\"text-muted mb-0\">Définir les caractéristiques du type d'événement</p>
    </div>
</div>

";
        // line 20
        $context["formAction"] = ((((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 20, $this->source); })()) == "new")) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_event_types_new")) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_event_types_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source,         // line 22
(isset($context["eventType"]) || array_key_exists("eventType", $context) ? $context["eventType"] : (function () { throw new RuntimeError('Variable "eventType" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22)])));
        // line 24
        $context["csrfIntention"] = ((((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 24, $this->source); })()) == "new")) ? ("create_event_type") : (("edit_event_type_" . CoreExtension::getAttribute($this->env, $this->source,         // line 26
(isset($context["eventType"]) || array_key_exists("eventType", $context) ? $context["eventType"] : (function () { throw new RuntimeError('Variable "eventType" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26))));
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
            
            <!-- Informations de base -->
            <h5 class=\"mb-3\"><i class=\"fas fa-info-circle me-2\"></i>Informations de base</h5>
            <div class=\"row g-3 mb-4\">
                <div class=\"col-md-12\">
                    <label class=\"form-label\">Nom *</label>
                    <input type=\"text\" name=\"name\" class=\"form-control\" value=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["eventType"]) || array_key_exists("eventType", $context) ? $context["eventType"] : (function () { throw new RuntimeError('Variable "eventType" does not exist.', 39, $this->source); })()), "name", [], "any", false, false, false, 39), "html", null, true);
        yield "\" required placeholder=\"Ex: Workshop\">
                </div>
                <div class=\"col-12\">
                    <label class=\"form-label\">Description</label>
                    <textarea name=\"description\" rows=\"2\" class=\"form-control\" placeholder=\"Description du type d'événement\">";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["eventType"]) || array_key_exists("eventType", $context) ? $context["eventType"] : (function () { throw new RuntimeError('Variable "eventType" does not exist.', 43, $this->source); })()), "description", [], "any", false, false, false, 43), "html", null, true);
        yield "</textarea>
                </div>
            </div>

            <!-- Capacité -->
            <h5 class=\"mb-3\"><i class=\"fas fa-users me-2\"></i>Capacité et durée</h5>
            <div class=\"row g-3 mb-4\">
                <div class=\"col-md-4\">
                    <label class=\"form-label\">Type de capacité</label>
                    <select name=\"capacity_type\" class=\"form-select\" id=\"capacityType\">
                        <option value=\"unlimited\" ";
        // line 53
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["eventType"]) || array_key_exists("eventType", $context) ? $context["eventType"] : (function () { throw new RuntimeError('Variable "eventType" does not exist.', 53, $this->source); })()), "capacityType", [], "any", false, false, false, 53) == "unlimited")) ? ("selected") : (""));
        yield ">Illimitée</option>
                        <option value=\"limited\" ";
        // line 54
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["eventType"]) || array_key_exists("eventType", $context) ? $context["eventType"] : (function () { throw new RuntimeError('Variable "eventType" does not exist.', 54, $this->source); })()), "capacityType", [], "any", false, false, false, 54) == "limited")) ? ("selected") : (""));
        yield ">Limitée</option>
                        <option value=\"invite_only\" ";
        // line 55
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["eventType"]) || array_key_exists("eventType", $context) ? $context["eventType"] : (function () { throw new RuntimeError('Variable "eventType" does not exist.', 55, $this->source); })()), "capacityType", [], "any", false, false, false, 55) == "invite_only")) ? ("selected") : (""));
        yield ">Sur invitation</option>
                    </select>
                </div>
                <div class=\"col-md-4\">
                    <label class=\"form-label\">Max participants</label>
                    <input type=\"number\" name=\"default_max_participants\" class=\"form-control\" value=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["eventType"]) || array_key_exists("eventType", $context) ? $context["eventType"] : (function () { throw new RuntimeError('Variable "eventType" does not exist.', 60, $this->source); })()), "defaultMaxParticipants", [], "any", false, false, false, 60), "html", null, true);
        yield "\" min=\"1\" placeholder=\"Ex: 50\">
                    <small class=\"text-muted\">Si capacité limitée</small>
                </div>
                <div class=\"col-md-4\">
                    <label class=\"form-label\">Durée typique (heures)</label>
                    <input type=\"number\" name=\"typical_duration_hours\" class=\"form-control\" value=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["eventType"]) || array_key_exists("eventType", $context) ? $context["eventType"] : (function () { throw new RuntimeError('Variable "eventType" does not exist.', 65, $this->source); })()), "typicalDurationHours", [], "any", false, false, false, 65), "html", null, true);
        yield "\" min=\"1\" placeholder=\"Ex: 3\">
                </div>
            </div>

            <!-- Localisation -->
            <h5 class=\"mb-3\"><i class=\"fas fa-map-marker-alt me-2\"></i>Localisation et visibilité</h5>
            <div class=\"row g-3 mb-4\">
                <div class=\"col-md-6\">
                    <label class=\"form-label\">Localisation autorisée</label>
                    <select name=\"allowed_location\" class=\"form-select\">
                        <option value=\"both\" ";
        // line 75
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["eventType"]) || array_key_exists("eventType", $context) ? $context["eventType"] : (function () { throw new RuntimeError('Variable "eventType" does not exist.', 75, $this->source); })()), "allowedLocation", [], "any", false, false, false, 75) == "both")) ? ("selected") : (""));
        yield ">Online et Offline</option>
                        <option value=\"online\" ";
        // line 76
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["eventType"]) || array_key_exists("eventType", $context) ? $context["eventType"] : (function () { throw new RuntimeError('Variable "eventType" does not exist.', 76, $this->source); })()), "allowedLocation", [], "any", false, false, false, 76) == "online")) ? ("selected") : (""));
        yield ">Online uniquement</option>
                        <option value=\"offline\" ";
        // line 77
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["eventType"]) || array_key_exists("eventType", $context) ? $context["eventType"] : (function () { throw new RuntimeError('Variable "eventType" does not exist.', 77, $this->source); })()), "allowedLocation", [], "any", false, false, false, 77) == "offline")) ? ("selected") : (""));
        yield ">Offline uniquement</option>
                    </select>
                </div>
                <div class=\"col-md-6\">
                    <label class=\"form-label\">Visibilité</label>
                    <select name=\"visibility\" class=\"form-select\">
                        <option value=\"public\" ";
        // line 83
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["eventType"]) || array_key_exists("eventType", $context) ? $context["eventType"] : (function () { throw new RuntimeError('Variable "eventType" does not exist.', 83, $this->source); })()), "visibility", [], "any", false, false, false, 83) == "public")) ? ("selected") : (""));
        yield ">Public</option>
                        <option value=\"private\" ";
        // line 84
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["eventType"]) || array_key_exists("eventType", $context) ? $context["eventType"] : (function () { throw new RuntimeError('Variable "eventType" does not exist.', 84, $this->source); })()), "visibility", [], "any", false, false, false, 84) == "private")) ? ("selected") : (""));
        yield ">Privé</option>
                        <option value=\"members_only\" ";
        // line 85
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["eventType"]) || array_key_exists("eventType", $context) ? $context["eventType"] : (function () { throw new RuntimeError('Variable "eventType" does not exist.', 85, $this->source); })()), "visibility", [], "any", false, false, false, 85) == "members_only")) ? ("selected") : (""));
        yield ">Membres uniquement</option>
                    </select>
                </div>
            </div>

            <!-- Caractéristiques -->
            <h5 class=\"mb-3\"><i class=\"fas fa-cog me-2\"></i>Caractéristiques</h5>
            <div class=\"row g-3 mb-4\">
                <div class=\"col-md-4\">
                    <div class=\"form-check form-switch\">
                        <input class=\"form-check-input\" type=\"checkbox\" id=\"requiresPayment\" name=\"requires_payment\" value=\"1\" ";
        // line 95
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["eventType"]) || array_key_exists("eventType", $context) ? $context["eventType"] : (function () { throw new RuntimeError('Variable "eventType" does not exist.', 95, $this->source); })()), "requiresPayment", [], "any", false, false, false, 95)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
        yield ">
                        <label class=\"form-check-label\" for=\"requiresPayment\">
                            💰 Payant
                        </label>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"form-check form-switch\">
                        <input class=\"form-check-input\" type=\"checkbox\" id=\"certificateEnabled\" name=\"certificate_enabled\" value=\"1\" ";
        // line 103
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["eventType"]) || array_key_exists("eventType", $context) ? $context["eventType"] : (function () { throw new RuntimeError('Variable "eventType" does not exist.', 103, $this->source); })()), "certificateEnabled", [], "any", false, false, false, 103)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
        yield ">
                        <label class=\"form-check-label\" for=\"certificateEnabled\">
                            🎓 Certificat de participation
                        </label>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"form-check form-switch\">
                        <input class=\"form-check-input\" type=\"checkbox\" id=\"recordingEnabled\" name=\"recording_enabled\" value=\"1\" ";
        // line 111
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["eventType"]) || array_key_exists("eventType", $context) ? $context["eventType"] : (function () { throw new RuntimeError('Variable "eventType" does not exist.', 111, $this->source); })()), "recordingEnabled", [], "any", false, false, false, 111)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
        yield ">
                        <label class=\"form-check-label\" for=\"recordingEnabled\">
                            🎥 Enregistrement possible
                        </label>
                    </div>
                </div>
            </div>

            <!-- Paramètres -->
            <h5 class=\"mb-3\"><i class=\"fas fa-sliders-h me-2\"></i>Paramètres</h5>
            <div class=\"row g-3 mb-4\">
                <div class=\"col-md-6\">
                    <label class=\"form-label\">Ordre d'affichage</label>
                    <input type=\"number\" name=\"sort_order\" class=\"form-control\" value=\"";
        // line 124
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["eventType"] ?? null), "sortOrder", [], "any", true, true, false, 124) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["eventType"]) || array_key_exists("eventType", $context) ? $context["eventType"] : (function () { throw new RuntimeError('Variable "eventType" does not exist.', 124, $this->source); })()), "sortOrder", [], "any", false, false, false, 124)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["eventType"]) || array_key_exists("eventType", $context) ? $context["eventType"] : (function () { throw new RuntimeError('Variable "eventType" does not exist.', 124, $this->source); })()), "sortOrder", [], "any", false, false, false, 124), "html", null, true)) : (0));
        yield "\" min=\"0\">
                    <small class=\"text-muted\">Plus petit = affiché en premier</small>
                </div>
                <div class=\"col-md-6\">
                    <label class=\"form-label\">Statut</label>
                    <div class=\"form-check form-switch mt-2\">
                        <input class=\"form-check-input\" type=\"checkbox\" id=\"isActive\" name=\"is_active\" value=\"1\" ";
        // line 130
        yield (((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, ($context["eventType"] ?? null), "isActive", [], "any", true, true, false, 130) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["eventType"]) || array_key_exists("eventType", $context) ? $context["eventType"] : (function () { throw new RuntimeError('Variable "eventType" does not exist.', 130, $this->source); })()), "isActive", [], "any", false, false, false, 130)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["eventType"]) || array_key_exists("eventType", $context) ? $context["eventType"] : (function () { throw new RuntimeError('Variable "eventType" does not exist.', 130, $this->source); })()), "isActive", [], "any", false, false, false, 130)) : (true))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
        yield ">
                        <label class=\"form-check-label\" for=\"isActive\">Type actif</label>
                    </div>
                </div>
            </div>

            <div class=\"d-flex justify-content-end gap-3 mt-4\">
                <a href=\"";
        // line 137
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_event_types_list");
        yield "\" class=\"btn btn-outline-secondary\">Annuler</a>
                <button type=\"submit\" class=\"btn btn-primary\">
                    <i class=\"fas fa-save me-2\"></i>";
        // line 139
        yield ((((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 139, $this->source); })()) == "new")) ? ("Créer") : ("Mettre à jour"));
        yield "
                </button>
            </div>
        </form>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const capacityType = document.getElementById('capacityType');
    const maxParticipants = document.querySelector('input[name=\"default_max_participants\"]');
    
    function updateMaxParticipants() {
        if (capacityType.value === 'unlimited') {
            maxParticipants.disabled = true;
            maxParticipants.value = '';
        } else {
            maxParticipants.disabled = false;
        }
    }
    
    capacityType.addEventListener('change', updateMaxParticipants);
    updateMaxParticipants();
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
        return "event_type/admin_form.html.twig";
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
        return array (  306 => 139,  301 => 137,  291 => 130,  282 => 124,  266 => 111,  255 => 103,  244 => 95,  231 => 85,  227 => 84,  223 => 83,  214 => 77,  210 => 76,  206 => 75,  193 => 65,  185 => 60,  177 => 55,  173 => 54,  169 => 53,  156 => 43,  149 => 39,  139 => 32,  135 => 31,  130 => 28,  128 => 26,  127 => 24,  125 => 22,  124 => 20,  115 => 14,  107 => 9,  104 => 8,  91 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}
    {{ action == 'new' ? 'Nouveau type d\\'événement' : 'Modifier type d\\'événement' }} - MuseHub Admin
{% endblock %}

{% block body %}
<div class=\"mb-4 d-flex align-items-center gap-3\">
    <a href=\"{{ path('admin_event_types_list') }}\" class=\"btn btn-link text-decoration-none\">
        <i class=\"fas fa-arrow-left me-2\"></i>Retour
    </a>
    <div>
        <h1 class=\"h3 mb-0\">
            {{ action == 'new' ? 'Créer un type d\\'événement' : 'Modifier un type d\\'événement' }}
        </h1>
        <p class=\"text-muted mb-0\">Définir les caractéristiques du type d'événement</p>
    </div>
</div>

{% set formAction = action == 'new'
    ? path('admin_event_types_new')
    : path('admin_event_types_edit', {id: eventType.id})
%}
{% set csrfIntention = action == 'new'
    ? 'create_event_type'
    : 'edit_event_type_' ~ eventType.id
%}

<div class=\"card\" style=\"border-radius: 15px; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.1);\">
    <div class=\"card-body\">
        <form method=\"POST\" action=\"{{ formAction }}\">
            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token(csrfIntention) }}\">
            
            <!-- Informations de base -->
            <h5 class=\"mb-3\"><i class=\"fas fa-info-circle me-2\"></i>Informations de base</h5>
            <div class=\"row g-3 mb-4\">
                <div class=\"col-md-12\">
                    <label class=\"form-label\">Nom *</label>
                    <input type=\"text\" name=\"name\" class=\"form-control\" value=\"{{ eventType.name }}\" required placeholder=\"Ex: Workshop\">
                </div>
                <div class=\"col-12\">
                    <label class=\"form-label\">Description</label>
                    <textarea name=\"description\" rows=\"2\" class=\"form-control\" placeholder=\"Description du type d'événement\">{{ eventType.description }}</textarea>
                </div>
            </div>

            <!-- Capacité -->
            <h5 class=\"mb-3\"><i class=\"fas fa-users me-2\"></i>Capacité et durée</h5>
            <div class=\"row g-3 mb-4\">
                <div class=\"col-md-4\">
                    <label class=\"form-label\">Type de capacité</label>
                    <select name=\"capacity_type\" class=\"form-select\" id=\"capacityType\">
                        <option value=\"unlimited\" {{ eventType.capacityType == 'unlimited' ? 'selected' : '' }}>Illimitée</option>
                        <option value=\"limited\" {{ eventType.capacityType == 'limited' ? 'selected' : '' }}>Limitée</option>
                        <option value=\"invite_only\" {{ eventType.capacityType == 'invite_only' ? 'selected' : '' }}>Sur invitation</option>
                    </select>
                </div>
                <div class=\"col-md-4\">
                    <label class=\"form-label\">Max participants</label>
                    <input type=\"number\" name=\"default_max_participants\" class=\"form-control\" value=\"{{ eventType.defaultMaxParticipants }}\" min=\"1\" placeholder=\"Ex: 50\">
                    <small class=\"text-muted\">Si capacité limitée</small>
                </div>
                <div class=\"col-md-4\">
                    <label class=\"form-label\">Durée typique (heures)</label>
                    <input type=\"number\" name=\"typical_duration_hours\" class=\"form-control\" value=\"{{ eventType.typicalDurationHours }}\" min=\"1\" placeholder=\"Ex: 3\">
                </div>
            </div>

            <!-- Localisation -->
            <h5 class=\"mb-3\"><i class=\"fas fa-map-marker-alt me-2\"></i>Localisation et visibilité</h5>
            <div class=\"row g-3 mb-4\">
                <div class=\"col-md-6\">
                    <label class=\"form-label\">Localisation autorisée</label>
                    <select name=\"allowed_location\" class=\"form-select\">
                        <option value=\"both\" {{ eventType.allowedLocation == 'both' ? 'selected' : '' }}>Online et Offline</option>
                        <option value=\"online\" {{ eventType.allowedLocation == 'online' ? 'selected' : '' }}>Online uniquement</option>
                        <option value=\"offline\" {{ eventType.allowedLocation == 'offline' ? 'selected' : '' }}>Offline uniquement</option>
                    </select>
                </div>
                <div class=\"col-md-6\">
                    <label class=\"form-label\">Visibilité</label>
                    <select name=\"visibility\" class=\"form-select\">
                        <option value=\"public\" {{ eventType.visibility == 'public' ? 'selected' : '' }}>Public</option>
                        <option value=\"private\" {{ eventType.visibility == 'private' ? 'selected' : '' }}>Privé</option>
                        <option value=\"members_only\" {{ eventType.visibility == 'members_only' ? 'selected' : '' }}>Membres uniquement</option>
                    </select>
                </div>
            </div>

            <!-- Caractéristiques -->
            <h5 class=\"mb-3\"><i class=\"fas fa-cog me-2\"></i>Caractéristiques</h5>
            <div class=\"row g-3 mb-4\">
                <div class=\"col-md-4\">
                    <div class=\"form-check form-switch\">
                        <input class=\"form-check-input\" type=\"checkbox\" id=\"requiresPayment\" name=\"requires_payment\" value=\"1\" {{ eventType.requiresPayment ? 'checked' : '' }}>
                        <label class=\"form-check-label\" for=\"requiresPayment\">
                            💰 Payant
                        </label>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"form-check form-switch\">
                        <input class=\"form-check-input\" type=\"checkbox\" id=\"certificateEnabled\" name=\"certificate_enabled\" value=\"1\" {{ eventType.certificateEnabled ? 'checked' : '' }}>
                        <label class=\"form-check-label\" for=\"certificateEnabled\">
                            🎓 Certificat de participation
                        </label>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"form-check form-switch\">
                        <input class=\"form-check-input\" type=\"checkbox\" id=\"recordingEnabled\" name=\"recording_enabled\" value=\"1\" {{ eventType.recordingEnabled ? 'checked' : '' }}>
                        <label class=\"form-check-label\" for=\"recordingEnabled\">
                            🎥 Enregistrement possible
                        </label>
                    </div>
                </div>
            </div>

            <!-- Paramètres -->
            <h5 class=\"mb-3\"><i class=\"fas fa-sliders-h me-2\"></i>Paramètres</h5>
            <div class=\"row g-3 mb-4\">
                <div class=\"col-md-6\">
                    <label class=\"form-label\">Ordre d'affichage</label>
                    <input type=\"number\" name=\"sort_order\" class=\"form-control\" value=\"{{ eventType.sortOrder ?? 0 }}\" min=\"0\">
                    <small class=\"text-muted\">Plus petit = affiché en premier</small>
                </div>
                <div class=\"col-md-6\">
                    <label class=\"form-label\">Statut</label>
                    <div class=\"form-check form-switch mt-2\">
                        <input class=\"form-check-input\" type=\"checkbox\" id=\"isActive\" name=\"is_active\" value=\"1\" {{ eventType.isActive ?? true ? 'checked' : '' }}>
                        <label class=\"form-check-label\" for=\"isActive\">Type actif</label>
                    </div>
                </div>
            </div>

            <div class=\"d-flex justify-content-end gap-3 mt-4\">
                <a href=\"{{ path('admin_event_types_list') }}\" class=\"btn btn-outline-secondary\">Annuler</a>
                <button type=\"submit\" class=\"btn btn-primary\">
                    <i class=\"fas fa-save me-2\"></i>{{ action == 'new' ? 'Créer' : 'Mettre à jour' }}
                </button>
            </div>
        </form>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const capacityType = document.getElementById('capacityType');
    const maxParticipants = document.querySelector('input[name=\"default_max_participants\"]');
    
    function updateMaxParticipants() {
        if (capacityType.value === 'unlimited') {
            maxParticipants.disabled = true;
            maxParticipants.value = '';
        } else {
            maxParticipants.disabled = false;
        }
    }
    
    capacityType.addEventListener('change', updateMaxParticipants);
    updateMaxParticipants();
});
</script>
{% endblock %}", "event_type/admin_form.html.twig", "C:\\xampp\\htdocs\\MuseHub-my-work\\MuseHub-my-work\\templates\\event_type\\admin_form.html.twig");
    }
}
