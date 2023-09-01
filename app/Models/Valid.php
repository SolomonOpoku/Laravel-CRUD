<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Valid extends Model
{
    use HasFactory;
    protected $table = 'Valid';
    protected $fillable = [
        'name',
        'age',
        'DOB',
        'profile_picture'
    ];
}
