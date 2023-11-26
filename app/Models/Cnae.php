<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cnae extends Model
{
    use HasFactory;

    protected $fillable =[
        'cnae_code',
        'cnae_description'
    ];

    public function cnaeItem(): HasMany
    {
        return $this->hasMany(CnaeItem::class);
    }
}
