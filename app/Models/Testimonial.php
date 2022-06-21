<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    // Get full image url path
    public function getPhoto()
    {
        if ($this->photo) {
            return url($this->photo);
        }
        // Return 'default.png' if photo is null
        return url('upload/testimonials/default.png');
    }

    // Get content excerpt
    public function getExcerpt($limit)
    {
        return str()->limit($this->content, $limit, '...');
    }
}
