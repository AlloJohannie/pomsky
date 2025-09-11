@props(['active' => null])

<div class="mb-7.5 flex gap-2.5">
  <a href="{{ route('dogs.femelles') }}"
     class="px-4 py-2 rounded-2xl border {{ $active==='femelles' ? 'bg-dark text-white border-dark' : 'border-neutral-200 hover:bg-neutral-50' }}">
    Femelles
  </a>
  <a href="{{ route('dogs.males') }}"
     class="px-4 py-2 rounded-2xl border {{ $active==='males' ? 'bg-dark text-white border-dark' : 'border-neutral-200 hover:bg-neutral-50' }}">
    Mâles
  </a>
  <a href="{{ route('litters.index') }}"
     class="px-4 py-2 rounded-2xl border {{ $active==='portees' ? 'bg-dark text-white border-dark' : 'border-neutral-200 hover:bg-neutral-50' }}">
    Voir les portées
  </a>
</div>
