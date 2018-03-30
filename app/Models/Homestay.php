<?php

namespace App\Models;

use App\Models\HomestayRoom;
use Encore\Admin\Traits\AdminBuilder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Homestay extends Model
{
    // use AdminBuilder;

    protected $table = 'homestays';

    public function rooms()
    {
        return $this->hasMany(HomestayRoom::class);
    }

    // public function category()
    // {
    //     return $this->belongsTo(Category::class, 'category_id');
    // }

    // public function getImagesAttribute($pictures)
    // {
    //     if (is_string($pictures)) {
    //         return json_decode($pictures, true);
    //     }

    //     return $pictures;
    // }

    // public function setImagesAttribute($pictures)
    // {
    //     if (is_array($pictures)) {
    //         $this->attributes['images'] = json_encode($pictures);
    //     }
    // }
}