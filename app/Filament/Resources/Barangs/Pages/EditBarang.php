<?php

namespace App\Filament\Resources\Barangs\Pages;

use App\Filament\Resources\Barangs\BarangResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBarang extends EditRecord
{
    protected static string $resource = BarangResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->icon('heroicon-o-trash')
                ->requiresConfirmation()
                ->modalHeading('Hapus barang?')
                ->modalDescription('Barang ini beserta seluruh data stok dan detail penjualannya akan dihapus permanen.')
                ->modalSubmitActionLabel('Ya, hapus'),
        ];
    }
}
