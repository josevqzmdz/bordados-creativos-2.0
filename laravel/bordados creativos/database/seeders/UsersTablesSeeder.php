<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\User;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            "nombre" => "nombre 1",
            "ID" => str_random(10),
            "Posicion" => "Admin",
            "Contraseña" => Hash::make("contraseña");

            
        ]);

    }
}
