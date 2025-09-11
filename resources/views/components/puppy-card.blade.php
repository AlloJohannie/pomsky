@props([
  'puppy',
  'pStatusClass' => null,
  'pStatusLabel' => null,
])

@php
  // Valeurs par défaut si rien n'est passé depuis la vue parente
  $pStatusLabel = $pStatusLabel ?? [
    'available'     => 'Disponible',
    'reserved'      => 'Réservé',
    'adopted'       => 'Adopté',
    'hold'          => 'En attente',
    'not_available' => 'Non disponible',
  ];
  $pStatusClass = $pStatusClass ?? [
    'available'     => 'bg-green-100 text-green-800',
    'reserved'      => 'bg-blue-100 text-blue-800',
    'adopted'       => 'bg-neutral-200 text-neutral-800',
    'hold'          => 'bg-yellow-100 text-yellow-800',
    'not_available' => 'bg-neutral-100 text-neutral-700',
  ];
@endphp

<div class="group overflow-hidden rounded-xl border border-neutral-200 bg-white">
  <div class="relative">
    <img
      src="{{ $puppy->photo ? asset('storage/'.$puppy->photo) : '/images/about/12.png' }}"
      class="w-full aspect-[4/3] object-cover"
      alt="{{ $puppy->name ?: 'Chiot' }}"
    >
    <div class="absolute top-3 left-3 flex gap-2">
      @if($puppy->sex)
        <span class="text-xs px-2 py-1 rounded-full bg-black/70 text-white">
          {{ $puppy->sex === 'male' ? 'Mâle' : 'Femelle' }}
        </span>
      @endif
      <span class="text-xs px-2 py-1 rounded-full {{ $pStatusClass[$puppy->status] ?? 'bg-neutral-100 text-neutral-700' }}">
        {{ $pStatusLabel[$puppy->status] ?? $puppy->status }}
      </span>
    </div>
  </div>
  <div class="p-3">
    <div class="font-medium truncate">{{ $puppy->name ?: 'Chiot' }}</div>
  </div>
</div>
