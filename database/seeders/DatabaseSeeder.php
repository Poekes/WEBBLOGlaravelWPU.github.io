<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database. 
     */
    public function run(): void
    {
        
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name'=>'akbar',
        //     'email'=>'akbar@asd.co',
        //     'password'=>bcrypt('12345'),
        // ]);

        // User::create([
        //     'name'=>'dandi',
        //     'email'=>'dandi@asd.co',
        //     'password'=>bcrypt('12345'),
        // ]);
        User::factory(4)->create();

        Category::create([
            'name'=>'programming',
            'slug'=>'programming',
        ]);
        Category::create([
            'name'=>'personal',
            'slug'=>'personal',
        ]);

        Post::factory(20)->create();
        // Post::create([
        //     'category_id'=>1,
        //     'user_id'=>1,
        //     'title'=>'judul pertama',
        //     'slug'=>'judul-pertama',
        //     'excerpt'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores amet quam dignissimos illo quia dolor explicabo non, qui',
        //     'body'=>'<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores amet quam dignissimos illo quia dolor explicabo non, qui consequatur odit iure facere ea aliquam libero, culpa voluptatum cum, optio quis modi. Obcaecati eligendi quisquam expedita labore eveniet dolorem asperiores rem maxime, eum et.</p> <p>Officiis a eaque, totam nihil error hic qui omnis quia ea odit debitis dolorem vitae molestias accusantium ducimus harum iusto voluptatum atque asperiores, cumque delectus cupiditate dolore.</p> <p> Asperiores, odit inventore, nesciunt error soluta architecto et consequatur tempore quas totam quos doloribus molestiae est doloremque nam! Ea beatae odio rem a provident sint deleniti excepturi quas adipisci soluta dolorem aut fuga, accusamus sequi voluptatibus doloribus consectetur quod. Possimus maiores blanditiis hic doloribus necessitatibus distinctio earum minus porro adipisci asperiores assumenda voluptates ab unde quod iusto accusantium, nostrum vitae itaque quasi placeat illo optio perferendis obcaecati? Repudiandae non, itaque magni ducimus eaque.</p> <p> explicabo dolor natus quibusdam qui ea nostrum. Repellat id eligendi autem. Dolores eius sed ipsum optio doloribus laboriosam fuga eveniet excepturi temporibus officiis, odio autem placeat quasi sint laudantium, id quae nam quis sunt labore nisi! Earum doloribus accusamus dolorum, dolor ipsa, provident eaque magnam quos repudiandae a quam laborum iusto, quisquam sed vel ipsam nemo similique.</p>',
        // ]);

        // Post::create([
        //     'category_id'=>1,
        //     'user_id'=>1,
        //     'title'=>'judul Kedua',
        //     'slug'=>'judul-kedua',
        //     'excerpt'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores amet quam dignissimos illo quia dolor explicabo non, qui',
        //     'body'=>'<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores amet quam dignissimos illo quia dolor explicabo non, qui consequatur odit iure facere ea aliquam libero, culpa voluptatum cum, optio quis modi. Obcaecati eligendi quisquam expedita labore eveniet dolorem asperiores rem maxime, eum et.</p> <p>Officiis a eaque, totam nihil error hic qui omnis quia ea odit debitis dolorem vitae molestias accusantium ducimus harum iusto voluptatum atque asperiores, cumque delectus cupiditate dolore.</p> <p> Asperiores, odit inventore, nesciunt error soluta architecto et consequatur tempore quas totam quos doloribus molestiae est doloremque nam! Ea beatae odio rem a provident sint deleniti excepturi quas adipisci soluta dolorem aut fuga, accusamus sequi voluptatibus doloribus consectetur quod. Possimus maiores blanditiis hic doloribus necessitatibus distinctio earum minus porro adipisci asperiores assumenda voluptates ab unde quod iusto accusantium, nostrum vitae itaque quasi placeat illo optio perferendis obcaecati? Repudiandae non, itaque magni ducimus eaque.</p> <p> explicabo dolor natus quibusdam qui ea nostrum. Repellat id eligendi autem. Dolores eius sed ipsum optio doloribus laboriosam fuga eveniet excepturi temporibus officiis, odio autem placeat quasi sint laudantium, id quae nam quis sunt labore nisi! Earum doloribus accusamus dolorum, dolor ipsa, provident eaque magnam quos repudiandae a quam laborum iusto, quisquam sed vel ipsam nemo similique.</p>',
        // ]);

        // Post::create([
        //     'category_id'=>2,
        //     'user_id'=>1,
        //     'title'=>'judul ketiga',
        //     'slug'=>'judul-ketiga',
        //     'excerpt'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores amet quam dignissimos illo quia dolor explicabo non, qui',
        //     'body'=>'<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores amet quam dignissimos illo quia dolor explicabo non, qui consequatur odit iure facere ea aliquam libero, culpa voluptatum cum, optio quis modi. Obcaecati eligendi quisquam expedita labore eveniet dolorem asperiores rem maxime, eum et.</p> <p>Officiis a eaque, totam nihil error hic qui omnis quia ea odit debitis dolorem vitae molestias accusantium ducimus harum iusto voluptatum atque asperiores, cumque delectus cupiditate dolore.</p> <p> Asperiores, odit inventore, nesciunt error soluta architecto et consequatur tempore quas totam quos doloribus molestiae est doloremque nam! Ea beatae odio rem a provident sint deleniti excepturi quas adipisci soluta dolorem aut fuga, accusamus sequi voluptatibus doloribus consectetur quod. Possimus maiores blanditiis hic doloribus necessitatibus distinctio earum minus porro adipisci asperiores assumenda voluptates ab unde quod iusto accusantium, nostrum vitae itaque quasi placeat illo optio perferendis obcaecati? Repudiandae non, itaque magni ducimus eaque.</p> <p> explicabo dolor natus quibusdam qui ea nostrum. Repellat id eligendi autem. Dolores eius sed ipsum optio doloribus laboriosam fuga eveniet excepturi temporibus officiis, odio autem placeat quasi sint laudantium, id quae nam quis sunt labore nisi! Earum doloribus accusamus dolorum, dolor ipsa, provident eaque magnam quos repudiandae a quam laborum iusto, quisquam sed vel ipsam nemo similique.</p>',
        // ]);
        // Post::create([
        //     'category_id'=>2,
        //     'user_id'=>2,
        //     'title'=>'judul ke empat',
        //     'slug'=>'judul-ke-empat',
        //     'excerpt'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores amet quam dignissimos illo quia dolor explicabo non, qui',
        //     'body'=>'<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores amet quam dignissimos illo quia dolor explicabo non, qui consequatur odit iure facere ea aliquam libero, culpa voluptatum cum, optio quis modi. Obcaecati eligendi quisquam expedita labore eveniet dolorem asperiores rem maxime, eum et.</p> <p>Officiis a eaque, totam nihil error hic qui omnis quia ea odit debitis dolorem vitae molestias accusantium ducimus harum iusto voluptatum atque asperiores, cumque delectus cupiditate dolore.</p> <p> Asperiores, odit inventore, nesciunt error soluta architecto et consequatur tempore quas totam quos doloribus molestiae est doloremque nam! Ea beatae odio rem a provident sint deleniti excepturi quas adipisci soluta dolorem aut fuga, accusamus sequi voluptatibus doloribus consectetur quod. Possimus maiores blanditiis hic doloribus necessitatibus distinctio earum minus porro adipisci asperiores assumenda voluptates ab unde quod iusto accusantium, nostrum vitae itaque quasi placeat illo optio perferendis obcaecati? Repudiandae non, itaque magni ducimus eaque.</p> <p> explicabo dolor natus quibusdam qui ea nostrum. Repellat id eligendi autem. Dolores eius sed ipsum optio doloribus laboriosam fuga eveniet excepturi temporibus officiis, odio autem placeat quasi sint laudantium, id quae nam quis sunt labore nisi! Earum doloribus accusamus dolorum, dolor ipsa, provident eaque magnam quos repudiandae a quam laborum iusto, quisquam sed vel ipsam nemo similique.</p>',
        // ]);
    }
}
