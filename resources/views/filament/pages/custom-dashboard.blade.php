<x-filament::page>
        @livewire(\App\Filament\Widgets\StatsBreeding::class)
    @livewire(\App\Filament\Widgets\RecentLitters::class)
    @php
        $dogsCount        = \App\Models\Dog::count();
        $littersCount     = \App\Models\Litter::count();
        $openLittersCount = \App\Models\Litter::where('status','!=','closed')->count();

        $hasPuppyModel    = class_exists(\App\Models\Puppy::class);
        $puppiesCount     = $hasPuppyModel ? \App\Models\Puppy::count() : 0;
        $availPuppiesCnt  = $hasPuppyModel ? \App\Models\Puppy::where('status','available')->count() : 0;

        $activeLitters    = \App\Models\Litter::with(['sire','dam'])
                                ->where('status','!=','closed')
                                ->latest()->take(5)->get();

        $availablePuppies = $hasPuppyModel
            ? \App\Models\Puppy::with(['litter.sire','litter.dam'])
                ->where('status','available')
                ->latest()->take(8)->get()
            : collect();

        $recentDogs       = \App\Models\Dog::latest()->take(6)->get();

        $statusLabel = [
            'planned'   => 'Planifiée',
            'pregnant'  => 'Gestante',
            'born'      => 'Née',
            'available' => 'Disponible',
            'reserved'  => 'Réservée',
            'closed'    => 'Fermée',
        ];

        $statusColor = [
            'planned'   => 'bg-yellow-100 text-yellow-800',
            'pregnant'  => 'bg-orange-100 text-orange-800',
            'born'      => 'bg-blue-100 text-blue-800',
            'available' => 'bg-emerald-100 text-emerald-800',
            'reserved'  => 'bg-purple-100 text-purple-800',
            'closed'    => 'bg-gray-200 text-gray-700',
        ];
    @endphp

    <div class="max-w-7xl mx-auto space-y-6">
        {{-- Titre --}}
        <div>
            <h1 class="text-2xl font-bold">Tableau de bord</h1>
            <p class="text-sm text-gray-500 mt-1">Résumé de ce qui est affiché sur le site public.</p>
        </div>

        {{-- Cartes KPI --}}
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-4">
            @foreach ([
                ['label' => 'Chiens', 'value' => $dogsCount],
                ['label' => 'Portées (total)', 'value' => $littersCount],
                ['label' => 'Portées actives (affichées)', 'value' => $openLittersCount, 'hint' => 'Tout sauf « Fermée »'],
                ['label' => 'Chiots', 'value' => $puppiesCount],
                ['label' => 'Chiots disponibles', 'value' => $availPuppiesCnt],
            ] as $kpi)
                <div class="bg-white rounded-xl shadow-sm ring-1 ring-gray-200 p-5">
                    <div class="text-sm text-gray-600">{{ $kpi['label'] }}</div>
                    <div class="text-3xl font-semibold mt-1">{{ $kpi['value'] }}</div>
                    @isset($kpi['hint'])
                        <div class="text-xs text-gray-400 mt-1">{{ $kpi['hint'] }}</div>
                    @endisset<br>
                </div>
            @endforeach
        </div>

    </div>
</x-filament::page>
