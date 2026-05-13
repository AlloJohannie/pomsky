<?php

namespace App\Filament\Resources\PuppyResource\RelationManagers;

use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select as FormSelect;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions\CreateAction;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Schemas\Components\Utilities\Get as SchemaGet;

class PhotosRelationManager extends RelationManager
{
    protected static string $relationship = 'photos';
    protected static ?string $title = 'Photos';

    public function form(Schema $schema): Schema
    {
        return $schema->schema([
            // 1) Semaine AVANT la photo, requise + LIVE
            FormSelect::make('week')
                ->label('Semaine')
                ->options(collect(range(0, 12))->mapWithKeys(
                    fn ($w) => [$w => $w === 0 ? 'Naissance (0)' : "Semaine $w"]
                )->all())
                ->required()
                ->native(false)
                ->live(), // 👈 important pour réévaluer le FileUpload

            // 2) Une seule photo, désactivée tant que "Semaine" est vide
            FileUpload::make('path')
                ->label('Photo')
                ->image()
                ->directory('puppies')
                ->disk('public')
                ->maxSize(8192)
                ->required()
                ->maxFiles(1)
                ->acceptedFileTypes(['image/*']) // optionnel
                ->preserveFilenames()            // optionnel
                ->disabled(fn (\Filament\Schemas\Components\Utilities\Get $get) => blank($get('week'))),
        ])->columns(2);
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('path')->label('Photo')->disk('public')->square()->imageSize(64),
                TextColumn::make('week')
                    ->label('Semaine')
                    ->formatStateUsing(fn ($state) => is_null($state) ? '—' : ($state == 0 ? 'Naissance' : "Semaine $state")),
            ])
            ->headerActions([
                CreateAction::make()
                    ->label('Ajouter')
                    ->modalHeading('Ajouter une photo')      // modal centré
                    ->modalSubmitActionLabel('Enregistrer')  // remplace “Créer”
                    // ->slideOver()  // ❌ retiré
                    ->mutateDataUsing(function (array $data): array {
                        if (!isset($data['week'])) {
                            $data['week'] = 0;
                        }
                        return $data;
                    }),
            ])
            ->recordActions([
                EditAction::make()
                    ->label('Modifier')
                    ->modalHeading(fn () => 'Modifier la photo – ' . ($this->getOwnerRecord()->name ?? 'Chiot'))
                    ->modalSubmitActionLabel('Enregistrer')
                    // ->slideOver()  // ❌ retiré
                ,
                DeleteAction::make()->label('Supprimer'),
            ])
            ->defaultSort('week', 'desc');
    }
}
