<?php

namespace App\Services;

use App\Models\Personal;
use Illuminate\Database\Eloquent\Collection;

class PersonalService
{
    public function index(): Collection
    {
        return Personal::with('image', 'certificates')->get();
    }
}
