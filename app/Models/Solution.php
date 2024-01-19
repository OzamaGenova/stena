<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
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
}
