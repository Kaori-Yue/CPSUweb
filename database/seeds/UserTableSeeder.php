<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Chanachai Puttaruksa',
            'email' => 'Chanachai_mig@hotmail.com',
            'password' => password_hash('mig39525G', PASSWORD_DEFAULT),
            'role' => 'user',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'tester',
            'email' => 'tester@su',
            'password' => password_hash('TheTester', PASSWORD_DEFAULT),
            'role' => 'user',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
