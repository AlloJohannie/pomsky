@props([
  'title',
  'subtitle' => null,
  'bg' => null,          // ex: asset('photos/proprietaire-portee.jpg')
  'size' => 'md',        // 'sm' | 'md' | 'lg'
  'align' => 'center',   // 'left' | 'center'
  'overlay' => 'bg-black/30', // overlay tailwind ('' pour aucun)
  'chip' => null,        // petit badge au-dessus du titre (optionnel)
])

@php
  $pad = [
    'sm' => 'py-12 md:py-16',
    'md' => 'py-17.5 md:py-22.5',
    'lg' => 'py-22 md:py-28 lg:py-32',
  ][$size] ?? 'py-17.5 md:py-22.5';

  $titleClasses = 'font-bold mb-2.5 '.([
    'sm' => 'text-3xl md:text-4xl',
    'md' => 'text-4xl md:text-5.5xl',
    'lg' => 'text-4xl md:text-5.5xl lg:text-6xl',
  ][$size] ?? 'text-4xl md:text-5.5xl');

  $alignClass = $align === 'left' ? 'text-left' : 'text-center';
  $hasBg = !empty($bg);
  $titleColor = $hasBg ? 'text-white drop-shadow' : 'text-dark';
  $subtitleColor = $hasBg ? 'text-white/90' : 'text-slate-700';
@endphp

<section class="relative {{ $pad }}">
  @if($hasBg)
    <div class="absolute inset-0 -z-10 bg-center bg-cover"
         style="background-image:url('{{ $bg }}');"></div>
    @if($overlay !== '')
      <div class="absolute inset-0 -z-0 {{ $overlay }}"></div>
    @endif
  @endif

  <div class="container relative z-10 {{ $alignClass }}">
    @if($chip)
      <div class="inline-flex bg-primary/20 text-dark px-3 py-1 rounded-full text-sm font-medium">{{ $chip }}</div>
    @endif

    <h1 class="{{ $titleClasses }} {{ $titleColor }}">{{ $title }}</h1>

    @if($subtitle)
      <p class="mt-2 {{ $subtitleColor }}">{{ $subtitle }}</p>
    @endif
  </div>
</section>
