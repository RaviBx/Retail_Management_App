<?php

namespace Database\Seeders;

use App\Models\Upcoming;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;

class UpcomingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for($i = 0; $i<5; $i++){

            Upcoming::create([

                'completed' => false,
                'title'     => $faker->sentence($nbwords = 4, $varialbewords = false),
                'approved'  => true,
                'waiting'   => true,
                'taskID'    =>  Str::random(10)

            ]);


        }



    }
}
