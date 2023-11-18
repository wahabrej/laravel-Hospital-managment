<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|uploaddoctor
*/


Route::get("/home",[HomeController::class,"index"])->name("home");

Route::get("/",[HomeController::class,"root"]);

Route::post("/appointment",[HomeController::class,"appointment"]);

Route::get("/myappointment",[HomeController::class,"myappointment"]);
Route::get("/cancel_appoinment/{id}",[HomeController::class,"cancel_appoinment"]);

Route::get("/doctoradd",[AdminController::class,"doctoradd"]);


Route::post("/upload",[AdminController::class,"upload"]);


// Route::get('/', function () {//Root Page
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
