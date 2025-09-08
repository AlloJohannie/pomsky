@extends('layouts.app')
@section('content')
<div class="max-w-6xl mx-auto p-6">
  <div class="flex items-center justify-between mb-4">
    <h1 class="text-3xl font-bold">Portée {{ $litter->code }}</h1>
    <span class="text-sm px-2 py-1 rounded-full bg-gray-100">{{ ucfirst($litter->status) }}</span>
  </div>
  <p class="text-gray-600">Parents: {{ $litter->sire->name }} × {{ $litter->dam->name }}</p>
  @if($litter->born_at)
    <p class="text-gray-600">Nés le {{ \Illuminate\Support\Carbon::parse($litter->born_at)->format('d/m/Y') }}</p>
  @endif
  <div class="grid md:grid-cols-3 gap-4 mt-6">
    @foreach($litter->photos as $photo)
      <figure class="bg-white rounded-xl shadow p-2">
        <img src="{{ asset('storage/'.$photo->path) }}" class="rounded-lg w-full h-56 object-cover">
        @if($photo->caption)<figcaption class="text-sm text-gray-600 mt-2">{{ $photo->caption }}</figcaption>@endif
      </figure>
    @endforeach
  </div>
  @if($litter->description)
    <div class="prose max-w-none mt-6">{!! nl2br(e($litter->description)) !!}</div>
  @endif
</div>
@endsection
