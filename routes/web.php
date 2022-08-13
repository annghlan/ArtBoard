<?php
use App\Http\Controllers\ClothesController;
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



Route::get('/welcome', function () {
    return redirect(route('welcome'));
});

Route::get('/dashboard', function () {
    return redirect(route('users.index'));
});

Auth::routes();

Route::get('/customDesign', 'HomeController@index')->name('home');
//Route::get('/home', 'ProductController@getIndex')->name('welcome');

Route::get('/', function () {
    return view('index');
})->name('welcome');

// Route::get('/products', function () {
//     return view('products');
// })->name('products');
Route::get('/products',[ClothesController::class,'products'])->name('products');

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

    