<?php

namespace App\Services;

use App\Models\Announce;
use Illuminate\Database\Eloquent\Collection;

class AnnouncesService
{
    public function index(): Collection
    {
        return Announce::where('active', true)->get();
    }
}
