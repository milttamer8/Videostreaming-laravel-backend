<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserActivationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_activation')->insert([
            'user_id' => 4,
            'token' => '123',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
