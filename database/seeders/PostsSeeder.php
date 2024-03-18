<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Post;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [[
            'title' => 'Maxim',
            'text' => Str::random(80).'gmail.com'],
            ['title' => 'Ivan',
                'text' => Str::random(80).'gmail.com'],
            ['title' => 'Vladislav',
                'text'=>Str::random(80).'gmail.com'],
            ['title'=>'Pavel',
                'text'=>Str::random(80).'gmail.com']
        ];
        foreach ($posts as $post) {
            Post::updateOrCreate($post);
        }
    }
}
