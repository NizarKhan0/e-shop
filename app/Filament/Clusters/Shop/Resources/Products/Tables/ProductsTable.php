<?php

namespace App\Filament\Clusters\Shop\Resources\Products\Tables;

use Filament\Tables\Table;
use Filament\Actions\Action;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Support\Icons\Heroicon;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;

class ProductsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                SpatieMediaLibraryImageColumn::make('media')
                    ->collection('product-images')
                    ->label('Images')
                    ->limit(1)
                    ->circular(),

                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),

                IconColumn::make('is_visible')
                    ->label('Visibility')
                    ->boolean(),

                TextColumn::make('price')
                    ->searchable()
                    ->sortable()
                    ->money('MYR'),

                TextColumn::make('sku')
                    ->label('SKU')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                TextColumn::make('qty')
                    ->label('Quantity')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                TextColumn::make('security_stock')
                    ->searchable()
                    ->sortable()
                    ->toggleable()
                    ->toggledHiddenByDefault(),

                TextColumn::make('created_at')
                    ->label('Publishing date')
                    ->date()
                    ->sortable()
                    ->toggleable()
                    ->toggledHiddenByDefault(),
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
