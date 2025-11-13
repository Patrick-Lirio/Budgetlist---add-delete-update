<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TableListController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('homelayouts.homebudgetlist');
});

// Route::get('/test', function () {
//     return view('main.sample.table-list');
// });
// Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/test2', [TableListController::class, 'tableList']);
