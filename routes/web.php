<?php
use App\Http\Controllers\VendasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [VendasController::class, 'index'])->name('index');
Route::get('/vendas',[VendasController::class, 'exportExcel'])->name('exportar');
Route::get('/pdf',[VendasController::class, 'gerarPDF'])->name('pdf');
Route::get('/busca', [VendasController::class, 'buscarRegistro'])->name('buscarRegistro');

