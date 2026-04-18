<?php

namespace App\Filament\Resources\Suppliers\Tables;

use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables;
use Filament\Tables\Table;

class SuppliersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('supplier_id')
                    ->label('ID')
                    ->sortable(),

                Tables\Columns\TextColumn::make('supplier_kode')
                    ->label('Kode Supplier')
                    ->searchable(),

                Tables\Columns\TextColumn::make('supplier_nama')
                    ->label('Nama Supplier')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('supplier_alamat')
                    ->label('Alamat Supplier')
                    ->searchable()
                    ->limit(40),

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
                    ->modalHeading('Hapus supplier?')
                    ->modalDescription('Supplier ini beserta seluruh data stok yang terhubung akan dihapus permanen.')
                    ->modalSubmitActionLabel('Ya, hapus permanen'),
            ])
            ->bulkActions([
                DeleteBulkAction::make()
                    ->icon('heroicon-o-trash')
                    ->requiresConfirmation()
                    ->modalHeading('Hapus supplier terpilih?')
                    ->modalDescription('Semua supplier yang dipilih beserta seluruh data stok yang terhubung akan dihapus permanen.')
                    ->modalSubmitActionLabel('Ya, hapus permanen'),
            ]);
    }
}
