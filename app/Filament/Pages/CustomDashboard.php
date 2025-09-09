<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class CustomDashboard extends Page
{
    // v4 : types stricts requis pour la navigation
    protected static string|\BackedEnum|null $navigationIcon  = 'heroicon-o-home';
    protected static string|\UnitEnum|null   $navigationGroup = 'Élevage';

    protected static ?string $navigationLabel = 'Tableau de bord';
    protected static ?string $title           = 'Tableau de bord';
    protected static ?int    $navigationSort  = -1;

    // ⚠️ v4 : $view est NON statique
    protected string $view = 'filament.pages.custom-dashboard';

    // (optionnel) définir un slug explicite de la page
    // protected static ?string $slug = 'custom-dashboard';
}
