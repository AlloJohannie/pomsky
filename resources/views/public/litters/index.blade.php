@extends('layouts.app')
@section('content')
<div class="max-w-6xl mx-auto p-6">
  <h1 class="text-3xl font-bold mb-6">Portées</h1>

  <div class="grid md:grid-cols-2 gap-6">
    @foreach($litters as $l)
      <a href="{{ route('litters.show', $l->slug) }}" class="block bg-white rounded-2xl shadow hover:shadow-lg transition p-4">
        <div class="flex items-center justify-between">
          <h2 class="text-xl font-semibold">{{ $l->code }}</h2>
          <span class="text-sm px-2 py-1 rounded-full bg-gray-100">{{ ucfirst($l->status) }}</span>
        </div>
        <p class="text-gray-600 text-sm mt-1">
          Parents: {{ $l->sire->name }} × {{ $l->dam->name }}
          @if($l->born_at) • Nés le {{ \Illuminate\Support\Carbon::parse($l->born_at)->format('d/m/Y') }} @endif
        </p>
        @if($cover = optional($l->photos->first())->path)
          <img src="{{ asset('storage/'.$cover) }}" class="rounded-xl mt-3 w-full h-56 object-cover" alt="Portée {{ $l->code }}">
        @endif
      </a>
    @endforeach
  </div>
</div>
@endsection
