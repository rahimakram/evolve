<?php

// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TeamController;

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




Auth::routes();





// Route::group(['middleware' => ['auth']], function () {

  Route::get('/admin', [App\Http\Controllers\AdminController::class, 'admin'])->name('admin');

  Route::get('/admindemo/{any}', [App\Http\Controllers\AdminController::class, 'adminIndex'])->name('adminIndex');

  // Route::get('/admin/{any}', [App\Http\Controllers\AdminController::class, 'adminIndex'])->name('adminIndex');

  // customers route
  Route::get('/admin/customers', [App\Http\Controllers\CustomerController::class, 'index'])->name('customers.list');
  
  //Update User Details
  Route::post('/admin/update-profile/{id}', [App\Http\Controllers\AdminController::class, 'updateProfile'])->name('updateProfile');
  Route::post('/admin/update-password/{id}', [App\Http\Controllers\AdminController::class, 'updatePassword'])->name('updatePassword');
  
  //Language Translation
  // Route::get('/admin/dashboard/{locale}', [App\Http\Controllers\AdminController::class, 'lang']);
  Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('dashboard');

  // teams
  Route::get('/admin/teams', [TeamController::class, 'index'])->name('teams.index');
  Route::get('/admin/team/add', [TeamController::class, 'add'])->name('teams.add');
  Route::post('/admin/team/create', [TeamController::class, 'create'])->name('teams.create');
  Route::get('/admin/team/edit/{id}', [TeamController::class, 'edit'])->name('teams.edit');
  Route::post('/admin/team/update/{id}', [TeamController::class, 'update'])->name('teams.update');
  Route::post('/admin/team/delete/{id}', [TeamController::class, 'delete'])->name('teams.delete');
  Route::post('/admin/team/activate/{id}', [TeamController::class, 'activate'])->name('teams.activate');
  Route::post('/admin/team/deactivate/{id}', [TeamController::class, 'deactivate'])->name('teams.deactivate');
// });




Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');
Route::get('/{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');


