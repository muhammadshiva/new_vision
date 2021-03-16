<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
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
                'title' => 'Business Strategy',
                'image' => 'img/services-1.jpg'
            ],
            [
                'title' => 'Digital Marketing',
                'image' => 'img/services-2.jpg'
            ],
            [
                'title' => 'Social Platform',
                'image' => 'img/services-3.jpg'
            ],
            [
                'title' => 'New Media',
                'image' => 'img/services-4.jpg'
            ],
        ];
        DB::table('services')->insert($data);
    }
}
