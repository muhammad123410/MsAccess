<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'Auth\LoginController@index')->name('login');
Route::post('/', 'Auth\LoginController@store');
Route::post('/logout', 'Auth\LogoutController@store')->name('logout');
Route::resource('register','Auth\RegisterController');

route::get('/home',function(){
    $Clients = App\Client::get();
    return view('data.home',['Clients'=>$Clients]);
})->name('home');

route::post('/home',function(Request $request){

    $client = App\Client::find($request->id);
    return view('data.home',['Client'=>$Client]);
});

Route::resource('client', 'ClientsController');
Route::resource('retirement_authorities', 'Retirement_AuthoritiesController');
Route::resource('limited_authorities', 'Limited_AuthoritiesController');
Route::resource('full_authorities', 'Full_AuthoritiesController');
Route::resource('alive_statement', 'Alive_StatementController');
