@props(['dog'])

@php
  $img = $dog->photo && file_exists(public_path('storage/'.$dog->photo))
      ? asset('storage/'.$dog->photo)
      : asset('images/logo/logo_large.jpg');   // 👈 fallback
  $dob = $dog->dob ? \Illuminate\Support\Carbon::parse($dog->dob) : null;
  $age = $dob ? $dob->age : null;
@endphp

<div class="bg-body-bg rounded-2xl p-5 hover:bg-white border border-transparent hover:border-neutral-200 transition">
  <div class="w-full rounded-xl overflow-hidden mb-4 bg-neutral-100">
    <img src="{{ $img }}" alt="{{ $dog->name }}" class="w-full aspect-[4/3] object-cover">
  </div>

  <div class="flex items-center justify-between">
    <h3 class="text-2xl font-semibold">{{ $dog->name }}</h3>
    <span class="px-2 py-1 rounded-full text-xs {{ $dog->sex==='female' ? 'bg-pink-100 text-pink-800' : 'bg-blue-100 text-blue-800' }}">
      {{ $dog->sex === 'female' ? 'Femelle' : 'Mâle' }}
    </span>
  </div>

  <ul class="mt-3 text-slate-700 text-sm space-y-1">
    @if($dog->color) <li><strong>Couleur :</strong> {{ $dog->color }}</li> @endif
    @if($dob)
      <li>
        <strong>Naissance :</strong> {{ $dob->translatedFormat('d F Y') }}
        @if(!is_null($age)) ({{ $age }} an{{ $age > 1 ? 's' : '' }}) @endif
      </li>
    @endif
    @if(!is_null($dog->weight_lb))
      <li><strong>Poids :</strong>
        {{ rtrim(rtrim(number_format((float)$dog->weight_lb, 1, '.', ''), '0'), '.') }} lb
      </li>
    @endif
    <li>
      <strong>Statut :</strong>
      <span class="{{ $dog->is_active ? 'text-green-700' : 'text-slate-500' }}">
        {{ $dog->is_active ? 'Actif' : 'Retiré' }}
      </span>
    </li>
  </ul>

  @if($dog->description)
    <p class="mt-3 text-slate-700 line-clamp-3">{{ $dog->description }}</p>
  @endif
</div>
