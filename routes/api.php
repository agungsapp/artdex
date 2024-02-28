    <?php

    use App\Http\Controllers\ActivityController;
    use App\Http\Controllers\AuthController;
    use App\Http\Controllers\Chat_activityController;
    use App\Http\Controllers\Evaluasi_audio_wordController;
    use App\Http\Controllers\Evaluasi_storyController;
    use App\Http\Controllers\Evaluasi_wordController;
    use App\Http\Controllers\Option_evaluasi_wordController;
    use App\Http\Controllers\Story_libraryController;
    use App\Http\Controllers\Url_storyController;
    use App\Http\Controllers\UserController;
    use App\Http\Controllers\Word_libraryController;
    use App\Http\Controllers\Libraryword_userController;
    use App\Http\Controllers\Librarystory_userController;
    use App\Http\Controllers\ProductController;
    use App\Http\Controllers\ChatController;
    use App\Http\Controllers\PostController;
    use App\Http\Controllers\Purchase_cardController;
    use App\Http\Controllers\SubscriptionController;
    use App\Http\Controllers\TransactionController;
    use App\Models\Evaluasi_audio_word;
    use App\Models\Product;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Artisan;
    use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | API Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register API routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | is assigned the "api" middleware group. Enjoy building your API!
    |
    */

    // Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    //     return $request->user();
    // });
    Route::get('all-clear', function () {
        Artisan::call('config:clear'); //config-clear
        Artisan::call('config:cache'); //config-cache
        Artisan::call('cache:clear'); //cache-clear
        Artisan::call('view:cache'); //view-cache
        Artisan::call('view:clear'); //view-clear
        Artisan::call('route:cache'); //route-cache
        Artisan::call('route:clear'); //route-clear

        return 'Configuration cache cleared! <br> Configuration cached successfully!';
    });

    Route::get('storage-link', function () {
        Artisan::call('storage:link');
        return 'The links have been created.';
    });

    Route::prefix('auth')
        ->middleware(['api'])
        ->group(
            function ($router) {
                Route::get('user-without-auth', [AuthController::class, 'user_without_auth']);
                Route::post('register', [AuthController::class, 'register']);
                Route::post('login', [AuthController::class, 'login']);
                Route::post('logout', [AuthController::class, 'logout']);
                Route::post('refresh', [AuthController::class, 'refresh']);
                Route::post('me', [AuthController::class, 'me']);
                Route::post('otp/{id}', [AuthController::class, 'otp']);
                Route::post('reset-password-with-email/{id}', [AuthController::class, 'reset_password_with_email']);

                Route::get('email/verify/{id}', [AuthController::class, 'verify'])->name('verification.verify');
                Route::get('email/verify', [AuthController::class, 'notice'])->name('verification.notice');
                Route::get('email/resend', [AuthController::class, 'resend'])->name('verification.resend');
            }
        );
    Route::get('user', [UserController::class, 'index']);
    Route::post('user', [UserController::class, 'store']);
    Route::get('user/{id}', [UserController::class, 'show']);
    Route::post('user/{id}', [UserController::class, 'update']);
    Route::delete('user/{id}', [UserController::class, 'destroy']);

    // Hello Home
    // Route::apiResource('user', UserController::class);

    Route::get('post', [PostController::class, 'index']);
    Route::post('post', [PostController::class, 'store']);
    Route::get('post/{id}', [PostController::class, 'show']);
    Route::get('post-by-user/{id}', [PostController::class, 'postByUser']);
    Route::post('post/{id}', [PostController::class, 'update']);
    Route::delete('post/{id}', [PostController::class, 'destroy']);
    Route::get('post-search', [PostController::class, 'search']);

    Route::prefix('sosmed')
        ->middleware(['jwt.verify'])
        ->group(
            function ($router) {
                // PPDB
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


                //     Route::get('purchase-card', [Purchase_cardController::class, 'index']);
                //     Route::post('purchase-card', [Purchase_cardController::class, 'store']);
                //     Route::post('purchase-card/{id}', [Purchase_cardController::class, 'update']);
                //     Route::delete('purchase-card/{id}', [Purchase_cardController::class, 'destroy']);
                //     Route::post('activate-card/{code}', [Purchase_cardController::class, 'activate_card']);
                //     Route::get('purchase-card/{id}', [Purchase_cardController::class, 'show_by_user_id']);
                //     Route::get('purchase-card-show/{id}', [Purchase_cardController::class, 'show']);


                //     Route::get('subscription', [SubscriptionController::class, 'index']);
                //     Route::post('subscription', [SubscriptionController::class, 'store']);
                //     Route::get('subscription/{id}', [SubscriptionController::class, 'show']);
                //     Route::post('subscription/{id}', [SubscriptionController::class, 'update']);
                //     Route::delete('subscription/{id}', [SubscriptionController::class, 'destroy']);

                //     Route::get('transaction', [TransactionController::class, 'index']);
                //     Route::post('transaction', [TransactionController::class, 'store']);
                //     Route::post('transaction/{id}', [TransactionController::class, 'update']);
                //     Route::delete('transaction/{id}', [TransactionController::class, 'destroy']);
                //     Route::get('transaction/{id}', [TransactionController::class, 'show_by_user_id']);
                //     Route::get('transaction-show/{id}', [TransactionController::class, 'show']);


                //     Route::get('activity', [ActivityController::class, 'index']);
                //     Route::post('activity', [ActivityController::class, 'store']);
                //     Route::get('activity/{id}', [ActivityController::class, 'show']);
                //     Route::post('activity/{id}', [ActivityController::class, 'update']);
                //     Route::delete('activity/{id}', [ActivityController::class, 'destroy']);

                //     Route::get('chat-activity', [Chat_activityController::class, 'index']);
                //     Route::post('chat-activity', [Chat_activityController::class, 'store']);
                //     Route::get('chat-activity/{id}', [Chat_activityController::class, 'show']);
                //     Route::post('chat-activity/{id}', [Chat_activityController::class, 'update']);
                //     Route::delete('chat-activity/{id}', [Chat_activityController::class, 'destroy']);
                //     Route::get('chat-activity/roomid/{id}', [Chat_activityController::class, 'show_roomid']);
                //     Route::get('chat-activity/id_staff/{id}', [Chat_activityController::class, 'show_id_staff']);
                //     Route::get('chat-activity/status/{id}', [Chat_activityController::class, 'show_status']);









                //     Route::get('story', [Story_libraryController::class, 'index']);
                //     Route::post('story', [Story_libraryController::class, 'store']);
                //     Route::get('story/{id}', [Story_libraryController::class, 'show']);
                //     Route::post('story/{id}', [Story_libraryController::class, 'update']);
                //     Route::delete('story/{id}', [Story_libraryController::class, 'destroy']);
                //     Route::get('story-search', [Story_libraryController::class, 'search']);

                //     Route::get('url_story', [Url_storyController::class, 'index']);
                //     Route::post('url_story', [Url_storyController::class, 'store']);
                //     Route::get('url_story/{id}', [Url_storyController::class, 'show']);
                //     Route::post('url_story/{id}', [Url_storyController::class, 'update']);
                //     Route::delete('url_story/{id}', [Url_storyController::class, 'destroy']);

                //     Route::get('evaluasi_story', [Evaluasi_storyController::class, 'index']);
                //     Route::post('evaluasi_story', [Evaluasi_storyController::class, 'store']);
                //     Route::get('evaluasi_story/{id}', [Evaluasi_storyController::class, 'show']);
                //     Route::post('evaluasi_story/{id}', [Evaluasi_storyController::class, 'update']);
                //     Route::delete('evaluasi_story/{id}', [Evaluasi_storyController::class, 'destroy']);

                //     // Pustaka Kata
                //     Route::get('word', [Word_libraryController::class, 'index']);
                //     Route::post('word', [Word_libraryController::class, 'store']);
                //     Route::get('word/{id}', [Word_libraryController::class, 'show']);
                //     Route::post('word/{id}', [Word_libraryController::class, 'update']);
                //     Route::delete('word/{id}', [Word_libraryController::class, 'destroy']);
                //     Route::get('word-search', [Word_libraryController::class, 'search']);

                //     Route::get('evaluasi-word', [Evaluasi_wordController::class, 'index']);
                //     Route::post('evaluasi-word', [Evaluasi_wordController::class, 'store']);
                //     Route::get('evaluasi-word/{id}', [Evaluasi_wordController::class, 'show']);
                //     Route::post('evaluasi-word/{id}', [Evaluasi_wordController::class, 'update']);
                //     Route::delete('evaluasi-word/{id}', [Evaluasi_wordController::class, 'destroy']);

                //     Route::get('evaluasi-audio-word', [Evaluasi_audio_wordController::class, 'index']);
                //     Route::post('evaluasi-audio-word', [Evaluasi_audio_wordController::class, 'store']);
                //     Route::get('evaluasi-audio-word/{id}', [Evaluasi_audio_wordController::class, 'show']);
                //     Route::post('evaluasi-audio-word/{id}', [Evaluasi_audio_wordController::class, 'update']);
                //     Route::delete('evaluasi-audio-word/{id}', [Evaluasi_audio_wordController::class, 'destroy']);

                //     Route::get('option_evaluasi_word', [Option_evaluasi_wordController::class, 'index']);
                //     Route::post('option_evaluasi_word', [Option_evaluasi_wordController::class, 'store']);
                //     Route::get('option_evaluasi_word/{id}', [Option_evaluasi_wordController::class, 'show']);
                //     Route::post('option_evaluasi_word/{id}', [Option_evaluasi_wordController::class, 'update']);
                //     Route::delete('option_evaluasi_word/{id}', [Option_evaluasi_wordController::class, 'destroy']);

                //     // library word & user
                //     Route::get('library-word-user', [Libraryword_userController::class, 'index']);
                //     Route::post('library-word-user', [Libraryword_userController::class, 'store']);
                //     Route::get('library-word-user/{id}', [Libraryword_userController::class, 'show']);
                //     Route::post('library-word-user/{id}', [Libraryword_userController::class, 'update']);
                //     Route::delete('library-word-user/{id}', [Libraryword_userController::class, 'destroy']);

                //     // library story & user
                //     Route::get('library-story-user', [Librarystory_userController::class, 'index']);
                //     Route::post('library-story-user', [Librarystory_userController::class, 'store']);
                //     Route::get('library-story-user/{id}', [Librarystory_userController::class, 'show']);
                //     Route::post('library-story-user/{id}', [Librarystory_userController::class, 'update']);
                //     Route::delete('library-story-user/{id}', [Librarystory_userController::class, 'destroy']);
                // }
            }
        );
