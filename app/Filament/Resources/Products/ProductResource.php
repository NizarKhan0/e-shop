<?php

namespace App\Filament\Resources\Products;

use UnitEnum;
use BackedEnum;
use App\Models\Product;
use Filament\Tables\Table;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Support\Icons\Heroicon;
use App\Filament\Clusters\Shop\ShopCluster;
use Filament\Pages\Enums\SubNavigationPosition;
use App\Filament\Resources\Products\Pages\EditProduct;
use App\Filament\Resources\Products\Pages\ViewProduct;
use App\Filament\Resources\Products\Pages\ListProducts;
use App\Filament\Resources\Products\Pages\CreateProduct;
use App\Filament\Resources\Products\Pages\DetailProduct;
use App\Filament\Resources\Products\Schemas\ProductForm;
use App\Filament\Resources\Products\Tables\ProductsTable;
use App\Filament\Resources\Products\Schemas\ProductInfolist;

class ProductResource extends Resource
{
    //     public static function canViewAny(): bool
    // {
    //     return auth()->user()->hasAnyRole(['superadmin', 'cosplayer']);
    // }
    protected static ?string $cluster = ShopCluster::class;
    protected static ?SubNavigationPosition $subNavigationPosition = SubNavigationPosition::Top;
    protected static ?string $model = Product::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Product';
    protected static ?int $navigationSort = 1;

    // protected static string | UnitEnum | null $navigationGroup = 'Shop';
    protected static ?string $navigationBadgeTooltip = 'Total Products';
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    public static function form(Schema $schema): Schema
    {
        return ProductForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ProductInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ProductsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListProducts::route('/'),
            'create' => CreateProduct::route('/create'),
            'view' => ViewProduct::route('/{record}'),
            'edit' => EditProduct::route('/{record}/edit'),
            'detail' => DetailProduct::route('/{record}/detail'),
        ];
    }
}
