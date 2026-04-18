<?php
namespace App\Filament\Resources\Kategori\Tables;

use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables;
use Filament\Tables\Table;

class KategoriTable
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
                DeleteAction::make()
                    ->icon('heroicon-o-trash')
                    ->requiresConfirmation()
                    ->modalHeading('Hapus kategori?')
                    ->modalDescription('Kategori yang dihapus akan ikut menghapus semua barang, stok, dan detail penjualan yang terhubung.')
                    ->modalSubmitActionLabel('Ya, hapus permanen'),
            ])
            ->bulkActions([
                DeleteBulkAction::make()
                    ->icon('heroicon-o-trash')
                    ->requiresConfirmation()
                    ->modalHeading('Hapus kategori terpilih?')
                    ->modalDescription('Semua kategori yang dipilih akan dihapus permanen beserta seluruh barang, stok, dan detail penjualan yang terhubung.')
                    ->modalSubmitActionLabel('Ya, hapus permanen'),
            ]);
    }
}
