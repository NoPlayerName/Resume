<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Skill extends BaseModel
{
    protected $table = 'skill';

    protected $fillable = [
        'name',
        'icon',
        'order',
    ];

    protected $casts = [
        'order' => 'integer',
    ];
}
