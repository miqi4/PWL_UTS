<?php
namespace App\Filament\Resources\Kategoris\Tables;

use Filament\Actions\EditAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables;
use Filament\Tables\Table;

class KategorisTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kategori_id')
                    ->label('ID')
                    ->sortable(),

                Tables\Columns\TextColumn::make('kategori_kode')
                    ->label('Kode')
                    ->searchable(),

                Tables\Columns\TextColumn::make('kategori_nama')
                    ->label('Nama')
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