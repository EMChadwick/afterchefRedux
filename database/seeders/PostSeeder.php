<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Oneduo\NovaFileManager\Support\Asset;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'id' => Str::uuid(),
            'title' => 'Test Post',
            'user_id' => 1,
            'post_image' => new Asset('public', 'post_images/chef.jpg'),
            'description' => 'A test post to check the system works'
        ]);
        Post::create([
            'id' => Str::uuid(),
            'title' => 'Whinberry pie',
            'user_id' => 3,
            'post_image' => new Asset('public', 'post_images/IMG_20220718_2.jpg'),
            'description' => "Went whinberry picking over the weekend and tried my hand at making a pie with them. It's delicious, but I've got a purple tongue now!"
        ]);
        Post::create([
            'id' => Str::uuid(),
            'title' => "Pumpkin and goat's cheese puffs",
            'user_id' => 5,
            'post_image' => new Asset('public', 'post_images/IMG_20201026_1.jpg'),
            'description' => "I've been making these every Halloween for the past few years, they're absolutely to die for, and so easy!"
        ]);
        Post::create([
            'id' => Str::uuid(),
            'title' => "Spanish eggs",
            'user_id' => 5,
            'post_image' => new Asset('public', 'post_images/IMG_20210216_1.jpg'),
            'description' => "Not sure what this is called but I found the recipe online. Kind of like spicy tomato and peppers with egg on top."
        ]);
        Post::create([
            'id' => Str::uuid(),
            'title' => "Creamy Tuscan Chicken",
            'user_id' => 3,
            'post_image' => new Asset('public', 'post_images/20220411_1.jpg'),
            'description' => "Nice and easy one pot dish, big payoff for minimal effort."
        ]);
        Post::create([
            'id' => Str::uuid(),
            'title' => "Honey Glazed Ham Triumph",
            'user_id' => 2,
            'post_image' => new Asset('public', 'post_images/IMG_20221218_1.jpg'),
            'description' => "Absolute gem, this. I combined two recipies to create the masterpiece you see before you - perfect for any Christmas, Easter or sunday roast dinner. DM for details"
        ]);
        Post::create([
            'id' => Str::uuid(),
            'title' => 'Stuffed Pork Buns',
            'user_id' => 2,
            'post_image' => new Asset('public', 'post_images/IMG_20210514_2.jpg'),
            'description' => "cheeky little snack. Only problem is they go down in a couple of bites!"
        ]);
        Post::create([
            'id' => Str::uuid(),
            'title' => "Cocktail adventures - Snowball",
            'user_id' => 4,
            'post_image' => new Asset('public', 'post_images/IMG_20221126_2.jpg'),
            'description' => "Can't get over how good Avocaat is. At first, I thought raw egg in a drink would be unbearable and frankly I gagged at the thought, but these are dangerously moreish. Archetypal December evening right there - I'll be making many more of these in the coming days."
        ]);
        Post::create([
            'id' => Str::uuid(),
            'title' => 'Mini egg cake',
            'user_id' => 5,
            'post_image' => new Asset('public', 'post_images/IMG_20210320_2.jpg'),
            'description' => "Baked this for a contest at work. It's a cake covered in mini eggs, what's not to like? Unfortumnately, I made the icing too dense, and the mini eggs have formed a hard shell with it like bricks and mortar. Tasty, but you might need a pick to cut it."
        ]);
        Post::create([
            'id' => Str::uuid(),
            'title' => 'Mushroom Risotto',
            'user_id' => 3,
            'post_image' => new Asset('public', 'post_images/IMG_20210219_1.jpg'),
            'description' => "I do love a good risotto, this one seems to have turned out pretty well."
        ]);
        Post::create([
            'id' => Str::uuid(),
            'title' => 'LOOK AT THESE SILLY GLASSES',
            'user_id' => 4,
            'post_image' => new Asset('public', 'post_images/IMG_20210424_1.jpg'),
            'description' => "YOu guys. Look at these fucking things they're amazing. I found them in the garden center the other day and thery're PORT SIPPERS. They look like little glass pipes imagine sitting with your friends just sipping on these like sherlock and watson."
        ]);
    }
}
