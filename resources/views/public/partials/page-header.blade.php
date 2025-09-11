@props([
  'chip' => 'Élevage',
  'title' => '',
  'subtitle' => null,
])

<div class="mb-7.5">
  <div class="inline-flex bg-primary/20 text-dark px-3 py-1 rounded-full text-sm font-medium">{{ $chip }}</div>
  <h1 class="mt-3 lg:text-5.5xl md:text-4.6xl text-3.4xl">{{ $title }}</h1>
  @if($subtitle)
    <p class="mt-2 text-slate-700">{{ $subtitle }}</p>
  @endif
</div>
