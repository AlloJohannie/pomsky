<?php

namespace App\Filament\Resources\DogResource\Pages;

use App\Filament\Resources\DogResource;
use App\Models\Dog;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Str;

class CreateDog extends CreateRecord
{
    protected static string $resource = DogResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        if (blank($data['slug'] ?? null)) {
            $data['slug'] = Str::slug($data['name']);
        }

        // unicité
        $base = $data['slug'];
        $slug = $base;
        $i = 2;
        while (Dog::where('slug', $slug)->exists()) {
            $slug = "{$base}-{$i}";
            $i++;
        }
        $data['slug'] = $slug;

        return $data;
    }

    protected function getRedirectUrl(): string
    {
        return static::getResource()::getUrl('index');
    }
protected function getFormActions(): array
{
    return [
        $this->getCreateFormAction(),
        $this->getCancelFormAction(),
    ];
}

}
