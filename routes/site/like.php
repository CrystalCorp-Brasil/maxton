<?php
    use App\Http\Controllers\API\LikeController;
    use Illuminate\Support\Facades\Route;

    Route::prefix('api')->group(function () {
        Route::middleware('auth')->group(function () {
            Route::get('/likes/{type}/{slug}', [LikeController::class, 'show']);
            Route::post('/likes/{type}/{slug}', [LikeController::class, 'react']);
        });
    });
