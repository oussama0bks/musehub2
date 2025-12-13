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

/* marketplace/admin_offre_list.html.twig */
class __TwigTemplate_9119f734581e4a015b781a0a4be968a1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/admin_offre_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/admin_offre_list.html.twig"));

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

        yield "Gestion des Offres - MuseHub Admin";
        
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
        <h1 class=\"h3 mb-0\">Gestion des Offres</h1>
        <p class=\"text-muted mb-0\">Suivi et gestion des offres</p>
    </div>
    <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_offre_new");
        yield "\" class=\"btn btn-primary\">
        <i class=\"fas fa-plus-circle me-2\"></i>Nouvelle Offre
    </a>
</div>

<!-- Statistiques -->
<div class=\"row g-4 mb-4\">
    <div class=\"col-md-3\">
        <div class=\"card\" style=\"border-left: 4px solid #3b82f6;\">
            <div class=\"card-body\">
                <h6 class=\"text-muted mb-2\">Total</h6>
                <h3 class=\"text-primary mb-0\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 22, $this->source); })()), "total", [], "any", false, false, false, 22), "html", null, true);
        yield "</h3>
                <small class=\"text-muted\">Offres au total</small>
            </div>
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"card\" style=\"border-left: 4px solid #f59e0b;\">
            <div class=\"card-body\">
                <h6 class=\"text-muted mb-2\">En Attente</h6>
                <h3 class=\"text-warning mb-0\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 31, $this->source); })()), "en_attente", [], "any", false, false, false, 31), "html", null, true);
        yield "</h3>
                <small class=\"text-muted\">À traiter</small>
            </div>
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"card\" style=\"border-left: 4px solid #10b981;\">
            <div class=\"card-body\">
                <h6 class=\"text-muted mb-2\">Acceptées</h6>
                <h3 class=\"text-success mb-0\">";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 40, $this->source); })()), "acceptees", [], "any", false, false, false, 40), "html", null, true);
        yield "</h3>
                <small class=\"text-muted\">Offres acceptées</small>
            </div>
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"card\" style=\"border-left: 4px solid #ef4444;\">
            <div class=\"card-body\">
                <h6 class=\"text-muted mb-2\">Refusées</h6>
                <h3 class=\"text-danger mb-0\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 49, $this->source); })()), "refusees", [], "any", false, false, false, 49), "html", null, true);
        yield "</h3>
                <small class=\"text-muted\">Offres refusées</small>
            </div>
        </div>
    </div>
</div>

