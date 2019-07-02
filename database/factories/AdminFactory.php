<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Admin;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Admin::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => 'auth@auth.com',
        'password' => bcrypt('password'),
    ];
});
