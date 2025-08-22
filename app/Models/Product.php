<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected  $guarded = ['id'];

    public function sub_category(){
        return $this->belongsTo(SubCategory::class);
    }
//    protected $casts = [
//        'description' => 'array',
//        'title' => 'array',
//    ];
}
