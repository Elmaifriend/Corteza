<?php

namespace App\Filament\Resources;

use App\Filament\Resources\QuotesResource\Pages;
use App\Filament\Resources\QuotesResource\RelationManagers;
use App\Models\Quote;
use Filament\Forms;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;

class QuotesResource extends Resource
{
    protected static ?string $model = Quote::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $modelLabel = 'Cotizaciones';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name'),

                TextInput::make('email'),

                TextInput::make('cell_phone')
                    ->numeric(),

                TextInput::make('has_wa'),

                TextInput::make("city"),

                TextInput::make('neighborhood'),

                TextInput::make('scheduled'),

                Textarea::make('description')
                    ->rows(30),
            ])
            ->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make("name")
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('email')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make("cell_phone")
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make("has_wa")
                    ->label("WhatsApp")
                    ->sortable()
                    ->searchable()
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Si' => 'success',
                        'No' => 'danger',
                        default => "gray"
                    }),

                Tables\Columns\TextColumn::make("scheduled")
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make("description")
                    ->sortable()
                    ->searchable()
                    ->limit(30),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListQuotes::route('/'),
            'create' => Pages\CreateQuotes::route('/create'),
            'edit' => Pages\EditQuotes::route('/{record}/edit'),
        ];
    }
}
