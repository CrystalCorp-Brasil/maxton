<?php
    use App\Http\Controllers\Admin\DashboardController;
    use Illuminate\Support\Facades\Route;

    Route::middleware(['auth', 'verified'])->group(function () {
        Route::controller(DashboardController::class)->group(function () {
            Route::get('/dashboard', 'dashboard')->name('dashboard');
            Route::get('/categorias', 'category')->name('category.index');
            Route::post('/categoria', 'storeCategory')->name('category.store');
            Route::get('/usuarios', 'users')->name('user.index');
            Route::get('/usuario/{id}', 'userShow')->name('user.show');
        });
    });
