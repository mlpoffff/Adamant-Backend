<?php

namespace App\Http\Controllers;

use App\Services\ArticlesService;
use Illuminate\Http\JsonResponse;

class ArticlesController extends Controller
{
    protected ArticlesService $articlesService;

    public function __construct(ArticlesService $articlesService)
    {
        $this->articlesService = $articlesService;
    }

    public function index(): JsonResponse
    {
        $articles = $this->articlesService->index();
        return response()->json($articles);
    }

    public function show(int $id): JsonResponse
    {
        $articles = $this->articlesService->show($id);
        return response()->json($articles);
    }
}
