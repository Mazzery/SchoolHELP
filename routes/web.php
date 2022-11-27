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
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'addVolunteer'])->name('register');

//Route::group(['middleware' => ['auth', 'CheckRole:school_help_admin']], function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('help_admin_dashboard');
    Route::get('/registerschool', [App\Http\Controllers\HelpAdmin\RegisterSchoolController::class, 'index'])->name('registerschool');
    Route::get('/registerschooladmin', [App\Http\Controllers\HelpAdmin\RegisterAdministratorController::class, 'index'])->name('registerschooladmin');
    Route::post('/registerschool', [App\Http\Controllers\HelpAdmin\RegisterSchoolController::class, 'addSchool']);
    Route::post('/registerschooladmin', [App\Http\Controllers\HelpAdmin\RegisterAdministratorController::class, 'addAdmin']);
//});

//Route::group(['middleware' => ['auth', 'checkrole:school_admin']], function () {
    Route::get('/administratordashboard', [App\Http\Controllers\Administrator\DashboardController::class, 'index'])->name('administrator_dashboard');
    Route::get('/submitrequest', [App\Http\Controllers\Administrator\SubmitRequestController::class, 'index'])->name('submit_request');
    Route::get('/resourcerequest', [App\Http\Controllers\Administrator\ResourceRequestController::class, 'index'])->name('resource_request');
    Route::post('/submitrequest', [App\Http\Controllers\Administrator\SubmitRequestController::class, 'submitRequest'])->name('add_submit_request');
    Route::post('/resourcerequest', [App\Http\Controllers\Administrator\ResourceRequestController::class, 'resourceRequest'])->name('add_resource_request');
//});
