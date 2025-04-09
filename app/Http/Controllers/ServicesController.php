<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('services', compact('services')); // Ensure 'services.blade.php' exists
    }

    public function indexone()
    {
        $services = Service::all();
        return view('home', compact('services'));
    }

    public function create()
    {
        return view('newServices'); // Ensure 'newServices.blade.php' exists
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:10048',
        ]);

        $imagePaths = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('services', 'public');
                $imagePaths[] = $path;
            }
        }

        Service::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'images' => json_encode($imagePaths),
        ]);

        return redirect()->route('services.index')->with('success', 'تم إضافة الخدمة بنجاح');
    }

    public function show($id)
    {
        $service = Service::findOrFail($id);
        return view('newServices', compact('service'));
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('newServices', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePaths = json_decode($service->images, true) ?? [];
        if ($request->hasFile('images')) {
            $imagePaths = [];
            foreach ($request->file('images') as $image) {
                $path = $image->store('services', 'public');
                $imagePaths[] = $path;
            }
            $validatedData['images'] = json_encode($imagePaths);
        }

        $service->update($validatedData);

        return redirect()->route('services.index')->with('success', 'تم تحديث الخدمة بنجاح');
    }
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();

        return redirect()->route('services.index')->with('success', 'تم حذف الخدمة بنجاح');
    }
}

?>
