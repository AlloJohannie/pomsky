<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LitterResource\Pages;
use App\Filament\Resources\LitterResource\RelationManagers\PhotosRelationManager;
use App\Models\Dog;
use App\Models\Litter;
use Filament\Resources\Resource;
use Filament\Schemas\Schema; // v4
use Filament\Tables\Table;

// Forms
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select as FormSelect;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;

// Tables
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;

use Illuminate\Support\Str;

class LitterResource extends Resource
{
    protected static ?string $model = Litter::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static string|\UnitEnum|null   $navigationGroup = 'Élevage';

    protected static ?string $navigationLabel = 'Portées';
    protected static ?string $pluralModelLabel = 'Portées';
    protected static ?string $modelLabel = 'Portée';

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
            Section::make('Infos portée')->schema([
                TextInput::make('code')
                    ->label('Code')->required()->maxLength(50)
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn ($state, $set) => $set('slug', Str::slug($state))),
                FormSelect::make('status')->label('Statut')
                    ->options([
                        'planned'   => 'planned',
                        'pregnant'  => 'pregnant',
                        'born'      => 'born',
                        'available' => 'available',
                        'reserved'  => 'reserved',
                        'closed'    => 'closed',
                    ])
                    ->required()
                    ->native(false),
                TextInput::make('puppies_count')->label('Nb chiots')->numeric()->minValue(0)->maxValue(20),
                DatePicker::make('born_at')->label('Nés le'),
                DatePicker::make('ready_at')->label('Prêts à partir'),
                TextInput::make('slug')->required()->unique(ignoreRecord: true),
            ])->columns(3),

            Section::make('Parents')->schema([
                FormSelect::make('sire_id')->label('Père')
                    ->options(fn () => Dog::where('sex', 'male')->orderBy('name')->pluck('name', 'id'))
                    ->searchable()->required()->native(false),
                FormSelect::make('dam_id')->label('Mère')
                    ->options(fn () => Dog::where('sex', 'female')->orderBy('name')->pluck('name', 'id'))
                    ->searchable()->required()->native(false),
            ])->columns(2),

            Section::make('Description')->schema([
                Textarea::make('description')->rows(6)->maxLength(10000),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('code')
                    ->label('Code')
                    ->searchable()
                    ->sortable()
                    // ✅ clic = aller à la page d’édition Filament
                    ->url(fn ($record) => Pages\EditLitter::getUrl(['record' => $record])),
                TextColumn::make('status')->badge(),
                TextColumn::make('sire.name')->label('Père')->sortable()->searchable(),
                TextColumn::make('dam.name')->label('Mère')->sortable()->searchable(),
                TextColumn::make('born_at')->date()->label('Nés le'),
                TextColumn::make('puppies_count')->label('Chiots'),
                TextColumn::make('created_at')->since()->label('Créé'),
            ])
            ->filters([
                SelectFilter::make('status')->options([
                    'planned'   => 'planned',
                    'pregnant'  => 'pregnant',
                    'born'      => 'born',
                    'available' => 'available',
                    'reserved'  => 'reserved',
                    'closed'    => 'closed',
                ]),
            ]);

        // ❌ Pas d'actions de ligne ni de bulk ici (on édite/supprime depuis la page Edit)
    }

    public static function getRelations(): array
    {
        return [
            PhotosRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListLitters::route('/'),
            'create' => Pages\CreateLitter::route('/create'),
            'edit'   => Pages\EditLitter::route('/{record}/edit'),
        ];
    }
}
