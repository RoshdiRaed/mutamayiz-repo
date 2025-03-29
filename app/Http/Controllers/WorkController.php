<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    // Display a listing of all work
    public function index()
    {
        $work = Work::all();
        return view('newWork', compact('work'));
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
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePaths = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('work', 'public');
                $imagePaths[] = $path;
            }
        }

        Work::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'images' => json_encode($imagePaths),
        ]);

        return redirect()->route('newWork')->with('success', 'تم نشر العمل بنجاح');
    }

    // Show the form to edit a specific work
    public function edit($id)
    {
        $work = Work::findOrFail($id);
        return view('editWork', compact('work'));
    }

    // Update an existing work
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $work = Work::findOrFail($id);

        // Handle image updates if necessary
        $imagePaths = json_decode($work->images, true);
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('work', 'public');
                $imagePaths[] = $path;
            }
        }

        $work->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'images' => json_encode($imagePaths),
        ]);

        return redirect()->route('newWork')->with('success', 'تم تحديث العمل بنجاح');
    }

    // Delete a specific work
    public function destroy($id)
    {
        $work = Work::findOrFail($id);

        // Delete associated images
        $imagePaths = json_decode($work->images, true);
        foreach ($imagePaths as $path) {
            if (file_exists(storage_path('app/public/' . $path))) {
                unlink(storage_path('app/public/' . $path));
            }
        }

        $work->delete();

        return redirect()->route('newWork')->with('success', 'تم حذف العمل بنجاح');
    }

    // Show the details of a specific work
    public function show($id)
    {
        $work = Work::findOrFail($id);
        return view('showWork', compact('work'));
    }
}
