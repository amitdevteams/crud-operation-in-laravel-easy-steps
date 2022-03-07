<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['product_type','productname','product_description','product_quantity','product_color','product_price'];
}
