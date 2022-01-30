<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert($this->getData());
    }

    private function getData(){
        $data = [];
        for($i = 0; $i < 10; $i++) {
            $faker = Faker::create('ru_RU');
            $data[] = [
                'id' => $faker->numberBetween(rand(4, 10)),
                'title' => $faker->sentence(rand(1, 10)),
                'content' => $faker->sentence(rand(33, 10)),
            ];
        }
        return $data;
    }
}
