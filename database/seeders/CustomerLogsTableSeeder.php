<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CustomerLogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\CustomerLog::factory(120)->create();
    }
}
