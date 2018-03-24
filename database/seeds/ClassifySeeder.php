<?php

use Illuminate\Database\Seeder;

class ClassifySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classifies')->insert([
            'name' => '餐饮',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('classifies')->insert([
            'name' => '交通',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('classifies')->insert([
            'name' => '购物',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('classifies')->insert([
            'name' => '居住',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('classifies')->insert([
            'name' => '娱乐',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('classifies')->insert([
            'name' => '医疗',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('classifies')->insert([
            'name' => '教育',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('classifies')->insert([
            'name' => '人情',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('classifies')->insert([
            'name' => '其他收入',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
    }
}
