<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Category;
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
      $users = User::all();
      $categories = Category::all();
      $users->each(function ($user) use ($categories) {
          $categories->each(function ($category) use ($user) {
              factory(Post::class, 10)->create([
                  'user_id' => $user->id,
                  'category_id' => $category->id
              ]);
          });
      });
    }
}
