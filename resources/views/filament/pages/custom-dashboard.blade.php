<x-filament::page>
    <div class="space-y-6">

        <div>
            <h1 class="text-2xl font-bold">Tableau de bord</h1>
            @if (session('status'))
                <div class="mt-3 rounded border border-green-300 bg-green-50 px-4 py-2 text-green-800">
                    {{ session('status') }}
                </div>
            @endif
        </div>

        {{-- Statistiques rapides --}}
        <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
            <div class="rounded-lg bg-white p-6 shadow">
                <h2 class="text-lg font-semibold">Chiens</h2>
                <p class="mt-2 text-3xl font-bold">
                    {{ \App\Models\Dog::count() }}
                </p>
            </div>

            <div class="rounded-lg bg-white p-6 shadow">
                <h2 class="text-lg font-semibold">Portées</h2>
                <p class="mt-2 text-3xl font-bold">
                    {{ \App\Models\Litter::count() }}
                </p>
            </div>

            <div class="rounded-lg bg-white p-6 shadow">
                <h2 class="text-lg font-semibold">Utilisateurs</h2>
                <p class="mt-2 text-3xl font-bold">
                    {{ \App\Models\User::count() }}
                </p>
            </div>
        </div>

        {{-- Accès rapides vers les Resources Filament --}}
        <div class="rounded-lg bg-white p-6 shadow">
            <h2 class="mb-4 text-lg font-semibold">Accès rapide</h2>
            <ul class="list-inside list-disc space-y-2">
                <li>
                    <a
                        href="{{ \App\Filament\Resources\DogResource::getUrl() }}"
                        class="text-primary-600 hover:underline"
                    >Gérer les chiens</a>
                </li>
                <li>
                    <a
                        href="{{ \App\Filament\Resources\LitterResource::getUrl() }}"
                        class="text-primary-600 hover:underline"
                    >Gérer les portées</a>
                </li>
            </ul>
        </div>

    </div>
</x-filament::page>
