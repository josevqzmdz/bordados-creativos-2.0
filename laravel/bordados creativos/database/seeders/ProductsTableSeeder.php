<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'nombre' => 'Chamarras',
            'slug' => 'Chamarras',
            'detalles' => 'bordados de chamarras',
            'descripcion' => 'bordados de chamarras',
            'precio' => 100

        ]);
    }
}
