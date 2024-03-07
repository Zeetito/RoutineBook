<?php

namespace Database\Seeders;

use App\Models\ClassGroup;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClassGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classgroups = [
            ['name' => 'Computer Science 1', 'slug'=>'CS1', 'year'=>1, 'program_id'=>438],
            ['name' => 'Computer Science 2', 'slug'=>'CS2', 'year'=>2, 'program_id'=>438],
            ['name' => 'Computer Science 3', 'slug'=>'CS3', 'year'=>3, 'program_id'=>438],
            ['name' => 'Computer Science 4', 'slug'=>'CS4', 'year'=>4, 'program_id'=>438],

        ];

        foreach ($classgroups as $classgroup) {
            ClassGroup::create($classgroup);
        }
    }
}
