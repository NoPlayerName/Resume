<?php

namespace App\Action\Skills;

use Lorisleiva\Actions\Concerns\AsAction;
use App\Data\Skills\SkillsData;
use App\Models\Skill;
use Illuminate\Support\Facades\DB;

class StoreSkills
{
    use AsAction;

    public function handle(array $data)
    {
        try {
            DB::beginTransaction();

                if (empty($data['id'])) {
                    $skill = Skill::create($data);
                }else {
                    $skill = Skill::updateOrCreate(
                        ['id' => $data['id']],
                        [
                            'name' => $data['name'],
                            'icon' => $data['icon'],
                            'order' => $data['order'],
                        ]
                    );
                }

            DB::commit();

            return $skill;
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}