<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomecrsSeeder extends Seeder
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
                'title' => '<span>Best</span> HTML Template',
                'image' => 'img/gallery-item-01.jpg'
            ],
            [
                'title' => '<span>Top</span> CSS Theme',
                'image' => 'img/gallery-item-02.jpg'
            ],
            [
                'title' => '<span>Best</span> HTML Template',
                'image' => 'img/gallery-item-03.jpg'
            ],
            [
                'title' => '<span>Great</span> Web Theme',
                'image' => 'img/gallery-item-04.jpg'
            ],
            [
                'title' => '<span>Best</span> HTML Collection',
                'image' => 'img/gallery-item-05.jpg'
            ],
            [
                'title' => '<span>Max</span> CSS Layout',
                'image' => 'img/gallery-item-06.jpg'
            ],
            [
                'title' => '<span>Best</span> HTML Layout',
                'image' => 'img/gallery-item-07.jpg'
            ],
            [
                'title' => '<span>Best</span> CSS Template',
                'image' => 'img/gallery-item-08.jpg'
            ],
        ];

        DB::table('homecrs')->insert($data);
    }
}
