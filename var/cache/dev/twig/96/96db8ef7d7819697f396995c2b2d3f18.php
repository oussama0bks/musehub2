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

/* event_type/admin_list.html.twig */
class __TwigTemplate_b9430f3f1129f92e696226a8e55f86d6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event_type/admin_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event_type/admin_list.html.twig"));

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

        yield "Gestion Types d'Événements - MuseHub Admin";
        
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
        <h1 class=\"h3 mb-0\">Gestion des Types d'Événements</h1>
        <p class=\"text-muted mb-0\">Gérer les catégories d'événements</p>
    </div>
    <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_event_types_new");
        yield "\" class=\"btn btn-primary\">
        <i class=\"fas fa-plus me-2\"></i>Nouveau type
    </a>
</div>

<div class=\"card mb-4\" style=\"border-radius: 15px; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.1);\">
    <div class=\"card-body\">
        <form method=\"GET\" class=\"row g-3 align-items-end\">
            <div class=\"col-md-4\">
                <label class=\"form-label text-muted small mb-1\">Rechercher</label>
                <input type=\"text\" name=\"q\" class=\"form-control\" value=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 21, $this->source); })()), "html", null, true);
        yield "\" placeholder=\"Nom ou description\">
            </div>
            <div class=\"col-md-3\">
                <label class=\"form-label text-muted small mb-1\">Filtre</label>
                <select name=\"status\" class=\"form-select\">
                    ";
        // line 26
        $context["statuses"] = ["all" => "Tous", "active" => "Actifs", "inactive" => "Inactifs", "paid" => "Payants", "free" => "Gratuits"];
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
            <div class=\"col-md-5 d-flex gap-2\">
                <button type=\"submit\" class=\"btn btn-primary flex-grow-1\">Appliquer</button>
                <a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_event_types_list");
        yield "\" class=\"btn btn-outline-secondary\">Réinitialiser</a>
            </div>
        </form>
    </div>
</div>

<!-- Statistiques -->
<div class=\"row g-4 mb-4\">
    <div class=\"col-md-3\">
        <div class=\"card\" style=\"border-radius: 15px; border-left: 4px solid #3b82f6;\">
            <div class=\"card-body\">
                <h3 class=\"text-primary\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 51, $this->source); })()), "total", [], "any", false, false, false, 51), "html", null, true);
        yield "</h3>
                <p class=\"text-muted mb-0\">Total types</p>
            </div>
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"card\" style=\"border-radius: 15px; border-left: 4px solid #10b981;\">
            <div class=\"card-body\">
                <h3 class=\"text-success\">";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 59, $this->source); })()), "active", [], "any", false, false, false, 59), "html", null, true);
        yield "</h3>
                <p class=\"text-muted mb-0\">Actifs</p>
            </div>
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"card\" style=\"border-radius: 15px; border-left: 4px solid #f59e0b;\">
            <div class=\"card-body\">
                <h3 class=\"text-warning\">";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 67, $this->source); })()), "paid", [], "any", false, false, false, 67), "html", null, true);
        yield "</h3>
                <p class=\"text-muted mb-0\">Payants</p>
            </div>
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"card\" style=\"border-radius: 15px; border-left: 4px solid #10b981;\">
            <div class=\"card-body\">
                <h3 class=\"text-success\">";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 75, $this->source); })()), "free", [], "any", false, false, false, 75), "html", null, true);
        yield "</h3>
                <p class=\"text-muted mb-0\">Gratuits</p>
            </div>
        </div>
    </div>
</div>

