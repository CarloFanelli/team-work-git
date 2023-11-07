<?php

namespace Database\Seeders;

use App\Models\Cardgame;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CardgameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $new_cardgame = new Cardgame();
            $new_cardgame->name = $faker->realText(50);
            $new_cardgame->type = $faker->realText(50);
            $new_cardgame->price = $faker->randomFloat(2, 0, 100);
            $new_cardgame->thumb = $faker->imageUrl();
            $new_cardgame->description = $faker->realText(250);
            $new_cardgame->save();
        }
    }
}
