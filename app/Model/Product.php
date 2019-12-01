<?php

namespace App\Model;
use App\Model\Review;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function reviews()
    {
    	return $this->hasMany("App\model\Review"); //$this->hasMany(Review::class)
    }
}
