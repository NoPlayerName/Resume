<?php

namespace App\Models;

class Profile extends BaseModel
{


    protected $table = 'profile';

    protected $fillable = [
        'name',
        'role',
        'about_me',
        'tgl_lahir',
        'tmpt_lahir',
        'kontak',
        'sosmed',
    ];

    protected $casts = [
        'kontak' => 'array',
        'sosmed' => 'array',
    ];

    public function foto()
    {
        return $this->hasOne(Dokumen::class, 'id', 'id_profile');
    }
}
