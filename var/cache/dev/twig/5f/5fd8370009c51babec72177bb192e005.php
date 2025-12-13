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

/* user/profile.html.twig */
class __TwigTemplate_ab4900bf9f33e1f3482824e55f403a4b extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

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

        yield "Mon Profil - MuseHub";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        .profile-hero {
            background: radial-gradient(circle at top right, rgba(255,255,255,0.08), transparent 55%),
                        linear-gradient(135deg, rgba(127, 0, 255, 0.92), rgba(255, 156, 182, 0.9));
            color: #fff;
            padding: 80px 0 40px;
            position: relative;
        }
        .profile-hero::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, rgba(0,0,0,0.35) 0%, rgba(0,0,0,0.75) 100%);
            z-index: 0;
        }
        .profile-hero .container {
            position: relative;
            z-index: 1;
        }
        .profile-header {
            display: flex;
            align-items: center;
            gap: 30px;
        }
        .profile-avatar {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            border: 8px solid rgba(255,255,255,0.3);
            object-fit: cover;
            box-shadow: 0 25px 60px rgba(0,0,0,0.35);
            background: rgba(255,255,255,0.15);
        }
        .profile-meta h1 {
            font-size: 2.7rem;
            font-weight: 800;
            margin-bottom: 10px;
        }
        .role-chip {
            display: inline-flex;
            align-items: center;
            padding: 6px 16px;
            border-radius: 999px;
            background: rgba(255,255,255,0.15);
            backdrop-filter: blur(6px);
            margin-right: 10px;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.03em;
        }
        .stats-row {
            display: flex;
            gap: 25px;
            margin-top: 30px;
            flex-wrap: wrap;
        }
        .stats-card {
            flex: 1;
            min-width: 200px;
            background: rgba(255,255,255,0.15);
            border-radius: 20px;
            padding: 20px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.2);
        }
        .stats-card h3 {
            font-size: 2.5rem;
            margin: 0;
            font-weight: 700;
        }
        .stats-card span {
            display: block;
            font-size: 0.95rem;
            letter-spacing: 0.08em;
            opacity: 0.8;
            text-transform: uppercase;
            margin-top: 5px;
        }
        .profile-content {
            margin-top: -80px;
            position: relative;
            z-index: 2;
        }
        .glass-card {
            border-radius: 24px;
            padding: 35px;
            background: rgba(255,255,255,0.9);
            box-shadow: 0 25px 40px rgba(127,0,255,0.08);
            border: 1px solid rgba(255,255,255,0.6);
        }
        .timeline-card {
            border-left: 4px solid var(--primary-color);
        }
        .bio-text {
            font-size: 1.1rem;
            color: #4b5563;
            line-height: 1.8;
            white-space: pre-line;
        }
        .info-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .info-list li {
            display: flex;
            align-items: center;
            padding: 12px 0;
            border-bottom: 1px solid #f2f2f2;
            color: #555;
        }
        .info-list li i {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: rgba(127,0,255,0.08);
            color: var(--primary-color);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
        }
        .form-card {
            border-radius: 24px;
            padding: 30px;
            background: #fff;
            box-shadow: 0 25px 40px rgba(0,0,0,0.05);
        }
        .form-card .btn-primary {
            width: 100%;
            border-radius: 999px;
            font-weight: 600;
            letter-spacing: 0.04em;
            padding: 14px;
        }
        .upload-hint {
            font-size: 0.85rem;
            color: #6b7280;
        }
        @media (max-width: 768px) {
            .profile-header {
                flex-direction: column;
                text-align: center;
            }
            .stats-row {
                flex-direction: column;
            }
            .profile-content {
                margin-top: -40px;
            }
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 161
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

        // line 162
        yield "    ";
        $context["avatarPath"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 162, $this->source); })()), "avatarUrl", [], "any", false, false, false, 162)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 162, $this->source); })()), "avatarUrl", [], "any", false, false, false, 162)) && is_string($_v1 = "http") && str_starts_with($_v0, $_v1))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 162, $this->source); })()), "avatarUrl", [], "any", false, false, false, 162)) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 162, $this->source); })()), "avatarUrl", [], "any", false, false, false, 162))))) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/logo.png")));
        // line 163
        yield "
    <section class=\"profile-hero\">
        <div class=\"container\">
            <div class=\"profile-header\">
                <img src=\"";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["avatarPath"]) || array_key_exists("avatarPath", $context) ? $context["avatarPath"] : (function () { throw new RuntimeError('Variable "avatarPath" does not exist.', 167, $this->source); })()), "html", null, true);
        yield "\" alt=\"Photo de ";
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 167, $this->source); })()), "username", [], "any", false, false, false, 167)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 167, $this->source); })()), "username", [], "any", false, false, false, 167), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 167, $this->source); })()), "email", [], "any", false, false, false, 167), "html", null, true)));
        yield "\" class=\"profile-avatar\">
                <div class=\"profile-meta\">
                    <div class=\"mb-2\">
                        ";
        // line 170
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 170, $this->source); })()), "roles", [], "any", false, false, false, 170));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 171
            yield "                            <span class=\"role-chip\"><i class=\"fas fa-certificate me-2\"></i>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace($context["role"], ["ROLE_" => ""])), "html", null, true);
            yield "</span>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['role'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        yield "                    </div>
                    <h1>";
        // line 174
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 174, $this->source); })()), "username", [], "any", false, false, false, 174)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 174, $this->source); })()), "username", [], "any", false, false, false, 174), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 174, $this->source); })()), "email", [], "any", false, false, false, 174), "html", null, true)));
        yield "</h1>
                    <p class=\"mb-3 text-white-50\"><i class=\"fas fa-calendar-alt me-2\"></i>Membre depuis ";
        // line 175
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 175, $this->source); })()), "createdAt", [], "any", false, false, false, 175)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 175, $this->source); })()), "createdAt", [], "any", false, false, false, 175), "F Y"), "html", null, true)) : ("peu"));
        yield "</p>
                    <div class=\"d-flex flex-wrap gap-2\">
                        <a href=\"mailto:";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 177, $this->source); })()), "email", [], "any", false, false, false, 177), "html", null, true);
        yield "\" class=\"btn btn-light btn-sm rounded-pill px-4\"><i class=\"fas fa-envelope me-2\"></i>Contacter</a>
                        <a href=\"#\" class=\"btn btn-outline-light btn-sm rounded-pill px-4 disabled\"><i class=\"fas fa-user-plus me-2\"></i>Connecter bientôt</a>
                    </div>
                </div>
            </div>
            <div class=\"stats-row\">
                <div class=\"stats-card\">
                    <h3>";
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 184, $this->source); })()), "artworks", [], "any", false, false, false, 184), "html", null, true);
        yield "</h3>
                    <span>Œuvres publiées</span>
                </div>
                <div class=\"stats-card\">
                    <h3>";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 188, $this->source); })()), "posts", [], "any", false, false, false, 188), "html", null, true);
        yield "</h3>
                    <span>Posts & moments</span>
                </div>
                <div class=\"stats-card\">
                    <h3>";
        // line 192
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 192, $this->source); })()), "interactions", [], "any", false, false, false, 192), "html", null, true);
        yield "</h3>
                    <span>Interactions</span>
                </div>
            </div>
        </div>
    </section>

    <div class=\"container profile-content\">
        <div class=\"row g-4\">
            <div class=\"col-lg-8\">
                <div class=\"glass-card mb-4\">
                    <div class=\"d-flex align-items-center justify-content-between mb-3\">
                        <h4 class=\"mb-0\"><i class=\"fas fa-id-card me-2 text-primary\"></i>À propos</h4>
                        <span class=\"badge bg-light text-dark\"><i class=\"fas fa-globe-europe me-1\"></i>Profil public</span>
                    </div>
                    <p class=\"bio-text\">
                        ";
        // line 208
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 208, $this->source); })()), "bio", [], "any", false, false, false, 208)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 209
            yield "                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 209, $this->source); })()), "bio", [], "any", false, false, false, 209), "html", null, true);
            yield "
                        ";
        } else {
            // line 211
            yield "                            Partagez votre parcours, vos inspirations et vos collaborations pour inspirer la communauté MuseHub.
                        ";
        }
        // line 213
        yield "                    </p>
                    <ul class=\"info-list mt-4\">
                        <li><i class=\"fas fa-user\"></i>Identifiant : ";
        // line 215
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 215, $this->source); })()), "uuid", [], "any", false, false, false, 215), "html", null, true);
        yield "</li>
                        <li><i class=\"fas fa-envelope-open-text\"></i>";
        // line 216
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 216, $this->source); })()), "email", [], "any", false, false, false, 216), "html", null, true);
        yield "</li>
                        <li><i class=\"fas fa-shield-alt\"></i>Status : ";
        // line 217
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 217, $this->source); })()), "isActive", [], "any", false, false, false, 217)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Compte actif") : ("Compte inactif"));
        yield "</li>
                    </ul>
                </div>

                <div class=\"glass-card timeline-card\">
                    <div class=\"d-flex align-items-center mb-4\">
                        <h4 class=\"mb-0\"><i class=\"fas fa-stream me-2 text-primary\"></i>Instantanés</h4>
                        <span class=\"badge bg-primary ms-3\">Bientôt enrichi</span>
                    </div>
                    <p class=\"text-muted mb-0\">Vos futures publications, expositions et collaborations apparaîtront ici automatiquement. Continuez à créer pour nourrir votre histoire sur MuseHub.</p>
                </div>
            </div>

            <div class=\"col-lg-4\">
                <div class=\"form-card\">
                    <h5 class=\"mb-1\">Personnaliser mon profil</h5>
                    <p class=\"text-muted mb-4\">Actualisez votre bio, votre nom d’affichage et votre photo comme sur un profil Facebook professionnel.</p>

                    ";
        // line 235
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 235, $this->source); })()), 'form_start');
        yield "
                        <div class=\"mb-3\">
                            ";
        // line 237
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 237, $this->source); })()), "username", [], "any", false, false, false, 237), 'label');
        yield "
                            ";
        // line 238
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 238, $this->source); })()), "username", [], "any", false, false, false, 238), 'widget');
        yield "
                        </div>
                        <div class=\"mb-3\">
                            ";
        // line 241
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 241, $this->source); })()), "bio", [], "any", false, false, false, 241), 'label');
        yield "
                            ";
        // line 242
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 242, $this->source); })()), "bio", [], "any", false, false, false, 242), 'widget');
        yield "
                        </div>
                        <div class=\"mb-3\">
                            ";
        // line 245
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 245, $this->source); })()), "avatar", [], "any", false, false, false, 245), 'label');
        yield "
                            ";
        // line 246
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 246, $this->source); })()), "avatar", [], "any", false, false, false, 246), 'widget');
        yield "
                            <div class=\"upload-hint mt-2\">
                                <i class=\"fas fa-info-circle me-1\"></i>JPG, PNG, GIF ou WEBP – 5 Mo max.
                            </div>
                        </div>
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fas fa-save me-2\"></i>Enregistrer les modifications
                        </button>
                    ";
        // line 254
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 254, $this->source); })()), 'form_end');
        yield "
                </div>
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
        return "user/profile.html.twig";
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
        return array (  450 => 254,  439 => 246,  435 => 245,  429 => 242,  425 => 241,  419 => 238,  415 => 237,  410 => 235,  389 => 217,  385 => 216,  381 => 215,  377 => 213,  373 => 211,  367 => 209,  365 => 208,  346 => 192,  339 => 188,  332 => 184,  322 => 177,  317 => 175,  313 => 174,  310 => 173,  301 => 171,  297 => 170,  289 => 167,  283 => 163,  280 => 162,  267 => 161,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block title %}Mon Profil - MuseHub{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .profile-hero {
            background: radial-gradient(circle at top right, rgba(255,255,255,0.08), transparent 55%),
                        linear-gradient(135deg, rgba(127, 0, 255, 0.92), rgba(255, 156, 182, 0.9));
            color: #fff;
            padding: 80px 0 40px;
            position: relative;
        }
        .profile-hero::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, rgba(0,0,0,0.35) 0%, rgba(0,0,0,0.75) 100%);
            z-index: 0;
        }
        .profile-hero .container {
            position: relative;
            z-index: 1;
        }
        .profile-header {
            display: flex;
            align-items: center;
            gap: 30px;
        }
        .profile-avatar {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            border: 8px solid rgba(255,255,255,0.3);
            object-fit: cover;
            box-shadow: 0 25px 60px rgba(0,0,0,0.35);
            background: rgba(255,255,255,0.15);
        }
        .profile-meta h1 {
            font-size: 2.7rem;
            font-weight: 800;
            margin-bottom: 10px;
        }
        .role-chip {
            display: inline-flex;
            align-items: center;
            padding: 6px 16px;
            border-radius: 999px;
            background: rgba(255,255,255,0.15);
            backdrop-filter: blur(6px);
            margin-right: 10px;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.03em;
        }
        .stats-row {
            display: flex;
            gap: 25px;
            margin-top: 30px;
            flex-wrap: wrap;
        }
        .stats-card {
            flex: 1;
            min-width: 200px;
            background: rgba(255,255,255,0.15);
            border-radius: 20px;
            padding: 20px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.2);
        }
        .stats-card h3 {
            font-size: 2.5rem;
            margin: 0;
            font-weight: 700;
        }
        .stats-card span {
            display: block;
            font-size: 0.95rem;
            letter-spacing: 0.08em;
            opacity: 0.8;
            text-transform: uppercase;
            margin-top: 5px;
        }
        .profile-content {
            margin-top: -80px;
            position: relative;
            z-index: 2;
        }
        .glass-card {
            border-radius: 24px;
            padding: 35px;
            background: rgba(255,255,255,0.9);
            box-shadow: 0 25px 40px rgba(127,0,255,0.08);
            border: 1px solid rgba(255,255,255,0.6);
        }
        .timeline-card {
            border-left: 4px solid var(--primary-color);
        }
        .bio-text {
            font-size: 1.1rem;
            color: #4b5563;
            line-height: 1.8;
            white-space: pre-line;
        }
        .info-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .info-list li {
            display: flex;
            align-items: center;
            padding: 12px 0;
            border-bottom: 1px solid #f2f2f2;
            color: #555;
        }
        .info-list li i {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: rgba(127,0,255,0.08);
            color: var(--primary-color);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
        }
        .form-card {
            border-radius: 24px;
            padding: 30px;
            background: #fff;
            box-shadow: 0 25px 40px rgba(0,0,0,0.05);
        }
        .form-card .btn-primary {
            width: 100%;
            border-radius: 999px;
            font-weight: 600;
            letter-spacing: 0.04em;
            padding: 14px;
        }
        .upload-hint {
            font-size: 0.85rem;
            color: #6b7280;
        }
        @media (max-width: 768px) {
            .profile-header {
                flex-direction: column;
                text-align: center;
            }
            .stats-row {
                flex-direction: column;
            }
            .profile-content {
                margin-top: -40px;
            }
        }
    </style>
{% endblock %}

