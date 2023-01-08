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

    public function category(): BelongsTo
    {
        return $this->belongsTo(Catalog::class, 'catalog_id');
    }

    public function setImgAttribute($images)
    {
        if (is_array($images)) {
            $this->attributes['img'] = json_encode($images);
        }
    }

    public function getImgAttribute($images)
    {
        return json_decode($images, true);
    }

    public function getFimgAttribute($images)
    {
        $img  = $this->img;
        return !empty($img) && count($img) > 0 ? $img[0] : '';
    }
}
