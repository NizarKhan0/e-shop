<?php

namespace App\Filament\Clusters\Shop\Resources\Categories\Pages;

use Filament\Resources\Pages\CreateRecord;
use App\Filament\Clusters\Shop\Resources\Categories\CategoryResource;



class CreateCategory extends CreateRecord
{
    protected static string $resource = CategoryResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
