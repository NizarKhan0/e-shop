<?php

namespace App\Filament\Clusters\Shop\Resources\Categories\Pages;

use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Clusters\Shop\Resources\Categories\CategoryResource;



class EditCategory extends EditRecord
{
    protected static string $resource = CategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    public function getBreadcrumbs(): array
    {
        return [
            CategoryResource::getUrl() => 'Categories', // ✅ clickable ke index
            // null => 'Edit - ' . $this->record->name, // ❌ tak clickable
            null => 'Edit', // ❌ tak clickable
        ];
    }

    public function getHeading(): string
    {
        return "Edit - {$this->record->name}";
    }
}
