<?php

namespace App\Filament\Resources\PenjualanDetails\Tables;

use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables;
use Filament\Tables\Table;

class PenjualanDetailsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('detail_id')
                    ->label('ID')
                    ->sortable(),

                Tables\Columns\TextColumn::make('penjualan.penjualan_kode')
                    ->label('Kode Penjualan')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('barang.barang_nama')
                    ->label('Barang')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('harga')
                    ->label('Harga')
                    ->money('IDR')
                    ->sortable(),

                Tables\Columns\TextColumn::make('jumlah')
                    ->label('Jumlah')
                    ->numeric()
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created At')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->actions([
                EditAction::make(),
            ])
            ->bulkActions([
                DeleteBulkAction::make(),
            ]);
    }
}
