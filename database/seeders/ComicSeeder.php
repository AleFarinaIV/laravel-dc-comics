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
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $comic = new Comic();

            $comic->title = $faker->sentence(5);
            $comic->description = $faker->text(200);
            $comic->thumb = $faker->imageUrl();
            $comic->price = $faker->randomFloat(2,1,100);
            $comic->series = implode(' ', $faker->words(10, false));
            $comic->sale_date = $faker->date();
            $comic->type = $faker->randomElement([
                'graphic novel',
                'comic book',
                'manga',
                'webcomic'
            ]);

            $comic->save();
        }
    }
}
