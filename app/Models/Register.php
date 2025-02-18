<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $table = 'registers';
    protected $fillable = ['image', 'persyaratan', 'deskripsi'];
    protected $casts = [
        'persyaratan' => 'json',
    ];
}
