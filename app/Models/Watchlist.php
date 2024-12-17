<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Watchlist extends Model
{
    use HasFactory;

    protected $table = 'watchlists';
    
    protected $fillable = [
        'user_id',
        'post_id',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'expire_at',
    ];

    
}
