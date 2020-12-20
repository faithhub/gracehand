<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/user', function () {
//     return view('users.index');
// });

Auth::routes();

Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about']);
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact']);
Route::get('/courses', [App\Http\Controllers\HomeController::class, 'courses']);
Route::get('/course_info', [App\Http\Controllers\HomeController::class, 'course_info']);
Route::get('/partnership', [App\Http\Controllers\HomeController::class, 'partnership']);
Route::post('/partnership', [App\Http\Controllers\HomeController::class, 'create_partnership'])->name('partnership');


// Users
Route::group(['prefix' => 'user', 'middleware' => ['auth', 'user']], function () {
  Route::get('', [\App\Http\Controllers\User\DashboardController::class, 'index'])->name('user');
  Route::match(['get', 'post'], '/profile', [\App\Http\Controllers\User\SettingsController::class, 'index']);
  Route::get('change-password', [\App\Http\Controllers\User\SettingsController::class, 'change_password']);
  Route::post('/change-password', [\App\Http\Controllers\User\ChangePasswordController::class, 'change']);
});

//Admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
  Route::get('', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('user');
  Route::match(['get', 'post'], '/profile', [\App\Http\Controllers\Admin\SettingController::class, 'index']);
  Route::get('change-password', [\App\Http\Controllers\Admin\SettingController::class, 'change_password']);
  Route::post('/change-password', [\App\Http\Controllers\Admin\ChangePasswordController::class, 'change']);
  Route::get('/users', [\App\Http\Controllers\Admin\UserController::class, 'index']);
  Route::get('/view-user/{id}', [\App\Http\Controllers\Admin\UserController::class, 'view_user']);
  Route::get('/edit-user/{id}', [\App\Http\Controllers\Admin\UserController::class, 'edit_user']);
  Route::post('/edit-user', [\App\Http\Controllers\Admin\UserController::class, 'edit']);
  Route::post('/delete-user', [\App\Http\Controllers\Admin\UserController::class, 'delete_user']);
  Route::get('courses', [\App\Http\Controllers\Admin\CourseController::class, 'index']);
  Route::match(['get', 'post'], 'add-course', [\App\Http\Controllers\Admin\CourseController::class, 'add']);
  Route::get('/ongoing-training', [\App\Http\Controllers\Admin\TrainingController::class, 'ongoing_training']);
  Route::get('/full-training', [\App\Http\Controllers\Admin\TrainingController::class, 'full_training']);
  Route::get('/add-training', [\App\Http\Controllers\Admin\TrainingController::class, 'add_training']);
  Route::post('/add-training', [\App\Http\Controllers\Admin\TrainingController::class, 'addNewTraining']);
  Route::get('/add-chapters/{trainingId}', [\App\Http\Controllers\Admin\TrainingController::class, 'addChapters']);
  Route::post('/add-chapter', [\App\Http\Controllers\Admin\TrainingController::class, 'addChapter']);
  Route::post('/publish', [\App\Http\Controllers\Admin\TrainingController::class, 'publish']);
});
