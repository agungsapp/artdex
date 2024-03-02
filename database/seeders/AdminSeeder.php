<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Replace 'your_username' and 'your_password' with the desired admin credentials
        $username = 'admin';
        $password = Hash::make('admin');

        // Insert the admin record into the 'admins' table
        DB::table('admin')->insert([
            'username' => $username,
            'password' => $password,
        ]);
    }
}
