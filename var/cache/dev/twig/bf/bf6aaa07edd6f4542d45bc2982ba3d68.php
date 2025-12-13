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

/* community/admin_list.html.twig */
class __TwigTemplate_20da71be0615ab00509cc64db9079f9c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "community/admin_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "community/admin_list.html.twig"));

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

        yield "Modération Communauté - MuseHub Admin";
        
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
        <h1 class=\"h3 mb-0\">Modération Communauté</h1>
        <p class=\"text-muted mb-0\">Gérer les posts et commentaires</p>
    </div>
    <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_community_post_new");
        yield "\" class=\"btn btn-primary\">
        <i class=\"fas fa-plus me-2\"></i>Nouveau post
    </a>
</div>

<!-- Statistiques -->
<div class=\"row g-4 mb-4\">
    <div class=\"col-md-6\">
        <div class=\"card\" style=\"border-radius: 15px; border-left: 4px solid #3b82f6;\">
            <div class=\"card-body\">
                <h3 class=\"text-primary\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 21, $this->source); })()), "total_posts", [], "any", false, false, false, 21), "html", null, true);
        yield "</h3>
                <p class=\"text-muted mb-0\">Total posts</p>
            </div>
        </div>
    </div>
    <div class=\"col-md-6\">
        <div class=\"card\" style=\"border-radius: 15px; border-left: 4px solid #10b981;\">
            <div class=\"card-body\">
                <h3 class=\"text-success\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 29, $this->source); })()), "total_comments", [], "any", false, false, false, 29), "html", null, true);
        yield "</h3>
                <p class=\"text-muted mb-0\">Total commentaires</p>
            </div>
        </div>
    </div>
</div>

