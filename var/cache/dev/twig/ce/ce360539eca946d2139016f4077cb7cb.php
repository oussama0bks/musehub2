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

/* user/admin_list.html.twig */
class __TwigTemplate_aa1d710b77422cb81a8fa75054e40e72 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/admin_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/admin_list.html.twig"));

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

        yield "Gestion Utilisateurs - MuseHub Admin";
        
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
        <h1 class=\"h3 mb-0\">Gestion des Utilisateurs</h1>
        <p class=\"text-muted mb-0\">Gérer les utilisateurs, artistes et administrateurs</p>
    </div>
    <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_new");
        yield "\" class=\"btn btn-primary\">
        <i class=\"fas fa-user-plus me-2\"></i>Nouvel utilisateur
    </a>
</div>

<!-- Filtres -->
<div class=\"card mb-4\" style=\"border-radius: 15px; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.1);\">
    <div class=\"card-body\">
        <form method=\"GET\" class=\"row g-3 align-items-center\">
            <div class=\"col-md-4\">
                <label class=\"form-label text-muted small mb-1\">Rechercher</label>
                <input type=\"text\" name=\"q\" value=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 22, $this->source); })()), "html", null, true);
        yield "\" class=\"form-control\" placeholder=\"Email ou nom d'utilisateur\">
            </div>
            <div class=\"col-md-3\">
                <label class=\"form-label text-muted small mb-1\">Rôle</label>
                <select name=\"role\" class=\"form-select\">
                    <option value=\"\">Tous les rôles</option>
                    <option value=\"ROLE_USER\" ";
        // line 28
        yield ((((isset($context["currentRole"]) || array_key_exists("currentRole", $context) ? $context["currentRole"] : (function () { throw new RuntimeError('Variable "currentRole" does not exist.', 28, $this->source); })()) == "ROLE_USER")) ? ("selected") : (""));
        yield ">Utilisateurs</option>
                    <option value=\"ROLE_ARTIST\" ";
        // line 29
        yield ((((isset($context["currentRole"]) || array_key_exists("currentRole", $context) ? $context["currentRole"] : (function () { throw new RuntimeError('Variable "currentRole" does not exist.', 29, $this->source); })()) == "ROLE_ARTIST")) ? ("selected") : (""));
        yield ">Artistes</option>
                    <option value=\"ROLE_ADMIN\" ";
        // line 30
        yield ((((isset($context["currentRole"]) || array_key_exists("currentRole", $context) ? $context["currentRole"] : (function () { throw new RuntimeError('Variable "currentRole" does not exist.', 30, $this->source); })()) == "ROLE_ADMIN")) ? ("selected") : (""));
        yield ">Administrateurs</option>
                </select>
            </div>
            <div class=\"col-md-5 d-flex gap-2 mt-4 mt-md-0\">
                <button type=\"submit\" class=\"btn btn-primary flex-grow-1\">Appliquer</button>
                <a href=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_list");
        yield "\" class=\"btn btn-outline-secondary\">Réinitialiser</a>
            </div>
        </form>
    </div>
</div>

