<?php

namespace App\Filament\Resources\Categories\Pages;

use App\Filament\Resources\Categories\CategoryResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

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
