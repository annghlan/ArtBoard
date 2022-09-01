<?php
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CartController;
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
Route::post('/cart/delete','CartController@delete');

Route::post('/cart','CartController@create');

Route::get('/cart','CartController@index');
Route::get('/welcome', function () { // /welcome is home page directory
    return redirect(route('welcome'));
});

Route::get('/dashboard', function () {
    return redirect(route('users.index'));
});

Auth::routes(); //auth login haruko lagi route banauxa

Route::get('/customDesign', 'WelcomeController@index')->name('home');
//Route::get('/home', 'ProductController@getIndex')->name('welcome');

Route::get('/', function () { // '/' is home page directory
    return view('index'); // view vitra index ma html ui display code xa  
})->name('welcome');

Route::get('/profile', function () {  //customer profile ko route garyekoo
    return view('customer.profile');
})->name('profile');

Route::get('/products',[ProductsController::class,'products'])->name('products');

// Route::get('/profile',[ProfileController::class,'profile'])->name('profile');

Route::resource('colors', 'ColorController');

Route::resource('clothes', 'ClothesController');

Route::post('/clothes/uploade', 'ClothesController@uploade')->name('clothes.uploade');

Route::resource('users', 'UsersController');

Route::resource('prints', 'PrintsController');

Route::post('/uploade','PrintsController@uploade')->name('uploade');

Route::get('/product', [
    'uses' => 'ProductController@getIndex',
    'as' => 'product.index'
    ]);

    