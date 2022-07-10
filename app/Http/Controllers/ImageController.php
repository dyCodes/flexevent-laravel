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
            // Max file size: 6MB/6144 KB
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:6144',
        ]);

        $imageFile = $request->file;
        $name = $imageFile->getClientOriginalName();
        $imagePath = public_path('upload/gallery/' . $name);
        // Rename if image already exists
        if (file_exists($imagePath)) {
            $i = 1;
            $imageName = $imageFile->getClientOriginalName();
            while (file_exists($imagePath)) {
                $name = pathinfo($imageName, PATHINFO_FILENAME) . '-' . $i . '.' .  $imageFile->extension();
                $imagePath = public_path('upload/location/') . $name;
                $i++;
            }
        }

        $imageUrl = 'upload/gallery/'  . $name;
        // Save Image to 'upload' folder
        $imageFile->move(public_path('upload/gallery'), $name);
        // Create Image model
        $image = new Image();
        $image->url = $imageUrl;
        $image->parent = 'gallery';
        $image->thumbnail = $imageUrl;
        $image->save();

        return response()->json(
            $status = 200
        );
    }

    public function destroy($id)
    {
        $image = Image::findOrFail($id);
        $imagePath = public_path($image->url);
        $image->delete();
        // Delete image file from folder
        File::delete($imagePath);

        return response()->json(
            $status = 200
        );
    }
}