<!-- Filtres et tri -->
<div class=\"card mb-4\" style=\"border-radius: 15px; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.1);\">
    <div class=\"card-body\">
        <div class=\"row g-3 align-items-end\">
            <div class=\"col-md-3\">
                <label class=\"form-label fw-semibold\">Rechercher</label>
                <input type=\"text\" class=\"form-control\" id=\"adminSearchInput\" placeholder=\"Rechercher dans le contenu...\" value=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentSearch"]) || array_key_exists("currentSearch", $context) ? $context["currentSearch"] : (function () { throw new RuntimeError('Variable "currentSearch" does not exist.', 42, $this->source); })()), "html", null, true);
        yield "\">
            </div>
            <div class=\"col-md-3\">
                <label class=\"form-label fw-semibold\">Filtrer par catégorie</label>
                <select class=\"form-select\" id=\"adminCategoryFilter\">
                    <option value=\"\">Toutes les catégories</option>
                    <option value=\"1\" ";
        // line 48
        yield ((((isset($context["currentCategory"]) || array_key_exists("currentCategory", $context) ? $context["currentCategory"] : (function () { throw new RuntimeError('Variable "currentCategory" does not exist.', 48, $this->source); })()) == "1")) ? ("selected") : (""));
        yield ">News</option>
                    <option value=\"2\" ";
        // line 49
        yield ((((isset($context["currentCategory"]) || array_key_exists("currentCategory", $context) ? $context["currentCategory"] : (function () { throw new RuntimeError('Variable "currentCategory" does not exist.', 49, $this->source); })()) == "2")) ? ("selected") : (""));
        yield ">Questions</option>
                    <option value=\"3\" ";
        // line 50
        yield ((((isset($context["currentCategory"]) || array_key_exists("currentCategory", $context) ? $context["currentCategory"] : (function () { throw new RuntimeError('Variable "currentCategory" does not exist.', 50, $this->source); })()) == "3")) ? ("selected") : (""));
        yield ">Memes</option>
                </select>
            </div>
            <div class=\"col-md-3\">
                <label class=\"form-label fw-semibold\">Trier par</label>
                <select class=\"form-select\" id=\"adminSortFilter\">
                    <option value=\"recent\" ";
        // line 56
        yield ((((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 56, $this->source); })()) == "recent")) ? ("selected") : (""));
        yield ">Plus récent</option>
                    <option value=\"oldest\" ";
        // line 57
        yield ((((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 57, $this->source); })()) == "oldest")) ? ("selected") : (""));
        yield ">Plus ancien</option>
                    <option value=\"liked\" ";
        // line 58
        yield ((((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 58, $this->source); })()) == "liked")) ? ("selected") : (""));
        yield ">Plus aimé</option>
                    <option value=\"commented\" ";
        // line 59
        yield ((((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 59, $this->source); })()) == "commented")) ? ("selected") : (""));
        yield ">Plus commenté</option>
                </select>
            </div>
            <div class=\"col-md-3\">
                <button type=\"button\" class=\"btn btn-primary w-100\" id=\"adminApplyFilters\">
                    <i class=\"fas fa-filter me-2\"></i>Appliquer
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Liste des posts -->
<div class=\"card\" style=\"border-radius: 15px; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.1);\">
    <div class=\"card-header bg-white\">
        <h5 class=\"mb-0\"><i class=\"fas fa-comments me-2\"></i>Posts (";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 74, $this->source); })())), "html", null, true);
        yield ")</h5>
    </div>
    <div class=\"card-body\">
        <div class=\"table-responsive\">
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Auteur</th>
                        <th>Contenu</th>
                        <th>Likes</th>
                        <th>Date</th>
                        <th class=\"text-end\">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 90, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 91
            yield "                    <tr>
                        <td>";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 92), "html", null, true);
            yield "</td>
                        <td><code>";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["post"], "authorUuid", [], "any", false, false, false, 93), 0, 8), "html", null, true);
            yield "...</code></td>
                        <td>";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 94), 0, 50), "html", null, true);
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 94)) > 50)) {
                yield "...";
            }
            yield "</td>
                        <td>
                            <span class=\"badge bg-danger\">
                                <i class=\"fas fa-heart me-1\"></i>";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "likesCount", [], "any", false, false, false, 97), "html", null, true);
            yield "
                            </span>
                        </td>
                        <td>";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "createdAt", [], "any", false, false, false, 100), "d/m/Y H:i"), "html", null, true);
            yield "</td>
                        <td>
                            <div class=\"d-flex justify-content-end gap-2\">
                                <a href=\"";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_community_post_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 103)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-secondary\">
                                    Modifier
                                </a>
                                <form action=\"";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_community_post_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 106)]), "html", null, true);
            yield "\" method=\"POST\" onsubmit=\"return confirm('Supprimer ce post ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_post_" . CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 107))), "html", null, true);
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
        // line 115
        if (!$context['_iterated']) {
            // line 116
            yield "                    <tr>
                        <td colspan=\"6\" class=\"text-center py-4\">
                            <i class=\"fas fa-comments fa-2x text-muted mb-2\"></i>
                            <p class=\"text-muted\">Aucun post</p>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['post'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        yield "                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('adminSearchInput');
    const categoryFilter = document.getElementById('adminCategoryFilter');
    const sortFilter = document.getElementById('adminSortFilter');
    const applyBtn = document.getElementById('adminApplyFilters');

    applyBtn.addEventListener('click', function() {
        const search = searchInput.value.trim();
        const category = categoryFilter.value;
        const sort = sortFilter.value;

        const params = new URLSearchParams();
        if (search) {
            params.set('search', search);
        }
        if (category) {
            params.set('category', category);
        }
        if (sort && sort !== 'recent') {
            params.set('sort', sort);
        }

        const url = '";
        // line 152
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_community_list");
        yield "' + (params.toString() ? '?' + params.toString() : '');
        window.location.href = url;
    });

    // Optional: Auto-apply on Enter key in search
    searchInput.addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            applyBtn.click();
        }
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
        return "community/admin_list.html.twig";
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
        return array (  327 => 152,  296 => 123,  284 => 116,  282 => 115,  269 => 107,  265 => 106,  259 => 103,  253 => 100,  247 => 97,  238 => 94,  234 => 93,  230 => 92,  227 => 91,  222 => 90,  203 => 74,  185 => 59,  181 => 58,  177 => 57,  173 => 56,  164 => 50,  160 => 49,  156 => 48,  147 => 42,  131 => 29,  120 => 21,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Modération Communauté - MuseHub Admin{% endblock %}

{% block body %}
<div class=\"mb-4 d-flex flex-wrap justify-content-between align-items-center gap-3\">
    <div>
        <h1 class=\"h3 mb-0\">Modération Communauté</h1>
        <p class=\"text-muted mb-0\">Gérer les posts et commentaires</p>
    </div>
    <a href=\"{{ path('admin_community_post_new') }}\" class=\"btn btn-primary\">
        <i class=\"fas fa-plus me-2\"></i>Nouveau post
    </a>
</div>

<!-- Statistiques -->
<div class=\"row g-4 mb-4\">
    <div class=\"col-md-6\">
        <div class=\"card\" style=\"border-radius: 15px; border-left: 4px solid #3b82f6;\">
            <div class=\"card-body\">
                <h3 class=\"text-primary\">{{ stats.total_posts }}</h3>
                <p class=\"text-muted mb-0\">Total posts</p>
            </div>
        </div>
    </div>
    <div class=\"col-md-6\">
        <div class=\"card\" style=\"border-radius: 15px; border-left: 4px solid #10b981;\">
            <div class=\"card-body\">
                <h3 class=\"text-success\">{{ stats.total_comments }}</h3>
                <p class=\"text-muted mb-0\">Total commentaires</p>
            </div>
        </div>
    </div>
</div>

<!-- Filtres et tri -->
<div class=\"card mb-4\" style=\"border-radius: 15px; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.1);\">
    <div class=\"card-body\">
        <div class=\"row g-3 align-items-end\">
            <div class=\"col-md-3\">
                <label class=\"form-label fw-semibold\">Rechercher</label>
                <input type=\"text\" class=\"form-control\" id=\"adminSearchInput\" placeholder=\"Rechercher dans le contenu...\" value=\"{{ currentSearch }}\">
            </div>
            <div class=\"col-md-3\">
                <label class=\"form-label fw-semibold\">Filtrer par catégorie</label>
                <select class=\"form-select\" id=\"adminCategoryFilter\">
                    <option value=\"\">Toutes les catégories</option>
                    <option value=\"1\" {{ currentCategory == '1' ? 'selected' : '' }}>News</option>
                    <option value=\"2\" {{ currentCategory == '2' ? 'selected' : '' }}>Questions</option>
                    <option value=\"3\" {{ currentCategory == '3' ? 'selected' : '' }}>Memes</option>
                </select>
            </div>
            <div class=\"col-md-3\">
                <label class=\"form-label fw-semibold\">Trier par</label>
                <select class=\"form-select\" id=\"adminSortFilter\">
                    <option value=\"recent\" {{ currentSort == 'recent' ? 'selected' : '' }}>Plus récent</option>
                    <option value=\"oldest\" {{ currentSort == 'oldest' ? 'selected' : '' }}>Plus ancien</option>
                    <option value=\"liked\" {{ currentSort == 'liked' ? 'selected' : '' }}>Plus aimé</option>
                    <option value=\"commented\" {{ currentSort == 'commented' ? 'selected' : '' }}>Plus commenté</option>
                </select>
            </div>
            <div class=\"col-md-3\">
                <button type=\"button\" class=\"btn btn-primary w-100\" id=\"adminApplyFilters\">
                    <i class=\"fas fa-filter me-2\"></i>Appliquer
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Liste des posts -->
<div class=\"card\" style=\"border-radius: 15px; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.1);\">
    <div class=\"card-header bg-white\">
        <h5 class=\"mb-0\"><i class=\"fas fa-comments me-2\"></i>Posts ({{ posts|length }})</h5>
    </div>
    <div class=\"card-body\">
        <div class=\"table-responsive\">
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Auteur</th>
                        <th>Contenu</th>
                        <th>Likes</th>
                        <th>Date</th>
                        <th class=\"text-end\">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for post in posts %}
                    <tr>
                        <td>{{ post.id }}</td>
                        <td><code>{{ post.authorUuid|slice(0, 8) }}...</code></td>
                        <td>{{ post.content|slice(0, 50) }}{% if post.content|length > 50 %}...{% endif %}</td>
                        <td>
                            <span class=\"badge bg-danger\">
                                <i class=\"fas fa-heart me-1\"></i>{{ post.likesCount }}
                            </span>
                        </td>
                        <td>{{ post.createdAt|date('d/m/Y H:i') }}</td>
                        <td>
                            <div class=\"d-flex justify-content-end gap-2\">
                                <a href=\"{{ path('admin_community_post_edit', {id: post.id}) }}\" class=\"btn btn-sm btn-outline-secondary\">
                                    Modifier
                                </a>
                                <form action=\"{{ path('admin_community_post_delete', {id: post.id}) }}\" method=\"POST\" onsubmit=\"return confirm('Supprimer ce post ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_post_' ~ post.id) }}\">
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
                            <i class=\"fas fa-comments fa-2x text-muted mb-2\"></i>
                            <p class=\"text-muted\">Aucun post</p>
                        </td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('adminSearchInput');
    const categoryFilter = document.getElementById('adminCategoryFilter');
    const sortFilter = document.getElementById('adminSortFilter');
    const applyBtn = document.getElementById('adminApplyFilters');

    applyBtn.addEventListener('click', function() {
        const search = searchInput.value.trim();
        const category = categoryFilter.value;
        const sort = sortFilter.value;

        const params = new URLSearchParams();
        if (search) {
            params.set('search', search);
        }
        if (category) {
            params.set('category', category);
        }
        if (sort && sort !== 'recent') {
            params.set('sort', sort);
        }

        const url = '{{ path('admin_community_list') }}' + (params.toString() ? '?' + params.toString() : '');
        window.location.href = url;
    });

    // Optional: Auto-apply on Enter key in search
    searchInput.addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            applyBtn.click();
        }
    });
});
</script>
{% endblock %}
", "community/admin_list.html.twig", "C:\\xampp\\htdocs\\MuseHub-my-work\\MuseHub-my-work\\templates\\community\\admin_list.html.twig");
    }
}
