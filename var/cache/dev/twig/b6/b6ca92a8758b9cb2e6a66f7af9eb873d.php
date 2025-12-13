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

/* front/community.html.twig */
class __TwigTemplate_41c6fdf26dc014a92cf76ada1b2ab2a5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/community.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/community.html.twig"));

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

        yield "Communauté - MuseHub";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 61
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

        // line 62
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    body {
        background: #f0f2f5;
    }
    .community-shell {
        max-width: 960px;
        margin: 0 auto;
    }
    .composer-card,
    .post-item {
        background: #fff;
        border-radius: 18px;
        box-shadow: 0 15px 40px rgba(23, 15, 46, 0.08);
        border: 1px solid rgba(127, 0, 255, 0.08);
    }
    .composer-card {
        padding: 20px 24px;
    }
    .composer-textarea {
        border: none;
        resize: none;
        font-size: 1rem;
        background: #f7f8fc;
        border-radius: 14px;
        padding: 16px 18px;
        min-height: 90px;
    }
    .composer-textarea:focus {
        outline: none;
        box-shadow: 0 0 0 2px rgba(127, 0, 255, 0.25);
    }
    .media-row {
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
    }
    .media-row input[type=\"file\"],
    .media-row input[type=\"url\"] {
        flex: 1;
        border-radius: 12px;
    }
    .post-item {
        padding: 18px 22px 10px;
        margin-bottom: 24px;
    }
    .post-header {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 14px;
    }
    .post-avatar {
        width: 56px;
        height: 56px;
        border-radius: 50%;
        background: linear-gradient(135deg, #7f00ff, #ff9cb6);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-weight: 700;
        font-size: 1.2rem;
        box-shadow: 0 6px 16px rgba(127, 0, 255, 0.25);
    }
    .post-author {
        font-weight: 600;
        color: #1f2937;
    }
    .post-meta {
        font-size: 0.85rem;
        color: #6b7280;
        display: flex;
        align-items: center;
        gap: 6px;
    }
    .post-content {
        font-size: 1rem;
        color: #374151;
        line-height: 1.7;
        margin-bottom: 15px;
    }
    .post-image {
        border-radius: 16px;
        width: 100%;
        max-height: 520px;
        object-fit: cover;
        margin-bottom: 15px;
        border: 1px solid rgba(127, 0, 255, 0.08);
    }
    .post-stats {
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-top: 1px solid #f1f5f9;
        padding: 12px 4px 6px;
        margin-top: 10px;
        color: #6b7280;
        font-size: 0.9rem;
    }
    .like-chip {
        width: 28px;
        height: 28px;
        border-radius: 50%;
        background: linear-gradient(135deg, #7f00ff, #ff9cb6);
        color: #fff;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 0.85rem;
        box-shadow: 0 6px 16px rgba(127, 0, 255, 0.2);
    }
    .post-actions {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        border-top: 1px solid #f1f5f9;
        margin-top: 6px;
    }
    .post-action-btn {
        border: none;
        background: none;
        color: #6b7280;
        font-weight: 600;
        padding: 12px 10px;
        border-radius: 0;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        transition: background 0.2s ease, color 0.2s ease;
        text-transform: capitalize;
    }
    .post-action-btn i {
        font-size: 1.05rem;
    }
    .post-action-btn:hover,
    .post-action-btn:focus {
        background: rgba(127, 0, 255, 0.08);
        color: #7f00ff;
    }
    .post-action-btn.liked {
        color: #7f00ff;
    }
    .post-action-btn.dislike-btn.reaction-active {
        color: #dc2626;
    }
    .post-action-btn.reaction-active .fas {
        color: inherit;
    }
    .post-stats .dislike-pill {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        color: #dc2626;
        font-weight: 600;
    }
    .comments-section {
        border-top: 1px solid #f1f5f9;
        margin-top: 15px;
        padding-top: 15px;
    }
    .comment-item {
        display: flex;
        gap: 12px;
        margin-bottom: 15px;
    }
    .comment-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: #f3e8ff;
        color: #7f00ff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
    }
    .comment-bubble {
        background: #f7f8fc;
        padding: 10px 14px;
        border-radius: 16px;
        flex: 1;
        border: 1px solid rgba(127, 0, 255, 0.05);
    }
    .comment-author {
        font-weight: 600;
        color: #111827;
        font-size: 0.92rem;
    }
    .comment-meta {
        font-size: 0.8rem;
        color: #6b7280;
    }
    .comment-content {
        margin-top: 4px;
        font-size: 0.95rem;
        color: #374151;
    }
    .comment-actions {
        display: flex;
        gap: 8px;
        margin-top: 8px;
        justify-content: flex-end;
    }
    .comment-actions button {
        font-size: 0.85rem;
        padding: 0;
    }
    .comment-form .form-control {
        border-radius: 999px;
        background: #f7f8fc;
        border: none;
    }
    .comment-form .form-control:focus {
        box-shadow: 0 0 0 2px rgba(127, 0, 255, 0.25);
    }
    .post-manage-bar {
        display: flex;
        justify-content: flex-end;
        gap: 12px;
        margin-top: 8px;
    }
    .post-manage-bar .btn {
        font-size: 0.9rem;
        padding: 4px 10px;
    }
    .post-edit-form,
    .comment-edit-form {
        background: #f7f8fc;
        border: 1px solid rgba(127, 0, 255, 0.1);
        border-radius: 16px;
        padding: 15px;
        margin-top: 12px;
    }
    .post-edit-form textarea,
    .comment-edit-form textarea {
        width: 100%;
        border-radius: 12px;
        border: 1px solid #e5e7eb;
        padding: 10px 12px;
        font-size: 0.95rem;
    }
    .post-edit-form textarea:focus,
    .comment-edit-form textarea:focus {
        outline: none;
        border-color: #7f00ff;
        box-shadow: 0 0 0 2px rgba(127, 0, 255, 0.15);
    }
    .comment-edit-form textarea {
        min-height: 80px;
    }
    .post-edit-form input[type=\"url\"],
    .post-edit-form input[type=\"file\"] {
        border-radius: 10px;
        border: 1px solid #e5e7eb;
        padding: 8px 10px;
    }
    .post-edit-form .form-check {
        margin-top: 8px;
    }
    .d-none {
        display: none;
    }
    .comment-input-group {
        display: flex;
        gap: 10px;
    }
    .comment-input-group input {
        flex: 1;
    }
    .pill-badge {
        background: rgba(127, 0, 255, 0.1);
        color: #7f00ff;
        padding: 4px 12px;
        border-radius: 999px;
        font-size: 0.85rem;
        font-weight: 600;
    }
    .post-menu-btn {
        border: none;
        background: none;
        color: #9ca3af;
        font-size: 1.2rem;
        cursor: pointer;
        padding: 4px 8px;
        border-radius: 8px;
    }
    .post-menu-btn:hover {
        background: rgba(127, 0, 255, 0.08);
        color: #7f00ff;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 356
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

        // line 357
        $context["userReactions"] = ((array_key_exists("userReactions", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["userReactions"]) || array_key_exists("userReactions", $context) ? $context["userReactions"] : (function () { throw new RuntimeError('Variable "userReactions" does not exist.', 357, $this->source); })()), [])) : ([]));
        // line 358
        yield "<div class=\"container my-5\">
    <div class=\"community-shell\">
        <div class=\"text-center mb-5\">
            <span class=\"pill-badge mb-3 d-inline-block\">Communauté MuseHub</span>
            <h1 class=\"display-5 fw-bold mb-2\">Partagez vos inspirations</h1>
            <p class=\"lead text-muted\">Photos, pensées, questions – exprimez-vous comme sur Facebook.</p>
        </div>

        ";
        // line 366
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 366, $this->source); })()), "user", [], "any", false, false, false, 366)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 367
            yield "            <div class=\"composer-card mb-4\">
                <form action=\"";
            // line 368
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("web_posts_create");
            yield "\" method=\"POST\" id=\"postForm\" enctype=\"multipart/form-data\">
                    <div class=\"d-flex align-items-center gap-3 mb-3\">
                        <div class=\"post-avatar\" style=\"width: 48px; height:48px;\">
                            ";
            // line 371
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 371), "username", [], "any", true, true, false, 371) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 371, $this->source); })()), "user", [], "any", false, false, false, 371), "username", [], "any", false, false, false, 371)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 371, $this->source); })()), "user", [], "any", false, false, false, 371), "username", [], "any", false, false, false, 371)) : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 371), "email", [], "any", true, true, false, 371) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 371, $this->source); })()), "user", [], "any", false, false, false, 371), "email", [], "any", false, false, false, 371)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 371, $this->source); })()), "user", [], "any", false, false, false, 371), "email", [], "any", false, false, false, 371)) : ("Vous")))), 0, 1)), "html", null, true);
            yield "
                        </div>
                        <div>
                            <p class=\"mb-0 text-muted small\">Publiez en tant que</p>
                            <strong>";
            // line 375
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 375), "username", [], "any", true, true, false, 375) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 375, $this->source); })()), "user", [], "any", false, false, false, 375), "username", [], "any", false, false, false, 375)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 375, $this->source); })()), "user", [], "any", false, false, false, 375), "username", [], "any", false, false, false, 375), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 375, $this->source); })()), "user", [], "any", false, false, false, 375), "email", [], "any", false, false, false, 375), "html", null, true)));
            yield "</strong>
                        </div>
                    </div>
                    <textarea class=\"composer-textarea mb-3\" name=\"content\" placeholder=\"Quoi de neuf aujourd'hui ?\" required></textarea>
                    <div class=\"media-row mb-3\">
                        <input type=\"file\" class=\"form-control\" name=\"image_file\" accept=\"image/png,image/jpeg,image/webp,image/gif\">
                        <input type=\"url\" class=\"form-control\" name=\"image_url\" placeholder=\"URL de l'image\">
                    </div>
                    <div class=\"mb-3\">
                        <select class=\"form-select\" name=\"category_id\" required>
                            <option value=\"\">Choisir une catégorie</option>
                            <option value=\"1\">News - Actualités et annonces</option>
                            <option value=\"2\">Questions - Questions et discussions</option>
                            <option value=\"3\">Memes - Humour et memes</option>
                        </select>
                    </div>
                    <div class=\"d-flex justify-content-end\">
                        <button type=\"submit\" class=\"btn btn-primary px-4\">
                            <i class=\"fas fa-paper-plane me-2\"></i>Publier
                        </button>
                    </div>
                </form>
            </div>
        ";
        } else {
            // line 399
            yield "            <div class=\"composer-card mb-4 text-center\">
                <i class=\"fas fa-users fa-2x text-muted mb-3\"></i>
                <p class=\"mb-3\">Connectez-vous pour publier et interagir avec la communauté.</p>
                <a href=\"";
            // line 402
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            yield "\" class=\"btn btn-primary px-4\">Se connecter</a>
            </div>
        ";
        }
        // line 405
        yield "
        <!-- Filters and Sorting -->
        <div class=\"card mb-4\">
            <div class=\"card-body\">
                <div class=\"row g-3 align-items-end\">
                    <div class=\"col-md-4\">
                        <label class=\"form-label fw-semibold\">Filtrer par catégorie</label>
                        <select class=\"form-select\" id=\"categoryFilter\">
                            <option value=\"\">Toutes les catégories</option>
                            <option value=\"1\" ";
        // line 414
        yield ((((isset($context["currentCategory"]) || array_key_exists("currentCategory", $context) ? $context["currentCategory"] : (function () { throw new RuntimeError('Variable "currentCategory" does not exist.', 414, $this->source); })()) == "1")) ? ("selected") : (""));
        yield ">News</option>
                            <option value=\"2\" ";
        // line 415
        yield ((((isset($context["currentCategory"]) || array_key_exists("currentCategory", $context) ? $context["currentCategory"] : (function () { throw new RuntimeError('Variable "currentCategory" does not exist.', 415, $this->source); })()) == "2")) ? ("selected") : (""));
        yield ">Questions</option>
                            <option value=\"3\" ";
        // line 416
        yield ((((isset($context["currentCategory"]) || array_key_exists("currentCategory", $context) ? $context["currentCategory"] : (function () { throw new RuntimeError('Variable "currentCategory" does not exist.', 416, $this->source); })()) == "3")) ? ("selected") : (""));
        yield ">Memes</option>
                        </select>
                    </div>
                    <div class=\"col-md-4\">
                        <label class=\"form-label fw-semibold\">Trier par</label>
                        <select class=\"form-select\" id=\"sortFilter\">
                            <option value=\"recent\" ";
        // line 422
        yield ((((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 422, $this->source); })()) == "recent")) ? ("selected") : (""));
        yield ">Plus récent</option>
                            <option value=\"liked\" ";
        // line 423
        yield ((((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 423, $this->source); })()) == "liked")) ? ("selected") : (""));
        yield ">Plus aimé</option>
                            <option value=\"commented\" ";
        // line 424
        yield ((((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 424, $this->source); })()) == "commented")) ? ("selected") : (""));
        yield ">Plus commenté</option>
                        </select>
                    </div>
                    <div class=\"col-md-4\">
                        <button type=\"button\" class=\"btn btn-primary w-100\" id=\"applyFilters\">
                            <i class=\"fas fa-filter me-2\"></i>Appliquer les filtres
                        </button>
                    </div>
                </div>
            </div>
        </div>

        ";
        // line 436
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 436, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 437
            yield "            <div class=\"post-item\" id=\"post-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 437), "html", null, true);
            yield "\" data-post-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 437), "html", null, true);
            yield "\">
                <div class=\"post-header\">
                    <div class=\"post-avatar\">";
            // line 439
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), (((CoreExtension::getAttribute($this->env, $this->source, ($context["authorNames"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["post"], "authorUuid", [], "any", false, false, false, 439), [], "array", true, true, false, 439) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["authorNames"]) || array_key_exists("authorNames", $context) ? $context["authorNames"] : (function () { throw new RuntimeError('Variable "authorNames" does not exist.', 439, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["post"], "authorUuid", [], "any", false, false, false, 439), [], "array", false, false, false, 439)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["authorNames"]) || array_key_exists("authorNames", $context) ? $context["authorNames"] : (function () { throw new RuntimeError('Variable "authorNames" does not exist.', 439, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["post"], "authorUuid", [], "any", false, false, false, 439), [], "array", false, false, false, 439)) : ("Membre")), 0, 1)), "html", null, true);
            yield "</div>
                    <div class=\"flex-grow-1\">
                        <div class=\"post-author\">";
            // line 441
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["authorNames"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["post"], "authorUuid", [], "any", false, false, false, 441), [], "array", true, true, false, 441) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["authorNames"]) || array_key_exists("authorNames", $context) ? $context["authorNames"] : (function () { throw new RuntimeError('Variable "authorNames" does not exist.', 441, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["post"], "authorUuid", [], "any", false, false, false, 441), [], "array", false, false, false, 441)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["authorNames"]) || array_key_exists("authorNames", $context) ? $context["authorNames"] : (function () { throw new RuntimeError('Variable "authorNames" does not exist.', 441, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["post"], "authorUuid", [], "any", false, false, false, 441), [], "array", false, false, false, 441), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("Utilisateur " . Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["post"], "authorUuid", [], "any", false, false, false, 441), 0, 8)), "html", null, true)));
            yield "</div>
                        <div class=\"post-meta\">
                            <span>";
            // line 443
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "createdAt", [], "any", false, false, false, 443), "d/m/Y à H:i"), "html", null, true);
            yield "</span>
                            <span>·</span>
                            <i class=\"fas fa-globe-americas\"></i>
                        </div>
                    </div>
                    <button class=\"post-menu-btn\" type=\"button\" aria-label=\"Options\">
                        <i class=\"fas fa-ellipsis-h\"></i>
                    </button>
                </div>

                <div class=\"post-content\">";
            // line 453
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 453), "html", null, true));
            yield "</div>

                ";
            // line 455
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["post"], "imageUrl", [], "any", false, false, false, 455)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 456
                yield "                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "imageUrl", [], "any", false, false, false, 456), "html", null, true);
                yield "\" class=\"post-image\" alt=\"Post image\">
                ";
            }
            // line 458
            yield "
                ";
            // line 459
            $context["canManagePost"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 459, $this->source); })()), "user", [], "any", false, false, false, 459) && ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 459, $this->source); })()), "user", [], "any", false, false, false, 459), "uuid", [], "any", false, false, false, 459) == CoreExtension::getAttribute($this->env, $this->source, $context["post"], "authorUuid", [], "any", false, false, false, 459))));
            // line 460
            yield "                ";
            if ((($tmp = (isset($context["canManagePost"]) || array_key_exists("canManagePost", $context) ? $context["canManagePost"] : (function () { throw new RuntimeError('Variable "canManagePost" does not exist.', 460, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 461
                yield "                    <div class=\"post-manage-bar\">
                        <button type=\"button\" class=\"btn btn-light btn-sm post-edit-toggle\" data-post-id=\"";
                // line 462
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 462), "html", null, true);
                yield "\">
                            <i class=\"fas fa-pen me-1\"></i>Modifier
                        </button>
                        <form action=\"";
                // line 465
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("web_posts_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 465)]), "html", null, true);
                yield "\" method=\"POST\" class=\"d-inline delete-post-form\" data-post-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 465), "html", null, true);
                yield "\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 466
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_post_" . CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 466))), "html", null, true);
                yield "\">
                            <button type=\"submit\" class=\"btn btn-outline-danger btn-sm\">
                                <i class=\"fas fa-trash-alt me-1\"></i>Supprimer
                            </button>
                        </form>
                    </div>

                    <form action=\"";
                // line 473
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("web_posts_update", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 473)]), "html", null, true);
                yield "\" method=\"POST\" enctype=\"multipart/form-data\" class=\"post-edit-form d-none\" data-post-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 473), "html", null, true);
                yield "\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 474
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("update_post_" . CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 474))), "html", null, true);
                yield "\">
                        <div class=\"mb-3\">
                            <label class=\"form-label fw-semibold\">Contenu</label>
                            <textarea name=\"content\" rows=\"4\" required>";
                // line 477
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 477), "html", null, true);
                yield "</textarea>
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label fw-semibold\">URL de l'image</label>
                            <input type=\"url\" name=\"image_url\" class=\"form-control\" value=\"";
                // line 481
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "imageUrl", [], "any", false, false, false, 481), "html", null, true);
                yield "\">
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label fw-semibold\">Remplacer l'image</label>
                            <input type=\"file\" name=\"image_file\" class=\"form-control\" accept=\"image/png,image/jpeg,image/webp,image/gif\">
                        </div>
                        <div class=\"form-check mb-3\">
                            <input class=\"form-check-input\" type=\"checkbox\" value=\"1\" id=\"removeImage";
                // line 488
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 488), "html", null, true);
                yield "\" name=\"remove_image\">
                            <label class=\"form-check-label\" for=\"removeImage";
                // line 489
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 489), "html", null, true);
                yield "\">
                                Retirer l'image actuelle
                            </label>
                        </div>
                        <div class=\"text-end\">
                            <button type=\"submit\" class=\"btn btn-primary btn-sm\">
                                <i class=\"fas fa-save me-1\"></i>Enregistrer
                            </button>
                        </div>
                    </form>
                ";
            }
            // line 500
            yield "
                <div class=\"post-stats\">
                    <div class=\"d-flex align-items-center gap-4\">
                        <div class=\"d-flex align-items-center gap-2\">
                            <span class=\"like-chip\"><i class=\"fas fa-thumbs-up\"></i></span>
                            <span class=\"like-count\" data-post-id=\"";
            // line 505
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 505), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "likesCount", [], "any", false, false, false, 505), "html", null, true);
            yield "</span>
                        </div>
                        <div class=\"dislike-pill\">
                            <i class=\"fas fa-thumbs-down\"></i>
                            <span class=\"dislike-count\" data-post-id=\"";
            // line 509
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 509), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "dislikesCount", [], "any", false, false, false, 509), "html", null, true);
            yield "</span>
                        </div>
                    </div>
                    <div class=\"text-muted small\">
                        <span class=\"comment-count\" data-post-id=\"";
            // line 513
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 513), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["post"], "comments", [], "any", false, false, false, 513)), "html", null, true);
            yield "</span> commentaires
                    </div>
                </div>

                ";
            // line 517
            $context["activeReaction"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["userReactions"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 517), [], "array", true, true, false, 517) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["userReactions"]) || array_key_exists("userReactions", $context) ? $context["userReactions"] : (function () { throw new RuntimeError('Variable "userReactions" does not exist.', 517, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 517), [], "array", false, false, false, 517)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["userReactions"]) || array_key_exists("userReactions", $context) ? $context["userReactions"] : (function () { throw new RuntimeError('Variable "userReactions" does not exist.', 517, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 517), [], "array", false, false, false, 517)) : (null));
            // line 518
            yield "                <div class=\"post-actions\">
                    <button class=\"post-action-btn like-btn reaction-btn ";
            // line 519
            yield ((((isset($context["activeReaction"]) || array_key_exists("activeReaction", $context) ? $context["activeReaction"] : (function () { throw new RuntimeError('Variable "activeReaction" does not exist.', 519, $this->source); })()) == "like")) ? ("liked reaction-active") : (""));
            yield "\"
                        data-post-id=\"";
            // line 520
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 520), "html", null, true);
            yield "\"
                        data-reaction=\"like\"
                        data-reaction-url=\"";
            // line 522
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_posts_reaction", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 522)]), "html", null, true);
            yield "\">
                        <i class=\"far fa-thumbs-up\"></i>
                        J'aime
                    </button>
                    <button class=\"post-action-btn reaction-btn dislike-btn ";
            // line 526
            yield ((((isset($context["activeReaction"]) || array_key_exists("activeReaction", $context) ? $context["activeReaction"] : (function () { throw new RuntimeError('Variable "activeReaction" does not exist.', 526, $this->source); })()) == "dislike")) ? ("reaction-active disliked") : (""));
            yield "\"
                        data-post-id=\"";
            // line 527
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 527), "html", null, true);
            yield "\"
                        data-reaction=\"dislike\"
                        data-reaction-url=\"";
            // line 529
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_posts_reaction", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 529)]), "html", null, true);
            yield "\">
                        <i class=\"far fa-thumbs-down\"></i>
                        Je n'aime pas
                    </button>
                    <button class=\"post-action-btn comment-focus-btn\" type=\"button\" data-target=\"#comment-input-";
            // line 533
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 533), "html", null, true);
            yield "\">
                        <i class=\"far fa-comment-dots\"></i>
                        Commenter
                    </button>
                    <button class=\"post-action-btn\" type=\"button\" disabled>
                        <i class=\"far fa-share-square\"></i>
                        Partager
                    </button>
                </div>

                <div class=\"comments-section\" id=\"comments-";
            // line 543
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 543), "html", null, true);
            yield "\">
                    <div id=\"comments-list-";
            // line 544
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 544), "html", null, true);
            yield "\">
                        ";
            // line 545
            $context["topLevelComments"] = [];
            // line 546
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "comments", [], "any", false, false, false, 546));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 547
                yield "                            ";
                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "parentComment", [], "any", false, false, false, 547))) {
                    // line 548
                    yield "                                ";
                    $context["topLevelComments"] = Twig\Extension\CoreExtension::merge((isset($context["topLevelComments"]) || array_key_exists("topLevelComments", $context) ? $context["topLevelComments"] : (function () { throw new RuntimeError('Variable "topLevelComments" does not exist.', 548, $this->source); })()), [$context["comment"]]);
                    // line 549
                    yield "                            ";
                }
                // line 550
                yield "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['comment'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 551
            yield "
                        ";
            // line 552
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["topLevelComments"]) || array_key_exists("topLevelComments", $context) ? $context["topLevelComments"] : (function () { throw new RuntimeError('Variable "topLevelComments" does not exist.', 552, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 553
                yield "                            ";
                yield $this->getTemplateForMacro("macro_render_comment", $context, 553, $this->getSourceContext())->macro_render_comment(...[$context["comment"], $context["post"], (isset($context["commentAuthorNames"]) || array_key_exists("commentAuthorNames", $context) ? $context["commentAuthorNames"] : (function () { throw new RuntimeError('Variable "commentAuthorNames" does not exist.', 553, $this->source); })())]);
                yield "
                        ";
                $context['_iterated'] = true;
            }
            // line 554
            if (!$context['_iterated']) {
                // line 555
                yield "                            <p class=\"text-muted text-center py-3 mb-0\">Soyez le premier à commenter</p>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['comment'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 557
            yield "                    </div>

                    <div class=\"comment-form mt-3\">
                        <form class=\"comment-input-group\" action=\"";
            // line 560
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("web_posts_comment", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 560)]), "html", null, true);
            yield "\" method=\"POST\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 561
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("comment_post_" . CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 561))), "html", null, true);
            yield "\">
                            ";
            // line 562
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 562, $this->source); })()), "user", [], "any", false, false, false, 562)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 563
                yield "                                <input type=\"text\" class=\"form-control\" name=\"commenter_name\" placeholder=\"Votre nom (optionnel)\">
                            ";
            }
            // line 565
            yield "                            <input type=\"text\" class=\"form-control\" id=\"comment-input-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 565), "html", null, true);
            yield "\" name=\"content\" placeholder=\"Écrivez un commentaire...\" required>
                            <button type=\"submit\" class=\"btn btn-primary\">
                                <i class=\"fas fa-paper-plane\"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 573
        if (!$context['_iterated']) {
            // line 574
            yield "            <div class=\"composer-card text-center\">
                <i class=\"fas fa-comments fa-2x text-muted mb-3\"></i>
                <h5 class=\"mb-2\">Aucun post pour le moment</h5>
                <p class=\"text-muted\">Lancez la conversation en partageant votre première publication.</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['post'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 580
        yield "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 584
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

        // line 585
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
    (function() {
        const isAuthenticated = ";
        // line 588
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 588, $this->source); })()), "user", [], "any", false, false, false, 588)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
        yield ";
        const loginUrl = '";
        // line 589
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        yield "';

        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.reaction-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    if (!isAuthenticated) {
                        window.location.href = loginUrl;
                        return;
                    }

                    const postId = this.dataset.postId;
                    const reactionType = this.dataset.reaction;
                    const reactionUrl = this.dataset.reactionUrl;
                    sendReaction(reactionUrl, postId, reactionType, loginUrl);
                });
            });

            document.querySelectorAll('.comment-focus-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    const target = document.querySelector(this.dataset.target);
                    if (target) {
                        target.focus();
                        target.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    }
                });
            });

            document.querySelectorAll('.post-edit-toggle').forEach(btn => {
                btn.addEventListener('click', function() {
                    const postId = this.dataset.postId;
                    toggleVisibility(`[data-post-id=\"\${postId}\"].post-edit-form`);
                });
            });

            document.querySelectorAll('.comment-edit-toggle').forEach(btn => {
                btn.addEventListener('click', function() {
                    const commentId = this.dataset.commentId;
                    toggleVisibility(`[data-comment-id=\"\${commentId}\"].comment-edit-form`);
                });
            });

            document.querySelectorAll('.delete-post-form').forEach(form => {
                form.addEventListener('submit', function(event) {
                    if (!confirm('Voulez-vous vraiment supprimer cette publication ?')) {
                        event.preventDefault();
                    }
                });
            });

            document.querySelectorAll('.comment-delete-form').forEach(form => {
                form.addEventListener('submit', function(event) {
                    if (!confirm('Supprimer ce commentaire ?')) {
                        event.preventDefault();
                    }
                });
            });

            document.querySelectorAll('.reply-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    if (!isAuthenticated) {
                        window.location.href = loginUrl;
                        return;
                    }

                    const commentId = this.dataset.commentId;
                    toggleVisibility(`[data-comment-id=\"\${commentId}\"].reply-form`);
                });
            });

            document.querySelectorAll('[data-reply-form]').forEach(form => {
                form.addEventListener('submit', function(event) {
                    event.preventDefault();

                    const formData = new FormData(this);
                    const content = formData.get('content');
                    const commentId = this.closest('.reply-form').dataset.commentId;
                    const url = this.action;

                    if (!content || content.trim() === '') {
                        alert('Le contenu de la réponse est requis.');
                        return;
                    }

                    fetch(url, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify({ content: content.trim() }),
                        credentials: 'same-origin'
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.error) {
                            alert(data.error);
                        } else {
                            // Reload the page to show the new reply
                            window.location.reload();
                        }
                    })
                    .catch(() => {
                        alert('Erreur lors de l\\'envoi de la réponse.');
                    });
                });
            });

            // Filter functionality
            document.getElementById('applyFilters').addEventListener('click', function() {
                const categoryId = document.getElementById('categoryFilter').value;
                const sortBy = document.getElementById('sortFilter').value;

                const params = new URLSearchParams();
                if (categoryId) {
                    params.set('category', categoryId);
                }
                if (sortBy && sortBy !== 'recent') {
                    params.set('sort', sortBy);
                }

                const url = '";
        // line 708
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("community");
        yield "' + (params.toString() ? '?' + params.toString() : '');
                window.location.href = url;
            });
        });
    })();

    function toggleVisibility(selector) {
        const element = document.querySelector(selector);
        if (!element) {
            return;
        }
        element.classList.toggle('d-none');
    }

    function sendReaction(url, postId, type, loginUrl) {
        fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            credentials: 'same-origin',
            body: JSON.stringify({ type })
        })
        .then(async response => {
            let data = null;
            const contentType = response.headers.get('content-type') || '';

            if (contentType.includes('application/json')) {
                try {
                    data = await response.json();
                } catch (error) {
                    data = null;
                }
            } else {
                const text = await response.text();
                try {
                    data = JSON.parse(text);
                } catch (error) {
                    data = { raw: text };
                }
            }

            return { ok: response.ok, status: response.status, data };
        })
        .then(({ ok, status, data }) => {
            if (!ok) {
                if (status === 401 || status === 403) {
                    window.location.href = loginUrl;
                    return;
                }
                if (data && data.error) {
                    alert(data.error);
                } else {
                    alert('Une erreur est survenue. Merci de réessayer.');
                }
                return;
            }

            if (data && data.likes_count !== undefined) {
                document.querySelectorAll(`.like-count[data-post-id=\"\${postId}\"]`).forEach(el => {
                    el.textContent = data.likes_count;
                });
                document.querySelectorAll(`.dislike-count[data-post-id=\"\${postId}\"]`).forEach(el => {
                    el.textContent = data.dislikes_count ?? 0;
                });

                document.querySelectorAll(`.reaction-btn[data-post-id=\"\${postId}\"]`).forEach(btn => {
                    btn.classList.remove('reaction-active', 'liked', 'disliked');

                    const icon = btn.querySelector('i');
                    if (icon) {
                        icon.classList.remove('fas');
                        if (!icon.classList.contains('far')) {
                            icon.classList.add('far');
                        }
                    }

                    if (btn.dataset.reaction === data.active_reaction) {
                        btn.classList.add('reaction-active');
                        if (data.active_reaction === 'like') {
                            btn.classList.add('liked');
                        } else {
                            btn.classList.add('disliked');
                        }
                        if (icon) {
                            icon.classList.remove('far');
                            icon.classList.add('fas');
                        }
                        btn.style.transform = 'scale(1.2)';
                        setTimeout(() => {
                            btn.style.transform = 'scale(1)';
                        }, 200);
                    }
                });
            }
        })
        .catch(() => {
            alert('Impossible de contacter le serveur. Vérifiez votre connexion.');
        });
    }

