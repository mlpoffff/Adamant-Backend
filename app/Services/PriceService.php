<?php

namespace App\Services;

use App\Models\Announce;
use App\Models\Price;
use App\Models\PriceCategory;
use Illuminate\Database\Eloquent\Collection;

class PriceService
{
    public function indexCategories(): Collection
    {
        return PriceCategory::all();
    }
    public function indexPrices(): Collection
    {
        return Price::with('category')->get();
    }
}
