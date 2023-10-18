<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\PaymentController;


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

// Route::get('/dashboard', function () {
//     return view('welcome');
// });

/* Frontend Routes */
Route::get('/frontend',[HomeController::class,"index"]);


/* Login Routes */

Route::get('/',[LoginController::class,"index"])->name('login');
Route::post('/',[LoginController::class,"validate_login"])->name('validate_login');


/* Middleware Start */

Route::middleware([auth::class])->group(function(){
Route::get('/dashboard',[LoginController::class,"dashboard"])->name('dashboard');
Route::get('/logout',[LoginController::class,"logout"])->name('logout');

/*Routes for Company */

Route::get('/addcompany',[CompaniesController::class,"index"])->name('index');
Route::post('/addcompany',[CompaniesController::class,"store"])->name('addcompany');
Route::get('/showcompany',[CompaniesController::class,"show"])->name("company.show");
Route::get('/editcompany/{id}',[CompaniesController::class,"edit"])->name('company.edit');
Route::post('/updatecompany/{id}', [CompaniesController::class,"update"])->name('company.update');
Route::get('/deletecompany/{id}', [CompaniesController::class,"destroy"])->name('company.delete');


/*Routes for Employee */

Route::get('/addemployees',[EmployeesController::class,"index"])->name('employee.index');
Route::post('/addemployees', [EmployeesController::class,"store"])->name('addemployee');
Route::get('/showemployees',[EmployeesController::class,"show"])->name("employee.show");
Route::get('/editemployees/{id}',[EmployeesController::class,"edit"])->name('employee.edit');
Route::post('/updatemployees/{id}', [EmployeesController::class,"update"])->name('employee.update');
Route::get('/deletemployees/{id}', [EmployeesController::class,"destroy"])->name('employee.delete');

/*Routes for Stripe Payment Gateway */

Route::get('/payment',[PaymentController::class,"index"])->name('payment.index');
Route::post('/payment',[PaymentController::class,"store"])->name('stripe.post');



});