</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    public function macro_render_comment($comment = null, $post = null, $commentAuthorNames = null, $isReply = false, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "comment" => $comment,
            "post" => $post,
            "commentAuthorNames" => $commentAuthorNames,
            "isReply" => $isReply,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_comment"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_comment"));

            // line 6
            yield "    ";
            $context["commentDisplayName"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["commentAuthorNames"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 6, $this->source); })()), "commenterUuid", [], "any", false, false, false, 6), [], "array", true, true, false, 6) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentAuthorNames"]) || array_key_exists("commentAuthorNames", $context) ? $context["commentAuthorNames"] : (function () { throw new RuntimeError('Variable "commentAuthorNames" does not exist.', 6, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 6, $this->source); })()), "commenterUuid", [], "any", false, false, false, 6), [], "array", false, false, false, 6)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentAuthorNames"]) || array_key_exists("commentAuthorNames", $context) ? $context["commentAuthorNames"] : (function () { throw new RuntimeError('Variable "commentAuthorNames" does not exist.', 6, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 6, $this->source); })()), "commenterUuid", [], "any", false, false, false, 6), [], "array", false, false, false, 6)) : ((((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 6, $this->source); })()), "commenterUuid", [], "any", false, false, false, 6)) && is_string($_v1 = "guest_") && str_starts_with($_v0, $_v1))) ? ("Invité MuseHub") : (("Utilisateur " . Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 6, $this->source); })()), "commenterUuid", [], "any", false, false, false, 6), 0, 8))))));
            // line 7
            yield "    ";
            $context["canManageComment"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7) && ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7), "uuid", [], "any", false, false, false, 7) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 7, $this->source); })()), "commenterUuid", [], "any", false, false, false, 7))));
            // line 8
            yield "    <div class=\"comment-item ";
            yield (((($tmp = (isset($context["isReply"]) || array_key_exists("isReply", $context) ? $context["isReply"] : (function () { throw new RuntimeError('Variable "isReply" does not exist.', 8, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ms-4") : (""));
            yield "\" id=\"comment-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8), "html", null, true);
            yield "\">
        <div class=\"comment-avatar\">";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["commentDisplayName"]) || array_key_exists("commentDisplayName", $context) ? $context["commentDisplayName"] : (function () { throw new RuntimeError('Variable "commentDisplayName" does not exist.', 9, $this->source); })()), 0, 1)), "html", null, true);
            yield "</div>
        <div class=\"comment-bubble\">
            <div class=\"comment-author\">";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["commentDisplayName"]) || array_key_exists("commentDisplayName", $context) ? $context["commentDisplayName"] : (function () { throw new RuntimeError('Variable "commentDisplayName" does not exist.', 11, $this->source); })()), "html", null, true);
            yield "</div>
            <div class=\"comment-meta\">";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 12, $this->source); })()), "createdAt", [], "any", false, false, false, 12), "d/m/Y H:i"), "html", null, true);
            yield "</div>
            <div class=\"comment-content\">";
            // line 13
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 13, $this->source); })()), "content", [], "any", false, false, false, 13), "html", null, true));
            yield "</div>
            <div class=\"comment-actions\">
                ";
            // line 15
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 16
                yield "                    <button type=\"button\" class=\"btn btn-link text-decoration-none reply-btn\" data-comment-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16), "html", null, true);
                yield "\">
                        <i class=\"fas fa-reply me-1\"></i>Répondre
                    </button>
                ";
            }
            // line 20
            yield "                ";
            if ((($tmp = (isset($context["canManageComment"]) || array_key_exists("canManageComment", $context) ? $context["canManageComment"] : (function () { throw new RuntimeError('Variable "canManageComment" does not exist.', 20, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 21
                yield "                    <button type=\"button\" class=\"btn btn-link text-decoration-none comment-edit-toggle\" data-comment-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21), "html", null, true);
                yield "\">
                        <i class=\"fas fa-pen me-1\"></i>Modifier
                    </button>
                    <form action=\"";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("web_comments_delete", ["postId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24), "commentId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24)]), "html", null, true);
                yield "\" method=\"POST\" class=\"d-inline comment-delete-form\" data-comment-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24), "html", null, true);
                yield "\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_comment_" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25))), "html", null, true);
                yield "\">
                        <button type=\"submit\" class=\"btn btn-link text-danger text-decoration-none\">
                            <i class=\"fas fa-trash-alt me-1\"></i>Supprimer
                        </button>
                    </form>
                ";
            }
            // line 31
            yield "            </div>
            <div class=\"reply-form d-none\" data-comment-id=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32), "html", null, true);
            yield "\">
                <form class=\"comment-input-group mt-2\" action=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_posts_comments_reply", ["postId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33), "id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33)]), "html", null, true);
            yield "\" method=\"POST\" data-reply-form>
                    <input type=\"text\" class=\"form-control\" name=\"content\" placeholder=\"Répondre à ";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["commentDisplayName"]) || array_key_exists("commentDisplayName", $context) ? $context["commentDisplayName"] : (function () { throw new RuntimeError('Variable "commentDisplayName" does not exist.', 34, $this->source); })()), "html", null, true);
            yield "...\" required>
                    <button type=\"submit\" class=\"btn btn-primary\">
                        <i class=\"fas fa-paper-plane\"></i>
                    </button>
                </form>
            </div>
            ";
            // line 40
            if ((($tmp = (isset($context["canManageComment"]) || array_key_exists("canManageComment", $context) ? $context["canManageComment"] : (function () { throw new RuntimeError('Variable "canManageComment" does not exist.', 40, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 41
                yield "                <form action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("web_comments_update", ["postId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41), "commentId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41)]), "html", null, true);
                yield "\" method=\"POST\" class=\"comment-edit-form d-none\" data-comment-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41), "html", null, true);
                yield "\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("update_comment_" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42))), "html", null, true);
                yield "\">
                    <div class=\"mb-2\">
                        <label class=\"form-label fw-semibold small\">Modifier le commentaire</label>
                        <textarea name=\"content\" rows=\"3\" required>";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 45, $this->source); })()), "content", [], "any", false, false, false, 45), "html", null, true);
                yield "</textarea>
                    </div>
                    <div class=\"text-end\">
                        <button type=\"submit\" class=\"btn btn-primary btn-sm\">
                            <i class=\"fas fa-save me-1\"></i>Enregistrer
                        </button>
                    </div>
                </form>
            ";
            }
            // line 54
            yield "        </div>
    </div>
    ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 56, $this->source); })()), "replies", [], "any", false, false, false, 56));
            foreach ($context['_seq'] as $context["_key"] => $context["reply"]) {
                // line 57
                yield "        ";
                yield $this->getTemplateForMacro("macro_render_comment", $context, 57, $this->getSourceContext())->macro_render_comment(...[$context["reply"], (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 57, $this->source); })()), (isset($context["commentAuthorNames"]) || array_key_exists("commentAuthorNames", $context) ? $context["commentAuthorNames"] : (function () { throw new RuntimeError('Variable "commentAuthorNames" does not exist.', 57, $this->source); })()), true]);
                yield "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reply'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/community.html.twig";
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
        return array (  1265 => 57,  1261 => 56,  1257 => 54,  1245 => 45,  1239 => 42,  1232 => 41,  1230 => 40,  1221 => 34,  1217 => 33,  1213 => 32,  1210 => 31,  1201 => 25,  1195 => 24,  1188 => 21,  1185 => 20,  1177 => 16,  1175 => 15,  1170 => 13,  1166 => 12,  1162 => 11,  1157 => 9,  1150 => 8,  1147 => 7,  1144 => 6,  1123 => 5,  1009 => 708,  887 => 589,  883 => 588,  877 => 585,  864 => 584,  851 => 580,  840 => 574,  838 => 573,  824 => 565,  820 => 563,  818 => 562,  814 => 561,  810 => 560,  805 => 557,  798 => 555,  796 => 554,  789 => 553,  784 => 552,  781 => 551,  775 => 550,  772 => 549,  769 => 548,  766 => 547,  761 => 546,  759 => 545,  755 => 544,  751 => 543,  738 => 533,  731 => 529,  726 => 527,  722 => 526,  715 => 522,  710 => 520,  706 => 519,  703 => 518,  701 => 517,  692 => 513,  683 => 509,  674 => 505,  667 => 500,  653 => 489,  649 => 488,  639 => 481,  632 => 477,  626 => 474,  620 => 473,  610 => 466,  604 => 465,  598 => 462,  595 => 461,  592 => 460,  590 => 459,  587 => 458,  581 => 456,  579 => 455,  574 => 453,  561 => 443,  556 => 441,  551 => 439,  543 => 437,  538 => 436,  523 => 424,  519 => 423,  515 => 422,  506 => 416,  502 => 415,  498 => 414,  487 => 405,  481 => 402,  476 => 399,  449 => 375,  442 => 371,  436 => 368,  433 => 367,  431 => 366,  421 => 358,  419 => 357,  406 => 356,  102 => 62,  89 => 61,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block title %}Communauté - MuseHub{% endblock %}

