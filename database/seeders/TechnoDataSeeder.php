<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TechnoDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Import Users (Matching your name-less migration)
        $users = [
            [
                'id' => 1,
                'email' => 'tech@tech.tech',
                'roles' => json_encode(["ROLE_SUPER_ADMIN"]), 
                'password' => '$2y$13$zhFRuqRG3mcg9trbZ4J.k.qX6QaZXawM3SPy0dPQFVwooC1xyFKIa',
                'email_verified_at' => now(),
            ],
            [
                'id' => 2,
                'email' => 'techno@techno.techno',
                'roles' => json_encode(["ROLE_USER"]),
                'password' => '$2y$13$aAAzBOlGfDF0fQZWSwCnPux7idXIPdlUVhbGtfJ.koVH8FXn573pe',
                'email_verified_at' => null,
            ],
        ];

        foreach ($users as $userData) {
            DB::table('users')->updateOrInsert(['id' => $userData['id']], $userData);
        }

        // 2. Import Posts
        $posts = [
            ['id' => 1, 'title' => 'First Post', 'content' => 'This is the content of my first post. It is very interesting and informative.', 'user_id' => 1, 'created_at' => '2026-03-10 11:22:15'],
            ['id' => 2, 'title' => 'Second Post', 'content' => 'This is the content of my second post. Even more interesting than the first one.', 'user_id' => 1, 'created_at' => '2026-03-10 11:22:15'],
            ['id' => 3, 'title' => 'Third Post', 'content' => 'This is the content of my third post. Getting better and better every time.', 'user_id' => 1, 'created_at' => '2026-03-10 11:22:15'],
            ['id' => 4, 'title' => 'tech', 'content' => 'tech', 'user_id' => 1, 'created_at' => '2026-03-10 09:30:51'],
            ['id' => 5, 'title' => 'test test test', 'content' => 'test test test', 'user_id' => 1, 'created_at' => '2026-03-10 10:39:53'],
            ['id' => 6, 'title' => 'test0', 'content' => 'test0', 'user_id' => 1, 'created_at' => '2026-03-10 10:43:17'],
            ['id' => 7, 'title' => 'test0test0', 'content' => 'test0test0', 'user_id' => 1, 'created_at' => '2026-03-10 10:43:22'],
            ['id' => 8, 'title' => 'test0test0test0', 'content' => 'test0test0test0', 'user_id' => 1, 'created_at' => '2026-03-10 10:43:27'],
            ['id' => 9, 'title' => 'test1', 'content' => 'test1', 'user_id' => 1, 'created_at' => '2026-03-10 10:43:34'],
            ['id' => 10, 'title' => 'test1test1', 'content' => 'test1test1', 'user_id' => 1, 'created_at' => '2026-03-10 10:43:41'],
            ['id' => 11, 'title' => 'test1test1test1', 'content' => 'test1test1test1', 'user_id' => 1, 'created_at' => '2026-03-10 10:43:47'],
            ['id' => 12, 'title' => 'test10', 'content' => 'test10', 'user_id' => 1, 'created_at' => '2026-03-10 10:44:12'],
            ['id' => 13, 'title' => 'Test000', 'content' => 'Test000', 'user_id' => 2, 'created_at' => '2026-03-10 11:33:27'],
        ];

        foreach ($posts as $postData) {
            DB::table('posts')->updateOrInsert(['id' => $postData['id']], $postData);
        }
    }
}
