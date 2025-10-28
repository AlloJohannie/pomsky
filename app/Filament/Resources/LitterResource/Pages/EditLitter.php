<?php

namespace App\Filament\Resources\LitterResource\Pages;

use App\Filament\Resources\LitterResource;
use App\Models\Litter;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Str;
use Filament\Actions\DeleteAction;

class EditLitter extends EditRecord
{
    protected static string $resource = LitterResource::class;

    /**
     * Slug auto + unicité à l’édition.
     */
    protected function mutateFormDataBeforeSave(array $data): array
    {
        if (blank($data['slug'] ?? null)) {
            $data['slug'] = Str::slug($data['code']);
        }

        $base = $data['slug'];
        $slug = $base;
        $i = 2;

        while (
            Litter::where('slug', $slug)
                ->where('id', '!=', $this->record->id)
                ->exists()
        ) {
            $slug = "{$base}-{$i}";
            $i++;
        }

        $data['slug'] = $slug;

        return $data;
    }


    // (optionnel) retour à l’index après sauvegarde
    protected function getRedirectUrl(): string
    {
        return static::getResource()::getUrl('index');
    }
}
