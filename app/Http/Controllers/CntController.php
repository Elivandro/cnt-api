<?php

declare(strict_types = 1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cnae;
use Illuminate\Http\JsonResponse;

class CntController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $cnae): JsonResponse
    {
        $cnae = preg_replace('/^(\d{4})(\d{1})(\d{2})$/', '$1-$2/$3', $cnae);

        $cnae = Cnae::where('cnae_code', $cnae)->with('cnaeItem')->first();

        if (empty($cnae)) {
            return response()->json(['message' => 'cnae not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        $apiResource = request()->apiNamespace.'Resources\CnaeResource';

        return response()->json(new $apiResource($cnae), JsonResponse::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }
}
