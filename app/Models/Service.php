<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public function getPhoto()
    {
        if ($this->photo) {
            return url($this->photo);
        }
        // Return 'default.png' if photo is null
        return url('upload/services/default.jpg');
    }

    public function getExcerpt($limit)
    {
        // Get content excerpt
        return str()->limit($this->content, $limit, '...');
    }
}
