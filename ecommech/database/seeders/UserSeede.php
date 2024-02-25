<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeede extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $all_data=[
            [
                'name'=>'Admin',
                'email'=>'admin@gmail.com',
                'type'=>'admin',
                'password'=>Hash::make('12345678'),
            ],
            [
                'name'=>'Owner',
                'email'=>'owner@gmail.com',
                'type'=>'owner',
                'password'=>Hash::make('1235678'),
            ],
            [
                'name'=>'User',
                'email'=>'user@gmail.com',
                'type'=>'user',
                'password'=>Hash::make('12345678'),
            ],
    ];
        User::insert($all_data);
    }
}
