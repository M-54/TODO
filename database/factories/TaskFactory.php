<?php

namespace Database\Factories;

use App\Models\Task;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Task::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => function(){

                return User::factory()->create()->id;
            },
            'TODO' => $this->faker->sentence(20),
            'task' => $this->faker->sentence(5),
            'created_at' => Carbon::now()->format('y-m-d')
        ];
    }
}
