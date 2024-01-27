<?php

declare(strict_types = 1);

namespace App\Api\v1\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CntResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'cnt_code'          => $this->cnae_item,
            'cnt_description'   => $this->item_description
        ];
    }
}
