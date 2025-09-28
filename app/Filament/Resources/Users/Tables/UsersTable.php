<?php

namespace App\Filament\Resources\Users\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class UsersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Email address')
                    ->searchable(),
                TextColumn::make('roles.name')
                    ->badge()
                    ->getStateUsing(fn ($record) => $record->roles->first()?->name)
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'super-admin' => 'Super Admin',
                        'cosplayer' => 'Cosplayer',
                        'customer' => 'Customer',
                    })
                    ->color(fn (string $state): string => match ($state) {
                        'super-admin' => 'danger',
                        'cosplayer' => 'warning',
                        'customer' => 'success',
                    }),
                // TextColumn::make('email_verified_at')
                //     ->dateTime()
                //     ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //filter by role
                SelectFilter::make('role')
                    ->preload()
                    ->relationship('roles', 'name')
                    ->getOptionLabelFromRecordUsing(fn ($record) => match ($record->name) {
                        'super-admin' => 'Super Admin',
                        'cosplayer' => 'Cosplayer',
                        'customer' => 'Customer',
                        default => ucfirst($record->name),
                    })
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}