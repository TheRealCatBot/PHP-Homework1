<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {        
        DB::table('quizzes')->insert([
            ['name' => 'quizi1', 'description' => 'quizi1-is daxasiateba'],
            ['name' => 'quizi2', 'description' => 'quizi2-is daxasiateba'],
            ['name' => 'quizi3', 'description' => 'quizi3-is daxasiateba'],
            ['name' => 'quizi4', 'description' => 'quizi4-is daxasiateba'],
            ['name' => 'quizi5', 'description' => 'quizi5-is daxasiateba'],
        ]);
    }
}
