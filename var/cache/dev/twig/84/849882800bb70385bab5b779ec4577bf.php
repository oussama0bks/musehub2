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

/* event/admin_list.html.twig */
class __TwigTemplate_69c2fed9673e21c922e8f9a25b591270 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/admin_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/admin_list.html.twig"));

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

        yield "Gestion Événements - MuseHub Admin";
        
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
        yield "<div class=\"mb-4 d-flex flex-wrap justify-content-between align-items-center gap-3\">
    <div>
        <h1 class=\"h3 mb-0\">Gestion des Événements</h1>
        <p class=\"text-muted mb-0\">Gérer les événements artistiques</p>
    </div>
    <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_events_new");
        yield "\" class=\"btn btn-primary\">
        <i class=\"fas fa-calendar-plus me-2\"></i>Nouvel événement
    </a>
</div>

<div class=\"card mb-4\" style=\"border-radius: 15px; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.1);\">
    <div class=\"card-body\">
        <form method=\"GET\" class=\"row g-3 align-items-end\">
            <div class=\"col-md-3\">
                <label class=\"form-label text-muted small mb-1\">Rechercher</label>
                <input type=\"text\" name=\"q\" class=\"form-control\" value=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 21, $this->source); })()), "html", null, true);
        yield "\" placeholder=\"Titre ou lieu\">
            </div>
            <div class=\"col-md-2\">
                <label class=\"form-label text-muted small mb-1\">Statut</label>
                <select name=\"status\" class=\"form-select\">
                    ";
        // line 26
        $context["statuses"] = ["all" => "Tous", "upcoming" => "À venir", "past" => "Passés", "active" => "Actifs", "inactive" => "Inactifs"];
        // line 33
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statuses"]) || array_key_exists("statuses", $context) ? $context["statuses"] : (function () { throw new RuntimeError('Variable "statuses" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["label"]) {
            // line 34
            yield "                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\" ";
            yield ((((isset($context["statusFilter"]) || array_key_exists("statusFilter", $context) ? $context["statusFilter"] : (function () { throw new RuntimeError('Variable "statusFilter" does not exist.', 34, $this->source); })()) == $context["key"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['label'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "                </select>
            </div>
            <div class=\"col-md-3\">
                <label class=\"form-label text-muted small mb-1\">Trier par</label>
                <select name=\"sort\" class=\"form-select\">
                    ";
        // line 41
        $context["sorts"] = ["date_desc" => "Date (récent → ancien)", "date_asc" => "Date (ancien → récent)", "title_asc" => "Titre (A → Z)", "title_desc" => "Titre (Z → A)", "id_asc" => "ID (croissant)", "id_desc" => "ID (décroissant)", "created_asc" => "Création (ancien → récent)", "created_desc" => "Création (récent → ancien)"];
        // line 51
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sorts"]) || array_key_exists("sorts", $context) ? $context["sorts"] : (function () { throw new RuntimeError('Variable "sorts" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["label"]) {
            // line 52
            yield "                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\" ";
            yield ((((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 52, $this->source); })()) == $context["key"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['label'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        yield "                </select>
            </div>
            <div class=\"col-md-4\">
                <div class=\"d-flex gap-2\">
                    <button type=\"submit\" class=\"btn btn-primary px-4\">
                        <i class=\"fas fa-check me-2\"></i>Appliquer
                    </button>
                    <a href=\"";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_events_list");
        yield "\" class=\"btn btn-outline-secondary px-4\">
                        <i class=\"fas fa-redo me-2\"></i>Réinitialiser
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Statistiques -->
<div class=\"row g-4 mb-4\">
    <div class=\"col-md-4\">
        <div class=\"card\" style=\"border-radius: 15px; border-left: 4px solid #3b82f6;\">
            <div class=\"card-body\">
                <h3 class=\"text-primary\">";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 75, $this->source); })()), "total", [], "any", false, false, false, 75), "html", null, true);
        yield "</h3>
                <p class=\"text-muted mb-0\">Total événements</p>
            </div>
        </div>
    </div>
    <div class=\"col-md-4\">
        <div class=\"card\" style=\"border-radius: 15px; border-left: 4px solid #10b981;\">
            <div class=\"card-body\">
                <h3 class=\"text-success\">";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 83, $this->source); })()), "upcoming", [], "any", false, false, false, 83), "html", null, true);
        yield "</h3>
                <p class=\"text-muted mb-0\">À venir</p>
            </div>
        </div>
    </div>
    <div class=\"col-md-4\">
        <div class=\"card\" style=\"border-radius: 15px; border-left: 4px solid #6b7280;\">
            <div class=\"card-body\">
                <h3 class=\"text-secondary\">";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 91, $this->source); })()), "past", [], "any", false, false, false, 91), "html", null, true);
        yield "</h3>
                <p class=\"text-muted mb-0\">Passés</p>
            </div>
        </div>
    </div>
</div>

