<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Favorite extends Model
{
    use HasFactory;

    protected $table = 'favoritos';
    public $timestamps = true;

    protected $fillable = [
        'name',
        'type',
        'url',
        'user_id',
        'created_at',
    ];
}
