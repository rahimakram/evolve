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

  Route::get('/admin/{any}', [App\Http\Controllers\AdminController::class, 'adminIndex'])->name('adminIndex');

  // customers route
  Route::get('/admin/customers', [App\Http\Controllers\CustomerController::class, 'index'])->name('customers.list');
  
  //Update User Details
  Route::post('/admin/update-profile/{id}', [App\Http\Controllers\AdminController::class, 'updateProfile'])->name('updateProfile');
  Route::post('/admin/update-password/{id}', [App\Http\Controllers\AdminController::class, 'updatePassword'])->name('updatePassword');
  
  //Language Translation
  Route::get('/admin/dashboard/{locale}', [App\Http\Controllers\AdminController::class, 'lang']);

  // teams
  Route::get('/dashboard/teams', [TeamController::class, 'index'])->name('teams.index');
  Route::get('/dashboard/team/add', [TeamController::class, 'add'])->name('teams.add');
  Route::post('/dashboard/team/create', [TeamController::class, 'create'])->name('teams.create');
  Route::get('/dashboard/team/edit/{id}', [TeamController::class, 'edit'])->name('teams.edit');
  Route::post('/dashboard/team/update/{id}', [TeamController::class, 'update'])->name('teams.update');
  Route::post('/dashboard/team/delete/{id}', [TeamController::class, 'delete'])->name('teams.delete');
  Route::post('/dashboard/team/activate/{id}', [TeamController::class, 'activate'])->name('teams.activate');
  Route::post('/dashboard/team/deactivate/{id}', [TeamController::class, 'deactivate'])->name('teams.deactivate');
// });




Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');
Route::get('/{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');


