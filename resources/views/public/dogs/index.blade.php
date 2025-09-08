@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto p-6">
  <h1 class="text-3xl font-bold mb-6">{{ $title }}</h1>
  <div class="grid md:grid-cols-3 gap-6">
    @foreach($dogs as $dog)
      <div class="bg-white rounded-2xl shadow p-4">
        @if($dog->photo)
          <img src="{{ asset('storage/'.$dog->photo) }}" alt="{{ $dog->name }}" class="rounded-xl mb-3 w-full h-56 object-cover">
        @endif
        <h2 class="text-xl font-semibold">{{ $dog->name }}</h2>
        <p class="text-sm text-gray-600">{{ $dog->color }} @if($dog->weight_kg) • {{ $dog->weight_kg }} kg @endif</p>
        <p class="mt-2 text-gray-700">{{ Str::limit($dog->description, 140) }}</p>
      </div>
    @endforeach
  </div>
</div>
@endsection
