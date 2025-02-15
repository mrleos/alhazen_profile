<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $table = 'registers';
    protected $guarded = ['id'];
    protected $casts = [
        'persyaratan' => 'json',
    ];
}
