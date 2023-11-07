<?php

namespace Database\Seeders;

use App\Models\Boardgame;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class BoardgameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $new_boardgame = new Boardgame();

            $new_boardgame->name = $faker->word();

            $new_boardgame->thumb = $faker->image(null, 640, 480);
            $new_boardgame->description = $faker->realText();
            $new_boardgame->min_age = $faker->randomDigit();
            $new_boardgame->price = $faker->randomFloat(2, 10, 100);

            $new_boardgame->save();
        }
    }
}
