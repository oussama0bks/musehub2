<?php
/**
 * Script pour créer la table event_notification
 * Exécuter : php create_notification_table.php
 */

$host = 'localhost';
$dbname = 'musehub';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "=== Création de la table event_notification ===\n\n";

    // Créer la table event_notification
    $sql = "
    CREATE TABLE IF NOT EXISTS event_notification (
        id INT AUTO_INCREMENT PRIMARY KEY,
        event_id INT NOT NULL,
        user_id INT NOT NULL,
        type VARCHAR(50) NOT NULL,
        status VARCHAR(20) NOT NULL DEFAULT 'pending',
        scheduled_at DATETIME NOT NULL,
        sent_at DATETIME NULL,
        message TEXT NULL,
        channel VARCHAR(50) NOT NULL DEFAULT 'email',
        error_message TEXT NULL,
        retry_count INT NOT NULL DEFAULT 0,
        created_at DATETIME NOT NULL,
        INDEX idx_notification_status (status),
        INDEX idx_scheduled_at (scheduled_at),
        INDEX idx_event_id (event_id),
        INDEX idx_user_id (user_id),
        CONSTRAINT fk_notification_event FOREIGN KEY (event_id) REFERENCES event(id) ON DELETE CASCADE,
        CONSTRAINT fk_notification_user FOREIGN KEY (user_id) REFERENCES user(id) ON DELETE CASCADE
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
    ";

    $pdo->exec($sql);
    echo "✓ Table event_notification créée avec succès\n\n";

    // Statistiques
    $count = $pdo->query("SELECT COUNT(*) FROM event_notification")->fetchColumn();
    echo "=== Résumé ===\n";
    echo "Notifications dans la base : $count\n";
    echo "\n✅ Installation terminée avec succès !\n\n";

    echo "=== Prochaines étapes ===\n";
    echo "1. Configurer l'envoi d'emails dans .env :\n";
    echo "   MAILER_DSN=smtp://localhost:1025\n\n";
    echo "2. Tester la commande d'envoi :\n";
    echo "   php bin/console app:send-event-notifications\n\n";
    echo "3. Configurer un cron job (toutes les 5 minutes) :\n";
    echo "   */5 * * * * cd /path/to/project && php bin/console app:send-event-notifications\n\n";

} catch (PDOException $e) {
    echo "❌ Erreur : " . $e->getMessage() . "\n";
    exit(1);
}
