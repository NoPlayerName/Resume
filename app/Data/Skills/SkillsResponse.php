<?php

namespace App\Data\Skills;

use Spatie\LaravelData\Data;
use App\Models\Skill;

class SkillsResponse extends Data
{
    public function __construct(
     
        public ?array $skills,
    ) {
    }

    public static function fromModel(Skill $skill): self
    {
        return new self(
            skills: [
                'id' => $skill->id,
                'name' => $skill->name,
                'icon' => $skill->icon,
                'order' => $skill->order,
            ],
        );
    }
}