<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Category;
use App\Models\Post;
use App\Models\Posts;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();

        // \App\Models\User::factory(10)->create();

        // User::create([
        //     'name' =>  'm roichani',
        //     'email' => 'beensholih@gmail.com',
        //     'password' => bcrypt('12345'),
        // ]);
        // Category::create([
        //     'name' => 'Web Programming',
        //     'slug' => 'web-programing',
        // ]);
        // Category::create([
        //     'name' => 'Mobile Programming',
        //     'slug' => 'mobile-programing',
        // ]);
        Post::factory(10)->create();
        // Post::create([
        //     'title' => 'Web Programming kedua',
        //     'slug' => 'web-programming-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero, vel!',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, facere repellat harum quis est itaque eveniet similique minus quisquam nemo praesentium, optio, voluptatem deserunt aliquam quas exercitationem doloribus accusantium accusamus quidem impedit error sint officia provident. Molestias quae repellendus asperiores recusandae. Consequuntur totam magni aperiam explicabo, animi aspernatur perspiciatis dolore eligendi quae assumenda commodi consectetur repellendus impedit fuga iste provident tenetur incidunt, doloremque, possimus eos. Est incidunt pariatur fuga, sint, enim minima ea quia dolores quo rerum veritatis commodi illo accusamus numquam ad alias totam praesentium vel nisi cupiditate, molestiae quos deleniti laudantium. Commodi consequuntur temporibus, rerum velit amet corrupti?',
        //     'user_id' => 1,
        //     'category_id' => 1
        // ]);
    }
}
