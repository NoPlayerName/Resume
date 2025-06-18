<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Skill::insert([
            [
                'name' => 'Laravel',
                'icon' => '<i class="fa fa-brands fa-laravel" style="font-size: 50px; color: #d50000;"></i>',
                'order' => 0,
            ],
            [
                'name' => 'CodeIgniter',
                'icon' => '<i class="fa fa-sharp fa-solid fa-fire" style="font-size: 50px; color: red;"></i>',
                'order' => 1,
            ],
            [
                'name' => 'Next.js',
                'icon' => '<i class="fa fa-brands fa-react" style="color: #3881ff; font-size: 50px;"></i>',
                'order' => 2,
            ],
            [
                'name' => '.NET Core',
                'icon' => '<i class="fa fa-regular fa-file-code" style="color: #0158ef; font-size: 50px;"></i>',
                'order' => 3,
            ],
            [
                'name' => 'PHP',
                'icon' => '<i class="fa fa-brands fa-php" style="font-size: 50px; color: #aab6fe;"></i>',
                'order' => 4,
            ],
            [
                'name' => 'JavaScript',
                'icon' => '<i class="fa fa-brands fa-square-js" style="font-size: 50px; color: #ffee58;"></i>',
                'order' => 5,
            ],
            [
                'name' => 'VB.NET',
                'icon' => '<i class="fa fa-regular fa-file-code" style="color: #0158ef; font-size: 50px;"></i>',
                'order' => 6,
            ],
            [
                'name' => 'HTML',
                'icon' => '<i class="fa fa-brands fa-html5" style="font-size: 50px; color: #ff8f00;"></i>',
                'order' => 7,
            ],
            [
                'name' => 'CSS',
                'icon' => '<i class="fa fa-brands fa-css3-alt" style="font-size: 50px; color: #1c87e5;"></i>',
                'order' => 8,
            ],
            [
                'name' => 'Bootstrap',
                'icon' => '<i class="fa fa-brands fa-bootstrap" style="font-size: 50px; color: #563d7c;"></i>',
                'order' => 9,
            ],
            [
                'name' => 'Tailwind CSS',
                'icon' => '<i class="fa fa-brands fa-css" style="color: #2e7bff; font-size: 50px;"></i>',
                'order' => 10,
            ],

            [
                'name' => 'React.js (TypeScript)',
                'icon' => '<i class="fa fa-brands fa-react" style="font-size: 50px; color: #61dafb;"></i>',
                'order' => 11,
            ],
            [
                'name' => 'MySql',
                'icon' => '<i class="fa fa-solid fa-database" style="font-size: 50px;"></i>',
                'order' => 12,
            ],
            [
                'name' => 'PostgreSql',
                'icon' => '<i class="fa fa-solid fa-database" style="color: #3881ff; font-size: 50px;"></i>',
                'order' => 13,
            ],
            [
                'name' => 'SqlSever',
                'icon' => '<i class="fa fa-solid fa-database" style="font-size: 50px;"></i>',
                'order' => 14,
            ],
            [
                'name' => 'Docker',
                'icon' => '<i class="fa-brands fa-docker" style="color: #29a2ff; font-size: 50px;"></i>',
                'order' => 15,
            ],
            [
                'name' => 'Troubleshooting',
                'icon' => '<i class="fa fa-thin fa-screwdriver-wrench" style="font-size: 50px;"></i>',
                'order' => 16,
            ],
            [
                'name' => 'Basic Networking',
                'icon' => '<i class="fa fa-solid fa-network-wired" style="color: #3292ec; font-size: 50px;"></i>',
                'order' => 17,
            ],

        ]);
    }
}
