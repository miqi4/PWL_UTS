<?php

namespace App\Filament\Widgets;

use App\Models\Penjualan;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestPenjualan extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';

    protected static ?int $sort = 3;

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Penjualan::query()->latest('penjualan_tanggal')->limit(5)
            )
            ->heading('5 Transaksi Terakhir')
            ->columns([
                Tables\Columns\TextColumn::make('penjualan_kode')
                    ->label('Kode Penjualan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('pembeli')
                    ->label('Nama Pembeli')
                    ->searchable(),
                Tables\Columns\TextColumn::make('penjualan_tanggal')
                    ->label('Tanggal Penjualan')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('user.nama')
                    ->label('User'),
            ]);
    }
}
