<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $train = new Train;
        $train->company = 'Test';
        $train->from_station = 'Roma';
        $train->to_station = 'Milano';
        $train->departure = now();
        $train->arrival = now();
        $train->train_code = 12901;
        $train->coaches_number = 10;
        $train->on_time = true;
        $train->cancelled = false;
        $train->save();
    }
}
