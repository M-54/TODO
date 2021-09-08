<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            UserSeeder::class
        ]);

        // TODO: make random count task
            for($i=0 ; $i<10 ; $i++) {
                $x=rand(1,50);
                \App\Models\User::factory(1)
                ->has(Task::factory()->count($x))
                ->create();
            }

    }
}
