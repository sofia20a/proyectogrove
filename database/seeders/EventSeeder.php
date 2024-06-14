<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Event::create(['id' => 1, 'status_events_id' => 1, 'categories_events_id' => 1, 'name' => 'Web Development Exam', 'description' => 'Web development Exam', 'image_event' => 'Place holder.png', 'priority' => 'High Priority']);
        Event::create(['id' => 2, 'status_events_id' => 2, 'categories_events_id' => 2, 'name' => 'JavaScript Workshop', 'description' => 'An intensive workshop covering modern JavaScript.', 'image_event' =>'Place holder.png', 'priority' => 'Mid Priority']);
        Event::create(['id' => 3, 'status_events_id' => 1, 'categories_events_id' => 1, 'name' => 'Python Bootcamp', 'description' => 'A comprehensive bootcamp on Python.', 'image_event' => 'Place holder.png', 'priority' => 'Low Priority']);
        Event::create(['id' => 4, 'status_events_id' => 2, 'categories_events_id' => 1, 'name' => 'Machine Learning Conference', 'description' => 'A conference discussing the latest trends in machine learning.', 'image_event' =>'Place holder.png', 'priority' => 'High Priority']);
        Event::create(['id' => 5, 'status_events_id' => 1, 'categories_events_id' => 1, 'name' => 'Cybersecurity Seminar', 'description' => 'A seminar on best practices in cybersecurity.', 'image_event' => 'Place holder.png', 'priority' => 'Mid Priority']);
    }
}
