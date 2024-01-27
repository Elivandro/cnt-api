<?php

declare(strict_types = 1);

namespace App\Api\v1\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CnaeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "cnae_code"         => $this->cnae_code,
            "cnae_description"  => $this->cnae_description,
            "cnt"               => new CntCollection($this->cnaeItem)
        ];
    }
}
