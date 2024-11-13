<?php

declare(strict_types=1);

use App\Http\Controllers\AudienciaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;

/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/

Route::middleware([
    'web','universal','auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    InitializeTenancyByDomain::class,
    //PreventAccessFromCentralDomains::class,
])->group(function () {
    Route::middleware(['auth:sanctum'])->group(function () {
        /*Route::get('/', function () {
            return view('welcome');
        })->name('dashboard2');*/

        Route::get('/', [DashboardController::class,'v1'])->name('dashboard.v1')->middleware(['auth'])->name('home');
        Route::get('/home', [DashboardController::class,'v1'])->name('dashboard.v1')->middleware(['auth'])->name('home');
        Route::resource('audiencias', AudienciaController::class);

        #Rotas do(a) clientes

//Route::get('clientes/', [ClienteController::class,'dashboard'])->name('clientes.dashboard')->middleware('auth');
        Route::get('clientes/', [ClienteController::class,'index'])->name('clientes.index')->middleware('auth');

        Route::get('clientes/create-step-one', [ClienteController::class,'createStepOne'])->name('clientes.create.step.one')->middleware('auth');
        Route::post('clientes/create-step-one', [ClienteController::class,'postCreateStepOne'])->name('clientes.create.step.one.post')->middleware('auth');
        Route::get('clientes/create-step-two', [ClienteController::class,'createStepTwo'])->name('clientes.create.step.two')->middleware('auth');
        Route::post('clientes/create-step-two', [ClienteController::class,'postCreateStepTwo'])->name('clientes.create.step.two.post')->middleware('auth');
        Route::get('clientes/create-step-three', [ClienteController::class,'createStepThree'])->name('clientes.create.step.three')->middleware('auth');
        Route::post('clientes/create-step-three', [ClienteController::class,'postCreateStepThree'])->name('clientes.create.step.three.post')->middleware('auth');
#Rotas do(a) Documentos Clientes
        Route::get('/clientes/gerarProcuracao/{id}', [ 'as' => 'clientes.gerarProcuracao', 'uses' => 'App\Http\Controllers\ClienteController@gerarProcuracao' ])->middleware('auth');
        Route::get('/clientes/gerarHipossuficiencia/{id}', [ 'as' => 'clientes.gerarHipossuficiencia', 'uses' => 'App\Http\Controllers\ClienteController@gerarHipossuficiencia' ])->middleware('auth');
        Route::get('/clientes/gerarContratoGeral/{id}', [ 'as' => 'clientes.gerarContratoGeral', 'uses' => 'App\Http\Controllers\ClienteController@gerarContratoGeral' ])->middleware('auth');
        Route::get('/clientes/gerarPeticao/{id}', [ 'as' => 'clientes.gerarPeticao', 'uses' => 'App\Http\Controllers\ClienteController@gerarPeticao' ])->middleware('auth');
//Route::resource('clientes','\App\Http\Controllers\ClienteController')->middleware('auth');
        Route::resource('clientes', ClienteController::class,  ['except' => ['index']])->middleware('auth');
        Route::resource('clientes', ClienteController::class)->middleware('auth');

//CidadeXestados
        Route::get('/get-cidades/{idEstado}', [ 'as' => 'cidade', 'uses' => 'App\Http\Controllers\ClienteController@getCidades' ])->middleware('auth');






    });
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');




});
