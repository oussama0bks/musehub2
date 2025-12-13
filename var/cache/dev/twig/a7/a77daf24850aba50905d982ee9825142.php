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

/* front/marketplace_test.html.twig */
class __TwigTemplate_bf23678fbb38412c4aa9961e985f73aa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/marketplace_test.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/marketplace_test.html.twig"));

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

        yield "Test Offres - Marketplace";
        
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
    <h1>Test Affichage des Offres</h1>

    <div class=\"row\">
        <div class=\"col-md-6\">
            <h2>Listings</h2>
            <pre>";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode((isset($context["listings"]) || array_key_exists("listings", $context) ? $context["listings"] : (function () { throw new RuntimeError('Variable "listings" does not exist.', 12, $this->source); })()), Twig\Extension\CoreExtension::constant("JSON_PRETTY_PRINT")), "html", null, true);
        yield "</pre>
        </div>

        <div class=\"col-md-6\">
            <h2>Offres par Listing</h2>
            <pre>";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode((isset($context["offresParListing"]) || array_key_exists("offresParListing", $context) ? $context["offresParListing"] : (function () { throw new RuntimeError('Variable "offresParListing" does not exist.', 17, $this->source); })()), Twig\Extension\CoreExtension::constant("JSON_PRETTY_PRINT")), "html", null, true);
        yield "</pre>
        </div>
    </div>

    <hr>

    <h2>Affichage des Offres</h2>
    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["listings"]) || array_key_exists("listings", $context) ? $context["listings"] : (function () { throw new RuntimeError('Variable "listings" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["listing"]) {
            // line 25
            yield "        <div class=\"card mb-3\">
            <div class=\"card-header\">
                <h5>Listing #";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["listing"], "id", [], "any", false, false, false, 27), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["listing"], "price", [], "any", false, false, false, 27), "html", null, true);
            yield " €</h5>
            </div>
            <div class=\"card-body\">
                ";
            // line 30
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["offresParListing"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["listing"], "id", [], "any", false, false, false, 30), [], "array", true, true, false, 30) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["offresParListing"]) || array_key_exists("offresParListing", $context) ? $context["offresParListing"] : (function () { throw new RuntimeError('Variable "offresParListing" does not exist.', 30, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["listing"], "id", [], "any", false, false, false, 30), [], "array", false, false, false, 30)) > 0))) {
                // line 31
                yield "                    <h6>Offres (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["offresParListing"]) || array_key_exists("offresParListing", $context) ? $context["offresParListing"] : (function () { throw new RuntimeError('Variable "offresParListing" does not exist.', 31, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["listing"], "id", [], "any", false, false, false, 31), [], "array", false, false, false, 31)), "html", null, true);
                yield ")</h6>
                    <ul>
                        ";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offresParListing"]) || array_key_exists("offresParListing", $context) ? $context["offresParListing"] : (function () { throw new RuntimeError('Variable "offresParListing" does not exist.', 33, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["listing"], "id", [], "any", false, false, false, 33), [], "array", false, false, false, 33));
                foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
                    // line 34
                    yield "                            <li>
                                #";
                    // line 35
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 35), "html", null, true);
                    yield " - ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "utilisateur", [], "any", false, false, false, 35), "email", [], "any", false, false, false, 35), "html", null, true);
                    yield " - ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "prixPropose", [], "any", false, false, false, 35), "html", null, true);
                    yield " € - ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "statut", [], "any", false, false, false, 35), "html", null, true);
                    yield "
                            </li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['offre'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                yield "                    </ul>
                ";
            } else {
                // line 40
                yield "                    <p class=\"text-muted\">Aucune offre pour cette annonce.</p>
                ";
            }
            // line 42
            yield "
                <!-- Modal -->
                ";
            // line 44
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 45
                yield "                    <button class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#offreModal";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["listing"], "id", [], "any", false, false, false, 45), "html", null, true);
                yield "\">
                        Faire une offre
                    </button>
                    
                    <div class=\"modal fade\" id=\"offreModal";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["listing"], "id", [], "any", false, false, false, 49), "html", null, true);
                yield "\" tabindex=\"-1\">
                        <div class=\"modal-dialog\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <h5 class=\"modal-title\">Faire une offre</h5>
                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                                </div>
                                <form method=\"POST\" action=\"";
                // line 56
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("web_marketplace_offre_create");
                yield "\">
                                    <div class=\"modal-body\">
                                        <div class=\"mb-3\">
                                            <label class=\"form-label\">Prix proposé</label>
                                            <input type=\"number\" step=\"0.01\" name=\"prix_propose\" class=\"form-control\" required>
                                        </div>
                                        <div class=\"mb-3\">
                                            <label class=\"form-label\">Commentaire</label>
                                            <textarea name=\"commentaire\" class=\"form-control\"></textarea>
                                        </div>
                                        <input type=\"hidden\" name=\"listing_id\" value=\"";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["listing"], "id", [], "any", false, false, false, 66), "html", null, true);
                yield "\">
                                    </div>
                                    <div class=\"modal-footer\">
                                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                                        <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                ";
            }
            // line 77
            yield "            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['listing'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        yield "</div>
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
        return "front/marketplace_test.html.twig";
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
        return array (  239 => 80,  231 => 77,  217 => 66,  204 => 56,  194 => 49,  186 => 45,  184 => 44,  180 => 42,  176 => 40,  172 => 38,  157 => 35,  154 => 34,  150 => 33,  144 => 31,  142 => 30,  134 => 27,  130 => 25,  126 => 24,  116 => 17,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block title %}Test Offres - Marketplace{% endblock %}

