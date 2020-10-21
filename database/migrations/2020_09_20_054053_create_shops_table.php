<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('店名');  // ← 追記 *********
            $table->timestamps();
        });
        DB::table('shops')->insert(['id'=>\App\Models\Shop::SHOP_ID_TOKYO,'name'=>'東京本店']);
        DB::table('shops')->insert(['id'=>\App\Models\Shop::SHOP_ID_NAGOYA,'name'=>'名古屋支店']);
        DB::table('shops')->insert(['id'=>\App\Models\Shop::SHOP_ID_OSAKA,'name'=>'大阪支店']);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shops');
    }
}
