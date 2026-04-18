<?php

namespace App\Filament\Resources\Suppliers\Pages;

use App\Filament\Resources\Suppliers\SupplierResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSupplier extends EditRecord
{
    protected static string $resource = SupplierResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->icon('heroicon-o-trash')
                ->requiresConfirmation()
                ->modalHeading('Hapus supplier?')
                ->modalDescription('Supplier ini beserta seluruh data stok yang terhubung akan dihapus permanen.')
                ->modalSubmitActionLabel('Ya, hapus permanen'),
        ];
    }
}
