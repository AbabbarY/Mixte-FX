<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProduitsController;
use App\Http\Controllers\shop_by_categoryController;
use App\Models\shop_by_category;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\PaypalController;

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
// ACCUEIL CONTROLLER 
Route::get('/',[AccueilController::class,'index'])->name('home');
// Route::get('/login',[AccueilController::class,'login'])->name("login");
// Route::get('/register',[AccueilController::class,'register'])->name('register');
Route::get('/produits/{type}',[AccueilController::class,'produits'])->name("show.produit.type");
Route::get('/show/{id}',[AccueilController::class,'view_pro'])->name("show.produit.title");


Route::get("/management_product",[AccueilController::class,'management'])->name("management_produit");










//  CART
// Route::get('/cart',  'CartController@index')->name('cart.index');
// Route::post('/cart/add/{id}',  'CartController@cart_add')->name('cart.add');
// Route::put('/cart/update/{id}',  'CartController@cart_update')->name('cart.update');
// Route::delete('//cart/remove/{id}',  'CartController@cart_remove')->name('cart.remove');

Route::get('cart', [cartController::class, 'cart'])->name('cart');
Route::post('add-to-cart/{id}', [cartController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [cartController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [cartController::class, 'remove'])->name('remove.from.cart');

Route::get('/search_for_product',[ProduitsController::class,'search_for_product'])->name('search_for_product');


// Payment
Route::get('payment', [PaypalController::class, 'payment'])->name('make.payment');
Route::get('payment_cancel', [PaypalController::class, 'cancel'])->name('payment.cancel');
Route::get('payment_success', [PaypalController::class, 'success'])->name('payment.success');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
        Route::get('/dashboard',[AccueilController::class,'dashboard'])->name('dashboard');
        Route::get('/offres',[ProduitsController::class,'management'])->name("management_product_accueil");
        Route::get('/create_offres',[ProduitsController::class,'create'])->name('create_product_accueil');
        Route::post('/sent_offres',[ProduitsController::class,'sent'])->name('sent_product_accueil');
        Route::get('/edit_offres/{id}',[ProduitsController::class,'edit'])->name('edit_product_accueil');
        Route::put('/update_offres/{id}',[ProduitsController::class,'update'])->name('update_product_accueil');
        Route::delete('/delete_offres/{id}',[ProduitsController::class,'delete'])->name('delete_product_accueil');
        Route::post('/sent',[AccueilController::class,'sent'])->name('sent_product');
        Route::get('/edit/{id}',[AccueilController::class,'edit'])->name('edit_product');
        Route::put('/update/{id}',[AccueilController::class,'update'])->name('update_product');
        Route::delete('/delete/{id}',[AccueilController::class,'delete'])->name('delete_product');
        Route::get('/create',[AccueilController::class,'create'])->name('create_product');
        Route::get('/search_by_name',[AccueilController::class,'search_by_name']);
        Route::get('/search_user',[AccueilController::class,'search_user']);
        Route::get('/search_by_type',[AccueilController::class,'search_by_type']);
        Route::get('/orders',[AccueilController::class,'orders'])->name('orders');
        Route::get("/favorite/{id}",[FavoriteController::class,'favorite'])->name("favorite");
        Route::get("/users",[AccueilController::class,'users'])->name("users");
Route::get("/favorite_delete/{id}",[FavoriteController::class,'destroy'])->name("favorite.delete");

Route::get("/dash_user",[AccueilController::class,'dash_user'])->name("dash_user");
Route::get("/orders_user",[AccueilController::class,'orders_user'])->name("orders_user");

});
















