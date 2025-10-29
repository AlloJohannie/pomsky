<?php
// app/Filament/Widgets/StatsBreeding.php
namespace App\Filament\Widgets;

use App\Models\Litter;
use App\Models\Puppy;
use Filament\Widgets\StatsOverviewWidget as Base;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsBreeding extends Base
{
    protected function getStats(): array
    {
        $littersVisible = Litter::where('is_active', true)->count();
        $littersClosed  = Litter::where('is_active', true)->where('status','closed')->count();
        $puppiesAvail   = Puppy::where('status','available')->count();
        $puppiesAdopted = Puppy::where('status','adopted')->count();

        return [
            Stat::make('Portées visibles', $littersVisible),
            Stat::make('Portées fermées (visibles)', $littersClosed),
            Stat::make('Chiots disponibles', $puppiesAvail),
            Stat::make('Chiots adoptés', $puppiesAdopted),
        ];
    }
}
