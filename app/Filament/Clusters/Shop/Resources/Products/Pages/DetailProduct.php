<?php

namespace App\Filament\Clusters\Shop\Resources\Products\Pages;


use App\Models\Category;
use Filament\Resources\Pages\Page;
use Filament\Resources\Pages\Concerns\InteractsWithRecord;
use App\Filament\Clusters\Shop\Resources\Products\ProductResource;

class DetailProduct extends Page
{
    use InteractsWithRecord;
    // public $categories;

    protected static string $resource = ProductResource::class;

    protected string $view = 'filament.resources.products.pages.detail-product';

    // protected static ?string $breadcrumb = 'Ni kalau nak fixkan nama breadcrumb boleh define kat sini je';

    // protected static ?string $title = 'Detail Product';

    public function mount(int|string $record): void
    {
        $this->record = $this->resolveRecord($record);

        // try ambil data dari category
        // $this->categories = Category::all();
    }

    public function getHeading(): string
    {
        return  'Detail Product - ' . $this->record->name;
    }

    // public function getTitle(): string title ni dia ikutkn sekali meta title/naama tab browswe
    // {
    //     return "Detail Product - " . $this->record->name;
    //     // return $this->getHeading() . ' | CosShop';
    // }

    // public function getBreadcrumb(): string
    // {
    //     return "Detail Product - " . $this->record->name;
    // }
    public function getBreadcrumbs(): array
    {
        return [
            ProductResource::getUrl() => 'Products', // ✅ clickable ke index
            // null => 'Products', // ❌ tak clickable
            // 'product' => 'product', // masih clickable (kalau kau nak biar)
            null => 'Detail Product - ' . $this->record->name, // ❌ tak clickable
        ];
    }
}