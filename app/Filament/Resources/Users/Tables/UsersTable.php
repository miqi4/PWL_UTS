<?php

namespace App\Filament\Resources\Users\Tables;

use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables;
use Filament\Tables\Table;

class UsersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user_id')
                    ->label('ID')
                    ->sortable(),

                Tables\Columns\TextColumn::make('username')
                    ->label('Username')
                    ->searchable(),

                Tables\Columns\TextColumn::make('nama')
                    ->label('Nama')
                    ->searchable(),

                Tables\Columns\TextColumn::make('level.level_nama')
                    ->label('Level')
                    ->sortable()
                    ->searchable(),

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
                    ->modalHeading('Hapus user?')
                    ->modalDescription('User ini beserta seluruh data stok, penjualan, dan detail penjualannya akan dihapus permanen.')
                    ->modalSubmitActionLabel('Ya, hapus permanen'),
            ])
            ->bulkActions([
                DeleteBulkAction::make()
                    ->icon('heroicon-o-trash')
                    ->requiresConfirmation()
                    ->modalHeading('Hapus user terpilih?')
                    ->modalDescription('Semua user yang dipilih beserta seluruh data stok, penjualan, dan detail penjualannya akan dihapus permanen.')
                    ->modalSubmitActionLabel('Ya, hapus permanen'),
            ]);
    }
}
