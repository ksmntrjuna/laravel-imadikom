<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $p = hash(PASSWORD_BCRYPT, 'loremipsum123');
        error_log($p);
        User::create([
            'name' => 'admin-imadikom',
            'email' => 'kipamikom@gmail.com',
            'password' => $p,
        ]);
    }
}
