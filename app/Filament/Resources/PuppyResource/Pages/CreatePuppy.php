<?php

namespace App\Filament\Resources\PuppyResource\Pages;

use App\Filament\Resources\PuppyResource;
use App\Models\Puppy;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Str;
use Filament\Notifications\Notification;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\Model;


class CreatePuppy extends CreateRecord
{
    protected static string $resource = PuppyResource::class;

    // 👇 Laisse le bouton "Créer & ajouter un autre" actif (par défaut: true)
    protected static bool $canCreateAnother = true;

    protected function getRedirectUrl(): string
    {
        // Après création (si on n’a PAS cliqué "Créer & ajouter un autre")
        return static::getResource()::getUrl('index');
    }

    /**
     * Quand on clique "Créer & ajouter un autre", Filament recharge le formulaire
     * avec ces valeurs par défaut : on conserve la portée et (optionnel) le statut.
     */
    protected function getCreateAnotherFormDefaults(): array
    {
        return [
            'litter_id' => $this->data['litter_id'] ?? null,
            'status'    => $this->data['status'] ?? 'available',
        ];
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // slug auto si vide
        if (blank($data['slug'] ?? null)) {
            $data['slug'] = Str::slug($data['name'] ?? Str::random(6));
        }

        // unicité du slug
        $base = $data['slug'];
        $slug = $base;
        $i = 2;
        while (Puppy::where('slug', $slug)->exists()) {
            $slug = "{$base}-{$i}";
            $i++;
        }
        $data['slug'] = $slug;

        return $data;
    }
    
    protected function handleRecordCreation(array $data): Model
    {
        try {
            return parent::handleRecordCreation($data);
        } catch (QueryException $e) {
            Notification::make()
                ->title('Création impossible')
                ->body("Une erreur est survenue lors de l'enregistrement. Vérifie le statut et la portée.")
                ->danger()
                ->send();

            throw $e; // pour que Filament affiche aussi le détail si APP_DEBUG=true
        }
    }
}
