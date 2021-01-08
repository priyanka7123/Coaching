<?php

use App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::resource('/', StudentController::class);
// Route::redirect('/', '/student');

Route::get('/', function () {
    return view("homepage.index");
})->name('index');
Route::get('/apply', [StudentController::class, 'apply'])->name('apply');
Route::post('/apply', [StudentController::class, 'applystore'])->name('applystore');
Route::get('/profile', [StudentController::class, 'profile'])->name('profile');



Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [Admin::class, "dashboard"])->name('dashboard');
    Route::get('/students', [Admin::class, "students"])->name('students');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
