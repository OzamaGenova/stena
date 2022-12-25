<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function getSpecAttribute()
    {
        $arr = explode("\n", $this->specifications ?? '');
        return array_map(function ($item) {
            return explode(':', $item);
        }, $arr);
    }
}
