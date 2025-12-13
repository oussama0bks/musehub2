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

/* emails/participant_status_change.html.twig */
class __TwigTemplate_a0a93e4881e47a886612347e7f2b733e extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/participant_status_change.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/participant_status_change.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }
        .content {
            background: #f9fafb;
            padding: 30px;
            border-radius: 0 0 10px 10px;
        }
        .status-badge {
            display: inline-block;
            padding: 10px 20px;
            border-radius: 25px;
            font-weight: bold;
            margin: 20px 0;
            font-size: 18px;
        }
        .status-confirmed {
            background: #10b981;
            color: white;
        }
        .status-rejected {
            background: #ef4444;
            color: white;
        }
        .status-pending {
            background: #f59e0b;
            color: white;
        }
        .event-details {
            background: white;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
            border-left: 4px solid #667eea;
        }
        .event-details h3 {
            margin-top: 0;
            color: #667eea;
        }
        .detail-row {
            margin: 10px 0;
            display: flex;
            align-items: center;
        }
        .detail-row strong {
            min-width: 120px;
        }
        .button {
            display: inline-block;
            padding: 12px 30px;
            background: #667eea;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            margin: 10px 0;
            font-weight: bold;
        }
        .footer {
            text-align: center;
            color: #6b7280;
            font-size: 14px;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #e5e7eb;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <h1>";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statusEmoji"]) || array_key_exists("statusEmoji", $context) ? $context["statusEmoji"] : (function () { throw new RuntimeError('Variable "statusEmoji" does not exist.', 87, $this->source); })()), "html", null, true);
        yield " MuseHub - Mise à jour d'inscription</h1>
    </div>
    
    <div class=\"content\">
        <p>Bonjour <strong>";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 91, $this->source); })()), "username", [], "any", false, false, false, 91), "html", null, true);
        yield "</strong>,</p>
        
        <p>Nous vous informons que votre inscription à l'événement suivant a été mise à jour :</p>
        
        <div class=\"event-details\">
            <h3>";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 96, $this->source); })()), "title", [], "any", false, false, false, 96), "html", null, true);
        yield "</h3>
            
            <div class=\"detail-row\">
                <strong>📅 Date :</strong>
                <span>";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 100, $this->source); })()), "dateTime", [], "any", false, false, false, 100), "d/m/Y à H:i"), "html", null, true);
        yield "</span>
            </div>
            
            <div class=\"detail-row\">
                <strong>📍 Lieu :</strong>
                <span>";
        // line 105
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 105, $this->source); })()), "location", [], "any", false, false, false, 105) == "online")) ? ("En ligne") : ("Sur place"));
        yield "</span>
            </div>
            
            ";
        // line 108
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 108, $this->source); })()), "eventType", [], "any", false, false, false, 108)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 109
            yield "            <div class=\"detail-row\">
                <strong>🏷️ Type :</strong>
                <span>";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 111, $this->source); })()), "eventType", [], "any", false, false, false, 111), "name", [], "any", false, false, false, 111), "html", null, true);
            yield "</span>
            </div>
            ";
        }
        // line 114
        yield "            
            ";
        // line 115
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 115, $this->source); })()), "description", [], "any", false, false, false, 115)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 116
            yield "            <div class=\"detail-row\">
                <strong>📝 Description :</strong>
                <span>";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 118, $this->source); })()), "description", [], "any", false, false, false, 118), 0, 200), "html", null, true);
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 118, $this->source); })()), "description", [], "any", false, false, false, 118)) > 200)) {
                yield "...";
            }
            yield "</span>
            </div>
            ";
        }
        // line 121
        yield "        </div>
        
        <p>Votre statut d'inscription :</p>
        <div class=\"status-badge status-";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 124, $this->source); })()), "html", null, true);
        yield "\">
            ";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statusEmoji"]) || array_key_exists("statusEmoji", $context) ? $context["statusEmoji"] : (function () { throw new RuntimeError('Variable "statusEmoji" does not exist.', 125, $this->source); })()), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), (isset($context["statusLabel"]) || array_key_exists("statusLabel", $context) ? $context["statusLabel"] : (function () { throw new RuntimeError('Variable "statusLabel" does not exist.', 125, $this->source); })())), "html", null, true);
        yield "
        </div>
        
        ";
        // line 128
        if (((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 128, $this->source); })()) == "confirmed")) {
            // line 129
            yield "        <p>🎉 <strong>Félicitations !</strong> Votre inscription a été confirmée. Nous avons hâte de vous voir à cet événement !</p>
        
        <p>N'oubliez pas d'ajouter cet événement à votre calendrier :</p>
        <a href=\"";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("api_events_ics", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 132, $this->source); })()), "id", [], "any", false, false, false, 132)]), "html", null, true);
            yield "\" class=\"button\">📅 Télécharger .ics</a>
        
        ";
            // line 134
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 134, $this->source); })()), "latitude", [], "any", false, false, false, 134) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 134, $this->source); })()), "longitude", [], "any", false, false, false, 134))) {
                // line 135
                yield "        <p>📍 Localisation de l'événement :</p>
        <a href=\"https://maps.google.com/?q=";
                // line 136
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 136, $this->source); })()), "latitude", [], "any", false, false, false, 136), "html", null, true);
                yield ",";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 136, $this->source); })()), "longitude", [], "any", false, false, false, 136), "html", null, true);
                yield "\" class=\"button\" target=\"_blank\">🗺️ Voir sur la carte</a>
        ";
            }
            // line 138
            yield "        
        ";
        } elseif ((        // line 139
(isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 139, $this->source); })()) == "rejected")) {
            // line 140
            yield "        <p>😔 Malheureusement, votre inscription n'a pas pu être acceptée pour cet événement. Cela peut être dû à une capacité limitée ou à des critères spécifiques.</p>
        
        <p>N'hésitez pas à consulter nos autres événements disponibles :</p>
        <a href=\"";
            // line 143
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("events");
            yield "\" class=\"button\">🎭 Voir les événements</a>
        
        ";
        } elseif ((        // line 145
(isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 145, $this->source); })()) == "pending")) {
            // line 146
            yield "        <p>⏳ Votre inscription est en cours de traitement. Nous vous informerons dès qu'une décision sera prise.</p>
        
        <p>Merci pour votre patience !</p>
        ";
        }
        // line 150
        yield "        
        <div class=\"footer\">
            <p>Cet email a été envoyé automatiquement par MuseHub.</p>
            <p>Pour toute question, n'hésitez pas à nous contacter.</p>
            <p>&copy; ";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " MuseHub - Plateforme artistique</p>
        </div>
    </div>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "emails/participant_status_change.html.twig";
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
        return array (  272 => 154,  266 => 150,  260 => 146,  258 => 145,  253 => 143,  248 => 140,  246 => 139,  243 => 138,  236 => 136,  233 => 135,  231 => 134,  226 => 132,  221 => 129,  219 => 128,  211 => 125,  207 => 124,  202 => 121,  193 => 118,  189 => 116,  187 => 115,  184 => 114,  178 => 111,  174 => 109,  172 => 108,  166 => 105,  158 => 100,  151 => 96,  143 => 91,  136 => 87,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }
        .content {
            background: #f9fafb;
            padding: 30px;
            border-radius: 0 0 10px 10px;
        }
        .status-badge {
            display: inline-block;
            padding: 10px 20px;
            border-radius: 25px;
            font-weight: bold;
            margin: 20px 0;
            font-size: 18px;
        }
        .status-confirmed {
            background: #10b981;
            color: white;
        }
        .status-rejected {
            background: #ef4444;
            color: white;
        }
        .status-pending {
            background: #f59e0b;
            color: white;
        }
        .event-details {
            background: white;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
            border-left: 4px solid #667eea;
        }
        .event-details h3 {
            margin-top: 0;
            color: #667eea;
        }
        .detail-row {
            margin: 10px 0;
            display: flex;
            align-items: center;
        }
        .detail-row strong {
            min-width: 120px;
        }
        .button {
            display: inline-block;
            padding: 12px 30px;
            background: #667eea;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            margin: 10px 0;
            font-weight: bold;
        }
        .footer {
            text-align: center;
            color: #6b7280;
            font-size: 14px;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #e5e7eb;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <h1>{{ statusEmoji }} MuseHub - Mise à jour d'inscription</h1>
    </div>
    
    <div class=\"content\">
        <p>Bonjour <strong>{{ user.username }}</strong>,</p>
        
        <p>Nous vous informons que votre inscription à l'événement suivant a été mise à jour :</p>
        
        <div class=\"event-details\">
            <h3>{{ event.title }}</h3>
            
            <div class=\"detail-row\">
                <strong>📅 Date :</strong>
                <span>{{ event.dateTime|date('d/m/Y à H:i') }}</span>
            </div>
            
            <div class=\"detail-row\">
                <strong>📍 Lieu :</strong>
                <span>{{ event.location == 'online' ? 'En ligne' : 'Sur place' }}</span>
            </div>
            
            {% if event.eventType %}
            <div class=\"detail-row\">
                <strong>🏷️ Type :</strong>
                <span>{{ event.eventType.name }}</span>
            </div>
            {% endif %}
            
            {% if event.description %}
            <div class=\"detail-row\">
                <strong>📝 Description :</strong>
                <span>{{ event.description|slice(0, 200) }}{% if event.description|length > 200 %}...{% endif %}</span>
            </div>
            {% endif %}
        </div>
        
        <p>Votre statut d'inscription :</p>
        <div class=\"status-badge status-{{ status }}\">
            {{ statusEmoji }} {{ statusLabel|upper }}
        </div>
        
        {% if status == 'confirmed' %}
        <p>🎉 <strong>Félicitations !</strong> Votre inscription a été confirmée. Nous avons hâte de vous voir à cet événement !</p>
        
        <p>N'oubliez pas d'ajouter cet événement à votre calendrier :</p>
        <a href=\"{{ url('api_events_ics', {id: event.id}) }}\" class=\"button\">📅 Télécharger .ics</a>
        
        {% if event.latitude and event.longitude %}
        <p>📍 Localisation de l'événement :</p>
        <a href=\"https://maps.google.com/?q={{ event.latitude }},{{ event.longitude }}\" class=\"button\" target=\"_blank\">🗺️ Voir sur la carte</a>
        {% endif %}
        
        {% elseif status == 'rejected' %}
        <p>😔 Malheureusement, votre inscription n'a pas pu être acceptée pour cet événement. Cela peut être dû à une capacité limitée ou à des critères spécifiques.</p>
        
        <p>N'hésitez pas à consulter nos autres événements disponibles :</p>
        <a href=\"{{ url('events') }}\" class=\"button\">🎭 Voir les événements</a>
        
        {% elseif status == 'pending' %}
        <p>⏳ Votre inscription est en cours de traitement. Nous vous informerons dès qu'une décision sera prise.</p>
        
        <p>Merci pour votre patience !</p>
        {% endif %}
        
        <div class=\"footer\">
            <p>Cet email a été envoyé automatiquement par MuseHub.</p>
            <p>Pour toute question, n'hésitez pas à nous contacter.</p>
            <p>&copy; {{ 'now'|date('Y') }} MuseHub - Plateforme artistique</p>
        </div>
    </div>
</body>
</html>
", "emails/participant_status_change.html.twig", "C:\\xampp\\htdocs\\MuseHub-my-work\\MuseHub-my-work\\templates\\emails\\participant_status_change.html.twig");
    }
}
