<?php

namespace App\Http\Controllers;

use App\Services\AnnouncesService;
use App\Services\MainInfosService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class GeneralInfoController extends Controller
{
    protected MainInfosService $mainInfoService;
    protected AnnouncesService $announcesService;

    public function __construct(MainInfosService $mainInfoService, AnnouncesService $announcesService)
    {
        $this->mainInfoService = $mainInfoService;
        $this->announcesService = $announcesService;
    }

    public function index(): JsonResponse
    {
        $results = [
            'info' => $this->mainInfoService->index(),
            'announces' => $this->announcesService->index()
        ];
        return response()->json($results);
    }
}
