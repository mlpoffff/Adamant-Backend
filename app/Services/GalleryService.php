<?php

namespace App\Services;

use App\Models\Gallery;
use Illuminate\Database\Eloquent\Collection;

class GalleryService
{
    public function index(): Collection
    {
        return Gallery::with('image')->get();
    }
}
