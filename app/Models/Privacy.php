<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Privacy extends Model
{
    use HasFactory;

    protected $table = 'privacy';

    protected $fillable = [
        'privacy',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'created_at',
        'updated_at',
    ];
}
