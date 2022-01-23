<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;
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

        // User::create([
        //     'name' => 'Ivan Alissetiyan',
        //     'email' => 'ivanalissetiyan1998@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Nadya Febrianti',
        //     'email' => 'nadyafebri2002@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Rosse Millania',
        //     'email' => 'rosse1999@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::factory(3)->create();

        // Category::create([
        //     'name' => 'Programming',
        //     'slug' => 'programming'
        // ]);

        // Category::create([
        //     'name' => 'UI UX',
        //     'slug' => 'ui-ux'
        // ]);

        // Category::create([
        //     'name' => 'Soft Skill',
        //     'slug' => 'soft-skill'
        // ]);

        Post::factory(2)->create();

        //         Post::create([
        //             'category_id' => '1',
        //             'user_id' => '1',
        //             'title' => 'Judul Pertama',
        //             'slug' => 'judul-pertama',
        //             'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, quibusdam reiciendis iusto doloribus, possimus incidunt excepturi consequatur tempora',
        //             'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, quibusdam reiciendis iusto doloribus, possimus incidunt excepturi consequatur tempora
        // accusantium modi nemo at officia nostrum dolorum soluta recusandae mollitia! Possimus dignissimos debitis ducimus tenetur quo soluta harum a sed ab
        // laboriosam cum corporis, totam aut. Veniam eligendi iure hic dolor officia quod distinctio sit aspernatur ex ipsa voluptatibus nisi facere, beatae labore quis
        // dolorum officiis ullam, possimus sequi, eius magnam ea ducimus velit. Excepturi quasi voluptate expedita veritatis laboriosam, possimus aperiam dignissimos
        // consectetur, provident cumque animi porro sunt vitae quos similique itaque harum eligendi quia? Dolorum nihil quidem, similique ipsum velit iure voluptatum
        // delectus iusto deleniti. Autem alias mollitia culpa deleniti molestias nostrum sunt deserunt quidem esse, reprehenderit consequuntur maiores neque?'
        //         ]);

        //         Post::create([
        //             'category_id' => '1',
        //             'user_id' => '1',
        //             'title' => 'Judul Kedua',
        //             'slug' => 'judul-kedua',
        //             'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, quibusdam reiciendis iusto doloribus, possimus incidunt excepturi consequatur tempora',
        //             'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, quibusdam reiciendis iusto doloribus, possimus incidunt excepturi consequatur tempora
        // accusantium modi nemo at officia nostrum dolorum soluta recusandae mollitia! Possimus dignissimos debitis ducimus tenetur quo soluta harum a sed ab
        // laboriosam cum corporis, totam aut. Veniam eligendi iure hic dolor officia quod distinctio sit aspernatur ex ipsa voluptatibus nisi facere, beatae labore quis
        // dolorum officiis ullam, possimus sequi, eius magnam ea ducimus velit. Excepturi quasi voluptate expedita veritatis laboriosam, possimus aperiam dignissimos
        // consectetur, provident cumque animi porro sunt vitae quos similique itaque harum eligendi quia? Dolorum nihil quidem, similique ipsum velit iure voluptatum
        // delectus iusto deleniti. Autem alias mollitia culpa deleniti molestias nostrum sunt deserunt quidem esse, reprehenderit consequuntur maiores neque?'
        //         ]);

        //         Post::create([
        //             'category_id' => '3',
        //             'user_id' => '2',
        //             'title' => 'Judul Ketiga',
        //             'slug' => 'judul-ketiga',
        //             'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, quibusdam reiciendis iusto doloribus, possimus incidunt excepturi consequatur tempora',
        //             'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, quibusdam reiciendis iusto doloribus, possimus incidunt excepturi consequatur tempora
        // accusantium modi nemo at officia nostrum dolorum soluta recusandae mollitia! Possimus dignissimos debitis ducimus tenetur quo soluta harum a sed ab
        // laboriosam cum corporis, totam aut. Veniam eligendi iure hic dolor officia quod distinctio sit aspernatur ex ipsa voluptatibus nisi facere, beatae labore quis
        // dolorum officiis ullam, possimus sequi, eius magnam ea ducimus velit. Excepturi quasi voluptate expedita veritatis laboriosam, possimus aperiam dignissimos
        // consectetur, provident cumque animi porro sunt vitae quos similique itaque harum eligendi quia? Dolorum nihil quidem, similique ipsum velit iure voluptatum
        // delectus iusto deleniti. Autem alias mollitia culpa deleniti molestias nostrum sunt deserunt quidem esse, reprehenderit consequuntur maiores neque?'
        //         ]);

        //         Post::create([
        //             'category_id' => '2',
        //             'user_id' => '3',
        //             'title' => 'Judul Keempat',
        //             'slug' => 'judul-keempat',
        //             'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, quibusdam reiciendis iusto doloribus, possimus incidunt excepturi consequatur tempora',
        //             'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, quibusdam reiciendis iusto doloribus, possimus incidunt excepturi consequatur tempora
        // accusantium modi nemo at officia nostrum dolorum soluta recusandae mollitia! Possimus dignissimos debitis ducimus tenetur quo soluta harum a sed ab
        // laboriosam cum corporis, totam aut. Veniam eligendi iure hic dolor officia quod distinctio sit aspernatur ex ipsa voluptatibus nisi facere, beatae labore quis
        // dolorum officiis ullam, possimus sequi, eius magnam ea ducimus velit. Excepturi quasi voluptate expedita veritatis laboriosam, possimus aperiam dignissimos
        // consectetur, provident cumque animi porro sunt vitae quos similique itaque harum eligendi quia? Dolorum nihil quidem, similique ipsum velit iure voluptatum
        // delectus iusto deleniti. Autem alias mollitia culpa deleniti molestias nostrum sunt deserunt quidem esse, reprehenderit consequuntur maiores neque?'
        //         ]);
    }
}
