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

Route::get('/welcome', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');
Auth::routes();

// Route::get('/', function () {return view('welcome')->name('welcome');});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'addVolunteer'])->name('register');

Route::middleware(['auth', 'user-access:volunteer'])->group(function () {
    Route::get('/volunteer/home', [App\Http\Controllers\HomeController::class, 'volunteerHome'])->name('volunteer_home');
});
  
//adminroute
Route::middleware(['auth', 'user-access:school_help_admin'])->group(function () {
    Route::get('/helpadmin/home', [App\Http\Controllers\HomeController::class, 'helpAdminHome'])->name('help_admin_home');
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('help_admin_dashboard');
    Route::get('/registerschool', [App\Http\Controllers\HelpAdmin\RegisterSchoolController::class, 'index'])->name('registerschool');
    Route::get('/registerschooladmin', [App\Http\Controllers\HelpAdmin\RegisterAdministratorController::class, 'index'])->name('registerschooladmin');
    Route::post('/registerschool', [App\Http\Controllers\HelpAdmin\RegisterSchoolController::class, 'addSchool']);
    Route::post('/registerschooladmin', [App\Http\Controllers\HelpAdmin\RegisterAdministratorController::class, 'addAdmin']);
});
  

//ini route untuk schooladmin
Route::middleware(['auth', 'user-access:school_admin'])->group(function () {
    Route::get('/administrator/home', [App\Http\Controllers\HomeController::class, 'schoolAdminHome'])->name('school_admin_home');
    Route::get('/administratordashboard', [App\Http\Controllers\Administrator\DashboardController::class, 'index'])->name('administrator_dashboard');
    Route::get('/submitrequest', [App\Http\Controllers\Administrator\SubmitRequestController::class, 'index'])->name('submit_request');
    Route::get('/resourcerequest', [App\Http\Controllers\Administrator\ResourceRequestController::class, 'index'])->name('resource_request');
    Route::post('/submitrequest', [App\Http\Controllers\Administrator\SubmitRequestController::class, 'submitRequest'])->name('add_submit_request');
    Route::post('/resourcerequest', [App\Http\Controllers\Administrator\ResourceRequestController::class, 'resourceRequest'])->name('add_resource_request');
});
