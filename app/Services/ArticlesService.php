<?php

namespace App\Services;

use App\Models\Article;
use Illuminate\Database\Eloquent\Collection;

class ArticlesService
{
    public function index(): Collection
    {
        return Article::all();
    }

    public function show(int $id): Article
    {
        return Article::find($id);
    }
}
