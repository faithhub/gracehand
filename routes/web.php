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
  Route::get('/partnership', [\App\Http\Controllers\Admin\PartnershipController::class, 'index']);
  Route::get('/view-partnership/{id}', [\App\Http\Controllers\Admin\PartnershipController::class, 'view_partnership']);
  Route::get('/edit-partnership/{id}', [\App\Http\Controllers\Admin\PartnershipController::class, 'edit_partnership']);
  // Route::post('/edit-user', [\App\Http\Controllers\Admin\UserController::class, 'edit']);
  Route::post('/delete-partnership', [\App\Http\Controllers\Admin\PartnershipController::class, 'delete_partnership']);
  Route::get('courses', [\App\Http\Controllers\Admin\CourseController::class, 'index']);
  Route::match(['get', 'post'], 'add-course', [\App\Http\Controllers\Admin\CourseController::class, 'add']);

  //Short Training
  Route::get('/short-training', [\App\Http\Controllers\Admin\TrainingController::class, 'short_training']);
  Route::match(['get', 'post'], 'add-short-training', [\App\Http\Controllers\Admin\TrainingController::class, 'add_short_training']);
  Route::get('/short-publish/{id}', [\App\Http\Controllers\Admin\TrainingController::class, 'short_publish']);
  Route::get('/short-unpublish/{id}', [\App\Http\Controllers\Admin\TrainingController::class, 'short_unpublish']);
  Route::post('/short-delete', [\App\Http\Controllers\Admin\TrainingController::class, 'short_delete']);

  Route::get('/full-training', [\App\Http\Controllers\Admin\TrainingController::class, 'full_training']);
  Route::match(['get', 'post'], 'add-full-training', [\App\Http\Controllers\Admin\TrainingController::class, 'add_full_training']);

  Route::get('/view-training/{id}', [\App\Http\Controllers\Admin\TrainingController::class, 'view_short_training']);
  Route::get('/add-training', [\App\Http\Controllers\Admin\TrainingController::class, 'add_training']);
  Route::post('/add-training', [\App\Http\Controllers\Admin\TrainingController::class, 'addNewTraining']);
  Route::get('/add-chapters/{trainingId}', [\App\Http\Controllers\Admin\TrainingController::class, 'addChapters']);
  Route::post('/add-chapter', [\App\Http\Controllers\Admin\TrainingController::class, 'addChapter']);
  Route::post('/publish', [\App\Http\Controllers\Admin\TrainingController::class, 'publish']);
  Route::match(['get', 'post'], '/about-us', [\App\Http\Controllers\Admin\SettingController::class, 'about_us']);
  Route::match(['get', 'post'], '/contact-us', [\App\Http\Controllers\Admin\SettingController::class, 'contact_us']);
  Route::match(['get', 'post'], '/slider', [\App\Http\Controllers\Admin\SettingController::class, 'slider']);
});
