<?php

use App\Models\Api\Categories;
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


Route::get('/belogsto',function(){
$data = Categories::find(1);
 foreach ($data->products as $item){
   return  $item->name;
 }

});
Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->get('/secured',function (){
    return "You Are Developer";
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
