<?php

// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ActivityController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Admin\ProfessionController;
use App\Http\Controllers\Admin\SpecializationController;
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

  Route::prefix('admin')->as('admin.')->group(function () {
    // teams
    Route::controller(TeamController::class)->prefix('team')->as('teams.')->group(function () {
      Route::get('/', 'index')->name('index');
      Route::get('/add', 'add')->name('add');
      Route::post('/create', 'create')->name('create');
      Route::get('/edit/{id}', 'edit')->name('edit');
      Route::post('/update/{id}', 'update')->name('update');
      Route::post('/delete/{id}', 'delete')->name('delete');
      Route::post('/activate/{id}', 'activate')->name('activate');
      Route::post('/deactivate/{id}', 'deactivate')->name('deactivate');
    });
  
    // profession
    Route::controller(ProfessionController::class)->prefix('profession')->as('profession.')->group(function () {
      Route::get('/', 'index')->name('index');
      Route::get('/add', 'add')->name('add');
      Route::post('/create', 'create')->name('create');
      Route::get('/edit/{id}', 'edit')->name('edit');
      Route::post('/update/{id}', 'update')->name('update');
      Route::post('/delete/{id}', 'delete')->name('delete');
      Route::post('/activate/{id}', 'activate')->name('activate');
      Route::post('/deactivate/{id}', 'deactivate')->name('deactivate');
    });
  
    // Activity
    Route::controller(ActivityController::class)->prefix('activity')->as('activity.')->group(function () {
      Route::get('/', 'index')->name('index');
      Route::get('/add', 'add')->name('add');
      Route::post('/create', 'create')->name('create');
      Route::get('/edit/{id}', 'edit')->name('edit');
      Route::post('/update/{id}', 'update')->name('update');
      Route::post('/delete/{id}', 'delete')->name('delete');
      Route::post('/activate/{id}', 'activate')->name('activate');
      Route::post('/deactivate/{id}', 'deactivate')->name('deactivate');
    });
  
    // Specialization
    Route::controller(SpecializationController::class)->prefix('specialization')->as('specialization.')->group(function () {
      Route::get('/', 'index')->name('index');
      Route::get('/add', 'add')->name('add');
      Route::post('/create', 'create')->name('create');
      Route::get('/edit/{id}', 'edit')->name('edit');
      Route::post('/update/{id}', 'update')->name('update');
      Route::post('/delete/{id}', 'delete')->name('delete');
      Route::post('/activate/{id}', 'activate')->name('activate');
      Route::post('/deactivate/{id}', 'deactivate')->name('deactivate');
    });
  
    // Location
    Route::controller(LocationController::class)->prefix('location')->as('location.')->group(function () {
      Route::get('/', 'index')->name('index');
      Route::get('/add', 'add')->name('add');
      Route::post('/create', 'create')->name('create');
      Route::get('/edit/{id}', 'edit')->name('edit');
      Route::post('/update/{id}', 'update')->name('update');
      Route::post('/delete/{id}', 'delete')->name('delete');
      Route::post('/activate/{id}', 'activate')->name('activate');
      Route::post('/deactivate/{id}', 'deactivate')->name('deactivate');
    });
  });




Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');
Route::get('/{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');


