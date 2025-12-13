<?php

use App\Kernel;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Dotenv\Dotenv;

require_once dirname(__DIR__).'/vendor/autoload.php';

(new Dotenv())->bootEnv(dirname(__DIR__).'/.env');

$kernel = new Kernel($_SERVER['APP_ENV'], (bool) $_SERVER['APP_DEBUG']);
$kernel->boot();

$container = $kernel->getContainer();
/** @var EntityManagerInterface $em */
$em = $container->get('doctrine.orm.entity_manager');
$conn = $em->getConnection();

echo "Updating schema manually...\n";

try {
    // 1. Create Catalogue table
    $sql1 = "CREATE TABLE IF NOT EXISTS catalogue (
        id INT AUTO_INCREMENT NOT NULL, 
        user_id INT NOT NULL, 
        name VARCHAR(255) NOT NULL, 
        created_at DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', 
        INDEX IDX_59A69925A76ED395 (user_id), 
        PRIMARY KEY(id)
    ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB";
    $conn->executeStatement($sql1);
    echo "Created table 'catalogue'.\n";

    // 2. Add foreign key to Catalogue table
    try {
        $sql2 = "ALTER TABLE catalogue ADD CONSTRAINT FK_59A69925A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)";
        $conn->executeStatement($sql2);
        echo "Added FK to 'catalogue'.\n";
    } catch (\Exception $e) {
        echo "FK for catalogue might already exist or failed: " . $e->getMessage() . "\n";
    }

    // 3. Add catalogue_id to Artwork table
    $schemaManager = $conn->createSchemaManager();
    $columns = $schemaManager->listTableColumns('artwork');
    
    if (!array_key_exists('catalogue_id', $columns)) {
        $sql3 = "ALTER TABLE artwork ADD catalogue_id INT DEFAULT NULL";
        $conn->executeStatement($sql3);
        echo "Added 'catalogue_id' to 'artwork'.\n";
        
        $sql4 = "ALTER TABLE artwork ADD CONSTRAINT FK_881FC5764A7843DC FOREIGN KEY (catalogue_id) REFERENCES catalogue (id)";
        $conn->executeStatement($sql4);
        echo "Added FK for 'catalogue_id' in 'artwork'.\n";
        
        $sql5 = "CREATE INDEX IDX_881FC5764A7843DC ON artwork (catalogue_id)";
        $conn->executeStatement($sql5);
        echo "Added Index for 'catalogue_id'.\n";
    } else {
        echo "'catalogue_id' already exists in 'artwork'.\n";
    }

    echo "Schema update completed successfully.\n";

} catch (\Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}

