<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FurnitureResource\Pages;
use App\Filament\Resources\FurnitureResource\RelationManagers;
use App\Models\Accesory;
use App\Models\Furniture;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;

class FurnitureResource extends Resource
{
    protected static ?string $model = Accesory::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $modelLabel = 'Muebles';
    protected static ?string $navigationGroup = 'Ajustes';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nombre'),

                TextInput::make('name'),

                TextInput::make('price')
                    ->label("Precio ( USD )")
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->modifyQueryUsing(function (Builder $query) {
                $query->where('categoria', "Muebles");
            })
            ->columns([
                Tables\Columns\TextColumn::make("nombre")
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('name')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make("price")
                    ->label("Precio ( USD )")
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->label("Editar"),
            ])
            ->bulkActions([
                //
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageFurniture::route('/'),
        ];
    }
}
