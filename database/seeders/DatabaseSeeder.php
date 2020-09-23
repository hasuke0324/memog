<?php

namespace Database\Seeders;

use App\Models\Models\Memog;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            MemogsTableSeeder::class,
        ]);
    }
}