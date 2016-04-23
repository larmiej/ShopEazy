<?php

use Illuminate\Database\Seeder;


class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            ['name' => 'Acne Skincare', 'aisle' => 'Pharmacy'],
            ['name' => 'Air Fresheners', 'aisle' => '17'],
            ['name' => 'Ammonia', 'aisle' => '17'],
            ['name' => 'Analgesics', 'aisle' => 'Pharmacy'],
            ['name' => 'Automotive Suppliers', 'aisle' => 'Housewares'],
            ['name' => 'Baby Milk', 'aisle' => 'Infant Needs'],
            ['name' => 'Bake Ware', 'aisle' => 'Housewares'],
            ['name' => 'Baby Food', 'aisle' => 'Infant Needs'],
            ['name' => 'Baby Needs', 'aisle' => 'Infant Needs'],
            ['name' => 'Baby Wipes', 'aisle' => 'Infant Needs'],
        ]);

    }
}
