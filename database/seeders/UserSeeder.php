<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Oneduo\NovaFileManager\Support\Asset;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // fuck it roles aren't necessary figure them out later
        User::create([
            'name' => 'Ed Chadwick',
            'email' => 'edward.chadwick@rhinogroup.co.uk',
            'password' => bcrypt('bfdDFGdfDFGdfgd'),
            'profile_picture' => new Asset('public', 'users/ed.png'),
            'bio' => 'This site is my fault'
        ]);
        User::create([
            'name' => 'Martin Thompson',
            'email' => 'martianmartin@hotmail.com',
            'password' => bcrypt('BFWBGr4hWGNGegfher4'),
            'profile_picture' => new Asset('public', 'users/default.webp'),
            'bio' => "You can't beat a good piece of meat"
        ]);
        User::create([
            'name' => 'Steven Crowley',
            'email' => 'herethereandeverywhere@gmail.com',
            'password' => bcrypt('TheBroomCupboardEnding523'),
            'profile_picture' => new Asset('public', 'users/default.webp'),
            'bio' => "ಠ_ಠ"
        ]);
        User::create([
            'name' => 'Melissa Goldhart',
            'email' => 'm.goldhart@candlekeep.ac.sc',
            'password' => bcrypt('egrG£t[]3pgth;3RGPR£LH£$H'),
            'profile_picture' => new Asset('public', 'users/default.webp'),
            'bio' => "Student, researcher, cocktail connosseur"
        ]);
        User::create([
            'name' => 'Katie Andrews',
            'email' => 'katiejandrews@protonmail.com',
            'password' => bcrypt('bfdDFGdfDFGdfgd'),
            'profile_picture' => new Asset('public', 'users/default.webp'),
            'bio' => "Juniper berries."
        ]);
    }

    private function seedUser($data, $role)
    {
        $user = User::factory()->create($data);
        $user->assignRole($role);
    }
}