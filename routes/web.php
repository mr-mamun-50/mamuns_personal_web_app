<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\Auth\AdminPasswordResetLinkController;

use App\Http\Controllers\User\UserController;

use App\Http\Controllers\Admin\SkillsController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Admin\QualificationsController;
use App\Http\Controllers\Admin\HireMeController;


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

Route::get('/', [UserController::class, 'home'])->name('home');
Route::get('/more_projects', [UserController::class, 'all_projects'])->name('more_projects');
Route::get('/more_videos', [UserController::class, 'all_videos'])->name('more_videos');

Route::post('/hire_me/submit', [HireMeController::class, 'store'])->name('hire_me.submit');

Route::post('/message/send', [UserController::class, 'message_store'])->name('message.send');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

//__Admin login
Route::get('/admin/login', [AuthenticatedSessionController::class, 'create'])->name('admin.login')->middleware('guest:admin');
Route::post('/admin/login/store', [AuthenticatedSessionController::class, 'store'])->name('admin.login.store');

//__Admin forgot password
Route::get('/admin/admin-forgot-password', [AdminPasswordResetLinkController::class, 'create'])->name('admin.admin-forgot-password');

Route::group(['middleware' => 'admin'], function() {

    Route::get('/admin', [HomeController::class, 'index'])->name('admin.dashboard');
    Route::post('/admin/logout', [AuthenticatedSessionController::class, 'destroy'])->name('admin.logout');

    //__Skills route
    Route::resource('/admin/skills', SkillsController::class);

    //__Projects route
    Route::resource('/admin/projects', ProjectController::class);

    //__Messages route
    Route::resource('/admin/messages', MessageController::class);

    //__Videos route
    Route::resource('/admin/videos', VideoController::class);

    //__Qualifications route
    Route::resource('/admin/qualifications', QualificationsController::class);

    //__Hire me route
    Route::resource('/admin/hire-me', HireMeController::class);

});
