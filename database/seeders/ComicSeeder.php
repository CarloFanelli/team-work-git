<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Comic;
use Faker\Generator as Faker;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {

            $new_comics = new Comic();
            $new_comics->title = $faker->word();
            $new_comics->description = $faker->realText();
            $new_comics->image = $faker->image(null, 600, 400);
            $new_comics->price = $faker->randomFloat(2, 10, 100);
            $new_comics->type = $faker->word();

            $new_comics->save();
        }
    }
}
