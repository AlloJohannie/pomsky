@extends('layouts.app')
@section('content')
<div class="max-w-5xl mx-auto p-6">
  @if(session('ok')) <div class="mb-4 p-3 bg-green-100 rounded">{{ session('ok') }}</div> @endif

  <h1 class="text-2xl font-bold mb-4">Modifier la portée {{ $litter->code }}</h1>

  <form method="post" action="{{ route('admin.litters.update', $litter) }}" class="space-y-4">
    @csrf @method('PUT')
    <div class="grid md:grid-cols-2 gap-4">
      <x-text-input label="Code" name="code" :value="$litter->code" />
      <div>
        <label class="block text-sm font-medium">Statut</label>
        <select name="status" class="mt-1 w-full rounded border-gray-300">
          @foreach(['planned','pregnant','born','available','reserved','closed'] as $st)
            <option value="{{ $st }}" @selected($litter->status==$st)>{{ $st }}</option>
          @endforeach
        </select>
      </div>
      <x-text-input type="date" label="Date de naissance" name="born_at" :value="$litter->born_at" />
      <x-text-input type="date" label="Prêt à partir" name="ready_at" :value="$litter->ready_at" />
      <x-text-input type="number" label="Nb chiots" name="puppies_count" :value="$litter->puppies_count" />
      <div>
        <label class="block text-sm font-medium">Père</label>
        <select name="sire_id" class="mt-1 w-full rounded border-gray-300">
          @foreach($males as $d) <option value="{{ $d->id }}" @selected($litter->sire_id==$d->id)>{{ $d->name }}</option> @endforeach
        </select>
      </div>
      <div>
        <label class="block text-sm font-medium">Mère</label>
        <select name="dam_id" class="mt-1 w-full rounded border-gray-300">
          @foreach($females as $d) <option value="{{ $d->id }}" @selected($litter->dam_id==$d->id)>{{ $d->name }}</option> @endforeach
        </select>
      </div>
    </div>
    <div>
      <label class="block text-sm font-medium">Description</label>
      <textarea name="description" rows="5" class="mt-1 w-full rounded border-gray-300">{{ old('description',$litter->description) }}</textarea>
    </div>
    <button class="px-4 py-2 rounded bg-indigo-600 text-white">Enregistrer</button>
  </form>

  <hr class="my-8">

  <h2 class="text-xl font-semibold mb-3">Photos</h2>
  <form method="post" action="{{ route('admin.litters.photos.store', $litter) }}" enctype="multipart/form-data" class="space-y-3">
    @csrf
    <input type="file" name="photos[]" multiple class="block">
    <button class="px-4 py-2 rounded bg-gray-800 text-white">Ajouter</button>
  </form>

  <div class="grid md:grid-cols-3 gap-4 mt-4">
    @foreach($litter->photos as $p)
      <div class="bg-white rounded shadow p-2">
        <img src="{{ asset('storage/'.$p->path) }}" class="rounded mb-2 w-full h-40 object-cover">
        <form method="post" action="{{ route('admin.litters.photos.destroy', [$litter,$p]) }}">
          @csrf @method('DELETE')
          <button class="px-3 py-1 rounded bg-red-600 text-white text-sm">Supprimer</button>
        </form>
      </div>
    @endforeach
  </div>
</div>
@endsection
