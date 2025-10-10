<?php
    namespace App\Providers;

    use Illuminate\Support\ServiceProvider;
    use Illuminate\Pagination\Paginator;
    use Illuminate\Support\Facades\App;
    use Illuminate\Support\Facades\Artisan;
    use Illuminate\Support\Facades\Log;

    class AppServiceProvider extends ServiceProvider {
        public function register(): void {}

        public function boot(): void {
            // Usa Bootstrap 5 para paginação
            Paginator::useBootstrapFive();
            // Executa a limpeza só se o app já estiver carregado e for local
            if (App::environment('local')) {
                try {
                    // Executa de forma assíncrona e segura após o carregamento
                    app()->terminating(function () {
                        Artisan::call('config:clear');
                        Artisan::call('route:clear');
                        Artisan::call('view:clear');
                        Artisan::call('cache:clear');
                        Log::info('🧹 Cache automaticamente limpo no ambiente local (pós-boot).');
                    });
                } catch (\Throwable $e) {
                    Log::warning('⚠️ Falha ao limpar cache: ' . $e->getMessage());
                }
            } else {
                Log::info('🚀 Ambiente de produção detectado: cache mantido.');
            }
        }
    }
