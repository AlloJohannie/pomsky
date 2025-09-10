<?php

namespace App\Providers\Filament;

use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->brandName('Administration')
            ->login()
            ->breadcrumbs(true)

            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            // ->viteTheme('resources/css/filament.css')

            ->navigationGroups(['Élevage','Médias'])

            // ✅ Home URL via closure (route dispo après boot)
            ->homeUrl(fn () => \App\Filament\Pages\CustomDashboard::getUrl())

            
            // Auth Filament
            ->authMiddleware([\Filament\Http\Middleware\Authenticate::class])

            ->middleware(['web'])
            // Optionnel : petit polish UX
            ->brandLogo(asset('images/logo/landinger.svg'))
            ->favicon(asset('favicon.ico'))
            ->breadcrumbs(true)
            ->colors(['primary' => Color::Indigo]);
    }
}
