<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'user_title',
        'user_name',
        'user_phone',
        'user_email',
        'user_address',
        'product_title',
        'price',
        'qauntity',
        'image',
    ];
}
