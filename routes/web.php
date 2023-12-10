<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DasboardTest_controller;
use App\Http\Controllers\CrudTest_controller;
use App\Http\Controllers\LoginTest_controller;
use App\Http\Controllers\ResolutionController;
use App\Http\Controllers\CommitteeController;
use App\Http\Controllers\BOD_MainController;
use App\Http\Controllers\BOD_ResolutionController;
use App\Http\Controllers\BOD_DHController;
use App\Http\Controllers\BODController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DepartmentHeadController;
use App\Http\Controllers\UserProfileController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Show login form
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login-BOD');

// Process login form submission
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/', function () {
    return view('welcome');
});
Route::get('/bodres/add', [CrudTest_controller::class, 'bodres_add'])->name('bodres.add');
Route::get('/bodres/edit', [CrudTest_controller::class, 'bodres_edit'])->name('bodres.edit');

Route::get('/bodcom/add', [CrudTest_controller::class, 'bodcom_add'])->name('bodcom.add');
Route::get('/bodcom/edit', [CrudTest_controller::class, 'bodcom_edit'])->name('bodcom.edit');

Route::get('/bod/add', [CrudTest_controller::class, 'bod_add'])->name('bod.add');
Route::get('/bod/edit', [CrudTest_controller::class, 'bod_edit'])->name('bod.edit');

Route::get('/dh/add', [CrudTest_controller::class, 'dh_add'])->name('dh.add');
Route::get('/dh/edit', [CrudTest_controller::class, 'dh_edit'])->name('dh.edit');

Route::get('/update-profile', [CrudTest_controller::class, 'update_profile'])->name('update-profile');

Route::get('/dashboard', [DasboardTest_controller::class, 'dashboard'])->name('dashboard');
Route::get('/bod-dashboard', [DasboardTest_controller::class, 'bod_dashboard'])->name('bod-dashboard');
Route::get('/bod-com-dashboard', [DasboardTest_controller::class, 'bod_com_dashboard'])->name('bod-com-dashboard');
Route::get('/dh-dashboard', [DasboardTest_controller::class, 'dh_dashboard'])->name('dh-dashboard');
Route::get('/dh-logs', [DasboardTest_controller::class, 'dh_logs'])->name('dh-logs');
Route::get('/bod-dashboard-main', [DasboardTest_controller::class, 'bod_dashboard_main'])->name('bod-dashboard-main');
Route::get('/bod-committee-dashboard', [DasboardTest_controller::class, 'bod_committee_dashboard'])->name('bod-committee-dashboard');
Route::get('/bod-resolution-dashboard', [DasboardTest_controller::class, 'bod_resolution_dashboard'])->name('bod-resolution-dashboard');
Route::get('/department-head-dashboard', [DasboardTest_controller::class, 'department_head_dashboard'])->name('department-head-dashboard');






// Add other authentication-related routes as need
Route::get('/dh-login', [LoginTest_controller::class, 'dhLogin'])->name('dh-login');
//Admin dashboards
Route::get('/dashboard', [ResolutionController::class, 'index'])->name('dashboard');
//BOD main dashboard
Route::get('/bod-dashboard', [BOD_MainController::class, 'index'])->name('bod-dashboard');

//Resolution 
Route::get('/resolution/create', [ResolutionController::class, 'create'])->name('resolution.create');
Route::post('/resolution/store', [ResolutionController::class, 'store'])->name('resolution.store');
Route::get('/resolution/edit/{id}', [ResolutionController::class, 'edit'])->name('resolution.edit');
Route::put('/resolution/update/{id}', [ResolutionController::class, 'update'])->name('resolution.update');
Route::delete('/resolution/delete/{id}', [ResolutionController::class, 'destroy'])->name('resolution.delete');


//committee
Route::get('/bod-committee-dashboard', [CommitteeController::class, 'index'])->name('bod-committee-dashboard');

//BOD main resolution
Route::get('/bod-resolution', [BOD_ResolutionController::class, 'index'])->name('bod.resolution');
//BOD main DH
Route::get('/bod-dh', [BOD_DHController::class, 'index'])->name('bod.dh');


// BOD Dashboard
Route::get('/bod_dashboard', [BODController::class, 'index'])->name('bod_dashboard');

// Add Board Member
Route::get('/bod_create', [BODController::class, 'create'])->name('bod_create');
Route::post('/bod_store', [BODController::class, 'store'])->name('bod_store');

// Edit Board Member
Route::get('/bod_edit/{id}', [BODController::class, 'edit'])->name('bod_edit');
Route::put('/bod_update/{id}', [BODController::class, 'update'])->name('bod_update');

// Delete Board Member
Route::delete('/bod_destroy/{id}', [BODController::class, 'destroy'])->name('bod_destroy');

// Index Page
Route::get('/1st_admin/dh_dashboard', [DepartmentHeadController::class, 'index'])->name('1st_admin.dh_dashboard');

// Create Page
Route::get('/1st_admin/actions/dh_add', [DepartmentHeadController::class, 'create'])->name('1st_admin.actions.dh_add');
Route::post('/1st_admin/actions/dh_add', [DepartmentHeadController::class, 'store']);

// Edit Page
Route::get('/1st_admin/actions/dh_edit/{id}', [DepartmentHeadController::class, 'edit'])->name('1st_admin.actions.dh_edit');
Route::post('/1st_admin/actions/dh_edit/{id}', [DepartmentHeadController::class, 'update']);

// Delete
Route::delete('/1st_admin/dh_delete/{id}', [DepartmentHeadController::class, 'destroy'])->name('1st_admin.dh_delete');

// Display user profiles
Route::get('/user-profile', [UserProfileController::class, 'index'])->name('user-profile.index');

// Show the form for creating a new user profile
Route::get('/user-profile/create', [UserProfileController::class, 'create'])->name('user-profile.create');

// Store a newly created user profile in the database
Route::post('/user-profile', [UserProfileController::class, 'store'])->name('user-profile.store');

// Show the form for editing the specified user profile
Route::get('/user-profile/{id}/edit', [UserProfileController::class, 'edit'])->name('user-profile.edit');

// Update the specified user profile in the database
Route::put('/user-profile/{id}', [UserProfileController::class, 'update'])->name('user-profile.update');

// Delete the specified user profile from the database
Route::delete('/user-profile/{id}', [UserProfileController::class, 'destroy'])->name('user-profile.destroy');