{% block body %}
    {% set avatarPath = user.avatarUrl ? (user.avatarUrl starts with 'http' ? user.avatarUrl : asset(user.avatarUrl)) : asset('assets/logo.png') %}

    <section class=\"profile-hero\">
        <div class=\"container\">
            <div class=\"profile-header\">
                <img src=\"{{ avatarPath }}\" alt=\"Photo de {{ user.username ?: user.email }}\" class=\"profile-avatar\">
                <div class=\"profile-meta\">
                    <div class=\"mb-2\">
                        {% for role in user.roles %}
                            <span class=\"role-chip\"><i class=\"fas fa-certificate me-2\"></i>{{ role|replace({'ROLE_': ''})|title }}</span>
                        {% endfor %}
                    </div>
                    <h1>{{ user.username ?: user.email }}</h1>
                    <p class=\"mb-3 text-white-50\"><i class=\"fas fa-calendar-alt me-2\"></i>Membre depuis {{ user.createdAt ? user.createdAt|date('F Y') : 'peu' }}</p>
                    <div class=\"d-flex flex-wrap gap-2\">
                        <a href=\"mailto:{{ user.email }}\" class=\"btn btn-light btn-sm rounded-pill px-4\"><i class=\"fas fa-envelope me-2\"></i>Contacter</a>
                        <a href=\"#\" class=\"btn btn-outline-light btn-sm rounded-pill px-4 disabled\"><i class=\"fas fa-user-plus me-2\"></i>Connecter bientôt</a>
                    </div>
                </div>
            </div>
            <div class=\"stats-row\">
                <div class=\"stats-card\">
                    <h3>{{ stats.artworks }}</h3>
                    <span>Œuvres publiées</span>
                </div>
                <div class=\"stats-card\">
                    <h3>{{ stats.posts }}</h3>
                    <span>Posts & moments</span>
                </div>
                <div class=\"stats-card\">
                    <h3>{{ stats.interactions }}</h3>
                    <span>Interactions</span>
                </div>
            </div>
        </div>
    </section>

    <div class=\"container profile-content\">
        <div class=\"row g-4\">
            <div class=\"col-lg-8\">
                <div class=\"glass-card mb-4\">
                    <div class=\"d-flex align-items-center justify-content-between mb-3\">
                        <h4 class=\"mb-0\"><i class=\"fas fa-id-card me-2 text-primary\"></i>À propos</h4>
                        <span class=\"badge bg-light text-dark\"><i class=\"fas fa-globe-europe me-1\"></i>Profil public</span>
                    </div>
                    <p class=\"bio-text\">
                        {% if user.bio %}
                            {{ user.bio }}
                        {% else %}
                            Partagez votre parcours, vos inspirations et vos collaborations pour inspirer la communauté MuseHub.
                        {% endif %}
                    </p>
                    <ul class=\"info-list mt-4\">
                        <li><i class=\"fas fa-user\"></i>Identifiant : {{ user.uuid }}</li>
                        <li><i class=\"fas fa-envelope-open-text\"></i>{{ user.email }}</li>
                        <li><i class=\"fas fa-shield-alt\"></i>Status : {{ user.isActive ? 'Compte actif' : 'Compte inactif' }}</li>
                    </ul>
                </div>

                <div class=\"glass-card timeline-card\">
                    <div class=\"d-flex align-items-center mb-4\">
                        <h4 class=\"mb-0\"><i class=\"fas fa-stream me-2 text-primary\"></i>Instantanés</h4>
                        <span class=\"badge bg-primary ms-3\">Bientôt enrichi</span>
                    </div>
                    <p class=\"text-muted mb-0\">Vos futures publications, expositions et collaborations apparaîtront ici automatiquement. Continuez à créer pour nourrir votre histoire sur MuseHub.</p>
                </div>
            </div>

            <div class=\"col-lg-4\">
                <div class=\"form-card\">
                    <h5 class=\"mb-1\">Personnaliser mon profil</h5>
                    <p class=\"text-muted mb-4\">Actualisez votre bio, votre nom d’affichage et votre photo comme sur un profil Facebook professionnel.</p>

                    {{ form_start(form) }}
                        <div class=\"mb-3\">
                            {{ form_label(form.username) }}
                            {{ form_widget(form.username) }}
                        </div>
                        <div class=\"mb-3\">
                            {{ form_label(form.bio) }}
                            {{ form_widget(form.bio) }}
                        </div>
                        <div class=\"mb-3\">
                            {{ form_label(form.avatar) }}
                            {{ form_widget(form.avatar) }}
                            <div class=\"upload-hint mt-2\">
                                <i class=\"fas fa-info-circle me-1\"></i>JPG, PNG, GIF ou WEBP – 5 Mo max.
                            </div>
                        </div>
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fas fa-save me-2\"></i>Enregistrer les modifications
                        </button>
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}

", "user/profile.html.twig", "C:\\xampp\\htdocs\\MuseHub-my-work\\MuseHub-my-work\\templates\\user\\profile.html.twig");
    }
}
