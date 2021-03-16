<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'title' => 'Best Collection',
                'content' => 'Aliquam purus arcu, congue a gravida ac, facilisis vel erat. Maecenas pretium sem.',
                'image' => 'img/img-3x2-01.jpg'
            ],
            [
                'title' => 'New Design For Your Website',
                'content' => 'Aliquam purus arcu, congue a gravida ac, facilisis vel erat. Maecenas pretium sem.',
                'image' => 'img/img-3x2-01.jpg'
            ],
            [
                'title' => 'Most Unique Idea Ever Made',
                'content' => 'Aliquam purus arcu, congue a gravida ac, facilisis vel erat. Maecenas pretium sem.',
                'image' => 'img/img-3x2-01.jpg'
            ],
            [
                'title' => 'Simple Touch',
                'content' => 'Aliquam purus arcu, congue a gravida ac, facilisis vel erat. Maecenas pretium sem.',
                'image' => 'img/img-3x2-01.jpg'
            ],
        ];

        DB::table('posts')->insert($data);
    }
}
