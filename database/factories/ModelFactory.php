<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Model\User::class, function (Faker\Generator $faker) {
    static $password;

    $firstName = $faker->firstName;
    $lastName  = $faker->lastName;
    $gender    = ['male', 'female'];

    return [
        'name'           => $firstName.' '.$lastName,
        'role'           => '9',
        'username'       => strtolower($firstName.'.'.$lastName),
        'email'          => $faker->unique()->safeEmail,
        'password'       => \Hash::make('secret'),
        'gender'         => $gender[rand(0,1)],
        'birthday'       => $faker->date('Y-m-d'),
        'province'       => $faker->city,
        'district'       => $faker->city,
        'address'        => $faker->address,
        'zipcode'        => (string)rand(10000,99999),
        'active'         => true,
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Model\Article::class, function (Faker\Generator $faker) {
    $firstName = $faker->firstName;
    $lastName  = $faker->lastName;
    return [
        'name'            => 'Article by ' . $firstName . ' ' . $lastName,
        'name_ina'        => 'Artikel oleh ' . $firstName . ' ' . $lastName,
        'image'           => 'images/banner-'.rand(1,9).'.jpg',
        'writer'          => $firstName . ' ' . $lastName,
        'description'     => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enim, beatae velit reiciendis, inventore molestiae, neque sapiente temporibus architecto dicta, vero quaerat sequi quos.',
        'description_ina' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam maxime voluptas voluptatum! Blanditiis minima quaerat maiores veniam fugit magni enim sunt reiciendis dignissimos, eos ab cumque quis eligendi, quidem ut!'
    ];
});