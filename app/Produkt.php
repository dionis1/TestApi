<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produkt extends Model
{
    protected $fillable = ['product_name', 'product_description', 'product_price', 'product_quantity'];

}
