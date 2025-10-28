<?php

namespace App\Filament\Resources\PuppyResource\Pages;

use App\Filament\Resources\PuppyResource;
use App\Models\Puppy;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Str;
use App\Models\PuppyPhoto;
use Illuminate\Support\Carbon;

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
        protected function afterSave(): void
    {
        $this->syncWeeklyPhotos($this->record, $this->form->getState());
    }

    private function syncWeeklyPhotos(\App\Models\Puppy $puppy, array $state): void
    {
        $uploads = [];
        for ($w = 0; $w <= 12; $w++) {
            $key = 'week'.$w;
            if (!empty($state[$key])) {
                $uploads[$w] = $state[$key];
            }
        }
        if (empty($uploads)) return;

        $bornAt = optional($puppy->litter)->born_at ? Carbon::parse($puppy->litter->born_at) : null;

        // Crée de nouvelles entrées; ne supprime rien
        $maxWeek = max(array_keys($uploads));

        foreach ($uploads as $week => $path) {
            PuppyPhoto::create([
                'puppy_id'   => $puppy->id,
                'path'       => $path,
                'week'       => $week,
                'taken_at'   => $bornAt ? $bornAt->copy()->addDays($week * 7)->toDateString() : null,
                'is_primary' => $week === $maxWeek,
                'sort'       => $week,
            ]);
        }

        // Définir la plus récente nouvellement ajoutée comme cover
        PuppyPhoto::where('puppy_id', $puppy->id)
            ->where('week', '!=', $maxWeek)
            ->update(['is_primary' => false]);
    }

}
