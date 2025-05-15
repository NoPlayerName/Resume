<?php

namespace App\Data\Auth;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Support\Validation\ValidationContext;

class LoginData extends Data
{
    public function __construct(
        public string $username,
        public string $password,
    ) {
    }

    public static function rules(): array
    {
        return [
            'username' => [
                'required',
                'string'
            ],
            'password' => [
                'required',
                'string',
                'min:8',
            ],
        ];
    }
}
