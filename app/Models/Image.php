<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    public static function FetchByAlbum($term)
    {
        return Image::where('parent', $term)->latest()->get();
    }
}
