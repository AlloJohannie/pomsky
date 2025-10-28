<?php

namespace App\Filament\Resources\DogResource\Pages;

use App\Filament\Resources\DogResource;
use App\Models\Dog;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Str;

class EditDog extends EditRecord
{
    protected static string $resource = DogResource::class;

    protected function mutateFormDataBeforeSave(array $data): array
    {
        if (blank($data['slug'] ?? null)) {
            $data['slug'] = Str::slug($data['name']);
        }

        $base = $data['slug'];
        $slug = $base;
        $i = 2;
        while (
            Dog::where('slug', $slug)
                ->where('id', '!=', $this->record->id)
                ->exists()
        ) {
            $slug = "{$base}-{$i}";
            $i++;
        }
        $data['slug'] = $slug;

        return $data;
    }

    protected function afterSave(): void
    {
        $this->redirect(static::getResource()::getUrl('index'));
    }

    protected function getCancelRedirectUrl(): ?string
    {
        return static::getResource()::getUrl('index');
    }

    protected function getSavedNotificationTitle(): ?string
    {
        return 'Chien mis à jour';
    }
}
