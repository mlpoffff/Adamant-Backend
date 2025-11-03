<?php

namespace App\Services;

use App\Models\MainInfo;
use Illuminate\Database\Eloquent\Collection;

class MainInfosService
{
    public function index(): Collection
    {
        return MainInfo::all();
    }
}
