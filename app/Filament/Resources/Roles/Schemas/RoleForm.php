<?php

namespace App\Filament\Resources\Roles\Schemas;

use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;

class RoleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->unique(ignoreRecord: true),
                TextInput::make('guard_name')
                    ->default('web'),
                // Select::make('permissions')
                //     ->multiple()
                //     ->relationship('permissions', 'name')
                //     ->preload()
                //     ->searchable()
                //     ->label('Permissions'),
            ]);
    }
}
