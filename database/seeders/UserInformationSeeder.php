<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserInformation;
class UserInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        
          UserInformation::create(['id' => 1, 'user_id' => 2, 'sleep_time' => 'eight hours daily', 'physical_activity' => 'Running', 'disease' => 'None']);
        UserInformation::create(['id' => 2, 'user_id' => 3, 'sleep_time' => 'five hours daily', 'physical_activity' => 'Swimming', 'disease' => 'Anxiety']);
        UserInformation::create(['id' => 3, 'user_id' => 4, 'sleep_time' => 'seven hours daily', 'physical_activity' => 'Hiking', 'disease' => 'None']);
        UserInformation::create(['id' => 4, 'user_id' => 5, 'sleep_time' => 'ten hours daily', 'physical_activity' => 'Tennis', 'disease' => 'None']);
    
        
    }
}
