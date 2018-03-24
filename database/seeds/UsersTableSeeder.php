<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(\App\Model\User::class)->times(10)->make();

        $user_array = $users->makeVisible(['password']) -> toArray();

        \App\Model\User::insert($user_array);

        $user = \App\Model\User::find(1);
        $user -> name = 'admin';
        $user -> phone = '12345678910';
        $user -> password = bcrypt('admin');
        $user -> save();

    }
}
