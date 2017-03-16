<?php

use Phinx\Migration\AbstractMigration;

class CreateTableOrderItem extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $item = $this->table('order_item');
        $item->addColumn('order_id', 'integer')
             ->addColumn('product_id', 'integer')
             ->addColumn('quantity', 'integer')
             ->addColumn('price', 'integer')
             ->addColumn('deleted', 'integer')
             ->addForeignKey('order_id', 'order', 'id', ['delete'=>'CASCADE', 'update'=>'NO_ACTION'])
             ->addForeignKey('product_id', 'product', 'id', ['delete'=>'CASCADE', 'update'=>'NO_ACTION'])
             ->create();
    }
}
