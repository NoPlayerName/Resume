<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $table = 'profile';
    
    protected $fillable = [
        'name',
        'role',
        'about_me',
        'tgl_lahir',
        'tmpt_lahir',
        'kontak'
    ];

    protected $casts = [
        'kontak' => 'array',
    ];
}
