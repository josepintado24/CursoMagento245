<?php

namespace Margento\ModuloBasico\Setup;

use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\UpgradeSchemaInterface;

class UpgradeSchema implements UpgradeSchemaInterface
{
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        if (version_compare($context->getVersion(), '1.2.0') < 0) {
            $installer = $setup;

            $installer->startSetup();
            $connection = $installer->getConnection();

            // Install new table
            $table = $installer->getConnection()->newTable(
                $installer->getTable('marcgento_subscription')
            )->addColumn(
                'subscription_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                [
                    'identity' => true,
                    'unsigned' => true,
                    'nullable' => false,
                    'primary' => true,
                ],
                'Subscription Id'
            )->addColumn(
                'created_at',
                \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
                null,
                [
                    'nullable' => false,
                    'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT,
                ],
                'Created at'
            )->addColumn(
                'update_at',
                \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
                null,
                [],
                'Updated at'
            )->addColumn(
                'firstname',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                64,
                ['nullable' => false],
                'First name'
            )->addColumn(
                'lastname',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                64,
                ['nullable' => false],
                'Last name'
            )->addColumn(
                'email',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255,
                ['nullable' => false],
                'Email address'
            )->addColumn(
                'status',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255,
                [
                    'nullable' => false,
                    'default' => 'pending',
                ],
                'Status'
            )->addColumn(
                'message',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                '64k',
                [
                    'unsigned' => true,
                    'nullable' => false,
                ],
                'Subscription Notes'
            )->addIndex(
                $installer->getIdxName('marcgento_subscription', ['email']),
                ['email']
            )->setComment(
                'Table Subscription'
            );

            $installer->getConnection()->createTable($table);

            $installer->endSetup();
        }
        if (version_compare($context->getVersion(), '1.3.1') < 0) {
            $installer = $setup;

            $installer->startSetup();
            $connection = $installer->getConnection();

            // Install new table
            $table = $installer->getConnection()->newTable(
                $installer->getTable('marcgento_numtelefono')
            )->addColumn(
                'numtelefono_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                [
                    'identity' => true,
                    'unsigned' => true,
                    'nullable' => false,
                    'primary' => true,
                ],
                'Numtelefono Id'
            )->addColumn(
                'created_at',
                \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
                null,
                [
                    'nullable' => false,
                    'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT,
                ],
                'Created at'
            )->addColumn(
                'update_at',
                \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
                null,
                [],
                'Updated at'
            )->addColumn(
                'nombre',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                64,
                ['nullable' => false],
                'Nombre'
            )->addColumn(
                'apellidos',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                64,
                ['nullable' => false],
                'Apellidos'
            )->addColumn(
                'email',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255,
                ['nullable' => false],
                'Correo electronico'
            )->addColumn(
                'status',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                20,
                [
                    'nullable' => false,
                    'default' => 'pending',
                ],
                'Status'
            )->addIndex(
                $installer->getIdxName('marcgento_numtelefono', ['email']),
                ['email']
            )->setComment(
                'Table Numtelefono'
            );

            $installer->getConnection()->createTable($table);

            $installer->endSetup();
        }
    }
}
