<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServicesController extends Controller
{
    public function index()
{
    $services = Service::all(); // Fetch all services
    return view('newServices', compact('services'));
}


    public function create()
    {
        // Show the form for creating a new resource
        return view('newServices');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
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

        $service->update($validatedData);

        return redirect()->route('services.index')->with('success', 'Service updated successfully.');
    }


    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();

        return redirect()->route('services.index')->with('success', 'Service deleted successfully.');
    }

}
