<?php

namespace App\Filament\Resources\LitterResource\Pages;

use App\Filament\Resources\LitterResource;
use Filament\Resources\Pages\ListRecords;
use Filament\Actions\CreateAction;

class ListLitters extends ListRecords
{
    protected static string $resource = LitterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()->label('Nouvelle portée'),
        ];
    }
}
