<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PhotoResource\Pages;
use App\Filament\Resources\PhotoResource\RelationManagers;
use App\Models\Photo;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PhotoResource extends Resource
{
    protected static ?string $model = Photo::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Zdjęcia';

    protected static ?string $modelLabel = 'zdjęcie';

    protected static ?string $pluralModelLabel = 'Zdjęcia';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Tytuł')
                    ->required(),
                Forms\Components\Textarea::make('description')
                    ->label('Opis')
                    ->columnSpanFull(),
                Forms\Components\Select::make('category')
                    ->label('Kategoria')
                    ->options([
                        'tyczenia' => 'Tyczenia budynków',
                        'mapy' => 'Mapy do celów projektowych',
                        'inwentaryzacje' => 'Inwentaryzacje powykonawcze',
                        'granice' => 'Podziały i granice',
                        'sprzet' => 'Sprzęt i aparatura',
                    ])
                    ->required(),
                Forms\Components\TextInput::make('badge')
                    ->label('Etykieta (badge)'),
                Forms\Components\TextInput::make('location')
                    ->label('Lokalizacja'),
                Forms\Components\TextInput::make('equipment')
                    ->label('Sprzęt'),
                Forms\Components\TextInput::make('result_badge')
                    ->label('Wynik / status'),
                Forms\Components\TextInput::make('alt_text')
                    ->label('Tekst alternatywny (alt)'),
                Forms\Components\TextInput::make('image_path')
                    ->label('Adres zdjęcia (URL)')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('sort_order')
                    ->label('Kolejność')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Tytuł')
                    ->searchable(),
                Tables\Columns\TextColumn::make('category')
                    ->label('Kategoria')
                    ->searchable(),
                Tables\Columns\TextColumn::make('location')
                    ->label('Lokalizacja')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sort_order')
                    ->label('Kolejność')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPhotos::route('/'),
            'create' => Pages\CreatePhoto::route('/create'),
            'edit' => Pages\EditPhoto::route('/{record}/edit'),
        ];
    }
}
