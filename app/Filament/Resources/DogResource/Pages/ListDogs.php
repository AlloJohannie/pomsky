<?php

namespace App\Filament\Resources\DogResource\Pages;

use App\Filament\Resources\DogResource;
use Filament\Resources\Pages\ListRecords;
use Filament\Actions\CreateAction;

class ListDogs extends ListRecords
{
    protected static string $resource = DogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()->label('Nouveau chien'),
        ];
    }
}
