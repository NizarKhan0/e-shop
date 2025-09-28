<?php

namespace App\Filament\Clusters\Shop\Resources\Products\Pages;

use Filament\Resources\Pages\CreateRecord;
use App\Filament\Clusters\Shop\Resources\Products\ProductResource;


class CreateProduct extends CreateRecord
{
    protected static string $resource = ProductResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}