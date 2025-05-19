<?php

namespace App\Data\Profile;

use Spatie\LaravelData\Data;
use App\Models\Profile;

class ProfileResponse extends Data
{
    public function __construct(
        public ?int $id,
        public ?string $name,
        public ?string $foto,
        public ?array $role,
        public ?string $about_me,
        public ?string $tmpt_lahir,
        public ?string $tgl_lahir,
        public ?array $sosmed,
        public ?array $kontak,
    ) {
    }

    public static function fromModel(Profile $profile): self
    {
        return new self(
            id: $profile->id,
            foto: $profile->foto,
            name: $profile->name,
            role: $profile->role,
            about_me: $profile->about_me,
            tmpt_lahir: $profile->tmpt_lahir,
            tgl_lahir: $profile->tgl_lahir,
            sosmed: $profile->sosmed,
            kontak: $profile->kontak,
        );
    }
}