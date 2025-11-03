<?php

namespace App\Services;

use App\Models\Dms;
use Illuminate\Database\Eloquent\Collection;

class DmsService
{
    public function index(): Collection
    {
        return Dms::all();
    }
}
