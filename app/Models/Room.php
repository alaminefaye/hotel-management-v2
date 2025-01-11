<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'number',
        'image_path',
        'price_per_night',
        'size_feet',
        'max_capacity',
        'bed_type',
        'services',
        'description',
        'status'
    ];
}
