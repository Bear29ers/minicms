<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */

    public function run()
    {
        \Event::fakeFor(function() {
            Post::factory()->count(50)->create();
        });
    }
}
