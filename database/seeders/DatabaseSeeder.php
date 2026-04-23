<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $dominique = User::create([
            'name' => 'Dominique',
            'email' => 'd@d.com',
            'password' => 'password',
        ]);
        $students = require __DIR__.'/data/students.php';
        foreach ($students as $student) {
            Student::create($student);
        }
    }
}
