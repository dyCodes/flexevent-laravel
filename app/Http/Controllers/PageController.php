<?php

namespace App\Http\Controllers;

use App\Models\Image;

// use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index()
    {
        $images = Image::FetchByAlbum('gallery')->take(8);
        return view('pages.index')->with('images', $images);
    }

    public function about()
    {
        return view('pages.about');
    }

    public function gallery()
    {
        $images = Image::FetchByAlbum('gallery');
        return view('pages.gallery')->with('images', $images);
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
