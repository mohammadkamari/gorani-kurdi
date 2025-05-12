<?php

namespace Modules\Singer\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// use Modules\Singer\Database\Factories\SingerFactory;

class Singer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'name',
        'slug',
        'bio',
        'avatar',
        'birth_date',
        'gender',
        'nationality',
        'is_active'
    ];

    // protected static function newFactory(): SingerFactory
    // {
    //     // return SingerFactory::new();
    // }
}