<!-- Liste des utilisateurs -->
<div class=\"card\" style=\"border-radius: 15px; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.1);\">
    <div class=\"card-body\">
        <div class=\"table-responsive\">
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Rôles</th>
                        <th>Statut</th>
                        <th>Créé le</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 58, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 59
            yield "                    <tr>
                        <td>";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 60), "html", null, true);
            yield "</td>
                        <td>";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 61), "html", null, true);
            yield "</td>
                        <td>";
            // line 62
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "username", [], "any", true, true, false, 62) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 62)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 62), "html", null, true)) : ("—"));
            yield "</td>
                        <td>
                            ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 64));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 65
                yield "                                <span class=\"badge bg-";
                yield ((($context["role"] == "ROLE_ADMIN")) ? ("danger") : (((($context["role"] == "ROLE_ARTIST")) ? ("info") : ("secondary"))));
                yield "\">
                                    ";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["role"], "html", null, true);
                yield "
                                </span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['role'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            yield "                        </td>
                        <td>
                            ";
            // line 71
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 71)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 72
                yield "                                <span class=\"badge bg-success\">Actif</span>
                            ";
            } else {
                // line 74
                yield "                                <span class=\"badge bg-danger\">Suspendu</span>
                            ";
            }
            // line 76
            yield "                        </td>
                        <td>";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 77), "d/m/Y"), "html", null, true);
            yield "</td>
                        <td class=\"d-flex gap-2 align-items-center flex-wrap flex-md-nowrap\">
                            <form action=\"";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_toggle", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 79)]), "html", null, true);
            yield "\" method=\"POST\" class=\"d-inline\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle_user_" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 80))), "html", null, true);
            yield "\">
                                <button type=\"submit\" class=\"btn btn-sm btn-";
            // line 81
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 81)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("warning") : ("success"));
            yield "\">
                                    ";
            // line 82
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 82)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Suspendre") : ("Activer"));
            yield "
                                </button>
                            </form>
                            <a href=\"";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 85)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary\">
                                Modifier
                            </a>
                            <form action=\"";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 88)]), "html", null, true);
            yield "\" method=\"POST\" class=\"d-inline\" onsubmit=\"return confirm('Supprimer cet utilisateur ?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_user_" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 89))), "html", null, true);
            yield "\">
                                <button type=\"submit\" class=\"btn btn-sm btn-outline-danger\">
                                    Supprimer
                                </button>
                            </form>
                        </td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 96
        if (!$context['_iterated']) {
            // line 97
            yield "                    <tr>
                        <td colspan=\"7\" class=\"text-center py-4\">
                            <i class=\"fas fa-users fa-2x text-muted mb-2\"></i>
                            <p class=\"text-muted\">Aucun utilisateur trouvé</p>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
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
        return "user/admin_list.html.twig";
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
        return array (  287 => 104,  275 => 97,  273 => 96,  261 => 89,  257 => 88,  251 => 85,  245 => 82,  241 => 81,  237 => 80,  233 => 79,  228 => 77,  225 => 76,  221 => 74,  217 => 72,  215 => 71,  211 => 69,  202 => 66,  197 => 65,  193 => 64,  188 => 62,  184 => 61,  180 => 60,  177 => 59,  172 => 58,  146 => 35,  138 => 30,  134 => 29,  130 => 28,  121 => 22,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Gestion Utilisateurs - MuseHub Admin{% endblock %}

{% block body %}
<div class=\"mb-4 d-flex flex-wrap justify-content-between align-items-center gap-3\">
    <div>
        <h1 class=\"h3 mb-0\">Gestion des Utilisateurs</h1>
        <p class=\"text-muted mb-0\">Gérer les utilisateurs, artistes et administrateurs</p>
    </div>
    <a href=\"{{ path('admin_users_new') }}\" class=\"btn btn-primary\">
        <i class=\"fas fa-user-plus me-2\"></i>Nouvel utilisateur
    </a>
</div>

<!-- Filtres -->
<div class=\"card mb-4\" style=\"border-radius: 15px; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.1);\">
    <div class=\"card-body\">
        <form method=\"GET\" class=\"row g-3 align-items-center\">
            <div class=\"col-md-4\">
                <label class=\"form-label text-muted small mb-1\">Rechercher</label>
                <input type=\"text\" name=\"q\" value=\"{{ search }}\" class=\"form-control\" placeholder=\"Email ou nom d'utilisateur\">
            </div>
            <div class=\"col-md-3\">
                <label class=\"form-label text-muted small mb-1\">Rôle</label>
                <select name=\"role\" class=\"form-select\">
                    <option value=\"\">Tous les rôles</option>
                    <option value=\"ROLE_USER\" {{ currentRole == 'ROLE_USER' ? 'selected' : '' }}>Utilisateurs</option>
                    <option value=\"ROLE_ARTIST\" {{ currentRole == 'ROLE_ARTIST' ? 'selected' : '' }}>Artistes</option>
                    <option value=\"ROLE_ADMIN\" {{ currentRole == 'ROLE_ADMIN' ? 'selected' : '' }}>Administrateurs</option>
                </select>
            </div>
            <div class=\"col-md-5 d-flex gap-2 mt-4 mt-md-0\">
                <button type=\"submit\" class=\"btn btn-primary flex-grow-1\">Appliquer</button>
                <a href=\"{{ path('admin_users_list') }}\" class=\"btn btn-outline-secondary\">Réinitialiser</a>
            </div>
        </form>
    </div>
</div>

<!-- Liste des utilisateurs -->
<div class=\"card\" style=\"border-radius: 15px; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.1);\">
    <div class=\"card-body\">
        <div class=\"table-responsive\">
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Rôles</th>
                        <th>Statut</th>
                        <th>Créé le</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for user in users %}
                    <tr>
                        <td>{{ user.id }}</td>
                        <td>{{ user.email }}</td>
                        <td>{{ user.username ?? '—' }}</td>
                        <td>
                            {% for role in user.roles %}
                                <span class=\"badge bg-{{ role == 'ROLE_ADMIN' ? 'danger' : (role == 'ROLE_ARTIST' ? 'info' : 'secondary') }}\">
                                    {{ role }}
                                </span>
                            {% endfor %}
                        </td>
                        <td>
                            {% if user.isActive %}
                                <span class=\"badge bg-success\">Actif</span>
                            {% else %}
                                <span class=\"badge bg-danger\">Suspendu</span>
                            {% endif %}
                        </td>
                        <td>{{ user.createdAt|date('d/m/Y') }}</td>
                        <td class=\"d-flex gap-2 align-items-center flex-wrap flex-md-nowrap\">
                            <form action=\"{{ path('admin_users_toggle', {id: user.id}) }}\" method=\"POST\" class=\"d-inline\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('toggle_user_' ~ user.id) }}\">
                                <button type=\"submit\" class=\"btn btn-sm btn-{{ user.isActive ? 'warning' : 'success' }}\">
                                    {{ user.isActive ? 'Suspendre' : 'Activer' }}
                                </button>
                            </form>
                            <a href=\"{{ path('admin_users_edit', {id: user.id}) }}\" class=\"btn btn-sm btn-outline-primary\">
                                Modifier
                            </a>
                            <form action=\"{{ path('admin_users_delete', {id: user.id}) }}\" method=\"POST\" class=\"d-inline\" onsubmit=\"return confirm('Supprimer cet utilisateur ?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_user_' ~ user.id) }}\">
                                <button type=\"submit\" class=\"btn btn-sm btn-outline-danger\">
                                    Supprimer
                                </button>
                            </form>
                        </td>
                    </tr>
                    {% else %}
                    <tr>
                        <td colspan=\"7\" class=\"text-center py-4\">
                            <i class=\"fas fa-users fa-2x text-muted mb-2\"></i>
                            <p class=\"text-muted\">Aucun utilisateur trouvé</p>
                        </td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
</div>
{% endblock %}


", "user/admin_list.html.twig", "C:\\xampp\\htdocs\\MuseHub-my-work\\MuseHub-my-work\\templates\\user\\admin_list.html.twig");
    }
}
