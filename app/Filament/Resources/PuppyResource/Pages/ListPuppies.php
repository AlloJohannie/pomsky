<?php

namespace App\Filament\Resources\PuppyResource\Pages;

use App\Filament\Resources\PuppyResource;
use Filament\Resources\Pages\ListRecords;
use Filament\Actions\CreateAction;

class ListPuppies extends ListRecords
{
    protected static string $resource = PuppyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()->label('Nouveau chiot'),
        ];
    }
}
