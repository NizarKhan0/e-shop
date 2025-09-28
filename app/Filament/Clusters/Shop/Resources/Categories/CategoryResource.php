<?php

namespace App\Filament\Clusters\Shop\Resources\Categories;


use UnitEnum;
use BackedEnum;
use App\Models\Category;
use Filament\Tables\Table;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Support\Icons\Heroicon;
use App\Filament\Clusters\Shop\ShopCluster;
use Filament\Pages\Enums\SubNavigationPosition;
use App\Filament\Resources\Categories\Schemas\CategoryForm;
use App\Filament\Resources\Categories\Tables\CategoriesTable;
use App\Filament\Clusters\Shop\Resources\Categories\Pages\EditCategory;
use App\Filament\Clusters\Shop\Resources\Categories\Pages\CreateCategory;
use App\Filament\Clusters\Shop\Resources\Categories\Pages\ListCategories;

class CategoryResource extends Resource
{
    protected static ?string $cluster = ShopCluster::class;

    protected static ?SubNavigationPosition $subNavigationPosition = SubNavigationPosition::Top;

    protected static ?string $model = Category::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedTag;

    protected static ?string $recordTitleAttribute = 'Category';

    protected static ?int $navigationSort = 2;
    // protected static ?string $navigationParentItem = 'Products';

    // protected static string | UnitEnum | null $navigationGroup = 'Shop';
    protected static ?string $navigationBadgeTooltip = 'Total Categories';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Schema $schema): Schema
    {
        return CategoryForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CategoriesTable::configure($table);
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
            'index' => ListCategories::route('/'),
            'create' => CreateCategory::route('/create'),
            'edit' => EditCategory::route('/{record}/edit'),
        ];
    }
}