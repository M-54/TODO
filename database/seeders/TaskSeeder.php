<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::create([
            'title'=>'welcome',
            'description'=>'This is a test task',
            'user_id'=> 1,
            'is_done'=>false
        ]);
    }
}
