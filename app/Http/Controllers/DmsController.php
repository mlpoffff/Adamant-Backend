<?php

namespace App\Http\Controllers;

use App\Services\DmsService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DmsController extends Controller
{
    protected DmsService $dmsService;

    public function __construct(DmsService $dmsService)
    {
        $this->dmsService = $dmsService;
    }
    public function index(): JsonResponse
    {
        $dms = $this->dmsService->index();
        return response()->json($dms);
    }
}
