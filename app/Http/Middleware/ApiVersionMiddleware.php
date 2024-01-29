<?php

declare(strict_types = 1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ApiVersionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $param = $request->route('apiVersion');

        $apiVersion = $param === 'latest' ? config('api.latest_version') : $param;

        abort_if(!in_array($apiVersion, config('api.available_versions')), JsonResponse::HTTP_NOT_FOUND, 'API version is not available');

        $request->merge([
            'apiNamespace' => "App\Api\\$apiVersion\\",
        ]);

        $request->route()->forgetParameter('apiVersion');

        return $next($request);
    }
}