<!-- Liste des types -->
<div class=\"card\" style=\"border-radius: 15px; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.1);\">
    <div class=\"card-body\">
        <div class=\"table-responsive\">
            <table class=\"table table-hover align-middle\">
                <thead>
                    <tr>
                        <th style=\"width: 60px;\">Ordre</th>
                        <th>Nom</th>
                        <th>Capacité</th>
                        <th>Durée</th>
                        <th>Localisation</th>
                        <th>Caractéristiques</th>
                        <th>Statut</th>
                        <th class=\"text-end\">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["eventTypes"]) || array_key_exists("eventTypes", $context) ? $context["eventTypes"] : (function () { throw new RuntimeError('Variable "eventTypes" does not exist.', 100, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 101
            yield "                    <tr>
                        <td class=\"text-center\">
                            <span class=\"badge bg-secondary\">";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "sortOrder", [], "any", false, false, false, 103), "html", null, true);
            yield "</span>
                        </td>
                        <td>
                            <div>
                                <strong>";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "name", [], "any", false, false, false, 107), "html", null, true);
            yield "</strong>
                            </div>
                            ";
            // line 109
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["type"], "description", [], "any", false, false, false, 109)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 110
                yield "                                <small class=\"text-muted\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "description", [], "any", false, false, false, 110), "html", null, true);
                yield "</small>
                            ";
            }
            // line 112
            yield "                        </td>
                        <td>
                            ";
            // line 114
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["type"], "capacityType", [], "any", false, false, false, 114) == "unlimited")) {
                // line 115
                yield "                                <span class=\"badge bg-success\">Illimitée</span>
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 116
$context["type"], "capacityType", [], "any", false, false, false, 116) == "limited")) {
                // line 117
                yield "                                <span class=\"badge bg-warning\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "defaultMaxParticipants", [], "any", false, false, false, 117), "html", null, true);
                yield " max</span>
                            ";
            } else {
                // line 119
                yield "                                <span class=\"badge bg-danger\">Invitation</span>
                            ";
            }
            // line 121
            yield "                        </td>
                        <td>
                            ";
            // line 123
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["type"], "typicalDurationHours", [], "any", false, false, false, 123)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 124
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "typicalDurationHours", [], "any", false, false, false, 124), "html", null, true);
                yield "h
                            ";
            } else {
                // line 126
                yield "                                <span class=\"text-muted\">-</span>
                            ";
            }
            // line 128
            yield "                        </td>
                        <td>
                            ";
            // line 130
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["type"], "allowedLocation", [], "any", false, false, false, 130) == "both")) {
                // line 131
                yield "                                <span class=\"badge bg-info\">Online/Offline</span>
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 132
$context["type"], "allowedLocation", [], "any", false, false, false, 132) == "online")) {
                // line 133
                yield "                                <span class=\"badge bg-success\">Online</span>
                            ";
            } else {
                // line 135
                yield "                                <span class=\"badge bg-primary\">Offline</span>
                            ";
            }
            // line 137
            yield "                        </td>
                        <td>
                            <div class=\"d-flex gap-1 flex-wrap\">
                                ";
            // line 140
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["type"], "requiresPayment", [], "any", false, false, false, 140)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 141
                yield "                                    <span class=\"badge bg-warning\" title=\"Payant\">💰</span>
                                ";
            }
            // line 143
            yield "                                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["type"], "certificateEnabled", [], "any", false, false, false, 143)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 144
                yield "                                    <span class=\"badge bg-success\" title=\"Certificat\">🎓</span>
                                ";
            }
            // line 146
            yield "                                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["type"], "recordingEnabled", [], "any", false, false, false, 146)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 147
                yield "                                    <span class=\"badge bg-danger\" title=\"Enregistrement\">🎥</span>
                                ";
            }
            // line 149
            yield "                                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["type"], "visibility", [], "any", false, false, false, 149) == "members_only")) {
                // line 150
                yield "                                    <span class=\"badge bg-secondary\" title=\"Membres\">👥</span>
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 151
$context["type"], "visibility", [], "any", false, false, false, 151) == "private")) {
                // line 152
                yield "                                    <span class=\"badge bg-dark\" title=\"Privé\">🔒</span>
                                ";
            }
            // line 154
            yield "                            </div>
                        </td>
                        <td>
                            ";
            // line 157
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["type"], "isActive", [], "any", false, false, false, 157)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 158
                yield "                                <span class=\"badge bg-success\">Actif</span>
                            ";
            } else {
                // line 160
                yield "                                <span class=\"badge bg-secondary\">Inactif</span>
                            ";
            }
            // line 162
            yield "                            <div class=\"mt-1\">
                                <small class=\"text-muted\">";
            // line 163
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["type"], "events", [], "any", false, false, false, 163)), "html", null, true);
            yield " événement(s)</small>
                            </div>
                        </td>
                        <td class=\"text-end\">
                            <div class=\"btn-group btn-group-sm\">
                                <a href=\"";
            // line 168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_event_types_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 168)]), "html", null, true);
            yield "\" 
                                   class=\"btn btn-outline-primary\" 
                                   title=\"Modifier\">
                                    <i class=\"fas fa-edit\"></i>
                                </a>
                                <form method=\"POST\" 
                                      action=\"";
            // line 174
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_event_types_toggle", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 174)]), "html", null, true);
            yield "\" 
                                      class=\"d-inline\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 176
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle_event_type_" . CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 176))), "html", null, true);
            yield "\">
                                    <button type=\"submit\" 
                                            class=\"btn btn-outline-";
            // line 178
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["type"], "isActive", [], "any", false, false, false, 178)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("warning") : ("success"));
            yield "\" 
                                            title=\"";
            // line 179
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["type"], "isActive", [], "any", false, false, false, 179)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
            yield "\">
                                        <i class=\"fas fa-";
            // line 180
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["type"], "isActive", [], "any", false, false, false, 180)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("toggle-on") : ("toggle-off"));
            yield "\"></i>
                                    </button>
                                </form>
                                <form method=\"POST\" 
                                      action=\"";
            // line 184
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_event_types_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 184)]), "html", null, true);
            yield "\" 
                                      class=\"d-inline\"
                                      onsubmit=\"return confirm('Êtes-vous sûr de vouloir désactiver ce type ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 187
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_event_type_" . CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 187))), "html", null, true);
            yield "\">
                                    <button type=\"submit\" class=\"btn btn-outline-danger\" title=\"Supprimer\">
                                        <i class=\"fas fa-trash\"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 195
        if (!$context['_iterated']) {
            // line 196
            yield "                    <tr>
                        <td colspan=\"9\" class=\"text-center text-muted py-5\">
                            <i class=\"fas fa-inbox fa-3x mb-3 d-block\"></i>
                            Aucun type d'événement trouvé
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['type'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 203
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
        return "event_type/admin_list.html.twig";
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
        return array (  444 => 203,  432 => 196,  430 => 195,  417 => 187,  411 => 184,  404 => 180,  400 => 179,  396 => 178,  391 => 176,  386 => 174,  377 => 168,  369 => 163,  366 => 162,  362 => 160,  358 => 158,  356 => 157,  351 => 154,  347 => 152,  345 => 151,  342 => 150,  339 => 149,  335 => 147,  332 => 146,  328 => 144,  325 => 143,  321 => 141,  319 => 140,  314 => 137,  310 => 135,  306 => 133,  304 => 132,  301 => 131,  299 => 130,  295 => 128,  291 => 126,  285 => 124,  283 => 123,  279 => 121,  275 => 119,  269 => 117,  267 => 116,  264 => 115,  262 => 114,  258 => 112,  252 => 110,  250 => 109,  245 => 107,  238 => 103,  234 => 101,  229 => 100,  201 => 75,  190 => 67,  179 => 59,  168 => 51,  154 => 40,  148 => 36,  135 => 34,  130 => 33,  128 => 26,  120 => 21,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Gestion Types d'Événements - MuseHub Admin{% endblock %}

{% block body %}
<div class=\"mb-4 d-flex flex-wrap justify-content-between align-items-center gap-3\">
    <div>
        <h1 class=\"h3 mb-0\">Gestion des Types d'Événements</h1>
        <p class=\"text-muted mb-0\">Gérer les catégories d'événements</p>
    </div>
    <a href=\"{{ path('admin_event_types_new') }}\" class=\"btn btn-primary\">
        <i class=\"fas fa-plus me-2\"></i>Nouveau type
    </a>
</div>

<div class=\"card mb-4\" style=\"border-radius: 15px; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.1);\">
    <div class=\"card-body\">
        <form method=\"GET\" class=\"row g-3 align-items-end\">
            <div class=\"col-md-4\">
                <label class=\"form-label text-muted small mb-1\">Rechercher</label>
                <input type=\"text\" name=\"q\" class=\"form-control\" value=\"{{ search }}\" placeholder=\"Nom ou description\">
            </div>
            <div class=\"col-md-3\">
                <label class=\"form-label text-muted small mb-1\">Filtre</label>
                <select name=\"status\" class=\"form-select\">
                    {% set statuses = {
                        'all': 'Tous',
                        'active': 'Actifs',
                        'inactive': 'Inactifs',
                        'paid': 'Payants',
                        'free': 'Gratuits'
                    } %}
                    {% for key, label in statuses %}
                        <option value=\"{{ key }}\" {{ statusFilter == key ? 'selected' : '' }}>{{ label }}</option>
                    {% endfor %}
                </select>
            </div>
            <div class=\"col-md-5 d-flex gap-2\">
                <button type=\"submit\" class=\"btn btn-primary flex-grow-1\">Appliquer</button>
                <a href=\"{{ path('admin_event_types_list') }}\" class=\"btn btn-outline-secondary\">Réinitialiser</a>
            </div>
        </form>
    </div>
</div>

<!-- Statistiques -->
<div class=\"row g-4 mb-4\">
    <div class=\"col-md-3\">
        <div class=\"card\" style=\"border-radius: 15px; border-left: 4px solid #3b82f6;\">
            <div class=\"card-body\">
                <h3 class=\"text-primary\">{{ stats.total }}</h3>
                <p class=\"text-muted mb-0\">Total types</p>
            </div>
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"card\" style=\"border-radius: 15px; border-left: 4px solid #10b981;\">
            <div class=\"card-body\">
                <h3 class=\"text-success\">{{ stats.active }}</h3>
                <p class=\"text-muted mb-0\">Actifs</p>
            </div>
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"card\" style=\"border-radius: 15px; border-left: 4px solid #f59e0b;\">
            <div class=\"card-body\">
                <h3 class=\"text-warning\">{{ stats.paid }}</h3>
                <p class=\"text-muted mb-0\">Payants</p>
            </div>
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"card\" style=\"border-radius: 15px; border-left: 4px solid #10b981;\">
            <div class=\"card-body\">
                <h3 class=\"text-success\">{{ stats.free }}</h3>
                <p class=\"text-muted mb-0\">Gratuits</p>
            </div>
        </div>
    </div>
</div>

<!-- Liste des types -->
<div class=\"card\" style=\"border-radius: 15px; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.1);\">
    <div class=\"card-body\">
        <div class=\"table-responsive\">
            <table class=\"table table-hover align-middle\">
                <thead>
                    <tr>
                        <th style=\"width: 60px;\">Ordre</th>
                        <th>Nom</th>
                        <th>Capacité</th>
                        <th>Durée</th>
                        <th>Localisation</th>
                        <th>Caractéristiques</th>
                        <th>Statut</th>
                        <th class=\"text-end\">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for type in eventTypes %}
                    <tr>
                        <td class=\"text-center\">
                            <span class=\"badge bg-secondary\">{{ type.sortOrder }}</span>
                        </td>
                        <td>
                            <div>
                                <strong>{{ type.name }}</strong>
                            </div>
                            {% if type.description %}
                                <small class=\"text-muted\">{{ type.description }}</small>
                            {% endif %}
                        </td>
                        <td>
                            {% if type.capacityType == 'unlimited' %}
                                <span class=\"badge bg-success\">Illimitée</span>
                            {% elseif type.capacityType == 'limited' %}
                                <span class=\"badge bg-warning\">{{ type.defaultMaxParticipants }} max</span>
                            {% else %}
                                <span class=\"badge bg-danger\">Invitation</span>
                            {% endif %}
                        </td>
                        <td>
                            {% if type.typicalDurationHours %}
                                {{ type.typicalDurationHours }}h
                            {% else %}
                                <span class=\"text-muted\">-</span>
                            {% endif %}
                        </td>
                        <td>
                            {% if type.allowedLocation == 'both' %}
                                <span class=\"badge bg-info\">Online/Offline</span>
                            {% elseif type.allowedLocation == 'online' %}
                                <span class=\"badge bg-success\">Online</span>
                            {% else %}
                                <span class=\"badge bg-primary\">Offline</span>
                            {% endif %}
                        </td>
                        <td>
                            <div class=\"d-flex gap-1 flex-wrap\">
                                {% if type.requiresPayment %}
                                    <span class=\"badge bg-warning\" title=\"Payant\">💰</span>
                                {% endif %}
                                {% if type.certificateEnabled %}
                                    <span class=\"badge bg-success\" title=\"Certificat\">🎓</span>
                                {% endif %}
                                {% if type.recordingEnabled %}
                                    <span class=\"badge bg-danger\" title=\"Enregistrement\">🎥</span>
                                {% endif %}
                                {% if type.visibility == 'members_only' %}
                                    <span class=\"badge bg-secondary\" title=\"Membres\">👥</span>
                                {% elseif type.visibility == 'private' %}
                                    <span class=\"badge bg-dark\" title=\"Privé\">🔒</span>
                                {% endif %}
                            </div>
                        </td>
                        <td>
                            {% if type.isActive %}
                                <span class=\"badge bg-success\">Actif</span>
                            {% else %}
                                <span class=\"badge bg-secondary\">Inactif</span>
                            {% endif %}
                            <div class=\"mt-1\">
                                <small class=\"text-muted\">{{ type.events|length }} événement(s)</small>
                            </div>
                        </td>
                        <td class=\"text-end\">
                            <div class=\"btn-group btn-group-sm\">
                                <a href=\"{{ path('admin_event_types_edit', {id: type.id}) }}\" 
                                   class=\"btn btn-outline-primary\" 
                                   title=\"Modifier\">
                                    <i class=\"fas fa-edit\"></i>
                                </a>
                                <form method=\"POST\" 
                                      action=\"{{ path('admin_event_types_toggle', {id: type.id}) }}\" 
                                      class=\"d-inline\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('toggle_event_type_' ~ type.id) }}\">
                                    <button type=\"submit\" 
                                            class=\"btn btn-outline-{{ type.isActive ? 'warning' : 'success' }}\" 
                                            title=\"{{ type.isActive ? 'Désactiver' : 'Activer' }}\">
                                        <i class=\"fas fa-{{ type.isActive ? 'toggle-on' : 'toggle-off' }}\"></i>
                                    </button>
                                </form>
                                <form method=\"POST\" 
                                      action=\"{{ path('admin_event_types_delete', {id: type.id}) }}\" 
                                      class=\"d-inline\"
                                      onsubmit=\"return confirm('Êtes-vous sûr de vouloir désactiver ce type ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_event_type_' ~ type.id) }}\">
                                    <button type=\"submit\" class=\"btn btn-outline-danger\" title=\"Supprimer\">
                                        <i class=\"fas fa-trash\"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    {% else %}
                    <tr>
                        <td colspan=\"9\" class=\"text-center text-muted py-5\">
                            <i class=\"fas fa-inbox fa-3x mb-3 d-block\"></i>
                            Aucun type d'événement trouvé
                        </td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
</div>
{% endblock %}
", "event_type/admin_list.html.twig", "C:\\xampp\\htdocs\\MuseHub-my-work\\MuseHub-my-work\\templates\\event_type\\admin_list.html.twig");
    }
}
