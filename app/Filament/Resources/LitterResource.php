<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LitterResource\Pages;
// use App\Filament\Resources\LitterResource\RelationManagers\PhotosRelationManager;
use App\Filament\Resources\LitterResource\RelationManagers\PuppiesRelationManager;
use App\Models\Dog;
use App\Models\Litter;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;         // ✅ v4
use Filament\Tables\Table;

// Forms
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select as FormSelect;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section as ComponentsSection;
// Tables
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\CreateAction;
use Illuminate\Support\Str;

class LitterResource extends Resource
{
    protected static ?string $model = Litter::class;

    protected static string|\BackedEnum|null $navigationIcon  = 'heroicon-o-rectangle-stack';
    protected static string|\UnitEnum|null   $navigationGroup = 'Élevage';

    protected static ?string $navigationLabel = 'Portées';
    protected static ?string $pluralModelLabel = 'Portées';
    protected static ?string $modelLabel = 'Portée';

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
            ComponentsSection::make('Infos portée')->schema([
                TextInput::make('code')
                    ->label('Nom de la portée')                 // 👈 libellé FR
                    // ->helperText('Ex.: P2025-01')
                    ->required()->maxLength(50)
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn ($state, $set) => $set('slug', Str::slug($state))),
                FormSelect::make('size')
                    ->label('Format')
                    ->options([
                        'standard'  => 'Standard',
                        'miniature' => 'Miniature',
                        'toy'       => 'Toy',
                    ])
                    ->native(false),
                FormSelect::make('status')
                    ->label('Statut')
                    ->options([
                        'planned'   => 'Planifiée',
                        'pregnant'  => 'Gestante',
                        'born'      => 'Née',
                        'available' => 'Disponible',
                        'reserved'  => 'Réservée',
                        'closed'    => 'Fermée',
                    ])
                    ->required()
                    ->native(false),

                TextInput::make('puppies_count')
                    ->label('Nb chiots')->numeric()->minValue(0)->maxValue(20),

                DatePicker::make('born_at')->label('Nés le'),
                DatePicker::make('ready_at')->label('Prêts à partir'),

                // slug auto & caché
                TextInput::make('slug')
                    ->hidden()
                    ->dehydrated(true)
                    ->unique(ignoreRecord: true),
            ])->columns(3),

            ComponentsSection::make('Parents')->schema([
                FormSelect::make('sire_id')->label('Père')
                    ->options(fn () => Dog::where('sex', 'male')->orderBy('name')->pluck('name', 'id'))
                    ->searchable()->required()->native(false),
                FormSelect::make('dam_id')->label('Mère')
                    ->options(fn () => Dog::where('sex', 'female')->orderBy('name')->pluck('name', 'id'))
                    ->searchable()->required()->native(false),
            ])->columns(2),

            ComponentsSection::make('Description')->schema([
                Textarea::make('description')->rows(6)->maxLength(10000),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('code')
                    ->label('Nom de la portée')
                    ->searchable()
                    ->sortable()
                    ->url(fn ($record) => Pages\EditLitter::getUrl(['record' => $record])),
                TextColumn::make('size')
                    ->label('Format')
                    ->badge()
                    ->formatStateUsing(fn (?string $v) => match ($v) {
                        'standard'  => 'Standard',
                        'miniature' => 'Miniature',
                        'toy'       => 'Toy',
                        default     => '—',
                    })
                    ->color(fn (?string $v) => match ($v) {
                        'standard'  => 'success',
                        'miniature' => 'info',
                        'toy'       => 'warning',
                        default     => 'gray',
                    })
                    ->sortable()
                    ->searchable(),
                TextColumn::make('status')
                    ->label('Statut')
                    ->formatStateUsing(function (string $state): string {
                        return [
                            'planned'   => 'Planifiée',
                            'pregnant'  => 'Gestante',
                            'born'      => 'Née',
                            'available' => 'Disponible',
                            'reserved'  => 'Réservée',
                            'closed'    => 'Fermée',
                        ][$state] ?? $state;
                    })
                    ->badge(),
                TextColumn::make('sire.name')->label('Père')->sortable()->searchable(),
                TextColumn::make('dam.name')->label('Mère')->sortable()->searchable(),
                TextColumn::make('born_at')->date()->label('Nés le'),
                TextColumn::make('puppies_count')->label('Chiots'),
                TextColumn::make('created_at')->since()->label('Créé'),
            ])
            
        ->emptyStateHeading('Aucune portée');

    }

    public static function getRelations(): array
    {
        return [
            // PhotosRelationManager::class,
            PuppiesRelationManager::class,
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
