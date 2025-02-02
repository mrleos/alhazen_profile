<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    protected $table = 'hero_sections';
    protected $fillable = ['title', 'content', 'image'];
}
