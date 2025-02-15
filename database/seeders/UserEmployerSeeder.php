<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Employer;

class UserEmployerSeeder extends Seeder
{

    public function run()
    {
        $user = User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);

        Employer::create([
            'name' => 'Test Employer',
            'user_id' => $user->id,
        ]);
    }
}
