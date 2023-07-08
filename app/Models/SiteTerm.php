<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteTerm extends Model
{
    use HasFactory;

    public $table = 'site_terms';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'title',
        'description',
        'created_at',
        'updated_at',
    ];

}
