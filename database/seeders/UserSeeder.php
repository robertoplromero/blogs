<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@example.com';
        $user->password = bcrypt('password');
        $user->save();

        $user = new User();
        $user->name = 'Consultor';
        $user->email = 'consultor@example.com';
        $user->password = bcrypt('password');
        $user->save();

        $user = new User();
        $user->name = 'Editor';
        $user->email = 'editor@example.com';
        $user->password = bcrypt('password');
        $user->save();

        $user = new User();
        $user->name = 'client';
        $user->email = 'client@example.com';
        $user->password = bcrypt('password');
        $user->save();
    }
}
