<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ServicesController;
use App\Http\Controllers\Frontend\VisionController;
use App\Http\Controllers\Frontend\VisionDetailsController;
use App\Http\Controllers\Frontend\FaqController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\BlogDetailsController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\GetstartedController;
use App\Http\Controllers\Frontend\BookingController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/vision', [VisionController::class, 'index']);
Route::get('/vision-details', [VisionDetailsController::class, 'index']);
Route::get('/faq', [FaqController::class, 'index']);
Route::get('/services', [ServicesController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::get('/signup', [SignupController::class, 'index']);
Route::get('/getstarted', [GetstartedController::class, 'index']);
Route::get('/booking', [BookingController::class, 'index']);