<!-- Liste des événements -->
<div class=\"card\" style=\"border-radius: 15px; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.1);\">
    <div class=\"card-body\">
        <div class=\"table-responsive\">
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titre</th>
                        <th>Type</th>
                        <th>Date</th>
                        <th>Lieu</th>
                        <th>Organisateur</th>
                        <th>Statut</th>
                        <th class=\"text-end\">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 116, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 117
            yield "                    <tr>
                        <td>";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 118), "html", null, true);
            yield "</td>
                        <td><strong>";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "title", [], "any", false, false, false, 119), "html", null, true);
            yield "</strong></td>
                        <td>
                            ";
            // line 121
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventType", [], "any", false, false, false, 121)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 122
                yield "                                <span class=\"badge bg-secondary\">
                                    ";
                // line 123
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventType", [], "any", false, false, false, 123), "name", [], "any", false, false, false, 123), "html", null, true);
                yield "
                                </span>
                            ";
            } else {
                // line 126
                yield "                                <span class=\"text-muted\">-</span>
                            ";
            }
            // line 128
            yield "                        </td>
                        <td>";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "dateTime", [], "any", false, false, false, 129), "d/m/Y H:i"), "html", null, true);
            yield "</td>
                        <td>
                            <span class=\"badge bg-";
            // line 131
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "location", [], "any", false, false, false, 131) == "online")) ? ("success") : ("info"));
            yield "\">
                                ";
            // line 132
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "location", [], "any", false, false, false, 132) == "online")) ? ("En ligne") : ("Sur place"));
            yield "
                            </span>
                        </td>
                        <td><small>";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "organiserUuid", [], "any", false, false, false, 135), 0, 8), "html", null, true);
            yield "...</small></td>
                        <td>
                            ";
            // line 137
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["event"], "isActive", [], "any", false, false, false, 137)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 138
                yield "                                <span class=\"badge bg-success\">Actif</span>
                            ";
            } else {
                // line 140
                yield "                                <span class=\"badge bg-secondary\">Inactif</span>
                            ";
            }
            // line 142
            yield "                        </td>
                        <td>
                            <div class=\"d-flex flex-wrap gap-2 justify-content-end\">
                                <a href=\"";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_events_participants", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 145)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-primary\">
                                    <i class=\"fas fa-users me-1\"></i>Participants
                                </a>
                                <a href=\"";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_events_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 148)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-secondary\">
                                    Modifier
                                </a>
                                <form action=\"";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_events_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 151)]), "html", null, true);
            yield "\" method=\"POST\" onsubmit=\"return confirm('Supprimer cet événement ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_event_" . CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 152))), "html", null, true);
            yield "\">
                                    <button type=\"submit\" class=\"btn btn-sm btn-outline-danger\">
                                        Supprimer
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 160
        if (!$context['_iterated']) {
            // line 161
            yield "                    <tr>
                        <td colspan=\"8\" class=\"text-center py-4\">
                            <i class=\"fas fa-calendar fa-2x text-muted mb-2\"></i>
                            <p class=\"text-muted\">Aucun événement trouvé</p>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        yield "                </tbody>
            </table>
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
        return "event/admin_list.html.twig";
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
        return array (  364 => 168,  352 => 161,  350 => 160,  337 => 152,  333 => 151,  327 => 148,  321 => 145,  316 => 142,  312 => 140,  308 => 138,  306 => 137,  301 => 135,  295 => 132,  291 => 131,  286 => 129,  283 => 128,  279 => 126,  273 => 123,  270 => 122,  268 => 121,  263 => 119,  259 => 118,  256 => 117,  251 => 116,  223 => 91,  212 => 83,  201 => 75,  184 => 61,  175 => 54,  162 => 52,  157 => 51,  155 => 41,  148 => 36,  135 => 34,  130 => 33,  128 => 26,  120 => 21,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Gestion Événements - MuseHub Admin{% endblock %}

{% block body %}
<div class=\"mb-4 d-flex flex-wrap justify-content-between align-items-center gap-3\">
    <div>
        <h1 class=\"h3 mb-0\">Gestion des Événements</h1>
        <p class=\"text-muted mb-0\">Gérer les événements artistiques</p>
    </div>
    <a href=\"{{ path('admin_events_new') }}\" class=\"btn btn-primary\">
        <i class=\"fas fa-calendar-plus me-2\"></i>Nouvel événement
    </a>
</div>

<div class=\"card mb-4\" style=\"border-radius: 15px; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.1);\">
    <div class=\"card-body\">
        <form method=\"GET\" class=\"row g-3 align-items-end\">
            <div class=\"col-md-3\">
                <label class=\"form-label text-muted small mb-1\">Rechercher</label>
                <input type=\"text\" name=\"q\" class=\"form-control\" value=\"{{ search }}\" placeholder=\"Titre ou lieu\">
            </div>
            <div class=\"col-md-2\">
                <label class=\"form-label text-muted small mb-1\">Statut</label>
                <select name=\"status\" class=\"form-select\">
                    {% set statuses = {
                        'all': 'Tous',
                        'upcoming': 'À venir',
                        'past': 'Passés',
                        'active': 'Actifs',
                        'inactive': 'Inactifs'
                    } %}
                    {% for key, label in statuses %}
                        <option value=\"{{ key }}\" {{ statusFilter == key ? 'selected' : '' }}>{{ label }}</option>
                    {% endfor %}
                </select>
            </div>
            <div class=\"col-md-3\">
                <label class=\"form-label text-muted small mb-1\">Trier par</label>
                <select name=\"sort\" class=\"form-select\">
                    {% set sorts = {
                        'date_desc': 'Date (récent → ancien)',
                        'date_asc': 'Date (ancien → récent)',
                        'title_asc': 'Titre (A → Z)',
                        'title_desc': 'Titre (Z → A)',
                        'id_asc': 'ID (croissant)',
                        'id_desc': 'ID (décroissant)',
                        'created_asc': 'Création (ancien → récent)',
                        'created_desc': 'Création (récent → ancien)'
                    } %}
                    {% for key, label in sorts %}
                        <option value=\"{{ key }}\" {{ sortBy == key ? 'selected' : '' }}>{{ label }}</option>
                    {% endfor %}
                </select>
            </div>
            <div class=\"col-md-4\">
                <div class=\"d-flex gap-2\">
                    <button type=\"submit\" class=\"btn btn-primary px-4\">
                        <i class=\"fas fa-check me-2\"></i>Appliquer
                    </button>
                    <a href=\"{{ path('admin_events_list') }}\" class=\"btn btn-outline-secondary px-4\">
                        <i class=\"fas fa-redo me-2\"></i>Réinitialiser
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Statistiques -->
<div class=\"row g-4 mb-4\">
    <div class=\"col-md-4\">
        <div class=\"card\" style=\"border-radius: 15px; border-left: 4px solid #3b82f6;\">
            <div class=\"card-body\">
                <h3 class=\"text-primary\">{{ stats.total }}</h3>
                <p class=\"text-muted mb-0\">Total événements</p>
            </div>
        </div>
    </div>
    <div class=\"col-md-4\">
        <div class=\"card\" style=\"border-radius: 15px; border-left: 4px solid #10b981;\">
            <div class=\"card-body\">
                <h3 class=\"text-success\">{{ stats.upcoming }}</h3>
                <p class=\"text-muted mb-0\">À venir</p>
            </div>
        </div>
    </div>
    <div class=\"col-md-4\">
        <div class=\"card\" style=\"border-radius: 15px; border-left: 4px solid #6b7280;\">
            <div class=\"card-body\">
                <h3 class=\"text-secondary\">{{ stats.past }}</h3>
                <p class=\"text-muted mb-0\">Passés</p>
            </div>
        </div>
    </div>
</div>

<!-- Liste des événements -->
<div class=\"card\" style=\"border-radius: 15px; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.1);\">
    <div class=\"card-body\">
        <div class=\"table-responsive\">
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titre</th>
                        <th>Type</th>
                        <th>Date</th>
                        <th>Lieu</th>
                        <th>Organisateur</th>
                        <th>Statut</th>
                        <th class=\"text-end\">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for event in events %}
                    <tr>
                        <td>{{ event.id }}</td>
                        <td><strong>{{ event.title }}</strong></td>
                        <td>
                            {% if event.eventType %}
                                <span class=\"badge bg-secondary\">
                                    {{ event.eventType.name }}
                                </span>
                            {% else %}
                                <span class=\"text-muted\">-</span>
                            {% endif %}
                        </td>
                        <td>{{ event.dateTime|date('d/m/Y H:i') }}</td>
                        <td>
                            <span class=\"badge bg-{{ event.location == 'online' ? 'success' : 'info' }}\">
                                {{ event.location == 'online' ? 'En ligne' : 'Sur place' }}
                            </span>
                        </td>
                        <td><small>{{ event.organiserUuid|slice(0, 8) }}...</small></td>
                        <td>
                            {% if event.isActive %}
                                <span class=\"badge bg-success\">Actif</span>
                            {% else %}
                                <span class=\"badge bg-secondary\">Inactif</span>
                            {% endif %}
                        </td>
                        <td>
                            <div class=\"d-flex flex-wrap gap-2 justify-content-end\">
                                <a href=\"{{ path('admin_events_participants', {id: event.id}) }}\" class=\"btn btn-sm btn-primary\">
                                    <i class=\"fas fa-users me-1\"></i>Participants
                                </a>
                                <a href=\"{{ path('admin_events_edit', {id: event.id}) }}\" class=\"btn btn-sm btn-outline-secondary\">
                                    Modifier
                                </a>
                                <form action=\"{{ path('admin_events_delete', {id: event.id}) }}\" method=\"POST\" onsubmit=\"return confirm('Supprimer cet événement ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_event_' ~ event.id) }}\">
                                    <button type=\"submit\" class=\"btn btn-sm btn-outline-danger\">
                                        Supprimer
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    {% else %}
                    <tr>
                        <td colspan=\"8\" class=\"text-center py-4\">
                            <i class=\"fas fa-calendar fa-2x text-muted mb-2\"></i>
                            <p class=\"text-muted\">Aucun événement trouvé</p>
                        </td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
</div>
{% endblock %}


", "event/admin_list.html.twig", "C:\\xampp\\htdocs\\MuseHub-my-work\\MuseHub-my-work\\templates\\event\\admin_list.html.twig");
    }
}
