<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Litter;
use App\Models\LitterPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminLitterPhotoController extends Controller
{
    public function store(Request $r, Litter $litter)
    {
        $r->validate([
            'photos.*' => 'required|image|max:4096', // 4MB
            'captions.*' => 'nullable|string|max:200',
        ]);

        foreach ($r->file('photos', []) as $idx => $file) {
            $path = $file->store('litters', 'public');
            $caption = $r->input("captions.$idx");
            $sort = (int) LitterPhoto::where('litter_id', $litter->id)->max('sort') + 1;
            $litter->photos()->create(compact('path','caption','sort'));
        }
        return back()->with('ok','Photos ajoutées.');
    }

    public function destroy(Litter $litter, LitterPhoto $photo)
    {
        Storage::disk('public')->delete($photo->path);
        $photo->delete();
        return back()->with('ok','Photo supprimée.');
    }
}
