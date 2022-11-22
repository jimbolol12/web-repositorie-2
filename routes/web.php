<?php

use App\Http\Controllers\TestController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/processForm',[TestController::class, 'processForm'])->name('processForm');

require __DIR__.'/auth.php';

Route::get('/',[TestController::class, 'viewHomePage'])->name('home');



Route::get('/contact',[TestController::class, 'viewContactPage'])->name('contact');

Route::get('/overons',[TestController::class, 'viewOveronsPage'])->name('overons');

Route::get('/events',[TestController::class, 'viewEventsPage'])->name('events');

Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('dashboard');