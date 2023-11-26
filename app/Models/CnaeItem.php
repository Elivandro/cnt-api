<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CnaeItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'cnae_id',
        'cnae_item',
        'item_description'
    ];

    public function cnae(): BelongsTo
    {
        return $this->belongsTo(Cnae::class);
    }
}
