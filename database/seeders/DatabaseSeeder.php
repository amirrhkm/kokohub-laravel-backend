<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        $this->call(AchievementSeeder::class);
        $this->call(AttendanceSeeder::class);
        $this->call(BroadcastSeeder::class);
        $this->call(KokoSeeder::class);
        $this->call(PostSeeder::class);
        $this->call(UserSeeder::class);

    }
}
