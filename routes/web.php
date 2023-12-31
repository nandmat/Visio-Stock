<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::prefix('/')->group(function(){
    Route::get('/', function(){return view('leading');});
    Route::get('/login', [AuthController::class, 'view'])->name('login.index');
    Route::post('/login', [AuthController::class, 'login'])->name('login.auth');
    Route::get('/register', [AuthController::class, 'register'])->name('login.register');
    Route::get('/dashboard', [DashboardController::class, 'view'])->name('dashboard')->middleware('auth');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');;
});


Route::middleware('auth')->prefix('/user')->group(function(){
    Route::get('/usuario/cadastrar_vendedor', [DashboardController::class, 'viewCadastroVendedor'])->name('cadastrar_vendedor');
});
