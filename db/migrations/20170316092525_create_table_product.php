<?php

use Phinx\Migration\AbstractMigration;

class CreateTableProduct extends AbstractMigration
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
        $product = $this->table('product');
        $product->addColumn('name', 'string')
                ->addColumn('category_id', 'integer')
                ->addColumn('price', 'integer')
                ->addColumn('stock', 'integer')
                ->addColumn('expired', 'datetime')
                ->addColumn('deleted', 'integer')
                ->addForeignKey('category_id', 'category', 'id', ['delete'=>'CASCADE', 'update'=>'NO_ACTION'])
                ->create();
    }
}
