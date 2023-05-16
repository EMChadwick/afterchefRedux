<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Oneduo\NovaFileManager\Support\Asset;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            'id' => Str::uuid(),
            'title' => 'Test Post',
            'user_id' => 1,
            'post_image' => new Asset('public', 'post_images/chef.jpg'),
            'description' => 'A test post to check the system works'
        ]);
    }
}
