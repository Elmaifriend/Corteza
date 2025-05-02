<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HouseModelsResource\Pages;
use App\Filament\Resources\HouseModelsResource\RelationManagers;
use App\Models\HouseModels;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\HouseModel;
use Filament\Forms\Components\TextInput;
use PhpParser\Node\Stmt\Label;

class HouseModelsResource extends Resource
{
    protected static ?string $model = HouseModel::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $modelLabel = 'Modelos De Casas';
    protected static ?string $navigationGroup = 'Ajustes';


    public static function canCreate(): bool
    {
        return false;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label("Nombre"),

                TextInput::make('estandar')
                    ->label("Estandar (USD)")
                    ->numeric(),

                TextInput::make('plus')
                    ->label("Plus (USD)")
                    ->numeric(),

                TextInput::make('delux')
                    ->label("Deluxe (USD)")
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make("estandar")
                    ->label("Estandar (USD)")
                    ->numeric()
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make("plus")
                    ->label("Plus (USD)")
                    ->numeric()
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make("delux")
                    ->label("Deluxe (USD)")
                    ->numeric()
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
            'index' => Pages\ManageHouseModels::route('/'),
        ];
    }
}