{% block body %}
<div class=\"container my-5\">
    <h1>Test Affichage des Offres</h1>

    <div class=\"row\">
        <div class=\"col-md-6\">
            <h2>Listings</h2>
            <pre>{{ listings|json_encode(constant('JSON_PRETTY_PRINT')) }}</pre>
        </div>

        <div class=\"col-md-6\">
            <h2>Offres par Listing</h2>
            <pre>{{ offresParListing|json_encode(constant('JSON_PRETTY_PRINT')) }}</pre>
        </div>
    </div>

    <hr>

    <h2>Affichage des Offres</h2>
    {% for listing in listings %}
        <div class=\"card mb-3\">
            <div class=\"card-header\">
                <h5>Listing #{{ listing.id }} - {{ listing.price }} €</h5>
            </div>
            <div class=\"card-body\">
                {% if offresParListing[listing.id] is defined and offresParListing[listing.id]|length > 0 %}
                    <h6>Offres ({{ offresParListing[listing.id]|length }})</h6>
                    <ul>
                        {% for offre in offresParListing[listing.id] %}
                            <li>
                                #{{ offre.id }} - {{ offre.utilisateur.email }} - {{ offre.prixPropose }} € - {{ offre.statut }}
                            </li>
                        {% endfor %}
                    </ul>
                {% else %}
                    <p class=\"text-muted\">Aucune offre pour cette annonce.</p>
                {% endif %}

                <!-- Modal -->
                {% if app.user %}
                    <button class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#offreModal{{ listing.id }}\">
                        Faire une offre
                    </button>
                    
                    <div class=\"modal fade\" id=\"offreModal{{ listing.id }}\" tabindex=\"-1\">
                        <div class=\"modal-dialog\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <h5 class=\"modal-title\">Faire une offre</h5>
                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                                </div>
                                <form method=\"POST\" action=\"{{ path('web_marketplace_offre_create') }}\">
                                    <div class=\"modal-body\">
                                        <div class=\"mb-3\">
                                            <label class=\"form-label\">Prix proposé</label>
                                            <input type=\"number\" step=\"0.01\" name=\"prix_propose\" class=\"form-control\" required>
                                        </div>
                                        <div class=\"mb-3\">
                                            <label class=\"form-label\">Commentaire</label>
                                            <textarea name=\"commentaire\" class=\"form-control\"></textarea>
                                        </div>
                                        <input type=\"hidden\" name=\"listing_id\" value=\"{{ listing.id }}\">
                                    </div>
                                    <div class=\"modal-footer\">
                                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                                        <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                {% endif %}
            </div>
        </div>
    {% endfor %}
</div>
{% endblock %}
", "front/marketplace_test.html.twig", "C:\\xampp\\htdocs\\MuseHub-my-work\\MuseHub-my-work\\templates\\front\\marketplace_test.html.twig");
    }
}
