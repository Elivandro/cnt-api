<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Cnae;

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

        $cnae = Cnae::join('cnae_items', 'cnaes.id', '=', 'cnae_items.cnae_id')
            ->where('cnae_code', $cnae)
            ->select('cnaes.cnae_code', 'cnaes.cnae_description', 'cnae_items.cnae_item as cnt', 'cnae_items.item_description as cnt_description')
            ->get();

        return response()->json($cnae);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }
}
