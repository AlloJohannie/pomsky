<?php

namespace App\Filament\Resources\DogResource\Pages;

use App\Filament\Resources\DogResource;
use Filament\Resources\Pages\ListRecords;

class ListDogs extends ListRecords
{
    protected static string $resource = DogResource::class;
}
