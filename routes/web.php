<?php
use Inertia\Inertia;
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

Route::get('/', function () {
    // return view('welcome');
    // dd(Inertia::render('Welcome', ['name' => 'import']));
    return Inertia::render('Hola', ['name' => 'import']);
});
