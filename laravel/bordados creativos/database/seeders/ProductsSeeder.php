<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'name' => 'Chamarras',
            'description' => 'Bordados de chamarras',
            'photo' => 'C:\xampp_2\htdocs\spicyo\laravel\bordados creativos\resources\views\imagenes\inventario\chamarra.jpeg',
            'price' => 100
         ]);
    }
}
