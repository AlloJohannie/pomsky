<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dog;
use App\Models\Litter;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminLitterController extends Controller
{
    public function index() {
        $litters = Litter::with(['sire','dam'])->latest()->paginate(15);
        return view('admin.litters.index', compact('litters'));
    }

    public function create() {
        $males = Dog::where('sex','male')->orderBy('name')->get();
        $females = Dog::where('sex','female')->orderBy('name')->get();
        return view('admin.litters.create', compact('males','females'));
    }

    public function store(Request $r) {
        $data = $r->validate([
            'code' => 'required|string|max:50|unique:litters,code',
            'born_at' => 'nullable|date',
            'ready_at' => 'nullable|date',
            'sire_id' => 'required|exists:dogs,id',
            'dam_id' => 'required|exists:dogs,id',
            'puppies_count' => 'nullable|integer|min:0|max:20',
            'status' => 'required|in:planned,pregnant,born,available,reserved,closed',
            'description' => 'nullable|string',
        ]);
        $data['slug'] = Str::slug($data['code']);
        $litter = Litter::create($data);
        return redirect()->route('admin.litters.edit', $litter)->with('ok','Portée créée.');
    }

    public function edit(Litter $litter) {
        $males = Dog::where('sex','male')->orderBy('name')->get();
        $females = Dog::where('sex','female')->orderBy('name')->get();
        $litter->load('photos');
        return view('admin.litters.edit', compact('litter','males','females'));
    }

    public function update(Request $r, Litter $litter) {
        $data = $r->validate([
            'code' => "required|string|max:50|unique:litters,code,{$litter->id}",
            'born_at' => 'nullable|date',
            'ready_at' => 'nullable|date',
            'sire_id' => 'required|exists:dogs,id',
            'dam_id' => 'required|exists:dogs,id',
            'puppies_count' => 'nullable|integer|min:0|max:20',
            'status' => 'required|in:planned,pregnant,born,available,reserved,closed',
            'description' => 'nullable|string',
        ]);
        $data['slug'] = Str::slug($data['code']);
        $litter->update($data);
        return back()->with('ok','Portée mise à jour.');
    }

    public function destroy(Litter $litter) {
        $litter->delete();
        return back()->with('ok','Portée supprimée.');
    }
}
