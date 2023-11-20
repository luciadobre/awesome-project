<?php

use Illuminate\Database\Seeder;
use Database\Seeds\TaskSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TaskSeeder::class);
    }
}
