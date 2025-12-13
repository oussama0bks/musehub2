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

/* front/marketplace.html.twig */
class __TwigTemplate_d310d38659f0b975d5dabd0d4bea4924 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/marketplace.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/marketplace.html.twig"));

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

        yield "Marketplace - MuseHub";
        
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
    <div class=\"text-center mb-5\">
        <h1 class=\"display-4 fw-bold mb-3\">Marketplace</h1>
        <p class=\"lead text-muted\">Achetez des œuvres d'art authentiques</p>
    </div>

    <!-- Formulaire de création d'annonce -->
    ";
        // line 13
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13) && (CoreExtension::inFilter("ROLE_ARTIST", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13), "roles", [], "any", false, false, false, 13)) || CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13), "roles", [], "any", false, false, false, 13))))) {
            // line 14
            yield "    <div class=\"card mb-5\">
        <div class=\"card-body\">
            <h5 class=\"card-title mb-3\">
                <i class=\"fas fa-plus-circle me-2\"></i>Créer une nouvelle annonce
            </h5>
            <form action=\"";
            // line 19
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("web_marketplace_listing_create");
            yield "\" method=\"POST\" id=\"listingForm\">
                <div class=\"row\">
                    <div class=\"col-md-6 mb-3\">
                        <label class=\"form-label\">Œuvre *</label>
                        <select class=\"form-select\" name=\"artwork_uuid\" required>
                            <option value=\"\">Sélectionner une œuvre</option>
                            ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["userArtworks"]) || array_key_exists("userArtworks", $context) ? $context["userArtworks"] : (function () { throw new RuntimeError('Variable "userArtworks" does not exist.', 25, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["artwork"]) {
                // line 26
                yield "                                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["artwork"], "artistUuid", [], "any", false, false, false, 26), "html", null, true);
                yield "-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["artwork"], "id", [], "any", false, false, false, 26), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["artwork"], "title", [], "any", false, false, false, 26), "html", null, true);
                yield " ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["artwork"], "price", [], "any", false, false, false, 26)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "(";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["artwork"], "price", [], "any", false, false, false, 26), "html", null, true);
                    yield " €)";
                }
                yield "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['artwork'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            yield "                        </select>
                        ";
            // line 29
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["userArtworks"]) || array_key_exists("userArtworks", $context) ? $context["userArtworks"] : (function () { throw new RuntimeError('Variable "userArtworks" does not exist.', 29, $this->source); })())) == 0)) {
                // line 30
                yield "                            <small class=\"text-muted\">Vous devez d'abord créer une œuvre dans la section Œuvres.</small>
                        ";
            }
            // line 32
            yield "                    </div>
                    <div class=\"col-md-3 mb-3\">
                        <label class=\"form-label\">Prix (€) *</label>
                        <input type=\"number\" step=\"0.01\" class=\"form-control\" name=\"price\" required>
                    </div>
                    <div class=\"col-md-3 mb-3\">
                        <label class=\"form-label\">Stock</label>
                        <input type=\"number\" class=\"form-control\" name=\"stock\" value=\"1\" min=\"1\">
                    </div>
                </div>
                <div class=\"d-flex justify-content-end\">
                    <button type=\"submit\" class=\"btn btn-primary\" ";
            // line 43
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["userArtworks"]) || array_key_exists("userArtworks", $context) ? $context["userArtworks"] : (function () { throw new RuntimeError('Variable "userArtworks" does not exist.', 43, $this->source); })())) == 0)) {
                yield "disabled";
            }
            yield ">
                        <i class=\"fas fa-save me-2\"></i>Créer l'annonce
                    </button>
                </div>
            </form>
        </div>
    </div>
    ";
        }
        // line 51
        yield "
    <div class=\"row g-4\">
        ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["listings"]) || array_key_exists("listings", $context) ? $context["listings"] : (function () { throw new RuntimeError('Variable "listings" does not exist.', 53, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["listing"]) {
            // line 54
            yield "        <div class=\"col-md-6 col-lg-4\" id=\"listing-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["listing"], "id", [], "any", false, false, false, 54), "html", null, true);
            yield "\">
            <div class=\"card h-100\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Annonce #";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["listing"], "id", [], "any", false, false, false, 57), "html", null, true);
            yield "</h5>
                    <p class=\"text-muted small mb-2\">
                        <span class=\"badge bg-";
            // line 59
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["listing"], "status", [], "any", false, false, false, 59) == "available")) ? ("success") : ("danger"));
            yield "\">
                            ";
            // line 60
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["listing"], "status", [], "any", false, false, false, 60) == "available")) ? ("Disponible") : ("Épuisé"));
            yield "
                        </span>
                        ";
            // line 62
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["listing"], "stock", [], "any", false, false, false, 62) > 0)) {
                // line 63
                yield "                            <span class=\"badge bg-info\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["listing"], "stock", [], "any", false, false, false, 63), "html", null, true);
                yield " en stock</span>
                        ";
            }
            // line 65
            yield "                    </p>
                    <div class=\"mb-3\">
                        <h3 class=\"text-primary fw-bold\">";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["listing"], "price", [], "any", false, false, false, 67), "html", null, true);
            yield " €</h3>
                    </div>
                    <p class=\"text-muted small\">
                        <i class=\"fas fa-tag me-1\"></i>Artwork UUID: ";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["listing"], "artworkUuid", [], "any", false, false, false, 70), 0, 8), "html", null, true);
            yield "...
                    </p>

                    <!-- Affichage des offres -->
                    ";
            // line 74
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offresParListing"]) || array_key_exists("offresParListing", $context) ? $context["offresParListing"] : (function () { throw new RuntimeError('Variable "offresParListing" does not exist.', 74, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["listing"], "id", [], "any", false, false, false, 74), [], "array", false, false, false, 74))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 75
                yield "                    <div class=\"alert alert-info mt-3 mb-3\">
                        <h6 class=\"mb-2\"><i class=\"fas fa-handshake me-2\"></i>Offres reçues</h6>
                        <div class=\"small\">
                            ";
                // line 78
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offresParListing"]) || array_key_exists("offresParListing", $context) ? $context["offresParListing"] : (function () { throw new RuntimeError('Variable "offresParListing" does not exist.', 78, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["listing"], "id", [], "any", false, false, false, 78), [], "array", false, false, false, 78));
                foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
                    // line 79
                    yield "                                <div class=\"mb-2 pb-2 border-bottom\">
                                    <strong>";
                    // line 80
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "utilisateur", [], "any", false, false, false, 80), "email", [], "any", false, false, false, 80), "html", null, true);
                    yield "</strong>
                                    <span class=\"badge bg-warning\">";
                    // line 81
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "prixPropose", [], "any", false, false, false, 81), "html", null, true);
                    yield " €</span>
                                    <span class=\"badge ";
                    // line 82
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "statut", [], "any", false, false, false, 82) == "En attente")) {
                        yield "bg-warning";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "statut", [], "any", false, false, false, 82) == "Acceptée")) {
                        yield "bg-success";
                    } else {
                        yield "bg-danger";
                    }
                    yield "\">
                                        ";
                    // line 83
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "statut", [], "any", false, false, false, 83), "html", null, true);
                    yield "
                                    </span>
                                    <br>
                                    <small class=\"text-muted\">";
                    // line 86
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "datePropose", [], "any", false, false, false, 86), "d/m/Y H:i"), "html", null, true);
                    yield "</small>
                                    ";
                    // line 87
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "commentaire", [], "any", false, false, false, 87)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 88
                        yield "                                        <br><em>";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "commentaire", [], "any", false, false, false, 88), 0, 50), "html", null, true);
                        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "commentaire", [], "any", false, false, false, 88)) > 50)) {
                            yield "...";
                        }
                        yield "</em>
                                    ";
                    }
                    // line 90
                    yield "                                </div>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['offre'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 92
                yield "                        </div>
                    </div>
                    ";
            }
            // line 95
            yield "                    <div class=\"mt-3 d-grid gap-2\">
                        <a href=\"";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_offer_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["listing"], "id", [], "any", false, false, false, 96)]), "html", null, true);
            yield "\" class=\"btn btn-outline-secondary btn-sm\">
                            Consulter l'offre
                        </a>
                        ";
            // line 99
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["listing"], "status", [], "any", false, false, false, 99) == "available") && CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 99, $this->source); })()), "user", [], "any", false, false, false, 99))) {
                // line 100
                yield "                            <!-- Bouton pour ouvrir le formulaire de création d'offre -->
                            <button type=\"button\" class=\"btn btn-primary btn-sm\" data-bs-toggle=\"modal\" data-bs-target=\"#offreModal";
                // line 101
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["listing"], "id", [], "any", false, false, false, 101), "html", null, true);
                yield "\">
                                <i class=\"fas fa-handshake\"></i> Faire une Offre
                            </button>
                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 104
