<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('services', compact('services'));
    }

    public function indexone()
    {
        $services = Service::all();
        return view('home', compact('services'));
    }

    public function create()
    {
        return view('newServices');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10048',
            'image_links.*' => ['nullable', 'url', 'regex:/\.(jpg|jpeg|png|gif)$/i'],
        ]);

        $imagePaths = [];

        // Handle uploaded images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('services', 'public');
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

        Service::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'images' => !empty($imagePaths) ? json_encode($imagePaths) : null,
        ]);

        return redirect()->route('services.index')->with('success', 'تم إضافة الخدمة بنجاح');
    }

    public function show($id)
    {
        $service = Service::findOrFail($id);
        return view('services.show', compact('service'));
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('newServices', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10048',
            'image_links.*' => ['nullable', 'url', 'regex:/\.(jpg|jpeg|png|gif)$/i'],
        ]);

        $service = Service::findOrFail($id);

        $imagePaths = [];

        // Handle new uploaded images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('services', 'public');
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

        // Delete old images from storage
        $oldImages = json_decode($service->images, true) ?? [];
        foreach ($oldImages as $path) {
            if (!Str::startsWith($path, ['http://', 'https://']) && Storage::disk('public')->exists($path)) {
                Storage::disk('public')->delete($path);
            }
        }

        $service->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'images' => !empty($imagePaths) ? json_encode($imagePaths) : null,
        ]);

        return redirect()->route('services.index')->with('success', 'تم تحديث الخدمة بنجاح');
    }

    public function destroy($id)
    {
        $service = Service::findOrFail($id);

        // Delete associated images
        $imagePaths = json_decode($service->images, true) ?? [];
        foreach ($imagePaths as $path) {
            if (!Str::startsWith($path, ['http://', 'https://']) && Storage::disk('public')->exists($path)) {
                Storage::disk('public')->delete($path);
            }
        }

        $service->delete();

        return redirect()->route('services.index')->with('success', 'تم حذف الخدمة بنجاح');
    }
}
