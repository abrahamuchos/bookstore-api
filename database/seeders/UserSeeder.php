<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //User test
        User::create([
            'name' => 'Abraham Gonzalez',
            'email' => 'abraham@mail.com',
            'password' => Hash::make('password')
        ]);
    }
}
