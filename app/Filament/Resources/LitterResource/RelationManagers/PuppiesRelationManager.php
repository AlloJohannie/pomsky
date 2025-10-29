<?php

namespace App\Filament\Resources\LitterResource\RelationManagers;

use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use Filament\Notifications\Notification;
use Filament\Support\Exceptions\Halt;
// Forms
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select as FormSelect;
// use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;

// Tables
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

// Actions (v4)
use Illuminate\Support\Str;
use Filament\Actions\CreateAction;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;

class PuppiesRelationManager extends RelationManager
{
    protected static string $relationship = 'puppies';
    protected static ?string $title = 'Chiots';

    public function form(Schema $schema): Schema
    {
        return $schema->schema([
            TextInput::make('name')->label('Nom')->maxLength(120),
            FormSelect::make('sex')->label('Sexe')
                ->options(['female' => 'Femelle', 'male' => 'Mâle'])->native(false),
            FormSelect::make('status')->label('Statut')->required()
                ->options([
                    'available'     => 'Disponible',
                    'reserved'      => 'Réservé',
                    'adopted'       => 'Adopté',
                    'hold'          => 'En attente',
                    'not_available' => 'Non disponible',
                ])->native(false),
            TextInput::make('price_cents')->label('Prix (CAD)')
                ->numeric()->minValue(0)->step('0.01'),
            TextInput::make('color')->label('Couleur')->maxLength(100),
            Textarea::make('description')->rows(4)->maxLength(5000),
        ])->columns(2);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                ImageColumn::make('photo')
                    ->label('Photo')
                    ->disk('public')
                    ->square()
                    ->imageSize(64)
                    ->defaultImageUrl(asset('images/logo/logo_large.jpg')),
                TextColumn::make('name')->label('Nom'),
                TextColumn::make('sex')->label('Sexe')->badge(),
                TextColumn::make('status')->label('Statut')->badge(),
                TextColumn::make('price_cents')->label('Prix')->money('cad'),
            ])
            ->headerActions([
                CreateAction::make()
                    ->label('Ajouter')
                    ->mutateDataUsing(function (array $data): array {
                        // slug auto si manquant
                        if (empty($data['slug'])) {
                            $base = $data['name'] ?? ('chiot-'.uniqid());
                            $data['slug'] = \Illuminate\Support\Str::slug($base);
                        }
                        return $data;
                    }),
            ])

            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->reorderable('sort');
    }
}
