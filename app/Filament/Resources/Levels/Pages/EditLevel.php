<?php

namespace App\Filament\Resources\Levels\Pages;

use App\Filament\Resources\Levels\LevelResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLevel extends EditRecord
{
    protected static string $resource = LevelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->icon('heroicon-o-trash')
                ->requiresConfirmation()
                ->modalHeading('Hapus level?')
                ->modalDescription('Level ini akan menghapus seluruh user, stok, penjualan, dan detail penjualan yang terhubung secara permanen.')
                ->modalSubmitActionLabel('Ya, hapus permanen'),
        ];
    }
}
