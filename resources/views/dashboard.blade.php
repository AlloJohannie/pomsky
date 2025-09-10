@extends('layouts.app')
@section('title', 'Tableau de bord')
@section('content')
@php
    $dogsCount    = \App\Models\Dog::count();
    $littersCount = \App\Models\Litter::count();
    $puppiesCount = class_exists(\App\Models\Puppy::class) ? \App\Models\Puppy::count() : 0;
@endphp
<div class="container mx-auto px-4 py-6">
    <div class="flex items-center justify-between">
        <h1 class="text-2xl font-bold">Tableau de bord</h1>
        <div class="hidden md:flex gap-2">
            <a href="{{ \App\Filament\Resources\DogResource::getUrl('create') }}" class="px-4 py-2 rounded-lg bg-indigo-600 text-white">+ Nouveau chien</a>
            <a href="{{ \App\Filament\Resources\LitterResource::getUrl('create') }}" class="px-4 py-2 rounded-lg bg-neutral-800 text-white">+ Nouvelle portée</a>
            @if (class_exists(\App\Filament\Resources\PuppyResource::class))
                <a href="{{ \App\Filament\Resources\PuppyResource::getUrl('create') }}" class="px-4 py-2 rounded-lg bg-emerald-600 text-white">+ Nouveau chiot</a>
            @endif
        </div>
    </div>

    @if (session('status'))
        <div class="mt-3 bg-emerald-50 border border-emerald-300 text-emerald-800 px-4 py-2 rounded">
            {{ session('status') }}
        </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 my-6">
        <div class="p-6 bg-white rounded-lg shadow">
            <h2 class="text-sm text-neutral-600">Chiens</h2>
            <p class="text-3xl font-bold mt-1">{{ $dogsCount }}</p>
            <a href="{{ \App\Filament\Resources\DogResource::getUrl() }}" class="underline text-primary-600 text-sm mt-2 inline-block">Voir / gérer</a>
        </div>
        <div class="p-6 bg-white rounded-lg shadow">
            <h2 class="text-sm text-neutral-600">Portées</h2>
            <p class="text-3xl font-bold mt-1">{{ $littersCount }}</p>
            <a href="{{ \App\Filament\Resources\LitterResource::getUrl() }}" class="underline text-primary-600 text-sm mt-2 inline-block">Voir / gérer</a>
        </div>
        <div class="p-6 bg-white rounded-lg shadow">
            <h2 class="text-sm text-neutral-600">Chiots</h2>
            <p class="text-3xl font-bold mt-1">{{ $puppiesCount }}</p>
            @if (class_exists(\App\Filament\Resources\PuppyResource::class))
                <a href="{{ \App\Filament\Resources\PuppyResource::getUrl() }}" class="underline text-primary-600 text-sm mt-2 inline-block">Voir / gérer</a>
            @endif
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <a href="{{ \App\Filament\Resources\DogResource::getUrl('create') }}" class="block p-5 rounded-xl bg-indigo-50 hover:bg-indigo-100 transition">+ Ajouter un chien</a>
        <a href="{{ \App\Filament\Resources\LitterResource::getUrl('create') }}" class="block p-5 rounded-xl bg-neutral-100 hover:bg-neutral-200 transition">+ Créer une portée</a>
    </div>
</div>
@endsection
