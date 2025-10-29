<?php

namespace App\Filament\Resources\LitterResource\Pages;

use App\Filament\Resources\LitterResource;
use App\Models\Litter;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Str;

class CreateLitter extends CreateRecord
{
    protected static string $resource = LitterResource::class;

    /**
     * Slug auto + unicité avant création.
     */
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        if (blank($data['slug'] ?? null)) {
            $data['slug'] = Str::slug($data['code']);   // "Nom de la portée"
        }

        $base = $data['slug'];
        $slug = $base;
        $i = 2;

        while (Litter::where('slug', $slug)->exists()) {
            $slug = "{$base}-{$i}";
            $i++;
        }

        $data['slug'] = $slug;

        return $data;
    }

    /**
     * Après création, revenir à la liste.
     */
    protected function getRedirectUrl(): string
    {
        return static::getResource()::getUrl('index');
    }

    /**
     * On retire le bouton "Créer & ajouter un autre".
     */
    protected function getFormActions(): array
    {
        return [
            $this->getCreateFormAction(),  // Créer
            $this->getCancelFormAction(),  // Annuler
        ];
    }

    protected function afterCreate(): void
    {
        $names = collect(preg_split('/\r\n|\r|\n/', (string)($this->form->getState()['puppy_names'] ?? '')))
            ->map(fn($n)=>trim($n))->filter();

        foreach ($names as $name) {
            $this->record->puppies()->firstOrCreate(
                ['slug' => \Illuminate\Support\Str::slug($name) ?: \Illuminate\Support\Str::random(6)],
                ['name' => $name, 'status'=>'available']
            );
        }
        $this->record->update(['puppies_count' => $this->record->puppies()->count()]);
    }

}
