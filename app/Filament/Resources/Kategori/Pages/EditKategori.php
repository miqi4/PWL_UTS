<?php

namespace App\Filament\Resources\Kategori\Pages;

use App\Filament\Resources\Kategori\KategoriResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditKategori extends EditRecord
{
    protected static string $resource = KategoriResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make()
                ->icon('heroicon-o-trash')
                ->requiresConfirmation()
                ->modalHeading('Hapus kategori?')
                ->modalDescription('Tindakan ini akan menghapus kategori beserta semua barang, stok, dan detail penjualan yang terhubung. Data yang sudah dihapus tidak dapat dikembalikan.')
                ->modalSubmitActionLabel('Ya, hapus permanen'),
        ];
    }
}
