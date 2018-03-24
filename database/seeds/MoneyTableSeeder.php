<?php

use Illuminate\Database\Seeder;
use App\Model\User;
use App\Model\classify;

class MoneyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = app(Faker\Generator::class);

        $users_id = User::all()->pluck('id')->toArray();

        $classes_id = classify::all()->pluck('id')->toArray();

        $type = ['pay', 'income'];

        $moneies = factory(\App\Model\Money::class)
                ->times(100)
                ->make()
                ->each(function ($money, $index)use($faker, $users_id, $classes_id, $type){
                    $money->user_id = $faker->randomElement($users_id);
                    $money->class_id = $faker->randomElement($classes_id);
                    $money->type = $faker->randomElement($type);
                })->toArray();

        \App\Model\Money::insert($moneies);
    }
}
