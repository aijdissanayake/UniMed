<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$factory->define(App\expenseType::class, function (Faker\Generator $faker) {
    return [
        'expenseName' => $faker->name,
        'description' => str_random(25),
    ];
});

