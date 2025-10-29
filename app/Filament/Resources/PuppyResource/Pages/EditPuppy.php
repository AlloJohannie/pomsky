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
        $bornAt = optional($puppy->litter)->born_at
            ? \Carbon\Carbon::parse($puppy->litter->born_at)
            : null;

        $weeksWithPhoto = [];

        for ($w = 0; $w <= 12; $w++) {
            $key = 'week'.$w;

            // IMPORTANT : on regarde même si la clé existe avec null => suppression
            if (! array_key_exists($key, $state)) {
                continue;
            }

            $newPath = $state[$key] ?: null;

            /** @var PuppyPhoto|null $existing */
            $existing = $puppy->photos()->where('week', $w)->first();

            if ($newPath) {
                $weeksWithPhoto[] = $w;

                if ($existing) {
                    // Remplacer si différent
                    if ($existing->path !== $newPath) {
                        $existing->update([
                            'path'       => $newPath,
                            'taken_at'   => $bornAt ? $bornAt->copy()->addDays($w * 7)->toDateString() : $existing->taken_at,
                            'sort'       => $w,
                            'is_primary' => false, // on recalculera plus bas
                        ]);
                    }
                } else {
                    // Créer si absent
                    $puppy->photos()->create([
                        'path'       => $newPath,
                        'week'       => $w,
                        'taken_at'   => $bornAt ? $bornAt->copy()->addDays($w * 7)->toDateString() : null,
                        'sort'       => $w,
                        'is_primary' => false,
                    ]);
                }
            } else {
                // Champ vidé => supprimer la photo de cette semaine s'il y en a une
                if ($existing) {
                    $existing->delete();
                }
            }
        }

        // Définir la cover = semaine la plus élevée disponible
        if (!empty($weeksWithPhoto)) {
            $maxWeek = max($weeksWithPhoto);
            $puppy->photos()->update(['is_primary' => false]);
            $puppy->photos()->where('week', $maxWeek)->update(['is_primary' => true]);
        }
    }

}
