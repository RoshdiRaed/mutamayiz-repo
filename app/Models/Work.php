<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'images'];

    protected $casts = [
        'images' => 'array', // Automatically converts JSON to array
    ];
}
