<?php

namespace App\Filament\Resources\DogResource\RelationManagers;

use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Actions\CreateAction;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Forms\Components\Select as FormSelect;

class PhotosRelationManager extends RelationManager
{
    protected static string $relationship = 'photos';
    protected static ?string $title = 'Galerie';

    public function form(Schema $schema): Schema
    {
        return $schema->schema([
            FormSelect::make('week')
                ->label('Semaine')
                ->options(
                    collect(range(0, 12))->mapWithKeys(
                        fn ($w) => [
                            $w => $w === 0
                                ? 'Naissance'
                                : "Semaine $w"
                        ]
                    )->all()
                )
                ->required()
                ->native(false),

            FileUpload::make('path')
                ->label('Photo')
                ->image()
                ->directory('puppies')
                ->disk('public')
                ->required()
                ->imageEditor(),

            \Filament\Forms\Components\Toggle::make('is_primary')
                ->label('Photo principale'),

            \Filament\Forms\Components\DatePicker::make('taken_at')
                ->label('Date'),
        ])->columns(2);
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('path')->label('Photo')->disk('public')->square()->imageSize(64),
                IconColumn::make('is_primary')->label('Principale')->boolean(),
            ])
            ->reorderable('sort')
            ->headerActions([ CreateAction::make()->label('Ajouter') ])
            ->recordActions([ EditAction::make(), DeleteAction::make() ]);
    }
}
