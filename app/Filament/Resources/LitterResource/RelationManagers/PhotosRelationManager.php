<?php

namespace App\Filament\Resources\LitterResource\RelationManagers;

use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select as FormSelect;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions\CreateAction;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;

class PhotosRelationManager extends RelationManager
{
    protected static string $relationship = 'photos';
    protected static ?string $title = 'Photos';

    public function form(Schema $schema): Schema
    {
        return $schema->schema([
            FileUpload::make('path')
                ->label('Photo')
                ->image()->directory('puppies')->disk('public')->maxSize(8192)
                ->required(),

            DatePicker::make('taken_at')
                ->label('Pris le')
                ->native(false)
                ->closeOnDateSelection()
                ->displayFormat('Y-m-d'),

            FormSelect::make('week')
                ->label('Semaine')
                ->options(collect(range(0,12))
                    ->mapWithKeys(fn($w)=>[$w => $w === 0 ? 'Naissance (0)' : "Semaine $w"])
                    ->all())
                ->native(false),
        ])->columns(3);
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('path')
                    ->label('Photo')
                    ->disk('public')
                    ->square()
                    ->imageSize(64),

                TextColumn::make('week')
                    ->label('Semaine')
                    ->formatStateUsing(fn($state) => is_null($state)
                        ? '—'
                        : ($state == 0 ? 'Naissance' : "Semaine $state")),

                TextColumn::make('taken_at')
                    ->label('Pris le')
                    ->date('Y-m-d'),
            ])
            ->headerActions([
                CreateAction::make()
                    ->label('Ajouter')
                    ->mutateDataUsing(function(array $data): array {
                        // Calcule la semaine si manquante
                        if (!isset($data['week']) && !empty($data['taken_at'])) {
                            $born = $this->getOwnerRecord()->litter?->born_at;
                            if ($born) {
                                $weeks = \Illuminate\Support\Carbon::parse($born)
                                    ->diffInWeeks(\Illuminate\Support\Carbon::parse($data['taken_at']));
                                $data['week'] = min(max($weeks, 0), 12);
                            }
                        }
                        return $data;
                    }),
            ])
            ->recordActions([
                EditAction::make()
                    ->mutateDataUsing(function(array $data): array {
                        // Recalcule la semaine si on modifie la date et que la semaine est vide
                        if (!isset($data['week']) && !empty($data['taken_at'])) {
                            $born = $this->getOwnerRecord()->litter?->born_at;
                            if ($born) {
                                $weeks = \Illuminate\Support\Carbon::parse($born)
                                    ->diffInWeeks(\Illuminate\Support\Carbon::parse($data['taken_at']));
                                $data['week'] = min(max($weeks, 0), 12);
                            }
                        }
                        return $data;
                    }),
                DeleteAction::make(),
            ])
            ->defaultSort('taken_at', 'desc');   // plus récente en haut
    }
}
