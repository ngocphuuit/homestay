<?php

namespace App\Models;

use Encore\Admin\Traits\AdminBuilder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Room extends Model
{
    // use AdminBuilder;

    protected $table = 'rooms';

    public function roms()
    {
        return $this->hasMany('App\Models\HomestayRoom');
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