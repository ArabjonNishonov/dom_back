<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected  $guarded = ['id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function conditions(){
        return $this->belongsToMany(Condition::class);
    }
//    protected $casts = [
//        'description' => 'array',
//        'title' => 'array',
//    ];
}
