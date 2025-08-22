<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FavoriteItems extends Model
{
   protected $guarded = ['id'];

   public function favorite(){
       return $this->belongsTo(Favorite::class);
   }

   public function product(){
       return $this->belongsTo(Product::class);
   }
}
