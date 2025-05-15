<?php

namespace App\Models;



class Dokumen extends BaseModel
{

    protected $table = 'dokumen';

    protected $fillable = [
        'id_profile',
        'type_dokumen',
        'file_path',
    ];


    public function profile()
    {
        return $this->belongsTo(Profile::class, 'id_profile', 'id');
    }

}
