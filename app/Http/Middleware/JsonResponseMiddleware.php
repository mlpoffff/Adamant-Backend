<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class JsonResponseMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        if (!($response instanceof JsonResponse)) {
            return $response;
        }

        $original = $response->getData(true);

        if (isset($original['success'], $original['data'], $original['status'])) {
            return $response;
        }

        $status = $response->getStatusCode();
        $success = $status >= 200 && $status < 300;

        $formatted = [
            'success' => $success,
            'data' => $original,
            'status' => $status,
        ];

        return response()->json($formatted, $status);
    }
}
