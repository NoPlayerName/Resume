<?php

namespace App\Data\Auth;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Support\Validation\ValidationContext;

class RegisterData extends Data
{
    public function __construct(
        public string $fullname,
        public string $email,
        public string $password,
    ) {
    }

    public static function rules(): array
    {
        return [
            'fullname' => [
                'required',
                'string',
                'max:255',
            ],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
            ],
            'password' => [
                'required',
                'string',
                'min:8',
            ],
        ];
    }
}
