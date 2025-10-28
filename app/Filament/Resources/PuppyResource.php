<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PuppyResource\Pages;
use App\Filament\Resources\PuppyResource\RelationManagers\PhotosRelationManager;
use App\Models\Puppy;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section as SchemaSection;
use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select as FormSelect;

class PuppyResource extends Resource
{
    protected static ?string $model = Puppy::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-user-group';
    protected static string|\UnitEnum|null   $navigationGroup = 'Élevage';
    protected static ?string $navigationLabel = 'Chiots';
    protected static ?string $pluralModelLabel = 'Chiots';
    protected static ?string $modelLabel = 'Chiot';

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
            SchemaSection::make('Informations')->schema([
                FormSelect::make('litter_id')
                    ->label('Portée')
                    ->options(fn () => \App\Models\Litter::query()
                        ->where('status','!=','closed')
                        ->orderByDesc('born_at')->orderBy('code')
                        ->pluck('code','id'))
                    ->searchable()->required()->native(false),

                TextInput::make('name')->label('Nom')->maxLength(120),
                TextInput::make('slug')->label('Slug')->unique(ignoreRecord: true)->hidden(),

                FormSelect::make('sex')->label('Sexe')
                    ->options(['female'=>'Femelle','male'=>'Mâle'])->native(false),

                FormSelect::make('status')->label('Statut')->required()
                    ->options([
                        'available'=>'Disponible','reserved'=>'Réservé','adopted'=>'Adopté',
                        'hold'=>'En attente','not_available'=>'Non disponible',
                    ])->native(false),

                TextInput::make('price_cents')->label('Prix')->numeric()->minValue(0)->step(1),
                TextInput::make('color')->label('Couleur')->maxLength(100),
            ])->columns(2),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('cover')
                    ->label('Photo')
                    ->getStateUsing(fn (Puppy $r) => $r->cover_photo_url)
                    ->square()->imageSize(64),
                TextColumn::make('name')->label('Nom')->searchable()->sortable(),
                TextColumn::make('sex')->label('Sexe')->badge(),
                TextColumn::make('status')->label('Statut')->badge()
                    ->colors([
                        'success' => 'available',
                        'warning' => 'hold',
                        'info'    => 'reserved',
                        'gray'    => 'not_available',
                        'danger'  => 'adopted',
                    ]),
                TextColumn::make('price_cents')
                    ->label('Prix')
                    ->formatStateUsing(fn ($c) => $c !== null ? number_format($c / 100, 2) . ' $' : '—'),
                TextColumn::make('litter.code')->label('Portée')->sortable()->searchable(),
                TextColumn::make('created_at')->since()->label('Créé'),
            ])
            ->recordActions([EditAction::make(), DeleteAction::make()])
            ->toolbarActions([DeleteBulkAction::make()]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListPuppies::route('/'),
            'create' => Pages\CreatePuppy::route('/create'),
            'edit'   => Pages\EditPuppy::route('/{record}/edit'),
        ];
    }

    public static function getRelations(): array
    {
        return [
            PhotosRelationManager::class,
        ];
    }
}
