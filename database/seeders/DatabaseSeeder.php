<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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

        User::create([
            'name' => 'Nugraha Akbar',
            'username' => 'nugrahaakbar',
            'email' => 'garuda.bangkit@gmail.com',
            'password' => bcrypt('password')
        ]);

        // User::create([
        //     'name' => 'Kim Min Jeong',
        //     'email' => 'winter@aespa.com',
        //     'password' => bcrypt('12345')
        // ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis natus, est vero nemo sint nesciunt nisi voluptatibus culpa hic obcaecati laborum ullam expedita voluptates quod ab porro praesentium error facilis labore esse fugit impedit. Vel maxime suscipit fugiat corrupti sunt rerum quas iste ipsam. Doloribus ut beatae quas autem cupiditate odit perferendis ducimus molestiae, cumque vero, rerum sapiente eius nemo omnis dolore inventore voluptatibus et minima alias quae eligendi ex velit? Quas illo id tempora hic saepe iure itaque sit molestias commodi, error sunt expedita, necessitatibus amet distinctio quidem et suscipit odio exercitationem fuga magni.</p><p>Earum voluptas corrupti officia, dolores ipsa iusto magnam quod labore numquam in quibusdam amet quasi deleniti laboriosam expedita magni molestias aut omnis aliquam, aliquid tempora saepe nam! Recusandae dolor et asperiores dolorum nesciunt consectetur odit esse, sed exercitationem eius officia, totam ipsa non debitis cupiditate ipsum? Porro debitis eligendi recusandae, est ullam sunt quo alias ipsum! Laboriosam quaerat doloribus reprehenderit aliquam sed cumque aut, fuga, inventore, quas odit perferendis qui facilis deleniti tempora deserunt vitae! Accusantium doloribus, natus eius labore unde corporis sint consequatur rem dolorum ut id, tempore aliquid enim vitae impedit velit nostrum maiores animi, laboriosam saepe? Nihil molestiae tempore dolores alias illo?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis natus, est vero nemo sint nesciunt nisi voluptatibus culpa hic obcaecati laborum ullam expedita voluptates quod ab porro praesentium error facilis labore esse fugit impedit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis natus, est vero nemo sint nesciunt nisi voluptatibus culpa hic obcaecati laborum ullam expedita voluptates quod ab porro praesentium error facilis labore esse fugit impedit. Vel maxime suscipit fugiat corrupti sunt rerum quas iste ipsam. Doloribus ut beatae quas autem cupiditate odit perferendis ducimus molestiae, cumque vero, rerum sapiente eius nemo omnis dolore inventore voluptatibus et minima alias quae eligendi ex velit? Quas illo id tempora hic saepe iure itaque sit molestias commodi, error sunt expedita, necessitatibus amet distinctio quidem et suscipit odio exercitationem fuga magni.</p><p>Earum voluptas corrupti officia, dolores ipsa iusto magnam quod labore numquam in quibusdam amet quasi deleniti laboriosam expedita magni molestias aut omnis aliquam, aliquid tempora saepe nam! Recusandae dolor et asperiores dolorum nesciunt consectetur odit esse, sed exercitationem eius officia, totam ipsa non debitis cupiditate ipsum? Porro debitis eligendi recusandae, est ullam sunt quo alias ipsum! Laboriosam quaerat doloribus reprehenderit aliquam sed cumque aut, fuga, inventore, quas odit perferendis qui facilis deleniti tempora deserunt vitae! Accusantium doloribus, natus eius labore unde corporis sint consequatur rem dolorum ut id, tempore aliquid enim vitae impedit velit nostrum maiores animi, laboriosam saepe? Nihil molestiae tempore dolores alias illo?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis natus, est vero nemo sint nesciunt nisi voluptatibus culpa hic obcaecati laborum ullam expedita voluptates quod ab porro praesentium error facilis labore esse fugit impedit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis natus, est vero nemo sint nesciunt nisi voluptatibus culpa hic obcaecati laborum ullam expedita voluptates quod ab porro praesentium error facilis labore esse fugit impedit. Vel maxime suscipit fugiat corrupti sunt rerum quas iste ipsam. Doloribus ut beatae quas autem cupiditate odit perferendis ducimus molestiae, cumque vero, rerum sapiente eius nemo omnis dolore inventore voluptatibus et minima alias quae eligendi ex velit? Quas illo id tempora hic saepe iure itaque sit molestias commodi, error sunt expedita, necessitatibus amet distinctio quidem et suscipit odio exercitationem fuga magni.</p><p>Earum voluptas corrupti officia, dolores ipsa iusto magnam quod labore numquam in quibusdam amet quasi deleniti laboriosam expedita magni molestias aut omnis aliquam, aliquid tempora saepe nam! Recusandae dolor et asperiores dolorum nesciunt consectetur odit esse, sed exercitationem eius officia, totam ipsa non debitis cupiditate ipsum? Porro debitis eligendi recusandae, est ullam sunt quo alias ipsum! Laboriosam quaerat doloribus reprehenderit aliquam sed cumque aut, fuga, inventore, quas odit perferendis qui facilis deleniti tempora deserunt vitae! Accusantium doloribus, natus eius labore unde corporis sint consequatur rem dolorum ut id, tempore aliquid enim vitae impedit velit nostrum maiores animi, laboriosam saepe? Nihil molestiae tempore dolores alias illo?</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis natus, est vero nemo sint nesciunt nisi voluptatibus culpa hic obcaecati laborum ullam expedita voluptates quod ab porro praesentium error facilis labore esse fugit impedit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis natus, est vero nemo sint nesciunt nisi voluptatibus culpa hic obcaecati laborum ullam expedita voluptates quod ab porro praesentium error facilis labore esse fugit impedit. Vel maxime suscipit fugiat corrupti sunt rerum quas iste ipsam. Doloribus ut beatae quas autem cupiditate odit perferendis ducimus molestiae, cumque vero, rerum sapiente eius nemo omnis dolore inventore voluptatibus et minima alias quae eligendi ex velit? Quas illo id tempora hic saepe iure itaque sit molestias commodi, error sunt expedita, necessitatibus amet distinctio quidem et suscipit odio exercitationem fuga magni.</p><p>Earum voluptas corrupti officia, dolores ipsa iusto magnam quod labore numquam in quibusdam amet quasi deleniti laboriosam expedita magni molestias aut omnis aliquam, aliquid tempora saepe nam! Recusandae dolor et asperiores dolorum nesciunt consectetur odit esse, sed exercitationem eius officia, totam ipsa non debitis cupiditate ipsum? Porro debitis eligendi recusandae, est ullam sunt quo alias ipsum! Laboriosam quaerat doloribus reprehenderit aliquam sed cumque aut, fuga, inventore, quas odit perferendis qui facilis deleniti tempora deserunt vitae! Accusantium doloribus, natus eius labore unde corporis sint consequatur rem dolorum ut id, tempore aliquid enim vitae impedit velit nostrum maiores animi, laboriosam saepe? Nihil molestiae tempore dolores alias illo?</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();
    }
}
