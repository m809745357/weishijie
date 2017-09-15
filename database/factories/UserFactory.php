<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Tiding::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'image' => $faker->imageUrl,
        'desc' => $faker->paragraph,
        'content' => $faker->text
    ];
});

$factory->define(App\Models\Teacher::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'image' => $faker->imageUrl,
        'desc' => $faker->paragraph,
        'content' => $faker->text
    ];
});

$factory->define(App\Models\Course::class, function (Faker $faker) {
    return [
        'teacher_id' => function () {
            return factory('App\Models\Teacher')->create()->id;
        },
        'title' => $faker->sentence,
        'image' => $faker->imageUrl,
        'desc' => $faker->paragraph,
        'content' => $faker->text
    ];
});

$factory->define(App\Models\Curriculum::class, function (Faker $faker) {
    return [
        'course_id' => function () {
            return factory('App\Models\Course')->create()->id;
        },
        'started_at' => $faker->dateTime()
    ];
});

$factory->define(App\Models\Career::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'body' => $faker->paragraph
    ];
});

$factory->define(App\Models\About::class, function (Faker $faker) {
    return [
        'image' => $faker->imageUrl,
        'title' => $faker->sentence,
        'desc' => $faker->paragraph
    ];
});

$factory->define(App\Models\Company::class, function (Faker $faker) {
    return [
        'banner' => $faker->imageUrl(1920, 960),
        'image' => $faker->imageUrl,
        'content' => $faker->paragraph,
        'logo' => $faker->imageUrl(45, 45),
        'name' => $faker->company,
        'address' => $faker->address,
        'email' => $faker->companyEmail,
        'url' => $faker->url,
        'mobile' =>'15757100085',
        'ewm' => $faker->imageUrl(108, 108)
    ];
});

$factory->define(App\Models\History::class, function (Faker $faker) {
    return [
        'year' => $faker->year,
        'title' => $faker->sentence,
        'desc' => $faker->paragraph
    ];
});

$factory->define(App\Models\Witness::class, function (Faker $faker) {
    return [
        'image' => $faker->imageUrl,
        'title' => $faker->sentence,
        'video' => $faker->imageUrl,
        'desc' => $faker->paragraph,
        'body' => $faker->paragraph
    ];
});
