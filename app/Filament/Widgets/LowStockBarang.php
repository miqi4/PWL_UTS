<?php

namespace App\Filament\Widgets;

use App\Models\Stok;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class LowStockBarang extends BaseWidget
{
    protected static ?int $sort = 2;

    protected int | string | array $columnSpan = 1;

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Stok::query()->where('stok_jumlah', '<', 100)
            )
            ->heading('Barang Stok Menipis')
            ->columns([
                Tables\Columns\TextColumn::make('barang.barang_nama')
                    ->label('Nama Barang')
                    ->searchable(),
                Tables\Columns\TextColumn::make('barang.barang_kode')
                    ->label('Kode Barang'),
                Tables\Columns\TextColumn::make('stok_jumlah')
                    ->label('Jumlah Stok')
                    ->badge()
                    ->color('danger')
                    ->sortable(),
                Tables\Columns\TextColumn::make('supplier.supplier_nama')
                    ->label('Supplier'),
            ]);
    }
}
