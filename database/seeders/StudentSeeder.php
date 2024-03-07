<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Student::create([
            'username' => 'student',
            'firstname' => 'Student-John',
            'lastname' => '',
            'othername' => 'Student-Doe',
            'gender' => 'm',
            'identity_number' => '200000000',
            'index_number' => '100000000',
            'email' => 'student@gmail.com',
            'program_id' => '1',
            'class_group_id' => '1',
            'email_verified_at' => now(),
            'password' => bcrypt('password'), // password
            'remember_token' => Str::random(10),
           
        ]);
    }
}
