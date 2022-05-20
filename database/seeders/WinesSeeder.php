<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Models\Wine;


class WinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
// insert 30 random wines

     $faker = Factory::create();
        for ($i = 0; $i < 30; $i++) {
            $wine = new Wine();
            $wine->name = $faker->name;
            $wine->type = $faker->randomElement(['red', 'white', 'rose']);
            $wine->price = $faker->randomFloat(2, 10, 100);
            $wine->quantity = $faker->randomDigit;
            $wine->region = $faker->randomElement(['Italy', 'France', 'Spain', 'Germany', 'Austria']);
            $wine->save();
        }
        





    }
}
