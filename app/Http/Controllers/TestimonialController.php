<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::latest()->get();
        return view('dashboard.testimonial')->with('testimonials', $testimonials);
    }

    public function create()
    {
        return view('dashboard.new-testimonial');
    }

    public function store(Request $request)
    {
        $testimonial = new Testimonial();
        $testimonial->client_name = $request->client_name;
        $testimonial->content = $request->content;
        $testimonial->save();
        // Check if photo was uploaded
        if ($request->photo) {
            $file = $request->photo;
            $fileExt = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
            $name = 'testimonial-' . $testimonial->id . '.' . $fileExt;
            // Save Image to 'upload' folder
            $file->move(public_path('upload/testimonials/'), $name);
            // Update testimonial
            $testimonial->photo = 'upload/testimonials/' . $name;
            $testimonial->save();
        }

        return to_route('testimonials')->with('success', "Testimonial created successfully.");
    }

    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('dashboard.edit-testimonial')->with('testimonial', $testimonial);
    }

    public function update(Request $request, $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->client_name = $request->client_name;
        $testimonial->content = $request->content;

        $file = $request->photo;
        // Check if a new photo was uploaded
        if ($file) {
            $fileExtension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
            $name = 'testimonial-' . $testimonial->id . '.' . $fileExtension;
            // Save Image to 'upload' folder
            $file->move(public_path('upload/testimonials/'), $name);
            // Update photo field
            $testimonial->photo = 'upload/testimonials/' . $name;
        }
        // Update Database
        $testimonial->save();

        return to_route('testimonials')->with('success', "Testimonial updated successfully.");
    }

    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        // Get photo path
        if ($testimonial->photo) {
            $imagePath = public_path($testimonial->photo);
            // Delete photo file from folder
            File::delete($imagePath);
        }
        // Delete from DB
        $testimonial->delete();

        return back()->with('success', 'Testimonial Deleted.');
    }
}
