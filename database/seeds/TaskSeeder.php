<?php
namespace Database\Seeds;

use Illuminate\Database\Seeder;
use App\Task;

class TaskSeeder extends Seeder
{
        /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Task::create(['title' => 'Task 1', 'description' => 'description task 1']);
        Task::create(['title' => 'Task 2', 'description' => 'description task 2']);
    }
}
