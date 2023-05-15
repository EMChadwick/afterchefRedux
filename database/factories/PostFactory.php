<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use Oneduo\NovaFileManager\Support\Asset;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{

    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>'testpost',
            'description'=>'yeet',
            'postImage'=> new Asset('public','posts/default.png'),
            'user_id' => User::all()->random()->id,
            ''
        ];
    }
}
