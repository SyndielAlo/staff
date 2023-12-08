<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DasboardTest_controller;
use App\Http\Controllers\CrudTest_controller;
use App\Http\Controllers\LoginTest_controller;
use App\Http\Controllers\ResolutionController;
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
Route::get('/bod-login', [LoginTest_controller::class, 'bodLogin'])->name('bod-login');
Route::get('/dh-login', [LoginTest_controller::class, 'dhLogin'])->name('dh-login');
//Resolution 
Route::get('/dashboard', [ResolutionController::class, 'index'])->name('dashboard');
Route::get('/resolution/create', [ResolutionController::class, 'create'])->name('resolution.create');
Route::post('/resolution/store', [ResolutionController::class, 'store'])->name('resolution.store');
Route::get('/resolution/edit/{id}', [ResolutionController::class, 'edit'])->name('resolution.edit');
Route::put('/resolution/update/{id}', [ResolutionController::class, 'update'])->name('resolution.update');
Route::delete('/resolution/delete/{id}', [ResolutionController::class, 'destroy'])->name('resolution.delete');