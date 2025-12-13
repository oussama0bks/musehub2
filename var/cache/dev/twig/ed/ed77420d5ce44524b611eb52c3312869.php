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

/* event/admin_participants.html.twig */
class __TwigTemplate_3e693b568fed630c6e29fe13885a13fe extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/admin_participants.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/admin_participants.html.twig"));

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

        yield "Participants - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        
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
        yield "<div class=\"mb-4\">
    <a href=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_events_list");
        yield "\" class=\"btn btn-outline-secondary mb-3\">
        <i class=\"fas fa-arrow-left me-2\"></i>Retour aux événements
    </a>
    <h1 class=\"h3 mb-0\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 10, $this->source); })()), "title", [], "any", false, false, false, 10), "html", null, true);
        yield "</h1>
    <p class=\"text-muted\">Liste des participants</p>
</div>

<div class=\"card\" style=\"border-radius: 15px; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.1);\">
    <div class=\"card-body\">
        <div class=\"mb-3\">
            <strong>Date:</strong> ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 17, $this->source); })()), "dateTime", [], "any", false, false, false, 17), "d/m/Y à H:i"), "html", null, true);
        yield "<br>
            <strong>Lieu:</strong> ";
        // line 18
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 18, $this->source); })()), "location", [], "any", false, false, false, 18) == "online")) ? ("En ligne") : ("Sur place"));
        yield "<br>
            <strong>Participants:</strong> ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["participantsWithNames"]) || array_key_exists("participantsWithNames", $context) ? $context["participantsWithNames"] : (function () { throw new RuntimeError('Variable "participantsWithNames" does not exist.', 19, $this->source); })())), "html", null, true);
        yield "
        </div>
        
        <div class=\"table-responsive\">
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Participant</th>
                        <th>Statut</th>
                        <th>Date d'inscription</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["participantsWithNames"]) || array_key_exists("participantsWithNames", $context) ? $context["participantsWithNames"] : (function () { throw new RuntimeError('Variable "participantsWithNames" does not exist.', 34, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 35
            yield "                    <tr>
                        <td>";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "participant", [], "any", false, false, false, 36), "id", [], "any", false, false, false, 36), "html", null, true);
            yield "</td>
                        <td>
                            <strong>";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "userName", [], "any", false, false, false, 38), "html", null, true);
            yield "</strong>
                            ";
            // line 39
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "userEmail", [], "any", false, false, false, 39)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 40
                yield "                                <br><small class=\"text-muted\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "userEmail", [], "any", false, false, false, 40), "html", null, true);
                yield "</small>
                            ";
            }
            // line 42
            yield "                        </td>
                        <td>
                            <span class=\"badge bg-";
            // line 44
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "participant", [], "any", false, false, false, 44), "status", [], "any", false, false, false, 44) == "confirmed")) ? ("success") : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "participant", [], "any", false, false, false, 44), "status", [], "any", false, false, false, 44) == "rejected")) ? ("danger") : ("warning"))));
            yield "\" id=\"status-badge-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "participant", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44), "html", null, true);
            yield "\">
                                ";
            // line 45
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "participant", [], "any", false, false, false, 45), "status", [], "any", false, false, false, 45) == "confirmed")) {
                // line 46
                yield "                                    Confirmé
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 47
$context["item"], "participant", [], "any", false, false, false, 47), "status", [], "any", false, false, false, 47) == "rejected")) {
                // line 48
                yield "                                    Refusé
                                ";
            } else {
                // line 50
                yield "                                    En attente
                                ";
            }
            // line 52
            yield "                            </span>
                        </td>
                        <td>";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "participant", [], "any", false, false, false, 54), "createdAt", [], "any", false, false, false, 54), "d/m/Y H:i"), "html", null, true);
            yield "</td>
                        <td>
                            <div class=\"btn-group\" role=\"group\">
                                <button type=\"button\" class=\"btn btn-sm btn-success\" onclick=\"updateStatus(";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 57, $this->source); })()), "id", [], "any", false, false, false, 57), "html", null, true);
            yield ", ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "participant", [], "any", false, false, false, 57), "id", [], "any", false, false, false, 57), "html", null, true);
            yield ", 'confirmed')\" title=\"Confirmer\">
                                    <i class=\"fas fa-check\"></i>
                                </button>
                                <button type=\"button\" class=\"btn btn-sm btn-warning\" onclick=\"updateStatus(";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 60, $this->source); })()), "id", [], "any", false, false, false, 60), "html", null, true);
            yield ", ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "participant", [], "any", false, false, false, 60), "id", [], "any", false, false, false, 60), "html", null, true);
            yield ", 'pending')\" title=\"En attente\">
                                    <i class=\"fas fa-clock\"></i>
                                </button>
                                <button type=\"button\" class=\"btn btn-sm btn-danger\" onclick=\"updateStatus(";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 63, $this->source); })()), "id", [], "any", false, false, false, 63), "html", null, true);
            yield ", ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "participant", [], "any", false, false, false, 63), "id", [], "any", false, false, false, 63), "html", null, true);
            yield ", 'rejected')\" title=\"Refuser\">
                                    <i class=\"fas fa-times\"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 69
        if (!$context['_iterated']) {
            // line 70
            yield "                    <tr>
                        <td colspan=\"5\" class=\"text-center py-4\">
                            <i class=\"fas fa-users fa-2x text-muted mb-2\"></i>
                            <p class=\"text-muted\">Aucun participant pour le moment</p>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        yield "                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
function updateStatus(eventId, participantId, status) {
    if (!confirm('Êtes-vous sûr de vouloir changer le statut ?')) {
        return;
    }
    
    console.log('Sending request:', {eventId, participantId, status});
    
    fetch(`/admin/events/\${eventId}/participants/\${participantId}/status`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `status=\${status}`
    })
    .then(response => {
        console.log('Response status:', response.status);
        return response.json();
    })
    .then(data => {
        console.log('Response data:', data);
        if (data.success) {
            const badge = document.getElementById(`status-badge-\${participantId}`);
            badge.className = 'badge bg-' + (status === 'confirmed' ? 'success' : (status === 'rejected' ? 'danger' : 'warning'));
            badge.textContent = status === 'confirmed' ? 'Confirmé' : (status === 'rejected' ? 'Refusé' : 'En attente');
            
            // Toast notification
            const toast = document.createElement('div');
            toast.className = 'alert alert-success position-fixed top-0 end-0 m-3';
            toast.style.zIndex = '9999';
            toast.textContent = data.message || 'Statut mis à jour et email envoyé';
            document.body.appendChild(toast);
            setTimeout(() => toast.remove(), 3000);
        } else {
            alert('Erreur lors de la mise à jour du statut: ' + (data.error || 'Erreur inconnue'));
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Erreur lors de la mise à jour du statut');
    });
}
</script>
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
        return "event/admin_participants.html.twig";
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
        return array (  249 => 77,  237 => 70,  235 => 69,  222 => 63,  214 => 60,  206 => 57,  200 => 54,  196 => 52,  192 => 50,  188 => 48,  186 => 47,  183 => 46,  181 => 45,  175 => 44,  171 => 42,  165 => 40,  163 => 39,  159 => 38,  154 => 36,  151 => 35,  146 => 34,  128 => 19,  124 => 18,  120 => 17,  110 => 10,  104 => 7,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Participants - {{ event.title }}{% endblock %}

{% block body %}
<div class=\"mb-4\">
    <a href=\"{{ path('admin_events_list') }}\" class=\"btn btn-outline-secondary mb-3\">
        <i class=\"fas fa-arrow-left me-2\"></i>Retour aux événements
    </a>
    <h1 class=\"h3 mb-0\">{{ event.title }}</h1>
    <p class=\"text-muted\">Liste des participants</p>
</div>

<div class=\"card\" style=\"border-radius: 15px; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.1);\">
    <div class=\"card-body\">
        <div class=\"mb-3\">
            <strong>Date:</strong> {{ event.dateTime|date('d/m/Y à H:i') }}<br>
            <strong>Lieu:</strong> {{ event.location == 'online' ? 'En ligne' : 'Sur place' }}<br>
            <strong>Participants:</strong> {{ participantsWithNames|length }}
        </div>
        
        <div class=\"table-responsive\">
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Participant</th>
                        <th>Statut</th>
                        <th>Date d'inscription</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for item in participantsWithNames %}
                    <tr>
                        <td>{{ item.participant.id }}</td>
                        <td>
                            <strong>{{ item.userName }}</strong>
                            {% if item.userEmail %}
                                <br><small class=\"text-muted\">{{ item.userEmail }}</small>
                            {% endif %}
                        </td>
                        <td>
                            <span class=\"badge bg-{{ item.participant.status == 'confirmed' ? 'success' : (item.participant.status == 'rejected' ? 'danger' : 'warning') }}\" id=\"status-badge-{{ item.participant.id }}\">
                                {% if item.participant.status == 'confirmed' %}
                                    Confirmé
                                {% elseif item.participant.status == 'rejected' %}
                                    Refusé
                                {% else %}
                                    En attente
                                {% endif %}
                            </span>
                        </td>
                        <td>{{ item.participant.createdAt|date('d/m/Y H:i') }}</td>
                        <td>
                            <div class=\"btn-group\" role=\"group\">
                                <button type=\"button\" class=\"btn btn-sm btn-success\" onclick=\"updateStatus({{ event.id }}, {{ item.participant.id }}, 'confirmed')\" title=\"Confirmer\">
                                    <i class=\"fas fa-check\"></i>
                                </button>
                                <button type=\"button\" class=\"btn btn-sm btn-warning\" onclick=\"updateStatus({{ event.id }}, {{ item.participant.id }}, 'pending')\" title=\"En attente\">
                                    <i class=\"fas fa-clock\"></i>
                                </button>
                                <button type=\"button\" class=\"btn btn-sm btn-danger\" onclick=\"updateStatus({{ event.id }}, {{ item.participant.id }}, 'rejected')\" title=\"Refuser\">
                                    <i class=\"fas fa-times\"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    {% else %}
                    <tr>
                        <td colspan=\"5\" class=\"text-center py-4\">
                            <i class=\"fas fa-users fa-2x text-muted mb-2\"></i>
                            <p class=\"text-muted\">Aucun participant pour le moment</p>
                        </td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
function updateStatus(eventId, participantId, status) {
    if (!confirm('Êtes-vous sûr de vouloir changer le statut ?')) {
        return;
    }
    
    console.log('Sending request:', {eventId, participantId, status});
    
    fetch(`/admin/events/\${eventId}/participants/\${participantId}/status`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `status=\${status}`
    })
    .then(response => {
        console.log('Response status:', response.status);
        return response.json();
    })
    .then(data => {
        console.log('Response data:', data);
        if (data.success) {
            const badge = document.getElementById(`status-badge-\${participantId}`);
            badge.className = 'badge bg-' + (status === 'confirmed' ? 'success' : (status === 'rejected' ? 'danger' : 'warning'));
            badge.textContent = status === 'confirmed' ? 'Confirmé' : (status === 'rejected' ? 'Refusé' : 'En attente');
            
            // Toast notification
            const toast = document.createElement('div');
            toast.className = 'alert alert-success position-fixed top-0 end-0 m-3';
            toast.style.zIndex = '9999';
            toast.textContent = data.message || 'Statut mis à jour et email envoyé';
            document.body.appendChild(toast);
            setTimeout(() => toast.remove(), 3000);
        } else {
            alert('Erreur lors de la mise à jour du statut: ' + (data.error || 'Erreur inconnue'));
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Erreur lors de la mise à jour du statut');
    });
}
</script>
    </div>
</div>
{% endblock %}


", "event/admin_participants.html.twig", "C:\\xampp\\htdocs\\MuseHub-my-work\\MuseHub-my-work\\templates\\event\\admin_participants.html.twig");
    }
}
