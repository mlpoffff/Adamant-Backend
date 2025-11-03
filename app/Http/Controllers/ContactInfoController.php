<?php

namespace App\Http\Controllers;

use App\Services\DocumentsService;
use App\Services\ScheduleService;
use Illuminate\Http\JsonResponse;

class ContactInfoController extends Controller
{
    protected DocumentsService $documentsService;
    protected ScheduleService $scheduleService;

    public function __construct(DocumentsService $documentsService, ScheduleService $scheduleService){
        $this->documentsService = $documentsService;
        $this->scheduleService = $scheduleService;
    }

    public function index(): JsonResponse
    {
        $documents = $this->documentsService->index();
        $schedule = $this->scheduleService->index();
        $response = [
            'documents' => $documents,
            'schedule' => $schedule
        ];
        return response()->json($response);
    }
}
