@extends('layouts.landing', ['title' => 'Nos portées'])

@section('content')
<section class="bg-white py-17.5">
  <div class="container">
    <h1 class="text-4xl md:text-5.5xl font-bold mb-6">Nos portées</h1>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
      @forelse($litters as $litter)
        <a href="{{ route('litters.show', $litter->slug) }}" class="bg-body-bg rounded-2xl p-5 hover:bg-white transition border border-neutral-200">
          <div class="flex items-center justify-between mb-2">
            <h2 class="text-2xl font-semibold">{{ $litter->code }}</h2>
            <span class="rounded-full text-sm px-3 py-1
              @class([
                'bg-green-100 text-green-800'  => $litter->status==='available',
                'bg-yellow-100 text-yellow-800'=> in_array($litter->status,['planned','pregnant','born','reserved']),
                'bg-neutral-200 text-neutral-800'=> $litter->status==='closed'
              ])">
              {{ ucfirst($litter->status) }}
            </span>
          </div>

          <div class="text-sm text-slate-600">
            <div><strong>Père :</strong> {{ $litter->sire->name ?? '—' }}</div>
            <div><strong>Mère :</strong> {{ $litter->dam->name ?? '—' }}</div>
            @if($litter->born_at)
              <div><strong>Nés le :</strong> {{ \Illuminate\Support\Carbon::parse($litter->born_at)->locale('fr_CA')->isoFormat('LL') }}</div>
            @endif
          </div>

          @if($litter->photos->first())
            <img class="rounded-xl mt-3 w-full h-48 object-cover"
                 src="{{ asset('storage/'.$litter->photos->first()->path) }}" alt="Photo portée">
          @endif

          @php
            $avail = $litter->puppies()->where('status','available')->count();
          @endphp
          <div class="mt-3 text-slate-700">
            @if($avail>0)
              {{ $avail }} chiot(s) disponible(s)
            @elseif(in_array($litter->status,['planned','pregnant']))
              Portée à venir
            @else
              Aucune disponibilité
            @endif
          </div>
        </a>
      @empty
        <p>Aucune portée pour le moment.</p>
      @endforelse
    </div>
  </div>
</section>
@endsection
