<?php

namespace App\Filament\Widgets;

use App\Models\Litter;
use Filament\Tables;
use Filament\Widgets\TableWidget as Base;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\Relation;

class RecentLitters extends Base
{
    protected int|string|array $columnSpan = 'full';

    // 👇 8 lignes par page (au lieu d’un limit() dans la requête)
    protected int $defaultTableRecordsPerPage = 8;

    // ✅ signature compatible avec Filament v4
    protected function getTableQuery(): Builder|Relation|null
    {
        return Litter::query()
            ->latest('born_at')
            ->latest();
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('code')->label('Portée')->searchable(),
            Tables\Columns\TextColumn::make('status')->label('Statut')->badge(),
            Tables\Columns\IconColumn::make('is_active')->label('Active')->boolean(),
            Tables\Columns\TextColumn::make('puppies_count')->label('Chiots'),
            Tables\Columns\TextColumn::make('born_at')->label('Nés le')->date(),
        ];
    }
}
