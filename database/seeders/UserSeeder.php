<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Oneduo\NovaFileManager\Support\Asset;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Superadmins
        $this->seeduser([
            'name' => 'Ed Chadwick',
            'email' => 'edward.chadwick@rhinogroup.co.uk',
            'password' => bcrypt('bfdDFGdfDFGdfgd'),
            'profile_picture' => new Asset('public', 'users/ed.png'),
        ], 'Superadmin');
        //fake peeps
        $this->seeduser([
            'name' => 'Ed Chadwick',
            'email' => 'edward.chadwick@rhinogroup.co.uk',
            'password' => bcrypt('BFWBGr4hWGNGegfher4'),
        ], 'Admin');
    }

    private function seedUser($data, $role)
    {
        $user = User::factory()->create($data);
        $user->assignRole($role);
    }
}