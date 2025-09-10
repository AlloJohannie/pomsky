<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DogResource\Pages;
use App\Models\Dog;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;                 // ✅ v4
use Filament\Tables\Table;

// Forms (v4)
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select as FormSelect;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Components\Section as ComponentsSection;
// Tables
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;

use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;

use Illuminate\Support\Str;

class DogResource extends Resource
{
    protected static ?string $model = Dog::class;

    protected static string|\BackedEnum|null $navigationIcon  = 'heroicon-o-user-group';
    protected static string|\UnitEnum|null   $navigationGroup = 'Élevage';

    protected static ?string $navigationLabel = 'Chiens';
    protected static ?string $pluralModelLabel = 'Chiens';
    protected static ?string $modelLabel = 'Chien';

    public static function form(Schema $schema): Schema   // ✅ v4 signature
    {
        return $schema->schema([
            ComponentsSection::make('Identité')->schema([
                TextInput::make('name')
                    ->label('Nom')->required()->maxLength(120)
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn ($state, $set) => $set('slug', Str::slug($state))),
                FormSelect::make('sex')
                    ->label('Sexe')
                    ->options(['female' => 'Femelle', 'male' => 'Mâle'])
                    ->required(),
                DatePicker::make('dob')->label('Date de naissance'),
                TextInput::make('color')->label('Couleur')->maxLength(100),
                TextInput::make('weight_kg')->numeric()->label('Poids (kg)')->minValue(0)->step('0.1'),
                Toggle::make('is_active')->label('Actif')->default(true),
                TextInput::make('slug')->required()->unique(ignoreRecord: true),
            ])->columns(2),

            ComponentsSection::make('Photo & Description')->schema([
                FileUpload::make('photo')
                    ->label('Photo')
                    ->image()->imageEditor()
                    ->directory('dogs')->disk('public')->maxSize(4096),
                Textarea::make('description')->rows(6)->maxLength(5000),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('photo')->label('Photo')->disk('public')->circular(),
                TextColumn::make('name')
                    ->label('Nom')
                    ->searchable()
                    ->sortable()
                    ->url(fn ($record) => Pages\EditDog::getUrl(['record' => $record])),
                TextColumn::make('sex')->label('Sexe')->badge(),
                IconColumn::make('is_active')->label('Actif')->boolean(),
                TextColumn::make('created_at')->since()->label('Créé'),
            ])
            ->filters([
                SelectFilter::make('sex')->options(['female' => 'Femelle', 'male' => 'Mâle']),
                TernaryFilter::make('is_active')->label('Actif'),
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
            'index'  => Pages\ListDogs::route('/'),
            'create' => Pages\CreateDog::route('/create'),
            'edit'   => Pages\EditDog::route('/{record}/edit'),
        ];
    }
}
