<?php

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('types')->insert(['type' => 1,'title' => '文件掃描',]);
		DB::table('types')->insert(['type' => 1,'title' => '平台掃描',]);
		DB::table('types')->insert(['type' => 1,'title' => '智慧可攜式掃描',]);
		DB::table('types')->insert(['type' => 1,'title' => '文件直通車',]);
		DB::table('types')->insert(['type' => 1,'title' => '多功能掃描',]);
		DB::table('types')->insert(['type' => 1,'title' => '生產級掃描',]);
		DB::table('types')->insert(['type' => 2,'title' => '印表機',]);
		DB::table('types')->insert(['type' => 2,'title' => '多功能事務機',]);
    }
}
