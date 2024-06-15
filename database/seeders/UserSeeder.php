<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create(['id' => 1, 'email' => 'admin@gmail.com', 'username' => 'admin', 'name' => 'Luis Rojas', 'password' => '123', 'user_type' => true, 'courses_id' => json_encode([1, 5])]);
        User::create(['id' => 2, 'email' => 'KevinEspinoza923@gmail.com', 'username' => 'kevin.eg09', 'name' => 'Kevin Espinoza ', 'password' => '1234', 'user_type' => false, 'courses_id' => json_encode([1, 3, 2, 4])]);
        User::create(['id' => 3, 'email' => 'NataliaSegnini11@gmail.com', 'username' => 'nan.sg11', 'name' => 'Natalia Segnini', 'password' => '1245', 'user_type' => false, 'courses_id' => json_encode([10, 3, 8, 6])]);
        User::create(['id' => 4, 'email' => 'SofiaArias09@gmail.com', 'username' => 'sofia.ar23', 'name' => 'Sofia Arias', 'password' => '321', 'user_type' => false, 'courses_id' => json_encode([1, 2, 5, 9])]);
        User::create(['id' => 5, 'email' => 'KevinMorera41@gmail.com', 'username' => 'Kevin.mo56', 'name' => 'Kevin Morera ', 'password' => '124', 'user_type' => false, 'courses_id' => json_encode([7, 5, 3, 4])]);
    }
}
