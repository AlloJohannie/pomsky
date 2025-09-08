<?php

namespace App\Providers\Filament;

use Filament\Panel;
use Filament\Support\Colors\Color;
use Filament\PanelProvider;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()                       // Panel par défaut
            ->id('admin')                     // identifiant interne
            ->path('admin')                   // URL: /admin
            ->brandName('Administration')     // texte en haut à gauche
            ->login()                         // pages d’auth Filament
            ->breadcrumbs(true)

            // Découverte automatique des classes Filament
            ->discoverResources(
                in: app_path('Filament/Resources'),
                for: 'App\\Filament\\Resources',
            )
            ->discoverPages(
                in: app_path('Filament/Pages'),
                for: 'App\\Filament\\Pages',
            )
            ->discoverWidgets(
                in: app_path('Filament/Widgets'),
                for: 'App\\Filament\\Widgets',
            )

            // Thème (optionnel) - si tu veux ajouter du CSS: resources/css/filament.css
            ->viteTheme('resources/css/filament.css')

            // Groupes de navigation (tu verras “Élevage” dans le menu)
            ->navigationGroups([
                'Élevage',
                'Médias',
            ])

            // Authentification Filament (doit être logué)
            ->authMiddleware([
                \Filament\Http\Middleware\Authenticate::class,
            ])

            // Middlewares généraux Laravel utiles au panel
            ->middleware([
                \Illuminate\Session\Middleware\StartSession::class,
                \Illuminate\View\Middleware\ShareErrorsFromSession::class,
                \Illuminate\Foundation\Http\Middleware\VerifyCsrfToken::class,
            ])

            // 🔒 Verrouille l’accès : seul un user qui passe le Gate('admin') entre
            ->middleware([
                function ($request, $next) {
                    // Si pas connecté → lauth Filament s’en charge via authMiddleware
                    if (!auth()->check() || !auth()->user()->can('admin')) {
                        abort(403);
                    }
                    return $next($request);
                },
            ])

            // Couleur primaire (optionnel)
            ->colors([
                'primary' => Color::Indigo,
            ]);
    }
}