{% macro render_comment(comment, post, commentAuthorNames, isReply = false) %}
    {% set commentDisplayName = commentAuthorNames[comment.commenterUuid] ?? (comment.commenterUuid starts with 'guest_' ? 'Invité MuseHub' : 'Utilisateur ' ~ comment.commenterUuid|slice(0,8)) %}
    {% set canManageComment = app.user and (is_granted('ROLE_ADMIN') or app.user.uuid == comment.commenterUuid) %}
    <div class=\"comment-item {{ isReply ? 'ms-4' : '' }}\" id=\"comment-{{ comment.id }}\">
        <div class=\"comment-avatar\">{{ commentDisplayName|slice(0,1)|upper }}</div>
        <div class=\"comment-bubble\">
            <div class=\"comment-author\">{{ commentDisplayName }}</div>
            <div class=\"comment-meta\">{{ comment.createdAt|date('d/m/Y H:i') }}</div>
            <div class=\"comment-content\">{{ comment.content|nl2br }}</div>
            <div class=\"comment-actions\">
                {% if app.user %}
                    <button type=\"button\" class=\"btn btn-link text-decoration-none reply-btn\" data-comment-id=\"{{ comment.id }}\">
                        <i class=\"fas fa-reply me-1\"></i>Répondre
                    </button>
                {% endif %}
                {% if canManageComment %}
                    <button type=\"button\" class=\"btn btn-link text-decoration-none comment-edit-toggle\" data-comment-id=\"{{ comment.id }}\">
                        <i class=\"fas fa-pen me-1\"></i>Modifier
                    </button>
                    <form action=\"{{ path('web_comments_delete', {postId: post.id, commentId: comment.id}) }}\" method=\"POST\" class=\"d-inline comment-delete-form\" data-comment-id=\"{{ comment.id }}\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_comment_' ~ comment.id) }}\">
                        <button type=\"submit\" class=\"btn btn-link text-danger text-decoration-none\">
                            <i class=\"fas fa-trash-alt me-1\"></i>Supprimer
                        </button>
                    </form>
                {% endif %}
            </div>
            <div class=\"reply-form d-none\" data-comment-id=\"{{ comment.id }}\">
                <form class=\"comment-input-group mt-2\" action=\"{{ path('api_posts_comments_reply', {postId: post.id, id: comment.id}) }}\" method=\"POST\" data-reply-form>
                    <input type=\"text\" class=\"form-control\" name=\"content\" placeholder=\"Répondre à {{ commentDisplayName }}...\" required>
                    <button type=\"submit\" class=\"btn btn-primary\">
                        <i class=\"fas fa-paper-plane\"></i>
                    </button>
                </form>
            </div>
            {% if canManageComment %}
                <form action=\"{{ path('web_comments_update', {postId: post.id, commentId: comment.id}) }}\" method=\"POST\" class=\"comment-edit-form d-none\" data-comment-id=\"{{ comment.id }}\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('update_comment_' ~ comment.id) }}\">
                    <div class=\"mb-2\">
                        <label class=\"form-label fw-semibold small\">Modifier le commentaire</label>
                        <textarea name=\"content\" rows=\"3\" required>{{ comment.content }}</textarea>
                    </div>
                    <div class=\"text-end\">
                        <button type=\"submit\" class=\"btn btn-primary btn-sm\">
                            <i class=\"fas fa-save me-1\"></i>Enregistrer
                        </button>
                    </div>
                </form>
            {% endif %}
        </div>
    </div>
    {% for reply in comment.replies %}
        {{ _self.render_comment(reply, post, commentAuthorNames, true) }}
    {% endfor %}
{% endmacro %}

