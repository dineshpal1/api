<?php

namespace App\Model;
use App\Model\Product;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
   public function product()
   {
   	return $this->belongsTo("App\Model\Product"); //$this->belongsTo(Product::class)
   }
}
