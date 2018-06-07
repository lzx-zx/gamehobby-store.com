<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guard = 'admin';
    protected $table = 'products';

    protected $fillable = [
        'name', 'detail', 'description'
    ];

    protected $hidden = [
        'status', 'disabled'
    ];
}
