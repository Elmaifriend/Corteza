<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KitchenResource\Pages;
use App\Filament\Resources\KitchenResource\RelationManagers;
use App\Models\Kitchen;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use App\Models\Accesory;

class KitchenResource extends Resource
{
    protected static ?string $model = Accesory::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $modelLabel = 'Cocina';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name'),

                TextInput::make('price')
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->modifyQueryUsing(function (Builder $query) {
                $query->where('category', "Cocina");
            })
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make("price")
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make("category")
                    ->sortable()
                    ->searchable(),
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageKitchens::route('/'),
        ];
    }
}
