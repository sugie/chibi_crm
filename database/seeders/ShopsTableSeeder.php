<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('shops')->insert(['id'=>1,'name'=>'東京本店']);
      DB::table('shops')->insert(['id'=>2,'name'=>'名古屋支店']);
      DB::table('shops')->insert(['id'=>3,'name'=>'大阪支店']);//
    }
}
