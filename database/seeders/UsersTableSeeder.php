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
        User::create([
            'name' => 'admin-imadikom',
            'email' => 'kipamikom@gmail.com',
            'password' => '$2y$12$x1BCXRGysmurkOpyZwMuQ.OooeM.Rjw7fT.xQWvbPY6.3dheGvcZS',
        ]);
    }
}
