<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;
class Dashboard extends BaseDashboard
{
//    protected static ?string $navigationIcon = 'phosphor-gauge-duotone';

    protected function getHeading(): string
    {
        return "Pinak's Dashboard";
    }
}
