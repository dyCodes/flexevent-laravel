<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Service;
use App\Models\Testimonial;

class PageController extends Controller
{
    //
    public function index()
    {
        $services = Service::latest()->get();
        $testimonials = Testimonial::latest()->get();
        $images = Image::FetchByAlbum('gallery')->take(8);

        return view('pages.index')->with([
            'images' => $images,
            'testimonials' => $testimonials,
            'services' => $services,
        ]);
    }

    public function about()
    {
        $services = Service::latest()->get();
        return view('pages.about')->with('services', $services);
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
