<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('file')->insert([
            'name' => 'curricula1.pdf',
            'mime' => 'application/pdf',
            'original_name' => 'curricula1.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('file')->insert([
            'name' => 'curricula2.pdf',
            'mime' => 'application/pdf',
            'original_name' => 'curricula2.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('file')->insert([
            'name' => 'curricula3.pdf',
            'mime' => 'application/pdf',
            'original_name' => 'curricula3.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('file')->insert([
            'name' => 'curricula4.pdf',
            'mime' => 'application/pdf',
            'original_name' => 'curricula4.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
