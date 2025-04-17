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
use Filament\Forms\Components\Select;

use function Laravel\Prompts\select;

class QuotesResource extends Resource
{
    protected static ?string $model = Quote::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $modelLabel = 'Cotizaciones';
    protected static ?int $navigationSort = -2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label("Nombre"),

                TextInput::make('email')
                    ->label("Correo"),

                TextInput::make('cell_phone')
                    ->label("Telefono")
                    ->numeric(),

                TextInput::make('has_wa')
                    ->label("WhatsApp"),

                TextInput::make("city")
                    ->label("Ciudad"),

                TextInput::make('neighborhood')
                    ->label("Vecindario"),

                TextInput::make('scheduled')
                    ->label("Agendado"),

                Select::make('model')
                    ->label("Modelo")
                    ->options([
                        'Nido' => 'Nido',
                        'Raiz' => 'Raiz',
                        'Savia' => 'Savia',
                        "Copa" => "Copa",
                        "Ebano" => "Ebano"
                    ]),

                Textarea::make('description')
                    ->label("Descripcion")
                    ->rows(20)
                    ->columnSpan(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make("name")
                    ->label("Nombre")
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('email')
                    ->label("Correo")
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make("cell_phone")
                    ->label("Telefono")
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
                    ->label("Agendado")
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make("description")
                    ->label("Descripcion")
                    ->sortable()
                    ->searchable()
                    ->limit(30),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make()
                    ->label("Ver"),
                Tables\Actions\EditAction::make()
                    ->label("Editar"),
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
