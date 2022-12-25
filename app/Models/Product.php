<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    public function getSpecAttribute(): array
    {
        $arr = explode("\n", $this->specifications ?? '');
        return array_map(function ($item) {
            return explode(':', $item);
        }, $arr);
    }

    public function catalog(): BelongsTo
    {
        return $this->belongsTo(Catalog::class);
    }
}
