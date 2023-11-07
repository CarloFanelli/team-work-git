<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {

            $new_author = new Author();

            $new_author->name = $faker->firstName();
            $new_author->surname = $faker->lastName();
            $new_author->state = $faker->state();
            $new_author->born_date = $faker->date();

            $new_author->save();
        }
    }
}
