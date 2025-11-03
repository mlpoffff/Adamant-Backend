<?php

namespace App\Services;

use App\Models\Schedule;
use Illuminate\Database\Eloquent\Collection;

class ScheduleService
{
    public function index(): Collection
    {
        return Schedule::all();
    }
}
