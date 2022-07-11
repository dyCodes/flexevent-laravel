<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller
{
    public function index()
    {
        $services = cache()->remember('services', now()->addDay(), function () {
            return Service::latest()->get();
        });
        return view('dashboard.services')->with('services', $services);
    }

    public function create()
    {
        return view('dashboard.new-service');
    }

    public function store(Request $request)
    {
        $service = new Service();
        $service->title = $request->title;
        $service->content = $request->content;
        $service->save();
        // Check if photo was uploaded
        $file = $request->photo;
        if ($file) {
            $name = 'service-' . $service->id . '.' . $file->extension();
            $file->move(public_path('upload/services/'), $name);
            // Update Database
            $service->photo = 'upload/services/' . $name;
            $service->save();
        }

        cache()->forget('services');
        return to_route('services')->with('success', "Service created successfully.");
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('dashboard.edit-service')->with('service', $service);
    }

    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);
        $service->title = $request->title;
        $service->content = $request->content;
        // Check if a new photo was uploaded
        $file = $request->photo;
        if ($file) {
            $name = 'service-' . $service->id . '.' . $file->extension();
            // Save Image to 'upload' folder
            $file->move(public_path('upload/services/'), $name);
            $service->photo = 'upload/services/' . $name;
        }
        // Update Database
        $service->save();

        cache()->forget('services');
        return to_route('services')->with('success', "Service updated successfully.");
    }

    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        if ($service->photo) {
            $imagePath = public_path($service->photo);
            // Delete photo file from folder
            File::delete($imagePath);
        }
        $service->delete();

        cache()->forget('services');
        return back()->with('success', 'Service Deleted.');
    }
}
