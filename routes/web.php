<?php

use App\Http\Controllers\Admin\AdminCommentController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminMessageController;
use App\Http\Controllers\Admin\AdminPostReportController;
use App\Http\Controllers\Admin\AdminUsersManageController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Notification_navbarController;
use App\Http\Controllers\Admin\Search_navbarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\UserNameController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\User\UserProfileController;

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



//  NEW ROUTE AREA START
Route::prefix('app')->name('app.')->middleware(['admin'])->group(function () {
    Route::resource('dashboard', AdminDashboardController::class);
    Route::resource('user-manage', AdminUsersManageController::class);

    Route::post('user-manage/search', [AdminUsersManageController::class, 'search'])->name('user-manage.search');
    Route::post('comment-report/search', [AdminCommentController::class, 'search'])->name('comment-report.search');
    Route::post('post-report/search', [AdminPostReportController::class, 'search'])->name('post-report.search');
    Route::post('message/search', [AdminMessageController::class, 'search'])->name('message.search');

    Route::resource('comment-report', AdminCommentController::class);
    Route::resource('post-report', AdminPostReportController::class);
    Route::resource('message', AdminMessageController::class);
});
Route::get('app/login', [AdminLoginController::class, 'login'])->name('app.login')->middleware(['admin.guest']);
Route::post('app/logout', [AdminLoginController::class, 'logout'])->name('app.logout');
Route::post('app/authenticate', [AdminLoginController::class, 'authenticate'])->name('app.authenticate')->middleware('guest');


Route::prefix('user')->name('user.')->middleware(['auth'])->group(function () {
    Route::resource('profile', UserProfileController::class);
});

//  NEW ROUTE AREA END

Route::get('test', function () {
    return view('layouts.admin');
});

Route::middleware('guest')->group(function () {
    Route::get('guest', function () {
        return view('guest');
    });

    Route::get('register', function () {
        return view('register');
    });
    Route::get('login', function () {
        return view('login');
    });

    Route::get('exguest', function () {
        return view('exguest');
    });
    Route::get('guesspost', function () {
        return view('guesspost');
    });
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
        ->name('password.store');
});

Route::middleware('auth')->group(function () {

    // routes/web.php
    // routes/web.php
    // Route::get('/user', 'UserController@show');

    Route::post('user', [UserController::class, 'show']);

    Route::get('/', function () {
        return view('index');
    });

    Route::get('sblog', function () {
        return view('single-blog');
    });

    Route::get('home', function () {
        return view('homepict');
    });
    Route::get('grid', function () {
        return view('grid');
    });


    Route::get('co', function () {
        return view('co');
    });
    Route::get('profile', function () {
        return view('profile');
    });

    Route::get('spost', function () {
        return view('spost');
    });

    Route::get('add', function () {
        return view('add');
    });

    Route::get('profile', function () {
        return view('profile');
    });

    Route::get('verify-email', EmailVerificationPromptController::class)
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
    Route::get('dashboard', function () {
        return view('dashboard');
    });

    // Route::get('user', [UserController::class, 'index']);
    // Route::post('user', [UserController::class, 'store']);
    // Route::get('user/{id}', [UserController::class, 'show']);
    // Route::post('user/{id}', [UserController::class, 'update']);
    // Route::delete('user/{id}', [UserController::class, 'destroy']);

    // // Hello Home
    // // Route::apiResource('user', UserController::class);

    // Route::get('post', [PostController::class, 'index']);
    // Route::post('post', [PostController::class, 'store']);
    // Route::get('post/{id}', [PostController::class, 'show']);
    // Route::get('post-by-user/{id}', [PostController::class, 'postByUser']);
    // Route::post('post/{id}', [PostController::class, 'update']);
    // Route::delete('post/{id}', [PostController::class, 'destroy']);
    // Route::get('post-search', [PostController::class, 'search']);
});
/*Route::get('/', function () {
    return view('index');
});

Route::get('privacy-policy', function () {
    return view('kebijakan-privasi');
});

Route::prefix('admin')
    // ->namespace('Admin') 
    ->middleware(['auth', 'admin', 'preventBackHistory'])
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])
            ->name('dashboard');
        Route::resource('teacher', TeacherController::class);
        Route::delete('change_status/{id}', [TeacherController::class, 'change_status'])->name('change_status');

        //-----------------------------------------------------------------------------------------------------------------

        // notification navbar
        Route::controller(Notification_navbarController::class)->group(function () {
            Route::get('fetch-notifications', 'fetchnotification');
            Route::get('updateclick', 'updateclick');
            Route::get('countnotif', 'countnotif');
        });

        Route::controller(Search_navbarController::class)->group(function () {
            //my search navbar
            Route::post('/search', 'search')
                ->name('searchnavbar');
            // Credits
            Route::get('credits', 'credits');
        });
    });
*/

// Route::get('all-clear', function () {
//     Artisan::call('config:clear'); //config-clear
//     Artisan::call('config:cache'); //config-cache
//     Artisan::call('cache:clear'); //cache-clear
//     Artisan::call('view:cache'); //view-cache
//     Artisan::call('view:clear'); //view-clear
//     Artisan::call('route:cache'); //route-cache
//     Artisan::call('route:clear'); //route-clear

//     return 'Configuration cache cleared! <br> Configuration cached successfully!';
// });

// Route::get('storage-link', function () {
//     Artisan::call('storage:link');
//     return 'The links have been created.';
// });

// Auth::routes(['verify' => true]);
