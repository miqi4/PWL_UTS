<?php

namespace App\Filament\Widgets;

use App\Models\Barang;
use App\Models\Kategori;
use App\Models\Penjualan;
use App\Models\Supplier;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected static ?int $sort = 0;

    protected function getStats(): array
    {
        return [
            Stat::make('Total Kategori', Kategori::count())
                ->description('Total Kategori Barang')
                ->descriptionIcon('heroicon-m-tag')
                ->color('info'),
            Stat::make('Total Barang', Barang::count())
                ->description('Total Barang Tersedia')
                ->descriptionIcon('heroicon-m-shopping-bag')
                ->color('success'),
            Stat::make('Total Supplier', Supplier::count())
                ->description('Total Supplier Terdaftar')
                ->descriptionIcon('heroicon-m-truck')
                ->color('warning'),
            Stat::make('Total Penjualan', Penjualan::count())
                ->description('Total Transaksi Penjualan')
                ->descriptionIcon('heroicon-m-shopping-cart')
                ->color('primary'),
        ];
    }
}
