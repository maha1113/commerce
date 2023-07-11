<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Site2Controller;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::prefix('')->name('site2.')->group(function(){
    Route::get('/',[Site2Controller::class, 'index'])->name('index');
    Route::get('/not/found',[Site2Controller::class, 'notfound'])->name('not.found');
    Route::get('/about',[Site2Controller::class, 'about'])->name('about');
    Route::get('/cart',[Site2Controller::class, 'cart'])->name('cart');
    Route::get('/checkout',[Site2Controller::class, 'checkout'])->name('checkout');
    Route::get('/contact',[Site2Controller::class, 'contact'])->name('contact');
    Route::get('/index_2',[Site2Controller::class, 'index_2'])->name('index_2');
    Route::get('/news',[Site2Controller::class, 'news'])->name('news');
    Route::get('/shop',[Site2Controller::class, 'shop'])->name('shop');
    Route::get('/single/news',[Site2Controller::class, 'single'])->name('single.news');
    Route::get('/single/product',[Site2Controller::class, 'singlee'])->name('single.product');
   });
