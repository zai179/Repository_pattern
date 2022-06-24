<?php

use App\Http\Controllers\NameController;
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

Route::get('/',[NameController::class, 'index']);
Route::get('slug', function(){
    $array = ['this is slug', 2022,10,01, 'Zain ali'];

    $slug = Str::arrayToSlug($array);
    dd($slug);
});
