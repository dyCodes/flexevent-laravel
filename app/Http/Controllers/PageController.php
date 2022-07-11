<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Service;
use App\Models\Testimonial;

class PageController extends Controller
{
    public function index()
    {
        $images = cache()->remember('images', now()->addDay(), function () {
            return Image::FetchByAlbum('gallery');
        });
        $testimonials = cache()->remember('testimonials', now()->addDay(), function () {
            return Testimonial::latest()->get();
        });
        $services = cache()->remember('services', now()->addDay(), function () {
            return Service::latest()->get();
        });

        $data =  array(
            'images' =>  $images->take(8),
            'testimonials' => $testimonials,
            'services' =>  $services,
        );
        return view('pages.index')->with($data);
    }

    public function about()
    {
        $services = cache()->remember('services', now()->addDay(), function () {
            return Service::latest()->get();
        });
        return view('pages.about')->with('services', $services);
    }

    public function gallery()
    {
        $images = cache()->remember('images', now()->addDay(), function () {
            return Image::FetchByAlbum('gallery');
        });
        return view('pages.gallery')->with('images', $images);
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
