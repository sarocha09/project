<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'image',
        'name',
        'pice',
        'detail',
        'category_id'
    ];
}
