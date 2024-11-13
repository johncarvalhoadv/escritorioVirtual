<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Dentro da tabela Cliente, crie 50 registros
        //factory(App\Models\Cliente::class, 50)->create();
        \App\Models\Cliente::factory(50)->create();
    }
}
