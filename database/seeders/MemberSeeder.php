<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberSeeder extends Seeder
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
                'title' => 'John Stone',
                'image' => 'img/team-img-01.jpg'
            ],
            [
                'title' => 'Jane Meldrum',
                'image' => 'img/team-img-02.jpg'
            ],
            [
                'title' => 'Trevor Virtue',
                'image' => 'img/team-img-03.jpg'
            ],
            [
                'title' => 'Emily Moore',
                'image' => 'img/team-img-04.jpg'
            ],
            [
                'title' => 'Claire Li',
                'image' => 'img/team-img-05.jpg'
            ],
            [
                'title' => 'Elisabeth Shu',
                'image' => 'img/team-img-06.jpg'
            ],
            [
                'title' => 'Dania Liu',
                'image' => 'img/team-img-07.jpg'
            ],
            [
                'title' => 'Miracle Yang',
                'image' => 'img/team-img-08.jpg'
            ],
        ];

        DB::table('members')->insert($data);
    }
}
