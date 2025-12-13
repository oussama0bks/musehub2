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

/* marketplace/admin_list.html.twig */
class __TwigTemplate_fcef3c7e6a827ef6cf99fd7f90105518 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/admin_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/admin_list.html.twig"));

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

        yield "Marketplace - MuseHub Admin";
        
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
        <h1 class=\"h3 mb-0\">Gestion Marketplace</h1>
        <p class=\"text-muted mb-0\">Ventes et revenus</p>
    </div>
    <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_marketplace_listing_new");
        yield "\" class=\"btn btn-primary\">
        <i class=\"fas fa-plus-circle me-2\"></i>Nouvelle annonce
    </a>
</div>

<!-- Navigation Onglets -->
<ul class=\"nav nav-tabs mb-4\" role=\"tablist\">
    <li class=\"nav-item\" role=\"presentation\">
        <button class=\"nav-link active\" id=\"tab-annonces\" data-bs-toggle=\"tab\" data-bs-target=\"#annonces\" type=\"button\" role=\"tab\" aria-controls=\"annonces\" aria-selected=\"true\">
            <i class=\"fas fa-tag me-2\"></i>Annonces
        </button>
    </li>
    <li class=\"nav-item\" role=\"presentation\">
        <button class=\"nav-link\" id=\"tab-offres\" data-bs-toggle=\"tab\" data-bs-target=\"#offres\" type=\"button\" role=\"tab\" aria-controls=\"offres\" aria-selected=\"false\">
            <i class=\"fas fa-handshake me-2\"></i>Offres
        </button>
    </li>
</ul>

<!-- Contenu des Onglets -->
<div class=\"tab-content\">
    <!-- Onglet Annonces -->
    <div class=\"tab-pane fade show active\" id=\"annonces\" role=\"tabpanel\" aria-labelledby=\"tab-annonces\">

<!-- Statistiques -->
<div class=\"row g-4 mb-4\">
    <div class=\"col-md-6\">
        <div class=\"card\" style=\"border-radius: 15px; border-left: 4px solid #10b981;\">
            <div class=\"card-body\">
                <h3 class=\"text-success\">";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["revenue"]) || array_key_exists("revenue", $context) ? $context["revenue"] : (function () { throw new RuntimeError('Variable "revenue" does not exist.', 40, $this->source); })()), "html", null, true);
        yield " €</h3>
                <p class=\"text-muted mb-0\">Revenus totaux";
        // line 41
        if (((isset($context["period"]) || array_key_exists("period", $context) ? $context["period"] : (function () { throw new RuntimeError('Variable "period" does not exist.', 41, $this->source); })()) != "all")) {
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["period"]) || array_key_exists("period", $context) ? $context["period"] : (function () { throw new RuntimeError('Variable "period" does not exist.', 41, $this->source); })()), "html", null, true);
            yield ")";
        }
        yield "</p>
            </div>
        </div>
    </div>
    <div class=\"col-md-6\">
        <div class=\"card\" style=\"border-radius: 15px; border-left: 4px solid #3b82f6;\">
            <div class=\"card-body\">
                <h3 class=\"text-primary\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["transactions"]) || array_key_exists("transactions", $context) ? $context["transactions"] : (function () { throw new RuntimeError('Variable "transactions" does not exist.', 48, $this->source); })())), "html", null, true);
        yield "</h3>
                <p class=\"text-muted mb-0\">Transactions";
        // line 49
        if (((isset($context["period"]) || array_key_exists("period", $context) ? $context["period"] : (function () { throw new RuntimeError('Variable "period" does not exist.', 49, $this->source); })()) != "all")) {
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["period"]) || array_key_exists("period", $context) ? $context["period"] : (function () { throw new RuntimeError('Variable "period" does not exist.', 49, $this->source); })()), "html", null, true);
            yield ")";
        }
        yield "</p>
            </div>
        </div>
    </div>
</div>