{% block stylesheets %}
{{ parent() }}
<style>
    body {
        background: #f0f2f5;
    }
    .community-shell {
        max-width: 960px;
        margin: 0 auto;
    }
    .composer-card,
    .post-item {
        background: #fff;
        border-radius: 18px;
        box-shadow: 0 15px 40px rgba(23, 15, 46, 0.08);
        border: 1px solid rgba(127, 0, 255, 0.08);
    }
    .composer-card {
        padding: 20px 24px;
    }
    .composer-textarea {
        border: none;
        resize: none;
        font-size: 1rem;
        background: #f7f8fc;
        border-radius: 14px;
        padding: 16px 18px;
        min-height: 90px;
    }
    .composer-textarea:focus {
        outline: none;
        box-shadow: 0 0 0 2px rgba(127, 0, 255, 0.25);
    }
    .media-row {
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
    }
    .media-row input[type=\"file\"],
    .media-row input[type=\"url\"] {
        flex: 1;
        border-radius: 12px;
    }
    .post-item {
        padding: 18px 22px 10px;
        margin-bottom: 24px;
    }
    .post-header {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 14px;
    }
    .post-avatar {
        width: 56px;
        height: 56px;
        border-radius: 50%;
        background: linear-gradient(135deg, #7f00ff, #ff9cb6);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-weight: 700;
        font-size: 1.2rem;
        box-shadow: 0 6px 16px rgba(127, 0, 255, 0.25);
    }
    .post-author {
        font-weight: 600;
        color: #1f2937;
    }
    .post-meta {
        font-size: 0.85rem;
        color: #6b7280;
        display: flex;
        align-items: center;
        gap: 6px;
    }
    .post-content {
        font-size: 1rem;
        color: #374151;
        line-height: 1.7;
        margin-bottom: 15px;
    }
    .post-image {
        border-radius: 16px;
        width: 100%;
        max-height: 520px;
        object-fit: cover;
        margin-bottom: 15px;
        border: 1px solid rgba(127, 0, 255, 0.08);
    }
    .post-stats {
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-top: 1px solid #f1f5f9;
        padding: 12px 4px 6px;
        margin-top: 10px;
        color: #6b7280;
        font-size: 0.9rem;
    }
    .like-chip {
        width: 28px;
        height: 28px;
        border-radius: 50%;
        background: linear-gradient(135deg, #7f00ff, #ff9cb6);
        color: #fff;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 0.85rem;
        box-shadow: 0 6px 16px rgba(127, 0, 255, 0.2);
    }
    .post-actions {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        border-top: 1px solid #f1f5f9;
        margin-top: 6px;
    }
    .post-action-btn {
        border: none;
        background: none;
        color: #6b7280;
        font-weight: 600;
        padding: 12px 10px;
        border-radius: 0;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        transition: background 0.2s ease, color 0.2s ease;
        text-transform: capitalize;
    }
    .post-action-btn i {
        font-size: 1.05rem;
    }
    .post-action-btn:hover,
    .post-action-btn:focus {
        background: rgba(127, 0, 255, 0.08);
        color: #7f00ff;
    }
    .post-action-btn.liked {
        color: #7f00ff;
    }
    .post-action-btn.dislike-btn.reaction-active {
        color: #dc2626;
    }
    .post-action-btn.reaction-active .fas {
        color: inherit;
    }
    .post-stats .dislike-pill {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        color: #dc2626;
        font-weight: 600;
    }
    .comments-section {
        border-top: 1px solid #f1f5f9;
        margin-top: 15px;
        padding-top: 15px;
    }
    .comment-item {
        display: flex;
        gap: 12px;
        margin-bottom: 15px;
    }
    .comment-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: #f3e8ff;
        color: #7f00ff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
    }
    .comment-bubble {
        background: #f7f8fc;
        padding: 10px 14px;
        border-radius: 16px;
        flex: 1;
        border: 1px solid rgba(127, 0, 255, 0.05);
    }
    .comment-author {
        font-weight: 600;
        color: #111827;
        font-size: 0.92rem;
    }
    .comment-meta {
        font-size: 0.8rem;
        color: #6b7280;
    }
    .comment-content {
        margin-top: 4px;
        font-size: 0.95rem;
        color: #374151;
    }
    .comment-actions {
        display: flex;
        gap: 8px;
        margin-top: 8px;
        justify-content: flex-end;
    }
    .comment-actions button {
        font-size: 0.85rem;
        padding: 0;
    }
    .comment-form .form-control {
        border-radius: 999px;
        background: #f7f8fc;
        border: none;
    }
    .comment-form .form-control:focus {
        box-shadow: 0 0 0 2px rgba(127, 0, 255, 0.25);
    }
    .post-manage-bar {
        display: flex;
        justify-content: flex-end;
        gap: 12px;
        margin-top: 8px;
    }
    .post-manage-bar .btn {
        font-size: 0.9rem;
        padding: 4px 10px;
    }
    .post-edit-form,
    .comment-edit-form {
        background: #f7f8fc;
        border: 1px solid rgba(127, 0, 255, 0.1);
        border-radius: 16px;
        padding: 15px;
        margin-top: 12px;
    }
    .post-edit-form textarea,
    .comment-edit-form textarea {
        width: 100%;
        border-radius: 12px;
        border: 1px solid #e5e7eb;
        padding: 10px 12px;
        font-size: 0.95rem;
    }
    .post-edit-form textarea:focus,
    .comment-edit-form textarea:focus {
        outline: none;
        border-color: #7f00ff;
        box-shadow: 0 0 0 2px rgba(127, 0, 255, 0.15);
    }
    .comment-edit-form textarea {
        min-height: 80px;
    }
    .post-edit-form input[type=\"url\"],
    .post-edit-form input[type=\"file\"] {
        border-radius: 10px;
        border: 1px solid #e5e7eb;
        padding: 8px 10px;
    }
    .post-edit-form .form-check {
        margin-top: 8px;
    }
    .d-none {
        display: none;
    }
    .comment-input-group {
        display: flex;
        gap: 10px;
    }
    .comment-input-group input {
        flex: 1;
    }
    .pill-badge {
        background: rgba(127, 0, 255, 0.1);
        color: #7f00ff;
        padding: 4px 12px;
        border-radius: 999px;
        font-size: 0.85rem;
        font-weight: 600;
    }
    .post-menu-btn {
        border: none;
        background: none;
        color: #9ca3af;
        font-size: 1.2rem;
        cursor: pointer;
        padding: 4px 8px;
        border-radius: 8px;
    }
    .post-menu-btn:hover {
        background: rgba(127, 0, 255, 0.08);
        color: #7f00ff;
    }
</style>
{% endblock %}

{% block body %}
{% set userReactions = userReactions|default({}) %}
<div class=\"container my-5\">
    <div class=\"community-shell\">
        <div class=\"text-center mb-5\">
            <span class=\"pill-badge mb-3 d-inline-block\">Communauté MuseHub</span>
            <h1 class=\"display-5 fw-bold mb-2\">Partagez vos inspirations</h1>
            <p class=\"lead text-muted\">Photos, pensées, questions – exprimez-vous comme sur Facebook.</p>
        </div>

        {% if app.user %}
            <div class=\"composer-card mb-4\">
                <form action=\"{{ path('web_posts_create') }}\" method=\"POST\" id=\"postForm\" enctype=\"multipart/form-data\">
                    <div class=\"d-flex align-items-center gap-3 mb-3\">
                        <div class=\"post-avatar\" style=\"width: 48px; height:48px;\">
                            {{ (app.user.username ?? app.user.email ?? 'Vous')|slice(0,1)|upper }}
                        </div>
                        <div>
                            <p class=\"mb-0 text-muted small\">Publiez en tant que</p>
                            <strong>{{ app.user.username ?? app.user.email }}</strong>
                        </div>
                    </div>
                    <textarea class=\"composer-textarea mb-3\" name=\"content\" placeholder=\"Quoi de neuf aujourd'hui ?\" required></textarea>
                    <div class=\"media-row mb-3\">
                        <input type=\"file\" class=\"form-control\" name=\"image_file\" accept=\"image/png,image/jpeg,image/webp,image/gif\">
                        <input type=\"url\" class=\"form-control\" name=\"image_url\" placeholder=\"URL de l'image\">
                    </div>
                    <div class=\"mb-3\">
                        <select class=\"form-select\" name=\"category_id\" required>
                            <option value=\"\">Choisir une catégorie</option>
                            <option value=\"1\">News - Actualités et annonces</option>
                            <option value=\"2\">Questions - Questions et discussions</option>
                            <option value=\"3\">Memes - Humour et memes</option>
                        </select>
                    </div>
                    <div class=\"d-flex justify-content-end\">
                        <button type=\"submit\" class=\"btn btn-primary px-4\">
                            <i class=\"fas fa-paper-plane me-2\"></i>Publier
                        </button>
                    </div>
                </form>
            </div>
        {% else %}
            <div class=\"composer-card mb-4 text-center\">
                <i class=\"fas fa-users fa-2x text-muted mb-3\"></i>
                <p class=\"mb-3\">Connectez-vous pour publier et interagir avec la communauté.</p>
                <a href=\"{{ path('login') }}\" class=\"btn btn-primary px-4\">Se connecter</a>
            </div>
        {% endif %}

        <!-- Filters and Sorting -->
        <div class=\"card mb-4\">
            <div class=\"card-body\">
                <div class=\"row g-3 align-items-end\">
                    <div class=\"col-md-4\">
                        <label class=\"form-label fw-semibold\">Filtrer par catégorie</label>
                        <select class=\"form-select\" id=\"categoryFilter\">
                            <option value=\"\">Toutes les catégories</option>
                            <option value=\"1\" {{ currentCategory == '1' ? 'selected' : '' }}>News</option>
                            <option value=\"2\" {{ currentCategory == '2' ? 'selected' : '' }}>Questions</option>
                            <option value=\"3\" {{ currentCategory == '3' ? 'selected' : '' }}>Memes</option>
                        </select>
                    </div>
                    <div class=\"col-md-4\">
                        <label class=\"form-label fw-semibold\">Trier par</label>
                        <select class=\"form-select\" id=\"sortFilter\">
                            <option value=\"recent\" {{ currentSort == 'recent' ? 'selected' : '' }}>Plus récent</option>
                            <option value=\"liked\" {{ currentSort == 'liked' ? 'selected' : '' }}>Plus aimé</option>
                            <option value=\"commented\" {{ currentSort == 'commented' ? 'selected' : '' }}>Plus commenté</option>
                        </select>
                    </div>
                    <div class=\"col-md-4\">
                        <button type=\"button\" class=\"btn btn-primary w-100\" id=\"applyFilters\">
                            <i class=\"fas fa-filter me-2\"></i>Appliquer les filtres
                        </button>
                    </div>
                </div>
            </div>
        </div>

        {% for post in posts %}
            <div class=\"post-item\" id=\"post-{{ post.id }}\" data-post-id=\"{{ post.id }}\">
                <div class=\"post-header\">
                    <div class=\"post-avatar\">{{ (authorNames[post.authorUuid] ?? 'Membre')|slice(0,1)|upper }}</div>
                    <div class=\"flex-grow-1\">
                        <div class=\"post-author\">{{ authorNames[post.authorUuid] ?? ('Utilisateur ' ~ post.authorUuid|slice(0,8)) }}</div>
                        <div class=\"post-meta\">
                            <span>{{ post.createdAt|date('d/m/Y à H:i') }}</span>
                            <span>·</span>
                            <i class=\"fas fa-globe-americas\"></i>
                        </div>
                    </div>
                    <button class=\"post-menu-btn\" type=\"button\" aria-label=\"Options\">
                        <i class=\"fas fa-ellipsis-h\"></i>
                    </button>
                </div>

                <div class=\"post-content\">{{ post.content|nl2br }}</div>

                {% if post.imageUrl %}
                    <img src=\"{{ post.imageUrl }}\" class=\"post-image\" alt=\"Post image\">
                {% endif %}

                {% set canManagePost = app.user and (is_granted('ROLE_ADMIN') or app.user.uuid == post.authorUuid) %}
                {% if canManagePost %}
                    <div class=\"post-manage-bar\">
                        <button type=\"button\" class=\"btn btn-light btn-sm post-edit-toggle\" data-post-id=\"{{ post.id }}\">
                            <i class=\"fas fa-pen me-1\"></i>Modifier
                        </button>
                        <form action=\"{{ path('web_posts_delete', {id: post.id}) }}\" method=\"POST\" class=\"d-inline delete-post-form\" data-post-id=\"{{ post.id }}\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_post_' ~ post.id) }}\">
                            <button type=\"submit\" class=\"btn btn-outline-danger btn-sm\">
                                <i class=\"fas fa-trash-alt me-1\"></i>Supprimer
                            </button>
                        </form>
                    </div>

                    <form action=\"{{ path('web_posts_update', {id: post.id}) }}\" method=\"POST\" enctype=\"multipart/form-data\" class=\"post-edit-form d-none\" data-post-id=\"{{ post.id }}\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('update_post_' ~ post.id) }}\">
                        <div class=\"mb-3\">
                            <label class=\"form-label fw-semibold\">Contenu</label>
                            <textarea name=\"content\" rows=\"4\" required>{{ post.content }}</textarea>
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label fw-semibold\">URL de l'image</label>
                            <input type=\"url\" name=\"image_url\" class=\"form-control\" value=\"{{ post.imageUrl }}\">
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label fw-semibold\">Remplacer l'image</label>
                            <input type=\"file\" name=\"image_file\" class=\"form-control\" accept=\"image/png,image/jpeg,image/webp,image/gif\">
                        </div>
                        <div class=\"form-check mb-3\">
                            <input class=\"form-check-input\" type=\"checkbox\" value=\"1\" id=\"removeImage{{ post.id }}\" name=\"remove_image\">
                            <label class=\"form-check-label\" for=\"removeImage{{ post.id }}\">
                                Retirer l'image actuelle
                            </label>
                        </div>
                        <div class=\"text-end\">
                            <button type=\"submit\" class=\"btn btn-primary btn-sm\">
                                <i class=\"fas fa-save me-1\"></i>Enregistrer
                            </button>
                        </div>
                    </form>
                {% endif %}

                <div class=\"post-stats\">
                    <div class=\"d-flex align-items-center gap-4\">
                        <div class=\"d-flex align-items-center gap-2\">
                            <span class=\"like-chip\"><i class=\"fas fa-thumbs-up\"></i></span>
                            <span class=\"like-count\" data-post-id=\"{{ post.id }}\">{{ post.likesCount }}</span>
                        </div>
                        <div class=\"dislike-pill\">
                            <i class=\"fas fa-thumbs-down\"></i>
                            <span class=\"dislike-count\" data-post-id=\"{{ post.id }}\">{{ post.dislikesCount }}</span>
                        </div>
                    </div>
                    <div class=\"text-muted small\">
                        <span class=\"comment-count\" data-post-id=\"{{ post.id }}\">{{ post.comments|length }}</span> commentaires
                    </div>
                </div>

                {% set activeReaction = userReactions[post.id] ?? null %}
                <div class=\"post-actions\">
                    <button class=\"post-action-btn like-btn reaction-btn {{ activeReaction == 'like' ? 'liked reaction-active' : '' }}\"
                        data-post-id=\"{{ post.id }}\"
                        data-reaction=\"like\"
                        data-reaction-url=\"{{ path('api_posts_reaction', {id: post.id}) }}\">
                        <i class=\"far fa-thumbs-up\"></i>
                        J'aime
                    </button>
                    <button class=\"post-action-btn reaction-btn dislike-btn {{ activeReaction == 'dislike' ? 'reaction-active disliked' : '' }}\"
                        data-post-id=\"{{ post.id }}\"
                        data-reaction=\"dislike\"
                        data-reaction-url=\"{{ path('api_posts_reaction', {id: post.id}) }}\">
                        <i class=\"far fa-thumbs-down\"></i>
                        Je n'aime pas
                    </button>
                    <button class=\"post-action-btn comment-focus-btn\" type=\"button\" data-target=\"#comment-input-{{ post.id }}\">
                        <i class=\"far fa-comment-dots\"></i>
                        Commenter
                    </button>
                    <button class=\"post-action-btn\" type=\"button\" disabled>
                        <i class=\"far fa-share-square\"></i>
                        Partager
                    </button>
                </div>

                <div class=\"comments-section\" id=\"comments-{{ post.id }}\">
                    <div id=\"comments-list-{{ post.id }}\">
                        {% set topLevelComments = [] %}
                        {% for comment in post.comments %}
                            {% if comment.parentComment is null %}
                                {% set topLevelComments = topLevelComments|merge([comment]) %}
                            {% endif %}
                        {% endfor %}

                        {% for comment in topLevelComments %}
                            {{ _self.render_comment(comment, post, commentAuthorNames) }}
                        {% else %}
                            <p class=\"text-muted text-center py-3 mb-0\">Soyez le premier à commenter</p>
                        {% endfor %}
                    </div>

                    <div class=\"comment-form mt-3\">
                        <form class=\"comment-input-group\" action=\"{{ path('web_posts_comment', {id: post.id}) }}\" method=\"POST\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('comment_post_' ~ post.id) }}\">
                            {% if not app.user %}
                                <input type=\"text\" class=\"form-control\" name=\"commenter_name\" placeholder=\"Votre nom (optionnel)\">
                            {% endif %}
                            <input type=\"text\" class=\"form-control\" id=\"comment-input-{{ post.id }}\" name=\"content\" placeholder=\"Écrivez un commentaire...\" required>
                            <button type=\"submit\" class=\"btn btn-primary\">
                                <i class=\"fas fa-paper-plane\"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"composer-card text-center\">
                <i class=\"fas fa-comments fa-2x text-muted mb-3\"></i>
                <h5 class=\"mb-2\">Aucun post pour le moment</h5>
                <p class=\"text-muted\">Lancez la conversation en partageant votre première publication.</p>
            </div>
        {% endfor %}
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
    (function() {
        const isAuthenticated = {{ app.user ? 'true' : 'false' }};
        const loginUrl = '{{ path('login') }}';

        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.reaction-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    if (!isAuthenticated) {
                        window.location.href = loginUrl;
                        return;
                    }

                    const postId = this.dataset.postId;
                    const reactionType = this.dataset.reaction;
                    const reactionUrl = this.dataset.reactionUrl;
                    sendReaction(reactionUrl, postId, reactionType, loginUrl);
                });
            });

            document.querySelectorAll('.comment-focus-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    const target = document.querySelector(this.dataset.target);
                    if (target) {
                        target.focus();
                        target.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    }
                });
            });

            document.querySelectorAll('.post-edit-toggle').forEach(btn => {
                btn.addEventListener('click', function() {
                    const postId = this.dataset.postId;
                    toggleVisibility(`[data-post-id=\"\${postId}\"].post-edit-form`);
                });
            });

            document.querySelectorAll('.comment-edit-toggle').forEach(btn => {
                btn.addEventListener('click', function() {
                    const commentId = this.dataset.commentId;
                    toggleVisibility(`[data-comment-id=\"\${commentId}\"].comment-edit-form`);
                });
            });

            document.querySelectorAll('.delete-post-form').forEach(form => {
                form.addEventListener('submit', function(event) {
                    if (!confirm('Voulez-vous vraiment supprimer cette publication ?')) {
                        event.preventDefault();
                    }
                });
            });

            document.querySelectorAll('.comment-delete-form').forEach(form => {
                form.addEventListener('submit', function(event) {
                    if (!confirm('Supprimer ce commentaire ?')) {
                        event.preventDefault();
                    }
                });
            });

            document.querySelectorAll('.reply-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    if (!isAuthenticated) {
                        window.location.href = loginUrl;
                        return;
                    }

                    const commentId = this.dataset.commentId;
                    toggleVisibility(`[data-comment-id=\"\${commentId}\"].reply-form`);
                });
            });

            document.querySelectorAll('[data-reply-form]').forEach(form => {
                form.addEventListener('submit', function(event) {
                    event.preventDefault();

                    const formData = new FormData(this);
                    const content = formData.get('content');
                    const commentId = this.closest('.reply-form').dataset.commentId;
                    const url = this.action;

                    if (!content || content.trim() === '') {
                        alert('Le contenu de la réponse est requis.');
                        return;
                    }

                    fetch(url, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify({ content: content.trim() }),
                        credentials: 'same-origin'
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.error) {
                            alert(data.error);
                        } else {
                            // Reload the page to show the new reply
                            window.location.reload();
                        }
                    })
                    .catch(() => {
                        alert('Erreur lors de l\\'envoi de la réponse.');
                    });
                });
            });

            // Filter functionality
            document.getElementById('applyFilters').addEventListener('click', function() {
                const categoryId = document.getElementById('categoryFilter').value;
                const sortBy = document.getElementById('sortFilter').value;

                const params = new URLSearchParams();
                if (categoryId) {
                    params.set('category', categoryId);
                }
                if (sortBy && sortBy !== 'recent') {
                    params.set('sort', sortBy);
                }

                const url = '{{ path('community') }}' + (params.toString() ? '?' + params.toString() : '');
                window.location.href = url;
            });
        });
    })();

    function toggleVisibility(selector) {
        const element = document.querySelector(selector);
        if (!element) {
            return;
        }
        element.classList.toggle('d-none');
    }

    function sendReaction(url, postId, type, loginUrl) {
        fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            credentials: 'same-origin',
            body: JSON.stringify({ type })
        })
        .then(async response => {
            let data = null;
            const contentType = response.headers.get('content-type') || '';

            if (contentType.includes('application/json')) {
                try {
                    data = await response.json();
                } catch (error) {
                    data = null;
                }
            } else {
                const text = await response.text();
                try {
                    data = JSON.parse(text);
                } catch (error) {
                    data = { raw: text };
                }
            }

            return { ok: response.ok, status: response.status, data };
        })
        .then(({ ok, status, data }) => {
            if (!ok) {
                if (status === 401 || status === 403) {
                    window.location.href = loginUrl;
                    return;
                }
                if (data && data.error) {
                    alert(data.error);
                } else {
                    alert('Une erreur est survenue. Merci de réessayer.');
                }
                return;
            }

            if (data && data.likes_count !== undefined) {
                document.querySelectorAll(`.like-count[data-post-id=\"\${postId}\"]`).forEach(el => {
                    el.textContent = data.likes_count;
                });
                document.querySelectorAll(`.dislike-count[data-post-id=\"\${postId}\"]`).forEach(el => {
                    el.textContent = data.dislikes_count ?? 0;
                });

                document.querySelectorAll(`.reaction-btn[data-post-id=\"\${postId}\"]`).forEach(btn => {
                    btn.classList.remove('reaction-active', 'liked', 'disliked');

                    const icon = btn.querySelector('i');
                    if (icon) {
                        icon.classList.remove('fas');
                        if (!icon.classList.contains('far')) {
                            icon.classList.add('far');
                        }
                    }

                    if (btn.dataset.reaction === data.active_reaction) {
                        btn.classList.add('reaction-active');
                        if (data.active_reaction === 'like') {
                            btn.classList.add('liked');
                        } else {
                            btn.classList.add('disliked');
                        }
                        if (icon) {
                            icon.classList.remove('far');
                            icon.classList.add('fas');
                        }
                        btn.style.transform = 'scale(1.2)';
                        setTimeout(() => {
                            btn.style.transform = 'scale(1)';
                        }, 200);
                    }
                });
            }
        })
        .catch(() => {
            alert('Impossible de contacter le serveur. Vérifiez votre connexion.');
        });
    }

</script>
{% endblock %}
", "front/community.html.twig", "C:\\xampp\\htdocs\\MuseHub-my-work\\MuseHub-my-work\\templates\\front\\community.html.twig");
    }
}
