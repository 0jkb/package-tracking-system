<?php

namespace App\Filament\Widgets;

use App\Models\Customer;
use App\Models\Package;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;


class StatsAdminOverview extends BaseWidget
{
    protected static ?int $sort = 1;
    protected function getStats(): array
    {
        return [
            Stat::make('Users', User::query()->count())
                ->description('Total Users'),

            Stat::make('Customers',Customer::query()->count())
                ->description('Total Customers')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
//                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('success'),

            Stat::make('Orders', Package::query()->count())
                ->description('Total Orders')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
//                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('success'),
        ];
    }
}
