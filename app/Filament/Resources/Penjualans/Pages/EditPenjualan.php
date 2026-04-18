<?php

namespace App\Filament\Resources\Penjualans\Pages;

use App\Filament\Resources\Penjualans\PenjualanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPenjualan extends EditRecord
{
    protected static string $resource = PenjualanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->icon('heroicon-o-trash')
                ->requiresConfirmation()
                ->modalHeading('Hapus penjualan?')
                ->modalDescription('Data penjualan ini beserta seluruh detail penjualannya akan dihapus permanen.')
                ->modalSubmitActionLabel('Ya, hapus'),
        ];
    }
}
