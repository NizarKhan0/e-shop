<?php

namespace App\Filament\Clusters\Shop;

use BackedEnum;
use Filament\Clusters\Cluster;
use Filament\Support\Icons\Heroicon;
use UnitEnum;

class ShopCluster extends Cluster
{
    protected static string|BackedEnum|null $navigationIcon = Heroicon::ShoppingBag;

    protected static string | UnitEnum | null $navigationGroup = 'Manages';

    protected static ?string $navigationLabel = 'Shop';

    protected static ?int $navigationSort = 1;

    // Disable breadcrumbs untuk seluruh cluster
    // protected static ?string $clusterBreadcrumb = null;
}
