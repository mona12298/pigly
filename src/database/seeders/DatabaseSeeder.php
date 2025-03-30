<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\WeightLog;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call([
        // UsersTableSeeder::class,
        // WeightTargetTableSeeder::class,
        // ]);

        WeightLog::factory()->count(35)->create([
            'user_id' => 9,
        ]);
    }
}
