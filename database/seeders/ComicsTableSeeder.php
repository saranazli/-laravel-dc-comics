<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comics = config('comics');

        foreach($comics as $comic){
            $new_comic = new Comic();
            $new_comic->title = $comic['title'];
            $new_comic->price = $comic['price']; 
            $new_comic->series = $comic['series'];
            $new_comic->type = $comic['type']; 

            $new_comic->save();

        }
    }
}
