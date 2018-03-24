<?php

use Faker\Generator as Faker;

$factory->define(\App\Model\Money::class, function (Faker $faker) {
    $updated_at = $faker -> dateTimeThisMonth();
    $created_at = $faker -> dateTimeThisMonth($updated_at);

    return [
        'money' => random_int(100, 200),
        'created_at' => $created_at,
        'updated_at' => $updated_at,
    ];
});
