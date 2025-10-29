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

class PhotosRelationManager extends RelationManager
{
    protected static string $relationship = 'photos';
    protected static ?string $title = 'Galerie';

    public function form(Schema $schema): Schema
    {
        return $schema->schema([
            FileUpload::make('path')->label('Photo')->image()->directory('dogs')->disk('public')->maxSize(20480)->required(),
            Toggle::make('is_primary')->label('Photo principale')->default(false),
        ])->columns(1);
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
