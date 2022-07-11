<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Service;
use App\Models\Testimonial;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

use function PHPUnit\Framework\returnSelf;

class DashboardController extends Controller
{
    public function index()
    {
        $images = Cache::remember('images', now()->addDay(), function () {
            return Image::FetchByAlbum('gallery');
        });
        $testimonials = Cache::remember('testimonials', now()->addDay(), function () {
            return Testimonial::latest()->get();
        });
        $services = Cache::get('services');

        $data =  array(
            'images' => $images->take(7),
            'testimonials' => $testimonials->take(4),
            'image_count' => $images->count(),
            'testimonial_count' =>  $testimonials->count(),
            'service_count' => $services ? $services->count() : Service::count(),
        );
        return view('dashboard.index')->with($data);
    }

    // Override fortify default logout
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
