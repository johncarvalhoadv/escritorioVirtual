<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        //$this->call(AdvogadoSeeder::class);
        //$this->call(ClienteTableSeeder::class);
        // $this->call(ProductsTableSeeder::class);

        // Estados
        $this->call(EstadosTableSeeder::class);

        // Cidades
        $this->call(CidadesTableSeeder::class);

    }
}
