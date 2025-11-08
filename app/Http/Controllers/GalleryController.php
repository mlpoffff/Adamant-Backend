<?php

namespace App\Http\Controllers;

use App\Services\GalleryService;
use Illuminate\Http\JsonResponse;

class GalleryController extends Controller
{
    protected GalleryService $galleryService;
    public function __construct(GalleryService $galleryService)
    {
        $this->galleryService = $galleryService;
    }

    public function index(): JsonResponse
    {
        $gallery = $this->galleryService->index();
        return response()->json($gallery);
    }


}
