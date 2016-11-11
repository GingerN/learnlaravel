<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new App\Post;
        $table->title = 'My first post';
        $table->body = 'I love Laravel with Edwin Diaz';
        $table->user_id = 8;
        $table->category_id = 3;
        $table->save();
    }
}
