<?php

namespace App\Action\Profile;
use App\Data\Profile\ProfileData;
use App\Enums\JenisDokumen;
use App\Models\Profile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Lorisleiva\Actions\Concerns\AsAction;

class UpdateProfile
{
    use AsAction;

    public function handle(Profile $profile, ProfileData $data)
    {
        try {
            DB::beginTransaction();

            $profile->update([
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
                $oldFilePath = $profile->dokumen()->where('type_dokumen', JenisDokumen::FOTO)->value('file_path');

                if ($oldFilePath && Storage::disk('public')->exists($oldFilePath)) {
                    Storage::disk('public')->delete($oldFilePath);
                }

                $filePath = $data->foto->store(JenisDokumen::FOTO->getDirName(), 'public');

                $profile->dokumen()->update(
                    ['type_dokumen' => JenisDokumen::FOTO],
                    ['file_path' => $filePath]
                );
            }

            DB::commit();

            return $profile;

        } catch (\Throwable $th) {
            DB::rollBack();

            throw $th;
        }
    }
}
