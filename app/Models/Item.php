<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'price',
        'stock',
        'picture',
    ];
    protected $garded = [
        'id',
        'create_at',
        'updated_at',
    ];
    protected $dates = [
        'create_at',
        'updated_at',
    ];
}
