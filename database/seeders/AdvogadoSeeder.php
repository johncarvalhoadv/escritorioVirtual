<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Advogado;
class AdvogadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 
        Advogado::factory()
            ->count(20)
            ->create();
    }
}
