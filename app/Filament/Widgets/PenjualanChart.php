<?php

namespace App\Filament\Widgets;

use App\Models\Penjualan;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class PenjualanChart extends ChartWidget
{
    protected int | string | array $columnSpan = 1;

    protected ?string $maxHeight = '300px';

    protected ?string $heading = 'Grafik Penjualan 7 Hari Terakhir';

    protected static ?int $sort = 1;

    protected function getData(): array
    {
        $data = Penjualan::select(
                DB::raw('DATE(penjualan_tanggal) as date'),
                DB::raw('count(*) as count')
            )
            ->where('penjualan_tanggal', '>=', now()->subDays(7))
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        return [
            'datasets' => [
                [
                    'label' => 'Total Transaksi',
                    'data' => $data->pluck('count')->toArray(),
                    'fill' => 'start',
                ],
            ],
            'labels' => $data->map(fn($item) => Carbon::parse($item->date)->format('d M'))->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}

