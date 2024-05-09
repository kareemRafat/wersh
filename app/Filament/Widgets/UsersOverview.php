<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class UsersOverview extends BaseWidget
{
    protected static ?int $sort = -2;

    protected int | string | array $columnSpan = [
        'md' => 2,
        'xl' => 2,
    ];

    protected function getStats(): array
    {
        return [
            Stat::make('Users', User::count())
            ->description('Registered users')
            ->descriptionIcon('heroicon-m-users')
            ->chart([1,4,6,8,10,20])
            ->color('success'),
        ];
    }
}
