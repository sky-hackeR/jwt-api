<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::factory()
            ->count(10)
            ->hasComments(20)
            ->create();
            
        Post::factory()
            ->count(5)
            ->hasComments(15)
            ->create();

        Post::factory()
            ->count(5)
            ->hasComments(5)
            ->create();
    } 
}
