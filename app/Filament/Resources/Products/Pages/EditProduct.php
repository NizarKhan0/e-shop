<?php

namespace App\Filament\Resources\Products\Pages;

use App\Filament\Resources\Products\ProductResource;
use Filament\Actions\Action;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditProduct extends EditRecord
{
    protected static string $resource = ProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // ViewAction::make(),
            DeleteAction::make(),
            // Action::make('detail')
            //     ->label('Detail')
            //     ->url(ProductResource::getUrl('detail', ['record' => $this->record])),
            // ->openUrlInNewTab(),
            // ->url(DetailProduct::getUrl()), kalau nak direct ke detail page tanpa record
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    public function getBreadcrumbs(): array
    {
        return [
            ProductResource::getUrl() => 'Products', // ✅ clickable ke index
            // null => 'Edit - ' . $this->record->name, // ❌ tak clickable
            null => 'Edit', // ❌ tak clickable
        ];
    }

    // 👉 Untuk tab browser
    public function getHeading(): string
    {
        return "Edit - {$this->record->name}";
    }
}