$context["listing"], "status", [], "any", false, false, false, 104) == "available")) {
                // line 105
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
                yield "\" class=\"btn btn-outline-primary btn-sm\">Se connecter pour faire une offre</a>
                        ";
            } else {
                // line 107
                yield "                            <button class=\"btn btn-secondary btn-sm\" disabled>Épuisé</button>
                        ";
            }
            // line 109
            yield "                    </div>
                </div>
            </div>
        </div>

        <!-- Modal de création d'offre -->
        ";
            // line 115
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["listing"], "status", [], "any", false, false, false, 115) == "available") && CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 115, $this->source); })()), "user", [], "any", false, false, false, 115))) {
                // line 116
                yield "        <div class=\"modal fade\" id=\"offreModal";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["listing"], "id", [], "any", false, false, false, 116), "html", null, true);
                yield "\" tabindex=\"-1\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">
                            <i class=\"fas fa-handshake\"></i> Faire une offre pour Annonce #";
                // line 121
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["listing"], "id", [], "any", false, false, false, 121), "html", null, true);
                yield "
                        </h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                    </div>
                    <form method=\"POST\" action=\"";
                // line 125
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("web_marketplace_offre_create");
                yield "\">
                        <div class=\"modal-body\">
                            <div class=\"mb-3\">
                                <label class=\"form-label\">Prix de l'Annonce</label>
                                <input type=\"text\" class=\"form-control\" value=\"";
                // line 129
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["listing"], "price", [], "any", false, false, false, 129), "html", null, true);
                yield " €\" disabled>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\">Votre Prix Proposé (€) *</label>
                                <input type=\"number\" step=\"0.01\" name=\"prix_propose\" class=\"form-control\" required placeholder=\"Entrez votre offre\">
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\">Commentaire (optionnel)</label>
                                <textarea name=\"commentaire\" class=\"form-control\" rows=\"3\" placeholder=\"Message pour le vendeur...\"></textarea>
                            </div>
                            <input type=\"hidden\" name=\"listing_id\" value=\"";
                // line 139
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["listing"], "id", [], "any", false, false, false, 139), "html", null, true);
                yield "\">
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                            <button type=\"submit\" class=\"btn btn-primary\">
                                <i class=\"fas fa-paper-plane\"></i> Envoyer l'Offre
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        ";
            }
            // line 152
            yield "        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 153
            yield "        <div class=\"col-12\">
            <div class=\"alert alert-info text-center\">
                <i class=\"fas fa-info-circle me-2\"></i>Aucune annonce disponible pour le moment.
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['listing'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        yield "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 163
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 164
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            function handleBuyClick(e) {
                e.preventDefault();
                const btn = e.currentTarget;
                const listingId = btn.dataset.listingId;
                if (!listingId) return;

                btn.disabled = true;
                const originalText = btn.textContent;
                btn.textContent = 'Traitement...';

                fetch('/api/marketplace/buy/' + listingId, {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({})
                })
                .then(async (res) => {
                    if (!res.ok) {
                        const err = await res.json().catch(() => ({}));
                        throw new Error(err.error || res.statusText || 'Erreur');
                    }
                    return res.json();
                })
                .then((data) => {
                    // show success message and update UI
                    alert('Achat réussi — transaction: ' + (data.transaction_uuid || 'inconnue'));
                    // optionally reload to reflect stock/status change
                    window.location.reload();
                })
                .catch((err) => {
                    console.error(err);
                    alert('Échec de l\\'achat: ' + (err.message || 'Erreur')); 
                    btn.disabled = false;
                    btn.textContent = originalText;
                });
            }

            document.querySelectorAll('.btn-buy').forEach(function (el) {
                el.addEventListener('click', handleBuyClick);
            });
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
        return "front/marketplace.html.twig";
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
        return array (  442 => 164,  429 => 163,  416 => 159,  405 => 153,  400 => 152,  384 => 139,  371 => 129,  364 => 125,  357 => 121,  348 => 116,  346 => 115,  338 => 109,  334 => 107,  328 => 105,  326 => 104,  320 => 101,  317 => 100,  315 => 99,  309 => 96,  306 => 95,  301 => 92,  294 => 90,  285 => 88,  283 => 87,  279 => 86,  273 => 83,  263 => 82,  259 => 81,  255 => 80,  252 => 79,  248 => 78,  243 => 75,  241 => 74,  234 => 70,  228 => 67,  224 => 65,  218 => 63,  216 => 62,  211 => 60,  207 => 59,  202 => 57,  195 => 54,  190 => 53,  186 => 51,  173 => 43,  160 => 32,  156 => 30,  154 => 29,  151 => 28,  132 => 26,  128 => 25,  119 => 19,  112 => 14,  110 => 13,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block title %}Marketplace - MuseHub{% endblock %}

{% block body %}
<div class=\"container my-5\">
    <div class=\"text-center mb-5\">
        <h1 class=\"display-4 fw-bold mb-3\">Marketplace</h1>
        <p class=\"lead text-muted\">Achetez des œuvres d'art authentiques</p>
    </div>

    <!-- Formulaire de création d'annonce -->
    {% if app.user and ('ROLE_ARTIST' in app.user.roles or 'ROLE_ADMIN' in app.user.roles) %}
    <div class=\"card mb-5\">
        <div class=\"card-body\">
            <h5 class=\"card-title mb-3\">
                <i class=\"fas fa-plus-circle me-2\"></i>Créer une nouvelle annonce
            </h5>
            <form action=\"{{ path('web_marketplace_listing_create') }}\" method=\"POST\" id=\"listingForm\">
                <div class=\"row\">
                    <div class=\"col-md-6 mb-3\">
                        <label class=\"form-label\">Œuvre *</label>
                        <select class=\"form-select\" name=\"artwork_uuid\" required>
                            <option value=\"\">Sélectionner une œuvre</option>
                            {% for artwork in userArtworks %}
                                <option value=\"{{ artwork.artistUuid }}-{{ artwork.id }}\">{{ artwork.title }} {% if artwork.price %}({{ artwork.price }} €){% endif %}</option>
                            {% endfor %}
                        </select>
                        {% if userArtworks|length == 0 %}
                            <small class=\"text-muted\">Vous devez d'abord créer une œuvre dans la section Œuvres.</small>
                        {% endif %}
                    </div>
                    <div class=\"col-md-3 mb-3\">
                        <label class=\"form-label\">Prix (€) *</label>
                        <input type=\"number\" step=\"0.01\" class=\"form-control\" name=\"price\" required>
                    </div>
                    <div class=\"col-md-3 mb-3\">
                        <label class=\"form-label\">Stock</label>
                        <input type=\"number\" class=\"form-control\" name=\"stock\" value=\"1\" min=\"1\">
                    </div>
                </div>
                <div class=\"d-flex justify-content-end\">
                    <button type=\"submit\" class=\"btn btn-primary\" {% if userArtworks|length == 0 %}disabled{% endif %}>
                        <i class=\"fas fa-save me-2\"></i>Créer l'annonce
                    </button>
                </div>
            </form>
        </div>
    </div>
    {% endif %}

    <div class=\"row g-4\">
        {% for listing in listings %}
        <div class=\"col-md-6 col-lg-4\" id=\"listing-{{ listing.id }}\">
            <div class=\"card h-100\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Annonce #{{ listing.id }}</h5>
                    <p class=\"text-muted small mb-2\">
                        <span class=\"badge bg-{{ listing.status == 'available' ? 'success' : 'danger' }}\">
                            {{ listing.status == 'available' ? 'Disponible' : 'Épuisé' }}
                        </span>
                        {% if listing.stock > 0 %}
                            <span class=\"badge bg-info\">{{ listing.stock }} en stock</span>
                        {% endif %}
                    </p>
                    <div class=\"mb-3\">
                        <h3 class=\"text-primary fw-bold\">{{ listing.price }} €</h3>
                    </div>
                    <p class=\"text-muted small\">
                        <i class=\"fas fa-tag me-1\"></i>Artwork UUID: {{ listing.artworkUuid|slice(0, 8) }}...
                    </p>

                    <!-- Affichage des offres -->
                    {% if offresParListing[listing.id] is not empty %}
                    <div class=\"alert alert-info mt-3 mb-3\">
                        <h6 class=\"mb-2\"><i class=\"fas fa-handshake me-2\"></i>Offres reçues</h6>
                        <div class=\"small\">
                            {% for offre in offresParListing[listing.id] %}
                                <div class=\"mb-2 pb-2 border-bottom\">
                                    <strong>{{ offre.utilisateur.email }}</strong>
                                    <span class=\"badge bg-warning\">{{ offre.prixPropose }} €</span>
                                    <span class=\"badge {% if offre.statut == 'En attente' %}bg-warning{% elseif offre.statut == 'Acceptée' %}bg-success{% else %}bg-danger{% endif %}\">
                                        {{ offre.statut }}
                                    </span>
                                    <br>
                                    <small class=\"text-muted\">{{ offre.datePropose|date('d/m/Y H:i') }}</small>
                                    {% if offre.commentaire %}
                                        <br><em>{{ offre.commentaire|slice(0, 50) }}{% if offre.commentaire|length > 50 %}...{% endif %}</em>
                                    {% endif %}
                                </div>
                            {% endfor %}
                        </div>
                    </div>
                    {% endif %}
                    <div class=\"mt-3 d-grid gap-2\">
                        <a href=\"{{ path('marketplace_offer_show', {id: listing.id}) }}\" class=\"btn btn-outline-secondary btn-sm\">
                            Consulter l'offre
                        </a>
                        {% if listing.status == 'available' and app.user %}
                            <!-- Bouton pour ouvrir le formulaire de création d'offre -->
                            <button type=\"button\" class=\"btn btn-primary btn-sm\" data-bs-toggle=\"modal\" data-bs-target=\"#offreModal{{ listing.id }}\">
                                <i class=\"fas fa-handshake\"></i> Faire une Offre
                            </button>
                        {% elseif listing.status == 'available' %}
                            <a href=\"{{ path('login') }}\" class=\"btn btn-outline-primary btn-sm\">Se connecter pour faire une offre</a>
                        {% else %}
                            <button class=\"btn btn-secondary btn-sm\" disabled>Épuisé</button>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal de création d'offre -->
        {% if listing.status == 'available' and app.user %}
        <div class=\"modal fade\" id=\"offreModal{{ listing.id }}\" tabindex=\"-1\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">
                            <i class=\"fas fa-handshake\"></i> Faire une offre pour Annonce #{{ listing.id }}
                        </h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                    </div>
                    <form method=\"POST\" action=\"{{ path('web_marketplace_offre_create') }}\">
                        <div class=\"modal-body\">
                            <div class=\"mb-3\">
                                <label class=\"form-label\">Prix de l'Annonce</label>
                                <input type=\"text\" class=\"form-control\" value=\"{{ listing.price }} €\" disabled>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\">Votre Prix Proposé (€) *</label>
                                <input type=\"number\" step=\"0.01\" name=\"prix_propose\" class=\"form-control\" required placeholder=\"Entrez votre offre\">
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\">Commentaire (optionnel)</label>
                                <textarea name=\"commentaire\" class=\"form-control\" rows=\"3\" placeholder=\"Message pour le vendeur...\"></textarea>
                            </div>
                            <input type=\"hidden\" name=\"listing_id\" value=\"{{ listing.id }}\">
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                            <button type=\"submit\" class=\"btn btn-primary\">
                                <i class=\"fas fa-paper-plane\"></i> Envoyer l'Offre
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {% endif %}
        {% else %}
        <div class=\"col-12\">
            <div class=\"alert alert-info text-center\">
                <i class=\"fas fa-info-circle me-2\"></i>Aucune annonce disponible pour le moment.
            </div>
        </div>
        {% endfor %}
    </div>
</div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            function handleBuyClick(e) {
                e.preventDefault();
                const btn = e.currentTarget;
                const listingId = btn.dataset.listingId;
                if (!listingId) return;

                btn.disabled = true;
                const originalText = btn.textContent;
                btn.textContent = 'Traitement...';

                fetch('/api/marketplace/buy/' + listingId, {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({})
                })
                .then(async (res) => {
                    if (!res.ok) {
                        const err = await res.json().catch(() => ({}));
                        throw new Error(err.error || res.statusText || 'Erreur');
                    }
                    return res.json();
                })
                .then((data) => {
                    // show success message and update UI
                    alert('Achat réussi — transaction: ' + (data.transaction_uuid || 'inconnue'));
                    // optionally reload to reflect stock/status change
                    window.location.reload();
                })
                .catch((err) => {
                    console.error(err);
                    alert('Échec de l\\'achat: ' + (err.message || 'Erreur')); 
                    btn.disabled = false;
                    btn.textContent = originalText;
                });
            }

            document.querySelectorAll('.btn-buy').forEach(function (el) {
                el.addEventListener('click', handleBuyClick);
            });
        });
    </script>
{% endblock %}


", "front/marketplace.html.twig", "C:\\xampp\\htdocs\\MuseHub-my-work\\MuseHub-my-work\\templates\\front\\marketplace.html.twig");
    }
}
