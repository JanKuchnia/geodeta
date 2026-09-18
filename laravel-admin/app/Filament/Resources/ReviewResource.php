<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReviewResource\Pages;
use App\Filament\Resources\ReviewResource\RelationManagers;
use App\Models\Review;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ReviewResource extends Resource
{
    protected static ?string $model = Review::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Opinie';

    protected static ?string $modelLabel = 'opinia';

    protected static ?string $pluralModelLabel = 'Opinie';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('author')
                    ->label('Autor')
                    ->required(),
                Forms\Components\TextInput::make('role')
                    ->label('Rola / lokalizacja klienta'),
                Forms\Components\TextInput::make('rating')
                    ->label('Ocena')
                    ->required()
                    ->numeric()
                    ->minValue(1)
                    ->maxValue(5)
                    ->default(5),
                Forms\Components\Textarea::make('text')
                    ->label('Treść')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('service_tag')
                    ->label('Dotyczy usługi'),
                Forms\Components\TextInput::make('source')
                    ->label('Źródło'),
                Forms\Components\Toggle::make('verified')
                    ->label('Zweryfikowana'),
                Forms\Components\Toggle::make('published')
                    ->label('Opublikowana')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('author')
                    ->label('Autor')
                    ->searchable(),
                Tables\Columns\TextColumn::make('rating')
                    ->label('Ocena')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('service_tag')
                    ->label('Dotyczy usługi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('source')
                    ->label('Źródło')
                    ->searchable(),
                Tables\Columns\IconColumn::make('verified')
                    ->label('Zweryfikowana')
                    ->boolean(),
                Tables\Columns\IconColumn::make('published')
                    ->label('Opublikowana')
                    ->boolean(),
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
            'index' => Pages\ListReviews::route('/'),
            'create' => Pages\CreateReview::route('/create'),
            'edit' => Pages\EditReview::route('/{record}/edit'),
        ];
    }
}
