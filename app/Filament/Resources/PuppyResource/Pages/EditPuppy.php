<?php

namespace App\Filament\Resources\PuppyResource\Pages;

use App\Filament\Resources\PuppyResource;
use App\Models\Puppy;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Str;

class EditPuppy extends EditRecord
{
    protected static string $resource = PuppyResource::class;

    protected function getRedirectUrl(): string
    {
        // ✅ retour à l’index après sauvegarde
        return static::getResource()::getUrl('index');
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        if (blank($data['slug'] ?? null)) {
            $data['slug'] = Str::slug($data['name'] ?? Str::random(6));
        }

        // unicité en excluant l’enregistrement courant
        $base = $data['slug'];
        $slug = $base;
        $i = 2;
        while (
            Puppy::where('slug', $slug)
                ->where('id', '!=', $this->record->id)
                ->exists()
        ) {
            $slug = "{$base}-{$i}";
            $i++;
        }
        $data['slug'] = $slug;

        return $data;
    }
}
