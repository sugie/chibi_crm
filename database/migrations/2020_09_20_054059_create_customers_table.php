<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('shop_id');  // ← 追記 *********
            $table->string('name');  // ← 追記 *********
            $table->string('postal');  // ← 追記 *********
            $table->string('address');  // ← 追記 *********
            $table->string('email');  // ← 追記 *********
            $table->date('birthdate');  // ← 追記 *********
            $table->string('phone');  // ← 追記 *********
            $table->boolean('kramer_flag')->default(false)->comment('クレーマーフラグ');  // ← 追記 *********
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
        Schema::dropIfExists('customers');
    }
}
