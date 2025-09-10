<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PuppyResource\Pages;
use App\Models\Puppy;
use App\Models\Litter;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;

// Forms
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;                   // 👈 AJOUT
use Filament\Forms\Components\Section as ComponentsSection;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select as FormSelect;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;

// Tables
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Schemas\Components\Section;

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
            Section::make('Informations')
                ->schema([
                    FormSelect::make('litter_id')
                        ->label('Portée')
                        // n’affiche que les portées non fermées
                        ->options(fn () => Litter::query()
                            ->where('status', '!=', 'closed')
                            ->orderByDesc('born_at')
                            ->orderBy('code')
                            ->pluck('code', 'id'))
                        ->searchable()
                        ->required()
                        ->native(false)
                        // ✅ remplace la closure par Rule::exists + where
                        ->rules([
                            'required',
                            Rule::exists('litters', 'id')->where(fn ($q) => $q->where('status', '!=', 'closed')),
                        ])
                        ->validationMessages([
                            'required' => 'Veuillez choisir une portée.',
                            'exists'   => 'La portée sélectionnée est fermée ou introuvable.',
                        ]),

                    TextInput::make('name')
                        ->label('Nom')
                        ->maxLength(120)
                        ->live(onBlur: true)
                        ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),

                    TextInput::make('slug')
                        ->label('Slug')
                        ->unique(ignoreRecord: true)
                        ->helperText('Généré automatiquement à partir du nom')
                        ->dehydrated(true)
                        ->hidden(),

                    FormSelect::make('sex')->label('Sexe')
                        ->options(['female' => 'Femelle', 'male' => 'Mâle'])
                        ->native(false),

                    FormSelect::make('status')->label('Statut')->required()
                        ->options([
                            'available'     => 'Disponible',
                            'reserved'      => 'Réservé',
                            'adopted'       => 'Adopté',
                            'hold'          => 'En attente',
                            'not_available' => 'Non disponible',
                        ])
                        ->native(false)
                        ->rules(['required', 'in:available,reserved,adopted,hold,not_available'])
                        ->validationMessages([
                            'in' => 'Le statut choisi est invalide.',
                        ]),

                    // si c’est un entier en cents, garde step(1)
                    TextInput::make('price_cents')->label('Prix (¢ CAD)')
                        ->numeric()->minValue(0)->step(1),

                    TextInput::make('color')->label('Couleur')->maxLength(100),
                    TextInput::make('sort')->label('Ordre')->numeric()->minValue(0)->default(0),
                ])->columns(2),

            Section::make('Médias & description')
                ->schema([
                    FileUpload::make('photo')->label('Photo')
                        ->image()->imageEditor()
                        ->directory('puppies')->disk('public')->maxSize(4096),
                    Textarea::make('description')->rows(6)->maxLength(5000),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('photo')->label('Photo')->disk('public')->square(),
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
                // si price_cents = cents, afficher en dollars :
                TextColumn::make('price_cents')
                    ->label('Prix')
                    ->formatStateUsing(fn ($cents) => $cents !== null ? number_format($cents / 100, 2) . ' $' : '—'),
                TextColumn::make('litter.code')->label('Portée')->sortable()->searchable(),
                TextColumn::make('created_at')->since()->label('Créé'),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListPuppies::route('/'),
            'create' => Pages\CreatePuppy::route('/create'),
            'edit'   => Pages\EditPuppy::route('/{record}/edit'),
        ];
    }
}
