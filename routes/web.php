<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SystemController;
use App\Http\Controllers\ParametricController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;

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
/**
 * Pagina
 */
Route::get('/', [SystemController::class, 'index']);
Route::get('/productos',[ProductController::class, 'showroom']);
Route::get('/nosotros',[SystemController::class, 'about']);
Route::get('/contacto',[SystemController::class, 'contact']);
/**
 * Autenticación
 */
Route::get('/login', [AuthController::class, 'showLoginForm']);
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
/**
 * Administrador
 */
Route::get('admin', [AdminController::class, 'dashboard']);
Route::resource('user', UserController::class);
Route::resource('role', RoleController::class);
Route::resource('permission', PermissionController::class);
Route::resource('parametric', ParametricController::class);
Route::resource('products', ProductController::class);
Route::get('configs',[ConfigController::class, 'index'])->name('configs.index');
Route::get('logs213452we345wer24ert45234yui354245', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);
/**
 * Flex
 */
Route::resource('questions', QuestionController::class)->except(['create','edit','destroy']);
