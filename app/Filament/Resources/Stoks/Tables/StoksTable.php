<?php

namespace App\Filament\Resources\Stoks\Tables;

use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables;
use Filament\Tables\Table;

class StoksTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('stok_id')
                    ->label('ID')
                    ->sortable(),

                Tables\Columns\TextColumn::make('supplier.supplier_nama')
                    ->label('Supplier')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('barang.barang_nama')
                    ->label('Barang')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('user.nama')
                    ->label('User')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('stok_tanggal')
                    ->label('Tanggal Stok')
                    ->dateTime()
                    ->sortable(),

                Tables\Columns\TextColumn::make('stok_jumlah')
                    ->label('Jumlah')
                    ->numeric()
                    ->sortable(),
            ])
            ->actions([
                EditAction::make(),
            ])
            ->bulkActions([
                DeleteBulkAction::make(),
            ]);
    }
}