<!-- Filtres -->
<div class=\"card mb-4\" style=\"border-radius: 15px; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.1);\">
    <div class=\"card-body\">
        <form method=\"GET\" class=\"row g-3 align-items-end\">
            <div class=\"col-md-4\">
                <label class=\"form-label text-muted small mb-1\">Période</label>
                <select name=\"period\" class=\"form-select\">
                    <option value=\"all\" ";
        // line 62
        yield ((((isset($context["period"]) || array_key_exists("period", $context) ? $context["period"] : (function () { throw new RuntimeError('Variable "period" does not exist.', 62, $this->source); })()) == "all")) ? ("selected") : (""));
        yield ">Toutes les périodes</option>
                    <option value=\"week\" ";
        // line 63
        yield ((((isset($context["period"]) || array_key_exists("period", $context) ? $context["period"] : (function () { throw new RuntimeError('Variable "period" does not exist.', 63, $this->source); })()) == "week")) ? ("selected") : (""));
        yield ">7 derniers jours</option>
                    <option value=\"month\" ";
        // line 64
        yield ((((isset($context["period"]) || array_key_exists("period", $context) ? $context["period"] : (function () { throw new RuntimeError('Variable "period" does not exist.', 64, $this->source); })()) == "month")) ? ("selected") : (""));
        yield ">30 derniers jours</option>
                </select>
            </div>
            <div class=\"col-md-4\">
                <label class=\"form-label text-muted small mb-1\">Statut des annonces</label>
                <select name=\"status\" class=\"form-select\">
                    ";
        // line 70
        $context["listingStatuses"] = ["all" => "Tous", "available" => "Disponibles", "paused" => "En pause", "sold_out" => "Épuisés"];
        // line 71
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["listingStatuses"]) || array_key_exists("listingStatuses", $context) ? $context["listingStatuses"] : (function () { throw new RuntimeError('Variable "listingStatuses" does not exist.', 71, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["label"]) {
            // line 72
            yield "                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\" ";
            yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 72, $this->source); })()) == $context["key"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['label'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        yield "                </select>
            </div>
            <div class=\"col-md-4 d-flex gap-2\">
                <button type=\"submit\" class=\"btn btn-primary flex-grow-1\">Appliquer</button>
                <a href=\"";
        // line 78
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_marketplace_list");
        yield "\" class=\"btn btn-outline-secondary\">Réinitialiser</a>
            </div>
        </form>
    </div>
</div>

<!-- Transactions -->
<div class=\"card mb-4\" style=\"border-radius: 15px; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.1);\">
    <div class=\"card-header bg-white\">
        <h5 class=\"mb-0\"><i class=\"fas fa-receipt me-2\"></i>Transactions</h5>
    </div>
    <div class=\"card-body\">
        <div class=\"table-responsive\">
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th>UUID</th>
                        <th>Acheteur</th>
                        <th>Montant</th>
                        <th>Date</th>
                        <th>Statut</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["transactions"]) || array_key_exists("transactions", $context) ? $context["transactions"] : (function () { throw new RuntimeError('Variable "transactions" does not exist.', 102, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["transaction"]) {
            // line 103
            yield "                    <tr>
                        <td><code>";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "uuid", [], "any", false, false, false, 104), 0, 8), "html", null, true);
            yield "...</code></td>
                        <td><code>";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "buyerUuid", [], "any", false, false, false, 105), 0, 8), "html", null, true);
            yield "...</code></td>
                        <td><strong>";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "amount", [], "any", false, false, false, 106), "html", null, true);
            yield " €</strong></td>
                        <td>";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "date", [], "any", false, false, false, 107), "d/m/Y H:i"), "html", null, true);
            yield "</td>
                        <td>
                            <span class=\"badge bg-";
            // line 109
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "status", [], "any", false, false, false, 109) == "paid")) ? ("success") : ("warning"));
            yield "\">
                                ";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "status", [], "any", false, false, false, 110), "html", null, true);
            yield "
                            </span>
                        </td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 114
        if (!$context['_iterated']) {
            // line 115
            yield "                    <tr>
                        <td colspan=\"5\" class=\"text-center py-4\">
                            <i class=\"fas fa-shopping-cart fa-2x text-muted mb-2\"></i>
                            <p class=\"text-muted\">Aucune transaction</p>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['transaction'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        yield "                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Listings -->
<div class=\"card\" style=\"border-radius: 15px; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.1);\">
    <div class=\"card-header bg-white\">
        <h5 class=\"mb-0\"><i class=\"fas fa-tags me-2\"></i>Annonces</h5>
    </div>
    <div class=\"card-body\">
        <div class=\"table-responsive\">
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Artwork UUID</th>
                        <th>Prix</th>
                        <th>Stock</th>
                        <th>Statut</th>
                        <th>Créé le</th>
                        <th class=\"text-end\">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["listings"]) || array_key_exists("listings", $context) ? $context["listings"] : (function () { throw new RuntimeError('Variable "listings" does not exist.', 148, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["listing"]) {
            // line 149
            yield "                    <tr>
                        <td>";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["listing"], "id", [], "any", false, false, false, 150), "html", null, true);
            yield "</td>
                        <td><code>";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["listing"], "artworkUuid", [], "any", false, false, false, 151), 0, 8), "html", null, true);
            yield "...</code></td>
                        <td><strong>";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["listing"], "price", [], "any", false, false, false, 152), "html", null, true);
            yield " €</strong></td>
                        <td>";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["listing"], "stock", [], "any", false, false, false, 153), "html", null, true);
            yield "</td>
                        <td>
                            ";
            // line 155
            $context["badge"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["listing"], "status", [], "any", false, false, false, 155) == "available")) ? ("success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["listing"], "status", [], "any", false, false, false, 155) == "paused")) ? ("warning") : ("danger"))));
            // line 156
            yield "                            <span class=\"badge bg-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["badge"]) || array_key_exists("badge", $context) ? $context["badge"] : (function () { throw new RuntimeError('Variable "badge" does not exist.', 156, $this->source); })()), "html", null, true);
            yield "\">
                                ";
            // line 157
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["listing"], "status", [], "any", false, false, false, 157), "html", null, true);
            yield "
                            </span>
                        </td>
                        <td>";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["listing"], "createdAt", [], "any", false, false, false, 160), "d/m/Y"), "html", null, true);
            yield "</td>
                        <td>
                            <div class=\"d-flex justify-content-end gap-2\">
                                <a href=\"";
            // line 163
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_marketplace_listing_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["listing"], "id", [], "any", false, false, false, 163)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-secondary\">
                                    Modifier
                                </a>
                                <form action=\"";
            // line 166
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_marketplace_listing_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["listing"], "id", [], "any", false, false, false, 166)]), "html", null, true);
            yield "\" method=\"POST\" onsubmit=\"return confirm('Supprimer cette annonce ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 167
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_listing_" . CoreExtension::getAttribute($this->env, $this->source, $context["listing"], "id", [], "any", false, false, false, 167))), "html", null, true);
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
        // line 175
        if (!$context['_iterated']) {
            // line 176
            yield "                    <tr>
                        <td colspan=\"6\" class=\"text-center py-4\">
                            <i class=\"fas fa-tags fa-2x text-muted mb-2\"></i>
                            <p class=\"text-muted\">Aucune annonce</p>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['listing'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 183
        yield "                </tbody>
            </table>
        </div>
    </div>
</div>

    </div><!-- FIN tab-pane Annonces -->
    <!-- Onglet Offres -->
    <div class=\"tab-pane fade\" id=\"offres\" role=\"tabpanel\" aria-labelledby=\"tab-offres\">
        <div class=\"row g-4 mb-4\">
                <div class=\"col-md-3\">
                    <div class=\"card\" style=\"border-left:4px solid #f59e0b;\">
                        <div class=\"card-body\">
                            <h6 class=\"text-muted mb-2\">En Attente</h6>
                            <h3 class=\"text-warning mb-0\">";
        // line 197
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["offres_en_attente"]) || array_key_exists("offres_en_attente", $context) ? $context["offres_en_attente"] : (function () { throw new RuntimeError('Variable "offres_en_attente" does not exist.', 197, $this->source); })()), "html", null, true);
        yield "</h3>
                            <small class=\"text-muted\">Offres à traiter</small>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"card\" style=\"border-left:4px solid #10b981;\">
                        <div class=\"card-body\">
                            <h6 class=\"text-muted mb-2\">Acceptées</h6>
                            <h3 class=\"text-success mb-0\">";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["offres_acceptees"]) || array_key_exists("offres_acceptees", $context) ? $context["offres_acceptees"] : (function () { throw new RuntimeError('Variable "offres_acceptees" does not exist.', 206, $this->source); })()), "html", null, true);
        yield "</h3>
                            <small class=\"text-muted\">Offres confirmées</small>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"card\" style=\"border-left:4px solid #ef4444;\">
                        <div class=\"card-body\">
                            <h6 class=\"text-muted mb-2\">Refusées</h6>
                            <h3 class=\"text-danger mb-0\">";
        // line 215
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["offres_refusees"]) || array_key_exists("offres_refusees", $context) ? $context["offres_refusees"] : (function () { throw new RuntimeError('Variable "offres_refusees" does not exist.', 215, $this->source); })()), "html", null, true);
        yield "</h3>
                            <small class=\"text-muted\">Offres rejetées</small>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"card\" style=\"border-left:4px solid #3b82f6;\">
                        <div class=\"card-body\">
                            <h6 class=\"text-muted mb-2\">Total</h6>
                            <h3 class=\"text-primary mb-0\">";
        // line 224
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["offres_total"]) || array_key_exists("offres_total", $context) ? $context["offres_total"] : (function () { throw new RuntimeError('Variable "offres_total" does not exist.', 224, $this->source); })()), "html", null, true);
        yield "</h3>
                            <small class=\"text-muted\">Toutes les offres</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"card mb-4\">
                <div class=\"card-header bg-white d-flex justify-content-between align-items-center\">
                    <h6 class=\"mb-0\"><i class=\"fas fa-clock me-2\"></i>Dernières offres</h6>
                    <a href=\"";
        // line 234
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_offre_list");
        yield "\" class=\"btn btn-sm btn-outline-primary\">Voir toutes</a>
                </div>
                <div class=\"card-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-sm table-hover\">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Annonce</th>
                                    <th>Acheteur</th>
                                    <th>Prix</th>
                                    <th>Date</th>
                                    <th>Statut</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 250
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recent_offres"]) || array_key_exists("recent_offres", $context) ? $context["recent_offres"] : (function () { throw new RuntimeError('Variable "recent_offres" does not exist.', 250, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 251
            yield "                                <tr>
                                    <td>";
            // line 252
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 252), "html", null, true);
            yield "</td>
                                    <td>#";
            // line 253
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "listing", [], "any", false, false, false, 253), "id", [], "any", false, false, false, 253), "html", null, true);
            yield "</td>
                                    <td>";
            // line 254
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "utilisateur", [], "any", false, false, false, 254), "username", [], "any", false, false, false, 254), "html", null, true);
            yield "</td>
                                    <td>";
            // line 255
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "prixPropose", [], "any", false, false, false, 255), "html", null, true);
            yield " €</td>
                                    <td>";
            // line 256
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "datePropose", [], "any", false, false, false, 256), "d/m H:i"), "html", null, true);
            yield "</td>
                                    <td>
                                        ";
            // line 258
            $context["badge"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "statut", [], "any", false, false, false, 258) == "En attente")) ? ("warning") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "statut", [], "any", false, false, false, 258) == "Acceptée")) ? ("success") : ("danger"))));
            // line 259
            yield "                                        <span class=\"badge bg-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["badge"]) || array_key_exists("badge", $context) ? $context["badge"] : (function () { throw new RuntimeError('Variable "badge" does not exist.', 259, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "statut", [], "any", false, false, false, 259), "html", null, true);
            yield "</span>
                                    </td>
                                </tr>
                                ";
            $context['_iterated'] = true;
        }
        // line 262
        if (!$context['_iterated']) {
            // line 263
            yield "                                <tr>
                                    <td colspan=\"6\" class=\"text-center\">Aucune offre récente</td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['offre'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 267
        yield "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
                <div class=\"card border-warning\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title text-muted\">En Attente</h5>
                        <h2 class=\"text-warning\">";
        // line 276
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["offres_en_attente"]) || array_key_exists("offres_en_attente", $context) ? $context["offres_en_attente"] : (function () { throw new RuntimeError('Variable "offres_en_attente" does not exist.', 276, $this->source); })()), "html", null, true);
        yield "</h2>
                        <small class=\"text-muted\">Offres à traiter</small>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"card border-success\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title text-muted\">Acceptées</h5>
                        <h2 class=\"text-success\">";
        // line 285
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["offres_acceptees"]) || array_key_exists("offres_acceptees", $context) ? $context["offres_acceptees"] : (function () { throw new RuntimeError('Variable "offres_acceptees" does not exist.', 285, $this->source); })()), "html", null, true);
        yield "</h2>
                        <small class=\"text-muted\">Offres confirmées</small>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"card border-danger\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title text-muted\">Refusées</h5>
                        <h2 class=\"text-danger\">";
        // line 294
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["offres_refusees"]) || array_key_exists("offres_refusees", $context) ? $context["offres_refusees"] : (function () { throw new RuntimeError('Variable "offres_refusees" does not exist.', 294, $this->source); })()), "html", null, true);
        yield "</h2>
                        <small class=\"text-muted\">Offres rejetées</small>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"card border-info\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title text-muted\">Total</h5>
                        <h2 class=\"text-info\">";
        // line 303
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["offres_total"]) || array_key_exists("offres_total", $context) ? $context["offres_total"] : (function () { throw new RuntimeError('Variable "offres_total" does not exist.', 303, $this->source); })()), "html", null, true);
        yield "</h2>
                        <small class=\"text-muted\">Toutes les offres</small>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"card mb-4\" style=\"border-radius: 15px; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.1);\">
            <div class=\"card-header bg-white d-flex justify-content-between align-items-center\">
                <h5 class=\"mb-0\"><i class=\"fas fa-handshake me-2\"></i>Gestion des Offres</h5>
                <a href=\"";
        // line 313
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_offre_new");
        yield "\" class=\"btn btn-sm btn-primary\">
                    <i class=\"fas fa-plus\"></i> Nouvelle Offre
                </a>
            </div>
            <div class=\"card-body\">
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
                            ";
        // line 332
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["offres"]) || array_key_exists("offres", $context) ? $context["offres"] : (function () { throw new RuntimeError('Variable "offres" does not exist.', 332, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 333
            yield "                            <tr>
                                <td>";
            // line 334
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 334), "html", null, true);
            yield "</td>
                                <td><strong>#";
            // line 335
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "listing", [], "any", false, false, false, 335), "id", [], "any", false, false, false, 335), "html", null, true);
            yield "</strong></td>
                                <td>";
            // line 336
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "utilisateur", [], "any", false, false, false, 336), "username", [], "any", false, false, false, 336), "html", null, true);
            yield "</td>
                                <td><strong>";
            // line 337
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "prixPropose", [], "any", false, false, false, 337), "html", null, true);
            yield " €</strong></td>
                                <td>";
            // line 338
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "datePropose", [], "any", false, false, false, 338), "d/m/Y H:i"), "html", null, true);
            yield "</td>
                                <td>
                                    ";
            // line 340
            $context["badgeColor"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "statut", [], "any", false, false, false, 340) == "En attente")) ? ("warning") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "statut", [], "any", false, false, false, 340) == "Acceptée")) ? ("success") : ("danger"))));
            // line 341
            yield "                                    <span class=\"badge bg-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["badgeColor"]) || array_key_exists("badgeColor", $context) ? $context["badgeColor"] : (function () { throw new RuntimeError('Variable "badgeColor" does not exist.', 341, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "statut", [], "any", false, false, false, 341), "html", null, true);
            yield "</span>
                                </td>
                                <td class=\"text-end\">
                                    <div class=\"btn-group btn-group-sm\" role=\"group\">
                                        <a href=\"";
            // line 345
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_offre_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 345)]), "html", null, true);
            yield "\" class=\"btn btn-outline-secondary\" title=\"Modifier\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>
                                        ";
            // line 348
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "statut", [], "any", false, false, false, 348) == "En attente")) {
                // line 349
                yield "                                        <form action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_offre_accept", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 349)]), "html", null, true);
                yield "\" method=\"POST\" style=\"display:inline;\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 350
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("accept_offre_" . CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 350))), "html", null, true);
                yield "\">
                                            <button type=\"submit\" class=\"btn btn-outline-success btn-sm\" title=\"Accepter\">
                                                <i class=\"fas fa-check\"></i>
                                            </button>
                                        </form>
                                        <form action=\"";
                // line 355
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_offre_refuse", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 355)]), "html", null, true);
                yield "\" method=\"POST\" style=\"display:inline;\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 356
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("refuse_offre_" . CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 356))), "html", null, true);
                yield "\">
                                            <button type=\"submit\" class=\"btn btn-outline-danger btn-sm\" title=\"Refuser\">
                                                <i class=\"fas fa-times\"></i>
                                            </button>
                                        </form>
                                        ";
            }
            // line 362
            yield "                                    </div>
                                </td>
                            </tr>
                            ";
            $context['_iterated'] = true;
        }
        // line 365
        if (!$context['_iterated']) {
            // line 366
            yield "                            <tr>
                                <td colspan=\"7\" class=\"text-center py-4\">
                                    <i class=\"fas fa-handshake fa-2x text-muted mb-2\"></i>
                                    <p class=\"text-muted\">Aucune offre - <a href=\"";
            // line 369
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_offre_new");
            yield "\">Créer une offre</a></p>
                                </td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['offre'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 373
        yield "                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class=\"alert alert-info\">
            <i class=\"fas fa-info-circle me-2\"></i>
            Pour une gestion complète des offres avec filtrage et statistiques, 
            <a href=\"";
        // line 382
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_offre_list");
        yield "\" class=\"alert-link\">cliquez ici</a>
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
        return "marketplace/admin_list.html.twig";
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
        return array (  741 => 382,  730 => 373,  720 => 369,  715 => 366,  713 => 365,  706 => 362,  697 => 356,  693 => 355,  685 => 350,  680 => 349,  678 => 348,  672 => 345,  662 => 341,  660 => 340,  655 => 338,  651 => 337,  647 => 336,  643 => 335,  639 => 334,  636 => 333,  631 => 332,  609 => 313,  596 => 303,  584 => 294,  572 => 285,  560 => 276,  549 => 267,  540 => 263,  538 => 262,  527 => 259,  525 => 258,  520 => 256,  516 => 255,  512 => 254,  508 => 253,  504 => 252,  501 => 251,  496 => 250,  477 => 234,  464 => 224,  452 => 215,  440 => 206,  428 => 197,  412 => 183,  400 => 176,  398 => 175,  385 => 167,  381 => 166,  375 => 163,  369 => 160,  363 => 157,  358 => 156,  356 => 155,  351 => 153,  347 => 152,  343 => 151,  339 => 150,  336 => 149,  331 => 148,  303 => 122,  291 => 115,  289 => 114,  280 => 110,  276 => 109,  271 => 107,  267 => 106,  263 => 105,  259 => 104,  256 => 103,  251 => 102,  224 => 78,  218 => 74,  205 => 72,  200 => 71,  198 => 70,  189 => 64,  185 => 63,  181 => 62,  161 => 49,  157 => 48,  143 => 41,  139 => 40,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Marketplace - MuseHub Admin{% endblock %}

{% block body %}
<div class=\"mb-4 d-flex flex-wrap justify-content-between align-items-center gap-3\">
    <div>
        <h1 class=\"h3 mb-0\">Gestion Marketplace</h1>
        <p class=\"text-muted mb-0\">Ventes et revenus</p>
    </div>
    <a href=\"{{ path('admin_marketplace_listing_new') }}\" class=\"btn btn-primary\">
        <i class=\"fas fa-plus-circle me-2\"></i>Nouvelle annonce
    </a>
</div>

<!-- Navigation Onglets -->
<ul class=\"nav nav-tabs mb-4\" role=\"tablist\">
    <li class=\"nav-item\" role=\"presentation\">
        <button class=\"nav-link active\" id=\"tab-annonces\" data-bs-toggle=\"tab\" data-bs-target=\"#annonces\" type=\"button\" role=\"tab\" aria-controls=\"annonces\" aria-selected=\"true\">
            <i class=\"fas fa-tag me-2\"></i>Annonces
        </button>
    </li>
    <li class=\"nav-item\" role=\"presentation\">
        <button class=\"nav-link\" id=\"tab-offres\" data-bs-toggle=\"tab\" data-bs-target=\"#offres\" type=\"button\" role=\"tab\" aria-controls=\"offres\" aria-selected=\"false\">
            <i class=\"fas fa-handshake me-2\"></i>Offres
        </button>
    </li>
</ul>

<!-- Contenu des Onglets -->
<div class=\"tab-content\">
    <!-- Onglet Annonces -->
    <div class=\"tab-pane fade show active\" id=\"annonces\" role=\"tabpanel\" aria-labelledby=\"tab-annonces\">

<!-- Statistiques -->
<div class=\"row g-4 mb-4\">
    <div class=\"col-md-6\">
        <div class=\"card\" style=\"border-radius: 15px; border-left: 4px solid #10b981;\">
            <div class=\"card-body\">
                <h3 class=\"text-success\">{{ revenue }} €</h3>
                <p class=\"text-muted mb-0\">Revenus totaux{% if period != 'all' %} ({{ period }}){% endif %}</p>
            </div>
        </div>
    </div>
    <div class=\"col-md-6\">
        <div class=\"card\" style=\"border-radius: 15px; border-left: 4px solid #3b82f6;\">
            <div class=\"card-body\">
                <h3 class=\"text-primary\">{{ transactions|length }}</h3>
                <p class=\"text-muted mb-0\">Transactions{% if period != 'all' %} ({{ period }}){% endif %}</p>
            </div>
        </div>
    </div>
</div>

<!-- Filtres -->
<div class=\"card mb-4\" style=\"border-radius: 15px; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.1);\">
    <div class=\"card-body\">
        <form method=\"GET\" class=\"row g-3 align-items-end\">
            <div class=\"col-md-4\">
                <label class=\"form-label text-muted small mb-1\">Période</label>
                <select name=\"period\" class=\"form-select\">
                    <option value=\"all\" {{ period == 'all' ? 'selected' : '' }}>Toutes les périodes</option>
                    <option value=\"week\" {{ period == 'week' ? 'selected' : '' }}>7 derniers jours</option>
                    <option value=\"month\" {{ period == 'month' ? 'selected' : '' }}>30 derniers jours</option>
                </select>
            </div>
            <div class=\"col-md-4\">
                <label class=\"form-label text-muted small mb-1\">Statut des annonces</label>
                <select name=\"status\" class=\"form-select\">
                    {% set listingStatuses = {'all':'Tous','available':'Disponibles','paused':'En pause','sold_out':'Épuisés'} %}
                    {% for key, label in listingStatuses %}
                        <option value=\"{{ key }}\" {{ status == key ? 'selected' : '' }}>{{ label }}</option>
                    {% endfor %}
                </select>
            </div>
            <div class=\"col-md-4 d-flex gap-2\">
                <button type=\"submit\" class=\"btn btn-primary flex-grow-1\">Appliquer</button>
                <a href=\"{{ path('admin_marketplace_list') }}\" class=\"btn btn-outline-secondary\">Réinitialiser</a>
            </div>
        </form>
    </div>
</div>

<!-- Transactions -->
<div class=\"card mb-4\" style=\"border-radius: 15px; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.1);\">
    <div class=\"card-header bg-white\">
        <h5 class=\"mb-0\"><i class=\"fas fa-receipt me-2\"></i>Transactions</h5>
    </div>
    <div class=\"card-body\">
        <div class=\"table-responsive\">
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th>UUID</th>
                        <th>Acheteur</th>
                        <th>Montant</th>
                        <th>Date</th>
                        <th>Statut</th>
                    </tr>
                </thead>
                <tbody>
                    {% for transaction in transactions %}
                    <tr>
                        <td><code>{{ transaction.uuid|slice(0, 8) }}...</code></td>
                        <td><code>{{ transaction.buyerUuid|slice(0, 8) }}...</code></td>
                        <td><strong>{{ transaction.amount }} €</strong></td>
                        <td>{{ transaction.date|date('d/m/Y H:i') }}</td>
                        <td>
                            <span class=\"badge bg-{{ transaction.status == 'paid' ? 'success' : 'warning' }}\">
                                {{ transaction.status }}
                            </span>
                        </td>
                    </tr>
                    {% else %}
                    <tr>
                        <td colspan=\"5\" class=\"text-center py-4\">
                            <i class=\"fas fa-shopping-cart fa-2x text-muted mb-2\"></i>
                            <p class=\"text-muted\">Aucune transaction</p>
                        </td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Listings -->
<div class=\"card\" style=\"border-radius: 15px; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.1);\">
    <div class=\"card-header bg-white\">
        <h5 class=\"mb-0\"><i class=\"fas fa-tags me-2\"></i>Annonces</h5>
    </div>
    <div class=\"card-body\">
        <div class=\"table-responsive\">
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Artwork UUID</th>
                        <th>Prix</th>
                        <th>Stock</th>
                        <th>Statut</th>
                        <th>Créé le</th>
                        <th class=\"text-end\">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for listing in listings %}
                    <tr>
                        <td>{{ listing.id }}</td>
                        <td><code>{{ listing.artworkUuid|slice(0, 8) }}...</code></td>
                        <td><strong>{{ listing.price }} €</strong></td>
                        <td>{{ listing.stock }}</td>
                        <td>
                            {% set badge = listing.status == 'available' ? 'success' : (listing.status == 'paused' ? 'warning' : 'danger') %}
                            <span class=\"badge bg-{{ badge }}\">
                                {{ listing.status }}
                            </span>
                        </td>
                        <td>{{ listing.createdAt|date('d/m/Y') }}</td>
                        <td>
                            <div class=\"d-flex justify-content-end gap-2\">
                                <a href=\"{{ path('admin_marketplace_listing_edit', {id: listing.id}) }}\" class=\"btn btn-sm btn-outline-secondary\">
                                    Modifier
                                </a>
                                <form action=\"{{ path('admin_marketplace_listing_delete', {id: listing.id}) }}\" method=\"POST\" onsubmit=\"return confirm('Supprimer cette annonce ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_listing_' ~ listing.id) }}\">
                                    <button type=\"submit\" class=\"btn btn-sm btn-outline-danger\">
                                        Supprimer
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    {% else %}
                    <tr>
                        <td colspan=\"6\" class=\"text-center py-4\">
                            <i class=\"fas fa-tags fa-2x text-muted mb-2\"></i>
                            <p class=\"text-muted\">Aucune annonce</p>
                        </td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
</div>

    </div><!-- FIN tab-pane Annonces -->
    <!-- Onglet Offres -->
    <div class=\"tab-pane fade\" id=\"offres\" role=\"tabpanel\" aria-labelledby=\"tab-offres\">
        <div class=\"row g-4 mb-4\">
                <div class=\"col-md-3\">
                    <div class=\"card\" style=\"border-left:4px solid #f59e0b;\">
                        <div class=\"card-body\">
                            <h6 class=\"text-muted mb-2\">En Attente</h6>
                            <h3 class=\"text-warning mb-0\">{{ offres_en_attente }}</h3>
                            <small class=\"text-muted\">Offres à traiter</small>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"card\" style=\"border-left:4px solid #10b981;\">
                        <div class=\"card-body\">
                            <h6 class=\"text-muted mb-2\">Acceptées</h6>
                            <h3 class=\"text-success mb-0\">{{ offres_acceptees }}</h3>
                            <small class=\"text-muted\">Offres confirmées</small>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"card\" style=\"border-left:4px solid #ef4444;\">
                        <div class=\"card-body\">
                            <h6 class=\"text-muted mb-2\">Refusées</h6>
                            <h3 class=\"text-danger mb-0\">{{ offres_refusees }}</h3>
                            <small class=\"text-muted\">Offres rejetées</small>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"card\" style=\"border-left:4px solid #3b82f6;\">
                        <div class=\"card-body\">
                            <h6 class=\"text-muted mb-2\">Total</h6>
                            <h3 class=\"text-primary mb-0\">{{ offres_total }}</h3>
                            <small class=\"text-muted\">Toutes les offres</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"card mb-4\">
                <div class=\"card-header bg-white d-flex justify-content-between align-items-center\">
                    <h6 class=\"mb-0\"><i class=\"fas fa-clock me-2\"></i>Dernières offres</h6>
                    <a href=\"{{ path('admin_offre_list') }}\" class=\"btn btn-sm btn-outline-primary\">Voir toutes</a>
                </div>
                <div class=\"card-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-sm table-hover\">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Annonce</th>
                                    <th>Acheteur</th>
                                    <th>Prix</th>
                                    <th>Date</th>
                                    <th>Statut</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for offre in recent_offres %}
                                <tr>
                                    <td>{{ offre.id }}</td>
                                    <td>#{{ offre.listing.id }}</td>
                                    <td>{{ offre.utilisateur.username }}</td>
                                    <td>{{ offre.prixPropose }} €</td>
                                    <td>{{ offre.datePropose|date('d/m H:i') }}</td>
                                    <td>
                                        {% set badge = offre.statut == 'En attente' ? 'warning' : (offre.statut == 'Acceptée' ? 'success' : 'danger') %}
                                        <span class=\"badge bg-{{ badge }}\">{{ offre.statut }}</span>
                                    </td>
                                </tr>
                                {% else %}
                                <tr>
                                    <td colspan=\"6\" class=\"text-center\">Aucune offre récente</td>
                                </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
                <div class=\"card border-warning\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title text-muted\">En Attente</h5>
                        <h2 class=\"text-warning\">{{ offres_en_attente }}</h2>
                        <small class=\"text-muted\">Offres à traiter</small>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"card border-success\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title text-muted\">Acceptées</h5>
                        <h2 class=\"text-success\">{{ offres_acceptees }}</h2>
                        <small class=\"text-muted\">Offres confirmées</small>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"card border-danger\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title text-muted\">Refusées</h5>
                        <h2 class=\"text-danger\">{{ offres_refusees }}</h2>
                        <small class=\"text-muted\">Offres rejetées</small>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"card border-info\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title text-muted\">Total</h5>
                        <h2 class=\"text-info\">{{ offres_total }}</h2>
                        <small class=\"text-muted\">Toutes les offres</small>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"card mb-4\" style=\"border-radius: 15px; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.1);\">
            <div class=\"card-header bg-white d-flex justify-content-between align-items-center\">
                <h5 class=\"mb-0\"><i class=\"fas fa-handshake me-2\"></i>Gestion des Offres</h5>
                <a href=\"{{ path('admin_offre_new') }}\" class=\"btn btn-sm btn-primary\">
                    <i class=\"fas fa-plus\"></i> Nouvelle Offre
                </a>
            </div>
            <div class=\"card-body\">
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
                                <td>{{ offre.id }}</td>
                                <td><strong>#{{ offre.listing.id }}</strong></td>
                                <td>{{ offre.utilisateur.username }}</td>
                                <td><strong>{{ offre.prixPropose }} €</strong></td>
                                <td>{{ offre.datePropose|date('d/m/Y H:i') }}</td>
                                <td>
                                    {% set badgeColor = offre.statut == 'En attente' ? 'warning' : (offre.statut == 'Acceptée' ? 'success' : 'danger') %}
                                    <span class=\"badge bg-{{ badgeColor }}\">{{ offre.statut }}</span>
                                </td>
                                <td class=\"text-end\">
                                    <div class=\"btn-group btn-group-sm\" role=\"group\">
                                        <a href=\"{{ path('admin_offre_edit', {id: offre.id}) }}\" class=\"btn btn-outline-secondary\" title=\"Modifier\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>
                                        {% if offre.statut == 'En attente' %}
                                        <form action=\"{{ path('admin_offre_accept', {id: offre.id}) }}\" method=\"POST\" style=\"display:inline;\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('accept_offre_' ~ offre.id) }}\">
                                            <button type=\"submit\" class=\"btn btn-outline-success btn-sm\" title=\"Accepter\">
                                                <i class=\"fas fa-check\"></i>
                                            </button>
                                        </form>
                                        <form action=\"{{ path('admin_offre_refuse', {id: offre.id}) }}\" method=\"POST\" style=\"display:inline;\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('refuse_offre_' ~ offre.id) }}\">
                                            <button type=\"submit\" class=\"btn btn-outline-danger btn-sm\" title=\"Refuser\">
                                                <i class=\"fas fa-times\"></i>
                                            </button>
                                        </form>
                                        {% endif %}
                                    </div>
                                </td>
                            </tr>
                            {% else %}
                            <tr>
                                <td colspan=\"7\" class=\"text-center py-4\">
                                    <i class=\"fas fa-handshake fa-2x text-muted mb-2\"></i>
                                    <p class=\"text-muted\">Aucune offre - <a href=\"{{ path('admin_offre_new') }}\">Créer une offre</a></p>
                                </td>
                            </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class=\"alert alert-info\">
            <i class=\"fas fa-info-circle me-2\"></i>
            Pour une gestion complète des offres avec filtrage et statistiques, 
            <a href=\"{{ path('admin_offre_list') }}\" class=\"alert-link\">cliquez ici</a>
        </div>
    </div>
</div>
{% endblock %}


", "marketplace/admin_list.html.twig", "C:\\xampp\\htdocs\\MuseHub-my-work\\MuseHub-my-work\\templates\\marketplace\\admin_list.html.twig");
    }
}
