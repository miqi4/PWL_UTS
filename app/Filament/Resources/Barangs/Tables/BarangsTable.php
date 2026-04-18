<?php

namespace App\Filament\Resources\Barangs\Tables;

use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables;
use Filament\Tables\Table;

class BarangsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('barang_id')
                    ->label('ID')
                    ->sortable(),

                Tables\Columns\TextColumn::make('kategori.kategori_nama')
                    ->label('Kategori')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('barang_kode')
                    ->label('Kode Barang')
                    ->searchable(),

                Tables\Columns\TextColumn::make('barang_nama')
                    ->label('Nama Barang')
                    ->searchable(),

                Tables\Columns\TextColumn::make('harga_beli')
                    ->label('Harga Beli')
                    ->money('IDR')
                    ->sortable(),

                Tables\Columns\TextColumn::make('harga_jual')
                    ->label('Harga Jual')
                    ->money('IDR')
                    ->sortable(),
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make()
                    ->icon('heroicon-o-trash')
                    ->requiresConfirmation()
                    ->modalHeading('Hapus barang?')
                    ->modalDescription('Barang ini beserta seluruh data stok dan detail penjualannya akan dihapus permanen.')
                    ->modalSubmitActionLabel('Ya, hapus'),
            ])
            ->bulkActions([
                DeleteBulkAction::make()
                    ->icon('heroicon-o-trash')
                    ->requiresConfirmation()
                    ->modalHeading('Hapus barang terpilih?')
                    ->modalDescription('Semua barang yang dipilih beserta seluruh data stok dan detail penjualannya akan dihapus permanen.')
                    ->modalSubmitActionLabel('Ya, hapus'),
            ]);
    }
}
