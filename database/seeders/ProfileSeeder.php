<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profile::create([
            'name' => 'Muhammad Ruhiyat',
            'role' => ['Software Developer', 'IT Support'],
            'tmpt_lahir' => 'Karawang',
            'about_me' => '<p style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:16px;"> Saya Muhammad Ruhiyat, seorang software developer dan IT support. Saat ini, saya bekerja di PT Duta Visual Nusantara Tivi Tujuh (Trans7) sebagai software developer. Saya memiliki pengalaman dalam berbagai teknologi dan tools, seperti HTML, CSS, PHP, JavaScript, .NET Core, React, 
                                    TypeScript, Next.js, CodeIgniter, Laravel, Bootstrap, Tailwind, Docker, Git, MySQL, 
                                    PostgreSQL, serta keterampilan dalam troubleshooting hardware, troubleshooting software, dan basic networking.</span></p>

                                    <ul>
                                        <li style="text-align: justify;"><span style="font-size:16px;"><strong>Tanggal Lahir&nbsp;&nbsp;&nbsp; : </strong>2 September 1998</span></li>
                                        <li><span style="font-size:16px;"><strong>Tempat Tinggal :</strong> Karawang</span></li>
                                        <li><span style="font-size:16px;"><strong>Pendidkan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</strong> Teknik Informatika</span></li>
                                    </ul>',
            'tgl_lahir' => '1998-09-02', 
        ]);
    }
}
