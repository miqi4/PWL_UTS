<?php

namespace App\Filament\Resources\PenjualanDetails\Schemas;

use App\Models\Barang;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;

class PenjualanDetailForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('penjualan_id')
                    ->label('Penjualan')
                    ->relationship('penjualan', 'penjualan_kode')
                    ->searchable()
                    ->preload()
                    ->required(),

                Select::make('barang_id')
                    ->label('Barang')
                    ->relationship('barang', 'barang_nama')
                    ->live()
                    ->afterStateUpdated(function (?string $state, Set $set): void {
                        $set('harga', Barang::find($state)?->harga_jual);
                    })
                    ->searchable()
                    ->preload()
                    ->required(),

                TextInput::make('harga')
                    ->label('Harga')
                    ->numeric()
                    ->prefix('Rp')
                    ->readOnly()
                    ->required()
                    ->minValue(0),

                TextInput::make('jumlah')
                    ->label('Jumlah')
                    ->numeric()
                    ->required()
                    ->minValue(1),
            ]);
    }
}
