<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(['id' => 1, 'name' => '山田太郎', 'email' => 'sute1@sapp.sakura.ne.jp', 'password' => bcrypt('password'), 'role_id' => 1, 'shop_id' => 1, 'memo' => '総括主任']);
        DB::table('users')->insert(['id' => 2, 'name' => '畠山俊二', 'email' => 'sute2@sapp.sakura.ne.jp', 'password' => bcrypt('password'), 'role_id' => 2, 'shop_id' => 2, 'memo' => '東京本店店員']);
        DB::table('users')->insert(['id' => 3, 'name' => '伊藤あきら', 'email' => 'sute3@sapp.sakura.ne.jp', 'password' => bcrypt('password'), 'role_id' => 2, 'shop_id' => 2, 'memo' => '名古屋支店店員']);
        DB::table('users')->insert(['id' => 4, 'name' => '財条浩二', 'email' => 'sute4@sapp.sakura.ne.jp', 'password' => bcrypt('password'), 'role_id' => 2, 'shop_id' => 3, 'memo' => '大阪支店店員']);
    }
}
