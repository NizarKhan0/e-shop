<?php

namespace App\Filament\Resources\Products\Tables;

use App\Filament\Resources\Products\Pages\DetailProduct;
use Filament\Tables\Table;
use Filament\Actions\Action;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use App\Filament\Resources\Products\ProductResource;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;

class ProductsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('price')
                    // ->summarize(Sum::make()->money('RM'))
                    ->prefix('RM')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: false),
                TextColumn::make('stock')
                    ->numeric()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: false),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                SpatieMediaLibraryImageColumn::make('images')
                    ->collection('default')
                    ->label('Images')
                    ->limit(3)
                    ->circular(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                // ViewAction::make()->label(''),
                EditAction::make()->label('Edit'),
                DeleteAction::make()->label('Delete'),
              // Custom action ikut record
                // Action::make('detail')
                //     ->label('Detail')
                //     ->icon('heroicon-o-eye')
                //     ->url(fn ($record) => DetailProduct::getUrl(['record' => $record->id]))
                //     ->openUrlInNewTab(),
                    // ->url(MyCustomPage::getUrl()), // terus guna Filament Page
                    // ->url(route('filament.admin.pages.my-custom-page')), // kalau nak route biasa
                    // ->url(ProductResource::getUrl('detail', ['record' => $this->record])),
                    // ->url(ProductResource::getUrl()),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
