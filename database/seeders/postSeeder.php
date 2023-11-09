<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class postSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::insert([
            'title' => 'test',
            'descripion' => 'test',
            'code_snip' => "echo('hello world')",
            'user_id' => 1,
            'lang_id' => 1,
        ]);
    }
}
