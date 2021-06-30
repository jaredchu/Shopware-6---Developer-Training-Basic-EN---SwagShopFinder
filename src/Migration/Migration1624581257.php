<?php declare(strict_types=1);

namespace SwagShopFinder\Migration;

use Doctrine\DBAL\Connection;
use Shopware\Core\Framework\Migration\MigrationStep;

class Migration1624581257 extends MigrationStep
{
    public function getCreationTimestamp(): int
    {
        return 1624581257;
    }

    public function update(Connection $connection): void
    {
        $connection->exec("
            ALTER TABLE `swag_shop_finder`
            ADD `url` VARCHAR(255) DEFAULT NULL;
        ");
    }

    public function updateDestructive(Connection $connection): void
    {
        $connection->exec("
            ALTER TABLE `swag_shop_finder`
            DROP COLUMN `url`;
        ");
    }
}
