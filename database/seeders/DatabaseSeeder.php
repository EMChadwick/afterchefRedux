<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use Oneduo\NovaFileManager\Support\Asset;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        if (config('app.env') !== 'production') {
            $this->call(UserSeeder::class);
            $this->call(PostSeeder::class);
            $this->call(CommentSeeder::class);
        // $this->call(TimeslotSeeder::class);
        // $this->call(GuestSeeder::class);
        }
        


        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
