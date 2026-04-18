<?php

namespace App\Filament\Resources\Penjualans\Tables;

use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables;
use Filament\Tables\Table;

class PenjualansTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('penjualan_id')
                    ->label('ID')
                    ->sortable(),

                Tables\Columns\TextColumn::make('penjualan_kode')
                    ->label('Kode Penjualan')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('pembeli')
                    ->label('Pembeli')
                    ->searchable(),

                Tables\Columns\TextColumn::make('user.nama')
                    ->label('User')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('penjualan_tanggal')
                    ->label('Tanggal Penjualan')
                    ->dateTime()
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created At')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make()
                    ->icon('heroicon-o-trash')
                    ->requiresConfirmation()
                    ->modalHeading('Hapus penjualan?')
                    ->modalDescription('Data penjualan ini beserta seluruh detail penjualannya akan dihapus permanen.')
                    ->modalSubmitActionLabel('Ya, hapus'),
            ])
            ->bulkActions([
                DeleteBulkAction::make()
                    ->icon('heroicon-o-trash')
                    ->requiresConfirmation()
                    ->modalHeading('Hapus penjualan terpilih?')
                    ->modalDescription('Semua penjualan yang dipilih beserta seluruh detail penjualannya akan dihapus permanen.')
                    ->modalSubmitActionLabel('Ya, hapus'),
            ]);
    }
}
