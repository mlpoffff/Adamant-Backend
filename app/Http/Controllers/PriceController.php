<?php

namespace App\Http\Controllers;

use App\Services\PriceService;
use Illuminate\Http\JsonResponse;

class PriceController extends Controller
{
    protected PriceService $priceService;

    public function __construct(PriceService $priceService)
    {
        $this->priceService = $priceService;
    }

    public function index(): JsonResponse
    {
        $prices = $this->priceService->indexPrices();
        $categories = $this->priceService->indexCategories();
        $response = [
            'categories' => $categories,
            'prices' => $prices
        ];
        return response()->json($response);
    }
}
