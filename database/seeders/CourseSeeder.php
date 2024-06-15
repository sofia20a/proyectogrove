<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Course::create(['id' => 1, 'name' => 'Database', 'events_id' => json_encode([7, 11])]);
        Course::create(['id' => 2, 'name' => 'Web Development I', 'events_id' => json_encode([1, 2])]);
        Course::create(['id' => 3, 'name' => 'Web Design', 'events_id' => json_encode([12, 18])]);
        Course::create(['id' => 4, 'name' => 'Audiovisual Production', 'events_id' => json_encode([17])]);
        Course::create(['id' => 5, 'name' => 'Web Development Engineering', 'events_id' => json_encode([4, 10])]);
    
    }
}