<!-- Filtres -->
<div class=\"card mb-4\" style=\"border-radius: 15px; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.1);\">
    <div class=\"card-header bg-white\">
        <h5 class=\"mb-0\"><i class=\"fas fa-filter me-2\"></i>Filtres</h5>
    </div>
    <div class=\"card-body\">
        <form method=\"GET\" class=\"row g-3 align-items-end\">
            <div class=\"col-md-4\">
                <label class=\"form-label text-muted small mb-1\">Statut</label>
                <select name=\"statut\" class=\"form-select\">
                    <option value=\"all\" ";
        // line 66
        if (((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 66, $this->source); })()) == "all")) {
            yield "selected";
        }
        yield ">Tous les statuts</option>
                    <option value=\"En attente\" ";
        // line 67
        if (((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 67, $this->source); })()) == "En attente")) {
            yield "selected";
        }
        yield ">En attente</option>
                    <option value=\"Acceptée\" ";
        // line 68
        if (((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 68, $this->source); })()) == "Acceptée")) {
            yield "selected";
        }
        yield ">Acceptée</option>
                    <option value=\"Refusée\" ";
        // line 69
        if (((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 69, $this->source); })()) == "Refusée")) {
            yield "selected";
        }
        yield ">Refusée</option>
                </select>
            </div>
            <div class=\"col-md-4\">
                <label class=\"form-label text-muted small mb-1\">Annonce</label>
                <select name=\"listing\" class=\"form-select\">
                    <option value=\"\">Toutes les annonces</option>
                    ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["listings"]) || array_key_exists("listings", $context) ? $context["listings"] : (function () { throw new RuntimeError('Variable "listings" does not exist.', 76, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["list"]) {
            // line 77
            yield "                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["list"], "id", [], "any", false, false, false, 77), "html", null, true);
            yield "\" ";
            if (((isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new RuntimeError('Variable "listing" does not exist.', 77, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["list"], "id", [], "any", false, false, false, 77))) {
                yield "selected";
            }
            yield ">
                            #";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["list"], "id", [], "any", false, false, false, 78), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["list"], "price", [], "any", false, false, false, 78), "html", null, true);
            yield " €
                        </option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['list'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        yield "                </select>
            </div>
            <div class=\"col-md-4 d-flex gap-2\">
                <button type=\"submit\" class=\"btn btn-primary flex-grow-1\">
                    <i class=\"fas fa-filter me-2\"></i>Appliquer
                </button>
                <a href=\"";
        // line 87
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_offre_list");
        yield "\" class=\"btn btn-outline-secondary\">Réinitialiser</a>
            </div>
        </form>
    </div>
</div>

<!-- Liste des offres -->
<div class=\"card\" style=\"border-radius: 15px; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.1);\">
    <div class=\"card-header bg-white\">
        <h5 class=\"mb-0\"><i class=\"fas fa-handshake me-2\"></i>Liste des offres</h5>
    </div>
    <div class=\"card-body\">
        ";
        // line 99
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["offres"]) || array_key_exists("offres", $context) ? $context["offres"] : (function () { throw new RuntimeError('Variable "offres" does not exist.', 99, $this->source); })()))) {
            // line 100
            yield "            <div class=\"text-center py-4\">
                <i class=\"fas fa-handshake fa-2x text-muted mb-2\"></i>
                <p class=\"text-muted\">Aucune offre trouvée</p>
            </div>
        ";
        } else {
            // line 105
            yield "            <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Annonce</th>
                            <th>Acheteur</th>
                            <th>Prix Proposé</th>
                            <th>Date</th>
                            <th>Statut</th>
                            <th class=\"text-end\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 119
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["offres"]) || array_key_exists("offres", $context) ? $context["offres"] : (function () { throw new RuntimeError('Variable "offres" does not exist.', 119, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
                // line 120
                yield "                            <tr>
                                <td><strong>#";
                // line 121
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 121), "html", null, true);
                yield "</strong></td>
                                <td>
                                    <a href=\"";
                // line 123
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_offre_list", ["listing" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "listing", [], "any", false, false, false, 123), "id", [], "any", false, false, false, 123)]), "html", null, true);
                yield "\" class=\"text-primary\">
                                        #";
                // line 124
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "listing", [], "any", false, false, false, 124), "id", [], "any", false, false, false, 124), "html", null, true);
                yield "
                                    </a>
                                </td>
                                <td>
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"avatar-sm me-2\">
                                            <div class=\"avatar-title bg-light rounded-circle text-primary\">
                                                <i class=\"fas fa-user\"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class=\"fw-medium\">";
                // line 135
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "utilisateur", [], "any", false, false, false, 135), "email", [], "any", false, false, false, 135), "@")), "html", null, true);
                yield "</div>
                                            <small class=\"text-muted\">";
                // line 136
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "utilisateur", [], "any", false, false, false, 136), "email", [], "any", false, false, false, 136), "html", null, true);
                yield "</small>
                                        </div>
                                    </div>
                                </td>
                                <td><strong>";
                // line 140
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "prixPropose", [], "any", false, false, false, 140), 2, ",", " "), "html", null, true);
                yield " €</strong></td>
                                <td>";
                // line 141
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "datePropose", [], "any", false, false, false, 141), "d/m/Y H:i"), "html", null, true);
                yield "</td>
                                <td>
                                    ";
                // line 143
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "statut", [], "any", false, false, false, 143) == "En attente")) {
                    // line 144
                    yield "                                        <span class=\"badge bg-warning\">En attente</span>
                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 145
$context["offre"], "statut", [], "any", false, false, false, 145) == "Acceptée")) {
                    // line 146
                    yield "                                        <span class=\"badge bg-success\">Acceptée</span>
                                    ";
                } else {
                    // line 148
                    yield "                                        <span class=\"badge bg-danger\">Refusée</span>
                                    ";
                }
                // line 150
                yield "                                </td>
                                <td>
                                    <div class=\"d-flex justify-content-end gap-2\">
                                        <a href=\"";
                // line 153
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_offre_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 153)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-primary\" title=\"Modifier\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>

                                        ";
                // line 157
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "statut", [], "any", false, false, false, 157) == "En attente")) {
                    // line 158
                    yield "                                            <form method=\"post\" action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_offre_accept", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 158)]), "html", null, true);
                    yield "\" style=\"display: inline;\">
                                                <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 159
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("accept_offre_" . CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 159))), "html", null, true);
                    yield "\">
                                                <button class=\"btn btn-sm btn-outline-success\" type=\"submit\" title=\"Accepter\">
                                                    <i class=\"fas fa-check\"></i>
                                                </button>
                                            </form>

                                            <form method=\"post\" action=\"";
                    // line 165
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_offre_refuse", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 165)]), "html", null, true);
                    yield "\" style=\"display: inline;\">
                                                <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 166
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("refuse_offre_" . CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 166))), "html", null, true);
                    yield "\">
                                                <button class=\"btn btn-sm btn-outline-danger\" type=\"submit\" title=\"Refuser\">
                                                    <i class=\"fas fa-times\"></i>
                                                </button>
                                            </form>
                                        ";
                }
                // line 172
                yield "
                                        <form method=\"post\" action=\"";
                // line 173
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_offre_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 173)]), "html", null, true);
                yield "\" style=\"display: inline;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette offre ?')\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 174
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_offre_" . CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 174))), "html", null, true);
                yield "\">
                                            <button class=\"btn btn-sm btn-outline-danger\" type=\"submit\" title=\"Supprimer\">
                                                <i class=\"fas fa-trash\"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['offre'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            yield "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 187
        yield "    </div>
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
        return "marketplace/admin_offre_list.html.twig";
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
        return array (  413 => 187,  407 => 183,  392 => 174,  388 => 173,  385 => 172,  376 => 166,  372 => 165,  363 => 159,  358 => 158,  356 => 157,  349 => 153,  344 => 150,  340 => 148,  336 => 146,  334 => 145,  331 => 144,  329 => 143,  324 => 141,  320 => 140,  313 => 136,  309 => 135,  295 => 124,  291 => 123,  286 => 121,  283 => 120,  279 => 119,  263 => 105,  256 => 100,  254 => 99,  239 => 87,  231 => 81,  220 => 78,  211 => 77,  207 => 76,  195 => 69,  189 => 68,  183 => 67,  177 => 66,  157 => 49,  145 => 40,  133 => 31,  121 => 22,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Gestion des Offres - MuseHub Admin{% endblock %}

{% block body %}
<div class=\"mb-4 d-flex flex-wrap justify-content-between align-items-center gap-3\">
    <div>
        <h1 class=\"h3 mb-0\">Gestion des Offres</h1>
        <p class=\"text-muted mb-0\">Suivi et gestion des offres</p>
    </div>
    <a href=\"{{ path('admin_offre_new') }}\" class=\"btn btn-primary\">
        <i class=\"fas fa-plus-circle me-2\"></i>Nouvelle Offre
    </a>
</div>

<!-- Statistiques -->
<div class=\"row g-4 mb-4\">
    <div class=\"col-md-3\">
        <div class=\"card\" style=\"border-left: 4px solid #3b82f6;\">
            <div class=\"card-body\">
                <h6 class=\"text-muted mb-2\">Total</h6>
                <h3 class=\"text-primary mb-0\">{{ stats.total }}</h3>
                <small class=\"text-muted\">Offres au total</small>
            </div>
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"card\" style=\"border-left: 4px solid #f59e0b;\">
            <div class=\"card-body\">
                <h6 class=\"text-muted mb-2\">En Attente</h6>
                <h3 class=\"text-warning mb-0\">{{ stats.en_attente }}</h3>
                <small class=\"text-muted\">À traiter</small>
            </div>
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"card\" style=\"border-left: 4px solid #10b981;\">
            <div class=\"card-body\">
                <h6 class=\"text-muted mb-2\">Acceptées</h6>
                <h3 class=\"text-success mb-0\">{{ stats.acceptees }}</h3>
                <small class=\"text-muted\">Offres acceptées</small>
            </div>
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"card\" style=\"border-left: 4px solid #ef4444;\">
            <div class=\"card-body\">
                <h6 class=\"text-muted mb-2\">Refusées</h6>
                <h3 class=\"text-danger mb-0\">{{ stats.refusees }}</h3>
                <small class=\"text-muted\">Offres refusées</small>
            </div>
        </div>
    </div>
</div>

<!-- Filtres -->
<div class=\"card mb-4\" style=\"border-radius: 15px; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.1);\">
    <div class=\"card-header bg-white\">
        <h5 class=\"mb-0\"><i class=\"fas fa-filter me-2\"></i>Filtres</h5>
    </div>
    <div class=\"card-body\">
        <form method=\"GET\" class=\"row g-3 align-items-end\">
            <div class=\"col-md-4\">
                <label class=\"form-label text-muted small mb-1\">Statut</label>
                <select name=\"statut\" class=\"form-select\">
                    <option value=\"all\" {% if statut == 'all' %}selected{% endif %}>Tous les statuts</option>
                    <option value=\"En attente\" {% if statut == 'En attente' %}selected{% endif %}>En attente</option>
                    <option value=\"Acceptée\" {% if statut == 'Acceptée' %}selected{% endif %}>Acceptée</option>
                    <option value=\"Refusée\" {% if statut == 'Refusée' %}selected{% endif %}>Refusée</option>
                </select>
            </div>
            <div class=\"col-md-4\">
                <label class=\"form-label text-muted small mb-1\">Annonce</label>
                <select name=\"listing\" class=\"form-select\">
                    <option value=\"\">Toutes les annonces</option>
                    {% for list in listings %}
                        <option value=\"{{ list.id }}\" {% if listing == list.id %}selected{% endif %}>
                            #{{ list.id }} - {{ list.price }} €
                        </option>
                    {% endfor %}
                </select>
            </div>
            <div class=\"col-md-4 d-flex gap-2\">
                <button type=\"submit\" class=\"btn btn-primary flex-grow-1\">
                    <i class=\"fas fa-filter me-2\"></i>Appliquer
                </button>
                <a href=\"{{ path('admin_offre_list') }}\" class=\"btn btn-outline-secondary\">Réinitialiser</a>
            </div>
        </form>
    </div>
</div>

<!-- Liste des offres -->
<div class=\"card\" style=\"border-radius: 15px; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.1);\">
    <div class=\"card-header bg-white\">
        <h5 class=\"mb-0\"><i class=\"fas fa-handshake me-2\"></i>Liste des offres</h5>
    </div>
    <div class=\"card-body\">
        {% if offres is empty %}
            <div class=\"text-center py-4\">
                <i class=\"fas fa-handshake fa-2x text-muted mb-2\"></i>
                <p class=\"text-muted\">Aucune offre trouvée</p>
            </div>
        {% else %}
            <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Annonce</th>
                            <th>Acheteur</th>
                            <th>Prix Proposé</th>
                            <th>Date</th>
                            <th>Statut</th>
                            <th class=\"text-end\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for offre in offres %}
                            <tr>
                                <td><strong>#{{ offre.id }}</strong></td>
                                <td>
                                    <a href=\"{{ path('admin_offre_list', {listing: offre.listing.id}) }}\" class=\"text-primary\">
                                        #{{ offre.listing.id }}
                                    </a>
                                </td>
                                <td>
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"avatar-sm me-2\">
                                            <div class=\"avatar-title bg-light rounded-circle text-primary\">
                                                <i class=\"fas fa-user\"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class=\"fw-medium\">{{ offre.utilisateur.email|split('@')|first }}</div>
                                            <small class=\"text-muted\">{{ offre.utilisateur.email }}</small>
                                        </div>
                                    </div>
                                </td>
                                <td><strong>{{ offre.prixPropose|number_format(2, ',', ' ') }} €</strong></td>
                                <td>{{ offre.datePropose|date('d/m/Y H:i') }}</td>
                                <td>
                                    {% if offre.statut == 'En attente' %}
                                        <span class=\"badge bg-warning\">En attente</span>
                                    {% elseif offre.statut == 'Acceptée' %}
                                        <span class=\"badge bg-success\">Acceptée</span>
                                    {% else %}
                                        <span class=\"badge bg-danger\">Refusée</span>
                                    {% endif %}
                                </td>
                                <td>
                                    <div class=\"d-flex justify-content-end gap-2\">
                                        <a href=\"{{ path('admin_offre_edit', {id: offre.id}) }}\" class=\"btn btn-sm btn-outline-primary\" title=\"Modifier\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>

                                        {% if offre.statut == 'En attente' %}
                                            <form method=\"post\" action=\"{{ path('admin_offre_accept', {id: offre.id}) }}\" style=\"display: inline;\">
                                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('accept_offre_' ~ offre.id) }}\">
                                                <button class=\"btn btn-sm btn-outline-success\" type=\"submit\" title=\"Accepter\">
                                                    <i class=\"fas fa-check\"></i>
                                                </button>
                                            </form>

                                            <form method=\"post\" action=\"{{ path('admin_offre_refuse', {id: offre.id}) }}\" style=\"display: inline;\">
                                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('refuse_offre_' ~ offre.id) }}\">
                                                <button class=\"btn btn-sm btn-outline-danger\" type=\"submit\" title=\"Refuser\">
                                                    <i class=\"fas fa-times\"></i>
                                                </button>
                                            </form>
                                        {% endif %}

                                        <form method=\"post\" action=\"{{ path('admin_offre_delete', {id: offre.id}) }}\" style=\"display: inline;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette offre ?')\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_offre_' ~ offre.id) }}\">
                                            <button class=\"btn btn-sm btn-outline-danger\" type=\"submit\" title=\"Supprimer\">
                                                <i class=\"fas fa-trash\"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        {% endif %}
    </div>
</div>
{% endblock %}
", "marketplace/admin_offre_list.html.twig", "C:\\xampp\\htdocs\\MuseHub-my-work\\MuseHub-my-work\\templates\\marketplace\\admin_offre_list.html.twig");
    }
}
