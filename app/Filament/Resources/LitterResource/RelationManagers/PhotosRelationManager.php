<?php

namespace App\Filament\Resources\LitterResource\RelationManagers;

use App\Models\LitterPhoto;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema; // v4: form() utilise Schema
use Filament\Tables\Table;

// Forms
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;

// Tables
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\CreateAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;

class PhotosRelationManager extends RelationManager
{
    protected static string $relationship = 'photos';
    protected static ?string $title = 'Photos de la portée';

    public function form(Schema $schema): Schema
    {
        return $schema->schema([
            FileUpload::make('path')
                ->label('Photo')
                ->image()->imageEditor()
                ->disk('public')->directory('litters')
                ->maxSize(4096)->required(),
            TextInput::make('caption')->label('Légende')->maxLength(200),
            TextInput::make('sort')->label('Ordre')->numeric()->minValue(0)->default(0),
        ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('caption')
            ->columns([
                ImageColumn::make('path')->disk('public')->label('Photo')->square(),
                TextColumn::make('caption')->label('Légende')->limit(40),
                TextColumn::make('sort')->label('Ordre')->sortable(),
            ])
            ->headerActions([
                CreateAction::make()
                    ->label('Ajouter')
                    ->mutateFormDataUsing(function (array $data): array {
                        if (!isset($data['sort'])) {
                            $data['sort'] = (int) LitterPhoto::where('litter_id', $this->getOwnerRecord()->id)->max('sort') + 1;
                        }
                        return $data;
                    }),
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->reorderable('sort');
    }
}
