<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CategoriesEvent;

class CategoriesEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        CategoriesEvent::create(['category_name' => 'Event']);
        CategoriesEvent::create(['category_name' => 'Homework']);
        CategoriesEvent::create(['category_name' => 'Advertisement']);
    }
}
