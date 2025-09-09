@extends('layouts.app') {{-- si tu as déjà un layout global --}}
{{-- ou utilise @extends('filament::page') si tu veux t'appuyer sur Filament directement --}}

@section('title', 'Tableau de bord')

@section('content')
<div class="container mx-auto px-4 py-6">

    <h1 class="text-2xl font-bold mb-6">Tableau de bord</h1>

    {{-- Messages de succès / erreur --}}
    @if (session('status'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
            {{ session('status') }}
        </div>
    @endif

    {{-- Statistiques rapides --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="p-6 bg-white rounded-lg shadow">
            <h2 class="text-lg font-semibold">Chiens</h2>
            <p class="text-3xl font-bold mt-2">{{ \App\Models\Dog::count() }}</p>
        </div>

        <div class="p-6 bg-white rounded-lg shadow">
            <h2 class="text-lg font-semibold">Portées</h2>
            <p class="text-3xl font-bold mt-2">{{ \App\Models\Litter::count() }}</p>
        </div>

        <div class="p-6 bg-white rounded-lg shadow">
            <h2 class="text-lg font-semibold">Utilisateurs</h2>
            <p class="text-3xl font-bold mt-2">{{ \App\Models\User::count() }}</p>
        </div>
    </div>

    {{-- Lien rapide vers Filament --}}
    <div class="bg-white p-6 rounded-lg shadow">
        <h2 class="text-lg font-semibold mb-4">Accès rapide</h2>
        <ul class="list-disc list-inside space-y-2">
            <li><a href="{{ url('/admin') }}" class="text-blue-600 hover:underline">Panneau Filament</a></li>
            <li><a href="{{ route('dogs.index') }}" class="text-blue-600 hover:underline">Gérer les chiens</a></li>
            <li><a href="{{ route('litters.index') }}" class="text-blue-600 hover:underline">Gérer les portées</a></li>
        </ul>
    </div>

</div>
@endsection
