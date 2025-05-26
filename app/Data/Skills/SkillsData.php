<?php

namespace App\Data\Skills;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Support\Validation\ValidationContext;

class SkillsData extends Data
{
    public function __construct(
        public array $skills,
        // public ?string $icon,
        // public int $order,
    )
    {
    }

    public static function rules(ValidationContext $context): array
    {
        return [
            'skills.*.id' => [
                'nullable',
            ],
            'skills.*.name' => [
                'required',
            ],
            'skills.*.icon' => [
                'nullable',
            ],
            'skills.*.order' => [
                'required',
                'integer',
            ],
        ];
    }
}
