<?php

namespace Database\Factories;

use App\Models\Todo;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TodoFactory extends Factory
{
    protected $model = Todo::class;

    public function definition()
    {
        return [
            'content' => $this->faker->text(10)
        ];
    }
}
