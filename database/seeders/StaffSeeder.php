<?php

namespace Database\Seeders;

use App\Models\Staff;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Staff::create([
            'username' => 'staff',
            'firstname' => 'Staff-John',
            'lastname' => '',
            'othername' => 'Staff-Doe',
            'gender' => 'm',
            'email' => 'staff@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'), // password
            'remember_token' => Str::random(10),
           
        ]);
    }
}
