@extends('layouts.landing', ['title' => $litter->code])

@section('content')
<section class="bg-white py-17.5 md:py-22.5">
  <div class="container">
    <div class="flex items-center justify-between mb-5">
      <h1 class="lg:text-5xl md:text-4xl text-3xl">{{ $litter->code }}</h1>
      <span class="inline-flex items-center px-3 py-1 rounded-full text-sm
        @class([
          'bg-yellow-100 text-yellow-800' => in_array($litter->status,['planned','pregnant']),
          'bg-green-100 text-green-800'   => in_array($litter->status,['born','available']),
          'bg-neutral-200 text-neutral-800' => in_array($litter->status,['reserved','closed']),
        ])
      ">{{ ucfirst($litter->status) }}</span>
    </div>

    <div class="grid md:grid-cols-3 gap-7.5">
      <div class="md:col-span-2">
        <div class="grid grid-cols-2 gap-4">
          @forelse($litter->photos as $p)
            <img src="{{ asset('storage/'.$p->path) }}" class="rounded-xl w-full h-56 object-cover" alt="{{ $p->caption }}">
          @empty
            <img src="/images/about/12.png" class="rounded-xl w-full h-56 object-cover" alt="">
          @endforelse
        </div>

        @if($litter->description)
          <div class="mt-7.5 prose max-w-none">
            {!! nl2br(e($litter->description)) !!}
          </div>
        @endif
      </div>

      <aside class="md:col-span-1">
        <div class="bg-body-bg rounded-2xl p-5">
          <h2 class="text-xl font-semibold mb-3">Informations</h2>
          <ul class="space-y-1 text-slate-700">
            <li><strong>Père :</strong> {{ $litter->sire->name ?? '-' }}</li>
            <li><strong>Mère :</strong> {{ $litter->dam->name ?? '-' }}</li>
            @if($litter->born_at)<li><strong>Nés le :</strong> {{ \Illuminate\Support\Carbon::parse($litter->born_at)->translatedFormat('d F Y') }}</li>@endif
            @if($litter->ready_at)<li><strong>Prêts à partir :</strong> {{ \Illuminate\Support\Carbon::parse($litter->ready_at)->translatedFormat('d F Y') }}</li>@endif
            @if(!is_null($litter->puppies_count))<li><strong>Nombre de chiots :</strong> {{ $litter->puppies_count }}</li>@endif
          </ul>

          @if(in_array($litter->status, ['available','born','pregnant','planned']))
            <div class="mt-5">
              <a href="{{ url('/#comment-reserver') }}" class="rounded-2xl bg-dark text-white px-5 py-3 hover:text-primary transition">Réserver un chiot</a>
            </div>
          @endif
        </div>

        <div class="bg-white rounded-2xl p-5 mt-5 border border-neutral-200">
          <h3 class="font-semibold mb-2">Parents</h3>
          <div class="space-y-3">
            <div class="flex items-center gap-3">
              <div class="size-12 rounded-full overflow-hidden">
                <img src="{{ $litter->sire?->photo ? asset('storage/'.$litter->sire->photo) : '/images/team/5.png' }}" class="w-full h-full object-cover" alt="">
              </div>
              <div>
                <div class="text-sm text-slate-500">Père</div>
                <div class="font-medium">{{ $litter->sire->name ?? '-' }}</div>
              </div>
            </div>

            <div class="flex items-center gap-3">
              <div class="size-12 rounded-full overflow-hidden">
                <img src="{{ $litter->dam?->photo ? asset('storage/'.$litter->dam->photo) : '/images/team/6.png' }}" class="w-full h-full object-cover" alt="">
              </div>
              <div>
                <div class="text-sm text-slate-500">Mère</div>
                <div class="font-medium">{{ $litter->dam->name ?? '-' }}</div>
              </div>
            </div>
          </div>
        </div>
      </aside>
    </div>
  </div>
</section>
@endsection
