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
            'about_me' => '<p data-end="272" data-start="110">&nbsp; &nbsp; &nbsp;Halo, saya Muhammad Ruhiyat, lulusan Teknik Informatika dari Universitas Singaperbangsa Karawang. Saya sudah berkecimpung di dunia IT selama kurang lebih 5 tahun.</p>

                            <p data-end="737" data-start="274">&nbsp; &nbsp; &nbsp;Saat ini saya bekerja sebagai Software Developer di Trans7, dan sudah menjalani peran ini selama 3 tahun terakhir. Dalam pekerjaan sehari-hari, saya terbiasa menggunakan berbagai teknologi seperti Laravel, CodeIgniter, Next.js, dan juga pernah menggunakan .NET Core. Untuk bahasa pemrograman, saya menggunakan PHP dan JavaScript, serta pernah bekerja juga dengan VB.NET. Di sisi front-end, saya menggunakan Bootstrap, Tailwind CSS, dan React.js dengan TypeScript.</p>

                            <p data-end="896" data-start="739">&nbsp; &nbsp; &nbsp;Saya juga menggunakan Docker dalam proses pengembangan aplikasi, dan pernah bekerja dengan berbagai jenis database seperti MySQL, PostgreSQL, dan SQL Server.</p>

                            <p data-end="1147" data-start="898">&nbsp; &nbsp; &nbsp;Sebelum menjadi developer, saya sempat bekerja sebagai IT Support di sebuah rumah sakit selama sekitar 2 tahun. Di sana, saya dipercaya untuk menjadi Koordinator IT dan ikut menangani berbagai kebutuhan teknologi informasi di lingkungan rumah sakit.</p>',
            'tgl_lahir' => '1998-09-02',
        ]);
    }
}