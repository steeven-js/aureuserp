<?php

namespace App\Filament\Pages;

use BackedEnum;
use Filament\Pages\Dashboard as BaseDashboard;
use Illuminate\Contracts\Support\Htmlable;

class Dashboard extends BaseDashboard
{
    protected static ?int $navigationSort = 1;

    public static function getNavigationLabel(): string
    {
        return __('admin.navigation.dashboard');
    }

    public static function getNavigationIcon(): string|BackedEnum|Htmlable|null
    {
        return 'heroicon-o-home';
    }

    public static function getNavigationGroup(): ?string
    {
        return __('admin.navigation.dashboard');
    }

    public function getWidgets(): array
    {
        return [
            // Vous pouvez ajouter des widgets ici plus tard
        ];
    }
}
