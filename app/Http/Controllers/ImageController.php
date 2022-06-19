<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ImageController extends Controller
{
    public function index()
    {
        $images = Image::FetchByAlbum('gallery');
        return view('dashboard.gallery')->with('images', $images);
    }

    public function upload()
    {
        return view('dashboard.upload');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required',
            // Max file size: 6MB
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:6144',
        ]);

        $location = $request->location;

        foreach ($request->file('image') as $imageFile) {
            $name = $imageFile->getClientOriginalName();
            $imagePath = public_path('upload/' . $location . '/' . $name);

            if (file_exists($imagePath)) {
                $i = 1;
                $imageName = $imageFile->getClientOriginalName();
                $fileExtension = pathinfo($imageName, PATHINFO_EXTENSION);
                // New image path
                while (file_exists($imagePath)) {
                    $name = pathinfo($imageName, PATHINFO_FILENAME) . '-' . $i . '.' .  $fileExtension;
                    $imagePath = public_path("upload/$location/") . $name;
                    $i++;
                }
                // dd($imagePath);
            }

            $imageUrl = 'upload/' . $location . '/' . $name;
            // Save Image to 'upload' folder
            $imageFile->move(public_path('upload/' . $location), $name);
            // Create Image model
            $image = new Image();
            $image->url = $imageUrl;
            $image->parent = $location;
            $image->thumbnail = $imageUrl;
            $image->save();
        }

        $imagesCount = count($request->image);
        $resText = str()->plural('image', $imagesCount);

        return to_route('gallery')->with('success', "Successfully uploaded $imagesCount $resText.");
    }

    // public function update(Request $request, $id)
    // {
    //     //
    // }

    public function destroy($id)
    {
        $image = Image::findOrFail($id);
        // Get file path
        $imagePath = public_path($image->url);
        $image->delete();
        // Delete image file for folder
        File::delete($imagePath);

        return back()->with('success', 'Image Deleted.');  //
    }
}
