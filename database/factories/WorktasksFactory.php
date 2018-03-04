<?php

use Faker\Generator as Faker;

$factory->define(App\Worktasks::class, function (Faker $faker) {
    return [
        'task' => $faker->sentence(10)
    ];
});
