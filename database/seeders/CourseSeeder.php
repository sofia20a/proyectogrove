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
        Course::create(['id' => 1, 'name' => 'Database', 'events_id' => '[7,11]']);
        Course::create(['id' => 2, 'name' => 'Web Development I', 'events_id' => '[1,2]']);
        Course::create(['id' => 3, 'name' => 'Web Design', 'events_id' => '[12,18]']);
        Course::create(['id' => 4, 'name' => 'Audiovisual Production', 'events_id' => '[17]']);
        Course::create(['id' => 5, 'name' => 'Web Development Engineering', 'events_id' => '[4,10]']);
    }
}
