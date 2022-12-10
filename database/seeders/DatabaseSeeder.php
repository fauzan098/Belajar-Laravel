<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        // \App\Models\User::factory()->create([
            //     'name' => 'Test User',
            //     'email' => 'test@example.com',
            // ]);
            
            User::create([
                    'name' => 'Muhammad Arif Fauzan',
                    'username' => 'Fauzan',
                    'email' => 'fauzan@mail.com',
                    'password' => bcrypt('12345')
                ]);

        User::factory(3)->create();
                
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, ipsum obcaecati accusantium saepe illum facere assumenda amet',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, ipsum obcaecati accusantium saepe illum facere assumenda amet. Minima ipsa esse maiores soluta fugiat dignissimos sint ducimus exercitationem. Enim, in ducimus natus nihil quod necessitatibus, esse fuga ratione, nobis officiis ea! Suscipit sapiente commodi nemo ullam cumque accusantium adipisci quasi animi itaque, ratione necessitatibus praesentium repellat ut ipsum. Maxime minus eligendi fugit officia quisquam ratione quas necessitatibus beatae molestias tempora, hic libero. Aliquam nobis eius perferendis quas maxime distinctio reprehenderit veniam nisi impedit, magnam esse eaque architecto in minus! Aspernatur ab dolorem harum velit delectus error consectetur nostrum cumque animi quae.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul ke dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, ipsum obcaecati accusantium saepe illum facere assumenda amet',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, ipsum obcaecati accusantium saepe illum facere assumenda amet. Minima ipsa esse maiores soluta fugiat dignissimos sint ducimus exercitationem. Enim, in ducimus natus nihil quod necessitatibus, esse fuga ratione, nobis officiis ea! Suscipit sapiente commodi nemo ullam cumque accusantium adipisci quasi animi itaque, ratione necessitatibus praesentium repellat ut ipsum. Maxime minus eligendi fugit officia quisquam ratione quas necessitatibus beatae molestias tempora, hic libero. Aliquam nobis eius perferendis quas maxime distinctio reprehenderit veniam nisi impedit, magnam esse eaque architecto in minus! Aspernatur ab dolorem harum velit delectus error consectetur nostrum cumque animi quae.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul ke tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, ipsum obcaecati accusantium saepe illum facere assumenda amet',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, ipsum obcaecati accusantium saepe illum facere assumenda amet. Minima ipsa esse maiores soluta fugiat dignissimos sint ducimus exercitationem. Enim, in ducimus natus nihil quod necessitatibus, esse fuga ratione, nobis officiis ea! Suscipit sapiente commodi nemo ullam cumque accusantium adipisci quasi animi itaque, ratione necessitatibus praesentium repellat ut ipsum. Maxime minus eligendi fugit officia quisquam ratione quas necessitatibus beatae molestias tempora, hic libero. Aliquam nobis eius perferendis quas maxime distinctio reprehenderit veniam nisi impedit, magnam esse eaque architecto in minus! Aspernatur ab dolorem harum velit delectus error consectetur nostrum cumque animi quae.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
    }
}
