# 🔔 Système de Notifications d'Événements - MuseHub

## Vue d'ensemble

Système complet de notifications et rappels automatiques pour les événements MuseHub. Les participants reçoivent des notifications par email aux moments clés.

## Fonctionnalités

### Types de Notifications

1. **reminder_24h** - Rappel 24 heures avant l'événement
2. **reminder_1h** - Rappel 1 heure avant l'événement  
3. **event_created** - Confirmation immédiate d'inscription
4. **event_updated** - Notification de modification d'événement
5. **event_cancelled** - Notification d'annulation

### Canaux Supportés

- ✅ **Email** (implémenté)
- 🔜 **SMS** (à venir)
- 🔜 **Push Notifications** (à venir)
- 🔜 **In-App** (à venir)

## Installation

### 1. Créer la table de notifications

```bash
php create_notification_table.php
```

### 2. Configuration Mailer

Ajoutez dans votre `.env` :

```env
###> symfony/mailer ###
MAILER_DSN=smtp://localhost:1025
# Pour production avec Gmail :
# MAILER_DSN=gmail+smtp://USERNAME:PASSWORD@default
###< symfony/mailer ###
```

### 3. Tester l'envoi manuel

```bash
php bin/console app:send-event-notifications
```

## Configuration Cron

Pour automatiser l'envoi des notifications, configurez un cron job :

```bash
# Linux/Mac - Ouvrir crontab
crontab -e

# Ajouter cette ligne (exécution toutes les 5 minutes)
*/5 * * * * cd /path/to/musehub && php bin/console app:send-event-notifications >> /var/log/musehub-notifications.log 2>&1
```

**Windows (Planificateur de tâches) :**
1. Ouvrir "Planificateur de tâches"
2. Créer une tâche de base
3. Déclencheur : Répéter toutes les 5 minutes
4. Action : `C:\xampp\php\php.exe`
5. Arguments : `C:\xampp\htdocs\MuseHub-my-work\MuseHub-my-work\bin\console app:send-event-notifications`

## Utilisation

### Automatique

Le système fonctionne automatiquement :

1. **Inscription à un événement** → Notifications planifiées automatiquement
2. **Modification événement** → Tous les participants notifiés
3. **Cron job** → Envoie les notifications au bon moment

### Manuel (Interface Admin)

1. Accéder à `/admin/notifications`
2. Voir toutes les notifications (en attente, envoyées, échouées)
3. Bouton "Envoyer les notifications" pour forcer l'envoi

### Programmatique

```php
use App\Service\NotificationManager;

class MyController extends AbstractController
{
    public function __construct(
        private NotificationManager $notificationManager
    ) {}

    public function myAction(Event $event, User $user)
    {
        // Planifier une notification
        $this->notificationManager->scheduleNotification(
            $event,
            $user,
            'reminder_24h',
            (new \DateTime())->modify('+1 day')
        );

        // Notifier tous les participants immédiatement
        $this->notificationManager->notifyParticipants(
            $event,
            'event_updated',
            'Message personnalisé optionnel'
        );

        // Annuler les notifications
        $this->notificationManager->cancelNotificationsForEvent($event);
    }
}
```

## Architecture

### Entités

**EventNotification**
- `event` - Événement concerné (ManyToOne)
- `user` - Utilisateur destinataire (ManyToOne)
- `type` - Type de notification
- `status` - État (pending, sent, failed)
- `scheduledAt` - Date d'envoi planifiée
- `sentAt` - Date d'envoi réelle
- `channel` - Canal (email, sms, push)
- `retryCount` - Nombre de tentatives

### Services

**NotificationManager** (`src/Service/NotificationManager.php`)
- `scheduleNotification()` - Planifier une notification
- `sendNotification()` - Envoyer une notification
- `sendPendingNotifications()` - Envoyer toutes les notifications en attente
- `notifyParticipants()` - Notifier tous les participants

### Event Subscriber

**ParticipantSubscriber** (`src/EventSubscriber/ParticipantSubscriber.php`)
- Écoute les événements Doctrine
- Planifie automatiquement les notifications lors d'une inscription
- Notifie les participants lors de modifications

### Commandes

**SendEventNotificationsCommand**
```bash
php bin/console app:send-event-notifications
```

## Interface Admin

### Tableau de bord notifications

URL : `/admin/notifications`

**Statistiques :**
- Notifications en attente
- Notifications envoyées
- Notifications échouées

**Tableau détaillé :**
- ID, Événement, Utilisateur
- Type, Canal, Dates
- Statut, Nombre de tentatives

**Actions :**
- Envoyer manuellement les notifications en attente
- Voir l'historique complet

## Gestion des Erreurs

### Retry automatique

- Les notifications échouées sont marquées avec `status = 'failed'`
- `retryCount` est incrémenté
- Maximum 3 tentatives
- Les erreurs sont loggées dans `errorMessage`

### Logs

Les notifications sont loggées :
```
[info] Notification sent: {id: 123, type: reminder_24h, user: user@email.com}
[error] Failed to send notification: {id: 124, error: SMTP connection failed}
```

## Personnalisation

### Template Email

Modifiez `NotificationManager::getEmailContent()` pour personnaliser :
- Design HTML
- Contenu des messages
- URLs et liens

### Nouveaux types de notifications

```php
// Ajouter dans NotificationManager
$this->scheduleNotification(
    $event,
    $user,
    'custom_notification_type',
    $scheduledAt
);
```

## Tests

### Test manuel

1. Créer un événement futur (demain)
2. S'inscrire à l'événement
3. Vérifier les notifications créées : `/admin/notifications`
4. Exécuter : `php bin/console app:send-event-notifications`
5. Vérifier la réception de l'email

### Test avec MailHog (local)

```bash
# Installer MailHog
# Windows: télécharger depuis https://github.com/mailhog/MailHog/releases

# Démarrer MailHog
mailhog

# Configurer .env
MAILER_DSN=smtp://localhost:1025

# Interface web
http://localhost:8025
```

## API REST

### Statistiques

```bash
GET /api/notifications/stats
```

Réponse :
```json
{
  "pending": 45,
  "sent": 238,
  "failed": 3
}
```

## Performance

- Index sur `status` et `scheduled_at` pour requêtes rapides
- Traitement par lots (batch processing)
- Nettoyage automatique des anciennes notifications (TODO)

## Sécurité

- ✅ CSRF protection sur actions admin
- ✅ ROLE_ADMIN requis pour gestion
- ✅ Validation des données
- ✅ Protection contre spam (vérification existence notification)

## Roadmap

- [ ] Notifications SMS via Twilio
- [ ] Push notifications (PWA)
- [ ] Templates personnalisables (Twig)
- [ ] Préférences utilisateur (désactiver certains types)
- [ ] Statistiques détaillées (taux d'ouverture, clics)
- [ ] Export des rapports
- [ ] Notifications in-app (temps réel)
- [ ] Webhooks pour événements externes

## Support

Pour toute question ou problème :
- Vérifier les logs : `var/log/dev.log`
- Interface admin : `/admin/notifications`
- Exécuter manuellement : `php bin/console app:send-event-notifications --verbose`

---

**Développé pour MuseHub** 🎨
Version 1.0 - Décembre 2025
