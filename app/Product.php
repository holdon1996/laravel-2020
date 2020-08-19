<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * Set fillable variable
     */

    protected $fillable = ['title', 'product_code', 'description'];
}
