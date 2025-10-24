<?php

use App\Models\DataKonsumen;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataKonsumenController;

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

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */
    Route::get('/', 'HomeController@index')->name('home.view');

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');
        Route::post("submit", [DataKonsumenController::class, "store"]);
        Route::post('/view', 'controllerName@method'); 

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
        Route::delete("konsumen/delete/{dataKonsumen:id}", [DataKonsumenController::class, "destroy"]);
        Route::get("konsumen/edit/{dataKonsumen:id}", [DataKonsumenController::class, "edit"]);
        Route::put("konsumen/update/{dataKonsumen:id}", [DataKonsumenController::class, "update"]);
    });
});