<?php
    use App\Http\Controllers\Admin\DashboardController;
    use App\Http\Controllers\Site\{RootController,PostController};
    use Illuminate\Support\Facades\Route;

    Route::get('teste', function() {return view('emails/cerberus');});
    Route::controller(RootController::class)->group(function () {
        Route::get('/', 'index')->name('home');
        Route::get('/sobre-nos', 'about')->name('about');
        Route::get('/galeria', 'imageGallery')->name('imageGallery');
        Route::get('/termos-de-uso', 'termsOfUse')->name('termsOfUse');
        Route::get('/politica-de-privacidade', 'privacyPolicy')->name('privacyPolicy');
        Route::get('/guia-e-walkthrough', 'walkthrough')->name('walkthrough');
        Route::get('/perguntas-frequentes', 'faqs')->name('faqs');
        Route::get('/contato', 'contact')->name('contact');
        Route::post('/contato', 'sendMail')->name('sendMail');
        Route::get('/contato', 'contact')->name('contact');

    });

    Route::controller(PostController::class)->group(function () {
        Route::get('/editoriais', 'editorials')->name('editorials');
        Route::get('/editorial/{post:slug}', 'show')->name('editorial.show');
        Route::get('/projetos', 'projects')->name('projects');
        Route::get('/projeto/{project:slug}', 'show')->name('project.show');
    });
    Route::middleware(['auth', 'verified'])->group(function () {
        Route::controller(DashboardController::class)->group(function () {
            Route::get('/usuario', 'userPanel')->name('user.panel');
        });
    });
