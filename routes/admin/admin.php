<?php
    use App\Http\Controllers\Admin\{CrystalController,DashboardController,IconController,ImageController,PostController,ProfileController,VideoLinkController};
    use Illuminate\Support\Facades\Route;

    Route::middleware(['auth', 'verified'])->prefix('dashboard')->group(function () {
        Route::controller(DashboardController::class)->group(function () {
            Route::get('/', 'dashboard')->name('dashboard');
            Route::get('/categorias', 'category')->name('category.index');
            Route::post('/categoria', 'storeCategory')->name('category.store');
            Route::get('/usuarios', 'users')->name('user.index');
            Route::get('/usuario/{id}', 'userShow')->name('user.show');
        });

        Route::controller(PostController::class)->prefix('postagem')->group(function () {
            Route::get('/', 'index')->name('post.index');
            Route::get('/editar/{post:slug}', 'edit')->name('post.edit');
            Route::put('/{id}', 'update')->name('post.update');
            Route::get('/publicar', 'create')->name('post.create');
            Route::patch('/', 'store')->name('post.store');
            Route::delete('/{id}', 'destroy')->name('post.destroy');
        });

        Route::controller(ProfileController::class)->prefix('perfil')->group(function () {
            Route::get('/exibir', 'show')->name('profile.show');
            Route::get('/editar', 'edit')->name('profile.edit');
            Route::patch('/{id}', 'update')->name('profile.update');
            Route::get('/exclusao', 'delete')->name('profile.delete');
            Route::delete('/', 'destroy')->name('profile.destroy');
        });

        Route::controller(ImageController::class)->prefix('galeria')->group(function () {
            Route::get('/', 'index')->name('gallery.index');
            Route::get('/upload', 'upload')->name('gallery.upload');
            Route::patch('/', 'store')->name('gallery.store');
        });

        Route::controller(VideoLinkController::class)->prefix('link-youtube')->group(function () {
            Route::get('/', 'index')->name('video.index');
            Route::get('/upload', 'upload')->name('video.upload');
            Route::patch('/', 'store')->name('video.store');
        });

        Route::controller(IconController::class)->prefix('icones')->group(function () {
            Route::get('/', 'index')->name('icons.index');
            Route::prefix('familia')->group(function () {
                Route::get('/boxicons', 'boxIcons')->name('icons.boxicons');
                Route::get('/iconsmind', 'iconsMind')->name('icons.iconsmind');
                Route::get('/fontawesome', 'fontAwesome')->name('icons.fontawesome');
                Route::get('/lineicons', 'lineIcon')->name('icons.lineicon');
            });
        });

        Route::controller(CrystalController::class)->prefix('crystalcorp')->group(function () {
            Route::get('/personagens', 'index')->name('chars.index');
            Route::prefix('personagem')->group(function () {
                Route::get('/cadastrar', 'create')->name('char.create');
                Route::patch('/', 'store')->name('char.store');
                Route::get('/editar/{char:slug}', 'edit')->name('char.edit');
                Route::put('/{id}', 'update')->name('char.update');
                Route::delete('/{id}', 'destroy')->name('char.destroy');
            });
        });
    });
