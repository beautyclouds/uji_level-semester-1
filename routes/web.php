<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HalamanController;

use App\Http\Controllers\OrderController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
*/
//home
Route::get('/home', [HalamanController::class,'home'])->name('home');
//about
Route::get('/about', [HalamanController::class,'about'])->name('about');
//menu
Route::get('/menu', [HalamanController::class,'menu'])->name('menu');
//contact
Route::get('/contact', [HalamanController::class,'contact'])->name('contact');
//cart
Route::get('/cart', [HalamanController::class,'cart'])->name('cart');

Route::get('/', function () {
    return view('layout');
});
//bagian order menu
Route::post('/add-to-order', [OrderController::class, 'addToOrder'])->name('add.to.order');
Route::get('/order', [OrderController::class, 'showOrder'])->name('order.show');
Route::post('/update-order', [OrderController::class, 'updateOrder'])->name('order.update');
Route::delete('/order/remove/{id}', [OrderController::class, 'remove'])->name('order.remove');
Route::post('/place-order', [OrderController::class, 'placeOrder'])->name('order.place');
//kontak submit
Route::post('/contact', [HalamanController::class, 'submitContact'])->name('contact.submit');
