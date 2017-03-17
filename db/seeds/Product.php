<?php

use Phinx\Seed\AbstractSeed;

class Product extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) { 
            $data[] = [
                'name' =>  'Gulai Ayam',
                'category_id' => '1',
                'price' => '15000',
                'image' => 'avatar.png',
            ];
        }

        $this->insert('product', $data);
    }
}
