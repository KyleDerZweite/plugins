<?php

namespace Boy132\LegalPages\Providers;

use Boy132\LegalPages\Filament\App\Pages\Imprint;
use Boy132\LegalPages\Filament\App\Pages\TermsOfService;
use Filament\Support\Facades\FilamentView;
use Filament\View\PanelsRenderHook;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;

class LegalPagesPluginProvider extends RouteServiceProvider
{
    public function boot(): void
    {
        $this->routes(function () {
            Route::get('imprint', Imprint::class)->name('imprint')->withoutMiddleware(['auth']);
            Route::get('termsofservice', TermsOfService::class)->name('termsofservice')->withoutMiddleware(['auth']);
        });

        // TODO: add links to footer
        /*FilamentView::registerRenderHook(
            PanelsRenderHook::FOOTER,
            fn () => Blade::render(<<<'HTML'
                <footer class="flex flex-col items-center justify-center text-center space-y-2 p-4 text-gray-600 dark:text-gray-400">
                    <x-filament::link href="/imprint">
                        Imprint
                    </x-filament::link>
                </footer>
                HTML),
        );*/
    }
}
