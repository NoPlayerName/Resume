<?php

namespace App\Data\Profile;

use Illuminate\Http\UploadedFile;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Support\Validation\ValidationContext;

class ProfileData extends Data
{
    public function __construct(
        public string $name,
        public ?UploadedFile $foto,
        public array $role,
        public string $about_me,
        public string $tmpt_lahir,
        public string $tgl_lahir,
        public ?array $sosmed,
        public ?array $kontak,
    )
    {
    }

    public static function rules(ValidationContext $context): array
    {
        return [
            'foto' => [
                'nullable',
                'file',
                'max:2048',
                'mimes:jpg, jpeg'
            ],
            'name' => [
                'required',
            ],

            'kontak.email' => [
                'nullable',
                'email',
            ],

            'kontak.hp' => [
                'nullable',
            ],


        ];
    }
}