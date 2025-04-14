<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class WorkController extends Controller
{
    public function index()
    {
        $works = Work::all() ?? collect();
        return view('pages.works.index', compact('works'));
    }

    public function create()
    {
        return view('pages.works.new');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image_links.*' => ['nullable', 'url', 'regex:/\.(jpg|jpeg|png|gif)$/i'],
        ]);

        $imagePaths = [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('work', 'public');
                $imagePaths[] = $path;
            }
        }

        if ($request->has('image_links')) {
            foreach ($request->input('image_links') as $link) {
                if (!empty($link)) {
                    $imagePaths[] = $link;
                }
            }
        }

        Work::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'images' => !empty($imagePaths) ? json_encode($imagePaths) : null,
        ]);

        return redirect()->route('works.index')->with('success', 'تم نشر العمل بنجاح');
    }

    public function edit($id)
    {
        $editWork = Work::findOrFail($id);
        return view('pages.works.new', compact('editWork'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image_links.*' => ['nullable', 'url', 'regex:/\.(jpg|jpeg|png|gif)(\?.*)?$/i'],
        ]);

        $work = Work::findOrFail($id);

        $imagePaths = json_decode($work->images, true) ?? [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('work', 'public');
                $imagePaths[] = $path;
            }
        }

        if ($request->has('image_links')) {
            foreach ($request->input('image_links') as $link) {
                if (!empty($link)) {
                    $imagePaths[] = $link;
                }
            }
        }

        $work->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'images' => !empty($imagePaths) ? json_encode($imagePaths) : null,
        ]);

        return redirect()->route('works.index')->with('success', 'تم تحديث العمل بنجاح');
    }

    public function destroy($id)
    {
        $work = Work::findOrFail($id);

        $imagePaths = json_decode($work->images, true) ?? [];
        foreach ($imagePaths as $path) {
            if (!Str::startsWith($path, ['http://', 'https://']) && Storage::disk('public')->exists($path)) {
                Storage::disk('public')->delete($path);
            }
        }

        $work->delete();

        return response()->json(['success' => 'تم حذف العمل بنجاح']);
    }
}
