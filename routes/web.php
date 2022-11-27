<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);

Route::get('/registerschool', [App\Http\Controllers\HelpAdmin\RegisterSchoolController::class, 'index'])->name('registerschool');
Route::post('/registerschool', [App\Http\Controllers\HelpAdmin\RegisterSchoolController::class, 'addSchool']);
Route::get('/registerschooladmin', [App\Http\Controllers\HelpAdmin\RegisterAdministratorController::class, 'index'])->name('registerschooladmin');
Route::post('/registerschooladmin', [App\Http\Controllers\HelpAdmin\RegisterAdministratorController::class, 'addAdmin']);


Route::get('/testreg', [App\Http\Controllers\HelpAdmin\TemporaryRegAdmin::class, 'index']);
Route::get('/regad', [App\Http\Controllers\HelpAdmin\RegisterAdministratorController::class, 'index']);
Route::get('/regvol', [App\Http\Controllers\Volunteer\RegisterVolunteerController::class, 'index']);
