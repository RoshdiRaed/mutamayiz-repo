<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class WorkController extends Controller
{
    // Display a listing of all work
    public function index()
    {
        $works = Work::all() ?? collect();
        return view('works', compact('works'));
    }

    // Show the form to create a new work
    public function create()
    {
        return view('newWork');
    }

    // Store a new work
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image_links.*' => ['nullable', 'url', 'regex:/\.(jpg|jpeg|png|gif)$/i'],
        ]);


        $imagePaths = [];

        // Handle uploaded images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('work', 'public');
                $imagePaths[] = $path;
            }
        }

        // Handle image links
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

    // Show the form to edit a specific work
    public function edit($id)
    {
        $editWork = Work::findOrFail($id);
        return view('newWork', compact('editWork'));
    }

    // Update an existing work
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image_links.*' => ['nullable', 'url', 'regex:/\.(jpg|jpeg|png|gif)(\?.*)?$/i'],
        ]);

        $work = Work::findOrFail($id);

        $imagePaths = json_decode($work->images, true) ?? [];

        // Handle new uploaded images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('work', 'public');
                $imagePaths[] = $path;
            }
        }

        // Handle new image links
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

    // In WorkController.php
    public function destroy($id)
    {
        $work = Work::findOrFail($id);

        // Delete associated images (only filesystem paths)
        $imagePaths = json_decode($work->images, true) ?? [];
        foreach ($imagePaths as $path) {
            if (!Str::startsWith($path, ['http://', 'https://']) && Storage::disk('public')->exists($path)) {
                Storage::disk('public')->delete($path);
            }
        }

        $work->delete();

        // Return JSON response with success message
        return response()->json(['success' => 'تم حذف العمل بنجاح']);
    }
}
