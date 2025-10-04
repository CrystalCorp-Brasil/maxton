<?php
    use App\Http\Controllers\Admin\{DashboardController,IconController,ImageController,LinksYTController,PostController,ProfileController};
    use Illuminate\Support\Facades\Route;

    Route::middleware(['auth', 'verified'])->group(function () {
        Route::controller(DashboardController::class)->group(function () {
            Route::get('/dashboard', 'dashboard')->name('dashboard');
            Route::get('/categorias', 'category')->name('category.index');
            Route::post('/categoria', 'storeCategory')->name('category.store');
            Route::get('/usuarios', 'users')->name('user.index');
            Route::get('/usuario/{id}', 'userShow')->name('user.show');
        });

        Route::controller(PostController::class)->group(function () {
            Route::get('/dashboard/postagens', 'index')->name('post.index');
            Route::get('/dashboard/postagem/editar/{post:slug}', 'edit')->name('post.edit');
            Route::put('/dashboard/postagem/{id}', 'update')->name('post.update');
            Route::get('/dashboard/postagem/publicar', 'create')->name('post.create');
            Route::patch('/dashboard/postagem', 'store')->name('post.store');
            Route::delete('/dashboard/postagem/{id}', 'destroy')->name('post.destroy');
        });

        Route::controller(ProfileController::class)->group(function () {
            Route::get('/dashboard/perfil/editar', 'edit')->name('profile.edit');
            Route::get('/dashboard/perfil/exibir', 'show')->name('profile.show');
            Route::patch('/dashboard/perfil/{id}', 'update')->name('profile.update');
            Route::get('/dashboard/perfil/exclusao', 'delete')->name('profile.delete');
            Route::delete('/dashboard/perfil', 'destroy')->name('profile.destroy');
        });

        Route::controller(ImageController::class)->group(function () {
            Route::get('/dashboard/galeria', 'index')->name('gallery.index');
            Route::get('/dashboard/galeria/upload', 'upload')->name('gallery.upload');
            Route::patch('/dashboard/galeria', 'store')->name('gallery.store');
        });

        Route::controller(LinksYTController::class)->group(function () {
            Route::get('/dashboard/links-youtube', 'index')->name('linkYT.index');
            Route::get('/dashboard/link-youtube/upload', 'upload')->name('linkYT.upload');
            Route::patch('/dashboard/link-youtube', 'store')->name('linkYT.store');
        });

        Route::controller(IconController::class)->group(function () {
            Route::get('/dashboard/icones/', 'index')->name('icons.index');
            Route::get('/dashboard/familia/boxicons/', 'boxIcons')->name('icons.boxicons');
            Route::get('/dashboard/familia/iconsmind/', 'iconsMind')->name('icons.iconsmind');
            Route::get('/dashboard/familia/fontawesome/', 'fontAwesome')->name('icons.fontawesome');
        });
    });
