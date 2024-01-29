<?php

declare(strict_types = 1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class ApiVersionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param Closure(Request): (Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $param = $request->route('apiVersion');

        $apiVersion = $param == 'latest' ? config('api.latest_version') : $param;

        if (!in_array($apiVersion, config('api.available_versions'))) {
            return new JsonResponse(['error' => 'API version is not available'], JsonResponse::HTTP_NOT_FOUND);
        }

        $request->merge([
            'apiNamespace' => "App\Api\\$apiVersion\\",
        ]);

        $request->route()->forgetParameter('apiVersion');

        return $next($request);
    }

}
