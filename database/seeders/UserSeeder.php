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
        DB::table('users')->insert([
            'name' => 'Ed Chadwick',
            'email' => 'edward.chadwick@rhinogroup.co.uk',
            'password' => bcrypt('bfdDFGdfDFGdfgd'),
            'profile_picture' => new Asset('public', 'users/ed.png'),
        ]);
        DB::table('users')->insert([
            'name' => 'Bilbo Swaggins',
            'email' => 'bilbo.swaggins@rhinogroup.co.uk',
            'password' => bcrypt('BFWBGr4hWGNGegfher4'),
        ]);
    }

    private function seedUser($data, $role)
    {
        $user = User::factory()->create($data);
        $user->assignRole($role);
    }
}