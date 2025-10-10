<?php
    use App\Http\Controllers\API\{CommentController,LikeController};
    use Illuminate\Support\Facades\Route;

    Route::prefix('api')->group(function () {
        Route::middleware('auth')->group(function () {
            Route::prefix('likes')->controller(LikeController::class)->group(function () {
                Route::get('/{type}/{slug}','show');
                Route::post('/{type}/{slug}','react');
            });
            Route::prefix('comments')->controller(CommentController::class)->group(function () {
                Route::get('/{type}/{slug}','index');
                Route::post('/{type}/{slug}','store');
                Route::put('{id}','update');
                Route::delete('{id}','destroy');
            });
        });
    });
