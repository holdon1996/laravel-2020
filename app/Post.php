<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * Fillable variable
     */

    protected $fillable = ['title', 'description'];
}
