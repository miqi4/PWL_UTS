<?php

namespace App\Filament\Resources\Levels\Tables;

use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables;
use Filament\Tables\Table;

class LevelsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('level_id')
                    ->label('ID')
                    ->sortable(),

                Tables\Columns\TextColumn::make('level_kode')
                    ->label('Kode Level')
                    ->searchable(),

                Tables\Columns\TextColumn::make('level_nama')
                    ->label('Nama Level')
                    ->searchable(),
            ])
            ->actions([
                EditAction::make(),
            ])
            ->bulkActions([
                DeleteBulkAction::make(),
            ]);
    }
}
