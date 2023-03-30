<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++) {
            $train = new Train;
            $train->company = $faker->company();
            $train->from_station = $faker->city();
            $train->to_station = $faker->city();
            $train->departure = $faker->dateTimeBetween('-1 day', '+1 week');
            $train->arrival = $faker->dateTimeBetween('-1 day', '+1 week');
            $train->train_code = $faker->randomNumber(6, true);
            $train->coaches_number = $faker->randomNumber(2, true);
            $train->on_time = $faker->boolean();
            $train->cancelled = $faker->boolean();
            $train->save();
        }
    }
}
