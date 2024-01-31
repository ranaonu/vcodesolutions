<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;


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

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/',[HomeController::class, 'index'])->name('index');
Route::get('/about',[HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/contact',[HomeController::class, 'contactUs'])->name('contactUs');
Route::get('/services',[HomeController::class, 'services'])->name('services');
Route::get('/news',[HomeController::class, 'news'])->name('news');
Route::post('/send-contact-us-form',[HomeController::class, 'sendContactUs'])->name('sendContactUs');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
