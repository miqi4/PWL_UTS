<?php

namespace App\Filament\Resources\Users\Pages;

use App\Filament\Resources\Users\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->icon('heroicon-o-trash')
                ->requiresConfirmation()
                ->modalHeading('Hapus user?')
                ->modalDescription('User ini beserta seluruh data stok, penjualan, dan detail penjualannya akan dihapus permanen.')
                ->modalSubmitActionLabel('Ya, hapus permanen'),
        ];
    }
}
