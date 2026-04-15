<?php

namespace App\Filament\Pages\Auth;

use Filament\Auth\Pages\Login as BaseLogin;
use Filament\Forms\Components\TextInput;
use Illuminate\Validation\ValidationException;

class Login extends BaseLogin
{
    protected function getEmailFormComponent(): \Filament\Schemas\Components\Component
    {
        return TextInput::make('username')
            ->label('Username')
            ->required()
            ->string()
            ->minLength(3)
            ->maxLength(20)
            ->autocomplete('username')
            ->autofocus()
            ->extraInputAttributes(['tabindex' => 1])
            ->validationMessages([
                'required' => 'MOHON DIISI: Username tidak boleh kosong.',
                'string' => 'FORMAT SALAH: Username harus berupa teks biasa.',
                'min' => 'TERLALU PENDEK: Username minimal terdiri dari 3 karakter.',
                'max' => 'TERLALU PANJANG: Username maksimal 20 karakter.',
            ]);
    }

    protected function getPasswordFormComponent(): \Filament\Schemas\Components\Component
    {
        return TextInput::make('password')
            ->label('Password')
            ->password()
            ->revealable(filament()->arePasswordsRevealable())
            ->autocomplete('current-password')
            ->required()
            ->minLength(5)
            ->maxLength(255)
            ->extraInputAttributes(['tabindex' => 2])
            ->validationMessages([
                'required' => 'MOHON DIISI: Password tidak boleh kosong.',
                'min' => 'TERLALU PENDEK: Password minimal terdiri dari 5 karakter.',
                'max' => 'TERLALU PANJANG: Password maksimal melebihi batas sistem.',
            ]);
    }

    protected function getCredentialsFromFormData(array $data): array
    {
        return [
            'username' => $data['username'],
            'password' => $data['password'],
        ];
    }

    /**
     * Override method ini untuk memastikan error autentikasi yang gagal 
     * dilemparkan ke input 'username' dengan benar (menggantikan default 'email' milik Filament).
     */
    protected function throwFailureValidationException(): never
    {
        throw ValidationException::withMessages([
            'data.username' => 'Akses Ditolak: Username atau password yang Anda masukkan salah.',
        ]);
    }
}
