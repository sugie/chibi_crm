<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->unsignedInteger('role_id')->default(\App\Models\User::ROLE_EMPLOYEE);  // ← 追記 *********
            $table->unsignedInteger('shop_id')->default(\App\Models\Shop::SHOP_ID_TOKYO);  // ← 追記 *********
            $table->string('memo')->nullable();  // ← 追記 *********
            $table->rememberToken();
            $table->timestamps();
        });
        DB::table('users')->insert(['id' => 1, 'name' => '山田太郎', 'email' => 'sute1@example.com', 'password' => bcrypt('password'), 'role_id' => 1, 'shop_id' => 1, 'memo' => '総括主任']);
        DB::table('users')->insert(['id' => 2, 'name' => '畠山俊二', 'email' => 'sute2@example.com', 'password' => bcrypt('password'), 'role_id' => 2, 'shop_id' => 2, 'memo' => '東京本店店員']);
        DB::table('users')->insert(['id' => 3, 'name' => '伊藤あきら', 'email' => 'sute3@example.com', 'password' => bcrypt('password'), 'role_id' => 2, 'shop_id' => 2, 'memo' => '名古屋支店店員']);
        DB::table('users')->insert(['id' => 4, 'name' => '財条浩二', 'email' => 'sute4@example.com', 'password' => bcrypt('password'), 'role_id' => 2, 'shop_id' => 3, 'memo' => '大阪支店店員']);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
