<?php

namespace App\Action\Profile;

use App\Data\Profile\ProfileData;
use App\Enums\JenisDokumen;
use App\Models\Profile;
use Illuminate\Support\Facades\DB;
use Lorisleiva\Actions\Concerns\AsAction;

class StoreProfile
{
    use AsAction;

    public function handle(ProfileData $data)
    {
        try {
             DB::beginTransaction();

               $profile = Profile::create([
                    'name' => $data->name,
                    'role' => $data->role,
                    'about_me' => $data->about_me,
                    'tgl_lahir' => $data->tgl_lahir,
                    'tmpt_lahir' => $data->tmpt_lahir,
                    'kontak' => $data->kontak,
                    'sosmed' => $data->sosmed,
               ]);

               if($data->foto)
               {
                    $filePath = $data->foto->store(JenisDokumen::FOTO->getDirName(), 'public');

                    $profile->foto()->create([
                        'type_dokumen' => JenisDokumen::FOTO,
                        'file_path' => $filePath,
                    ]);
               }


             DB::commit();

             return $profile;

        } catch (\Throwable $th) {
            DB::rollBack();

            throw $th;
        }
    }
}
