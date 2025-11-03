<?php

namespace App\Services;

use App\Models\Document;
use Illuminate\Database\Eloquent\Collection;

class DocumentsService
{
    public function index(): Collection
    {
        return Document::with('image')->get();
    }
}
