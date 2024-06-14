<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\StatusEvent;
class StatusEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        StatusEvent::create(['status_name' => 'Active']);
        StatusEvent::create(['status_name' => 'Inactive']);
    }
}
