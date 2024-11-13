<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Class DashboardController
 * @package App\Http\Controllers
 */
class DashboardController extends Controller
{

    public function v1()
    {
        //Contagem de Clientes
        $countClientes = DB::table('clientes')->count();

        //Contagem de processos
        $countProcessos = DB::table('processos')->count();

        //Contagem de Audiencias
        $countAudiencias = DB::table('audiencias')->count();

        return view('admin.dashboard.v1', compact('countClientes','countProcessos', 'countAudiencias'));
    }

}
