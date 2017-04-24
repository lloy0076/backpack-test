<?php

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

Route::get('/', 'IndexController@index');
Route::get('/home', '\Backpack\Base\app\Http\Controllers\AdminController@dashboard');

Route::group([
    'middleware' => 'admin',
    'prefix'     => 'admin',
    'namespace'  => 'Admin',
],
function ()
{
    CRUD::resource('city', 'CityCrudController');
});
