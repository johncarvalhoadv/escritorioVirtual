<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class TenantDatabaseSeeder extends Seeder
{
    public function run()
    {
        // Your seeding logic here
        $this->call(EstadosTableSeeder::class);

        $this->call(CidadesTableSeeder::class);
    }
}
