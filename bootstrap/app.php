<?php
    use Illuminate\Foundation\Application;
    use Illuminate\Foundation\Configuration\Exceptions;
    use Illuminate\Foundation\Configuration\Middleware;
    use Illuminate\Support\Facades\Artisan;

    return Application::configure(basePath: dirname(__DIR__))
        ->withRouting(
            web: __DIR__.'/../routes/web.php',
            api: ['path' => __DIR__ . '/../routes/api.php','prefix' => 'api',],
            commands: __DIR__.'/../routes/console.php',
            health: '/up',
        )->withMiddleware(function (Middleware $middleware): void { // 👇 habilita Sanctum para as requisições API com cookie (Breeze clássico)
            $middleware->api(prepend: [\Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,]);
        })->withExceptions(function (Exceptions $exceptions): void {
        })->create();

        if (app()->environment('local')) {Artisan::call('optimize:clear');}
