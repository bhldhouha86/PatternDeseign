<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FamilyShoesController;

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

Route::get('/',[FamilyShoesController::class,"home"])->name('FamilyShoes.home');
Route::get('/about',[FamilyShoesController::class,"about"])->name('FamilyShoes.about');
Route::get('/produits',[FamilyShoesController::class,"produits"])->name('FamilyShoes.produits');
Route::get('/contact',[FamilyShoesController::class,"contact"])->name('FamilyShoes.contact');
