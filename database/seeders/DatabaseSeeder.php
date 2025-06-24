<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Actor;
use App\Models\Category;
use App\Models\Movie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Kudriashova Anastaciia',
            'email' => 'kudriashova.ag@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'admin'
        ]);


        $categories = Category::factory()->count(5)->create();
        $actors = Actor::factory()->count(20)->create();

        Movie::factory()->count(15)->create()->each(function ($movie) use ($categories, $actors) {
            $movie->category()->associate($categories->random());
            $movie->actors()->attach($actors->random(3));
            $movie->save();
        });


        /*$categories = [
            ['Action', 'Action movies with thrilling sequences and stunts.', 'images/action.png'],
            ['Fantasy', 'Fantasy movies with magical elements and adventures.', 'images/fantasy.png'],
            ['Horror', 'Horror movies that will keep you on the edge of your seat.', 'images/horror.png'],
            ['Drama', 'Dramatic movies that explore emotional themes and character development.', 'images/drama.png'],
            ['Sci-Fi', 'Science fiction movies exploring futuristic concepts and technology.', 'images/sci-fi.png'],
            ['Comedy', 'Light-hearted movies designed to amuse and entertain.', 'images/comedy.png'],
        ];

        foreach ($categories as [$name, $description, $image]) {
            Category::factory()->create([
                'name' => $name,
                'description' => $description,
                'image' => $image
            ]);
        }

        $movies = [
            ['Edge of Tomorrow', 'A soldier relives the same day over and over again, using it to fight alien invaders.', 'movies/edge_of_tomorrow.jpg', 'https://www.youtube.com/watch?v=yUmSVcttXnI', 'Action'],
            ['The Lord of the Rings', 'An epic journey to destroy a powerful ring and defeat evil.', 'movies/lotr.jpg', 'https://www.youtube.com/watch?v=V75dMMIW2B4', 'Fantasy'],
            ['The Conjuring', 'Paranormal investigators help a family terrorized by a dark presence.', 'movies/conjuring.jpg', 'https://www.youtube.com/watch?v=k10ETZ41q5o', 'Horror'],
            ['The Pursuit of Happyness', 'A struggling salesman takes custody of his son and works toward a better life.', 'movies/pursuit.jpg', 'https://www.youtube.com/watch?v=DMOBlEcRuw8', 'Drama'],
            ['Interstellar', 'A team of explorers travel through a wormhole in space to save humanity.', 'movies/interstellar.jpg', 'https://www.youtube.com/watch?v=zSWdZVtXT7E', 'Sci-Fi'],
            ['The Hangover', 'Three friends wake up from a bachelor party in Las Vegas with no memory.', 'movies/hangover.jpg', 'https://www.youtube.com/watch?v=tcdUhdOlz9M', 'Comedy'],
            ['Alien', 'The crew of a spaceship encounters a deadly alien lifeform in deep space.', 'movies/alien.jpg', 'https://www.youtube.com/watch?v=LjLamj-b0I8', 'Horror'],
            ['Friday the 13th', 'Camp counselors are stalked and murdered by an unknown assailant.', 'movies/friday_13th.jpg', 'https://www.youtube.com/watch?v=ufR7v6tGNTY', 'Horror'],
            ['The Shining', 'A family heads to an isolated hotel where a sinister presence drives the father insane.', 'movies/the_shining.jpg', 'https://www.youtube.com/watch?v=S014oGZiSdI', 'Horror'],
            ['The Exorcist', 'A mother seeks the help of two priests to save her daughter from demonic possession.', 'movies/the_exorcist.jpg', 'https://www.youtube.com/watch?v=YDGw1MTEe9k', 'Horror'],
        ];

        foreach ($movies as [$title, $description, $image, $url, $categoryName]) {
            $category = Category::where('name', $categoryName)->first();

            if ($category) {
                Movie::create([
                    'title' => $title,
                    'description' => $description,
                    'image' => $image,
                    'url' => $url,
                    'category_id' => $category->id,
                ]);
            }
        }*/
    }
}
