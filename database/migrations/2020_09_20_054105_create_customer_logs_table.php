<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('customer_id');  // ← 追記 *********
            $table->unsignedInteger('user_id')->comment('ログを入力した店員のID');  // ← 追記 *********
            $table->text('log')->comment('顧客記録');  // ← 追記 *********
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_logs');
    }
}
