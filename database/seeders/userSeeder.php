<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'name' => 'admin',
                'email' => "admin@gmail.com",
                'password' =>  Hash::make('adminadmin'),
                'updated_at' => date("Y/m/d"),
                'created_at' => date("Y/m/d")
            ],
        ];
        foreach ($user as $key) {
            User::insert([
                'name' => $key['name'],
                'email' => $key['email'],
                'password' => $key['password'],
                'updated_at' => $key['updated_at'],
                'created_at' => $key['created_at']
            ]);
        }
    }
}
