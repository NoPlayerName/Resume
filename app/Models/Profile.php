<?php

namespace App\Models;

use App\Enums\JenisDokumen;

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

    protected $appends = [
        'foto',
    ];

    protected $casts = [
        'role' => 'array',
        'kontak' => 'array',
        'sosmed' => 'array',
    ];

    public function dokumen()
    {
        return $this->hasOne(Dokumen::class, 'id_profile', 'id')->where('type_dokumen', JenisDokumen::FOTO);
    }

    public function getFotoAttribute()
    {
        $foto = $this->dokumen;
        return $foto ? asset('storage/' . $foto->file_path) : null;
    }
}
