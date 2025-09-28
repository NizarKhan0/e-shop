<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Schemas\Schema;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DateTimePicker;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                // DateTimePicker::make('email_verified_at')
                //     ->default(now()),
                TextInput::make('password')
                    ->password()           // 1. Type password
                    ->revealable()         // 2. Boleh toggle show/hide
                    ->dehydrateStateUsing(fn (string $state): string => Hash::make($state))  // 3. Hash password
                    ->dehydrated(fn (?string $state): bool => filled($state))  // 4. Process jika ada value
                    ->required(fn (string $operation): bool => $operation === 'create'),  // 5. Required ketika create
                Select::make('roles')
                    ->multiple()
                    ->relationship('roles', 'name')
                    ->preload(),

                //for 1 user 1 role , custom dari spatie
                // Select::make('role_id')
                //     ->label('Role')
                //     ->options(Role::all()->pluck('name', 'id'))
                //     ->searchable()
                //     ->preload()
                //     ->afterStateUpdated(function ($set, $state, $record) {
                //         if ($state) {
                //             $record->syncRoles([$state]);
                //         }
                //     })
                //     ->dehydrated(false), // Important! Jangan save ke database column
            ]);
    }
}
