<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    use HasFactory;
    protected $table = 'tutors';
    protected $fillable = ['name', 'position', 'experience', 'image'];
    protected $casts = [
        'experience' => 'json',
    ];
}
