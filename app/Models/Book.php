<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable =[
        'title', 'description', 'thumb', 'price', 'series', 'sale_date', 'type'
    ];
}
