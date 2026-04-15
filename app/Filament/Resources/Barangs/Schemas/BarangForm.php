<?php

namespace App\Filament\Resources\Barangs\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class BarangForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('kategori_id')
                    ->label('Kategori')
                    ->relationship('kategori', 'kategori_nama')
                    ->searchable()
                    ->required(),

                TextInput::make('barang_kode')
                    ->label('Kode Barang')
                    ->required()
                    ->maxLength(10)
                    ->unique(ignoreRecord: true),

                TextInput::make('barang_nama')
                    ->label('Nama Barang')
                    ->required()
                    ->maxLength(100),

                TextInput::make('harga_beli')
                    ->label('Harga Beli')
                    ->numeric()
                    ->required()
                    ->prefix('Rp'),

                TextInput::make('harga_jual')
                    ->label('Harga Jual')
                    ->numeric()
                    ->required()
                    ->prefix('Rp'),
            ]);
    }
}
