<?php

namespace App\Http\Controllers;

use App\Services\PersonalService;
use Illuminate\Http\JsonResponse;

class PersonalController extends Controller
{
    protected PersonalService $personalService;
    public function __construct(PersonalService $personalService)
    {
        $this->personalService = $personalService;
    }
    public function index(): JsonResponse
    {
        $personals = $this->personalService->index();
        return response()->json($personals);
    }
}
