<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # 1
        DB::table('file')->insert([
            'name' => '1.jpg',
            'mime' => 'image/jpeg',
            'original_name' => '1.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        # 2
        DB::table('file')->insert([
            'name' => '2.jpg',
            'mime' => 'image/jpeg',
            'original_name' => '2.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        # 3
        DB::table('file')->insert([
            'name' => '3.jpg',
            'mime' => 'image/jpeg',
            'original_name' => '3.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        # 4
        DB::table('file')->insert([
            'name' => '4.jpg',
            'mime' => 'image/jpeg',
            'original_name' => '4.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        # 5
        DB::table('file')->insert([
            'name' => '5.jpg',
            'mime' => 'image/jpeg',
            'original_name' => '5.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        # 6
        DB::table('file')->insert([
            'name' => '6.jpg',
            'mime' => 'image/jpeg',
            'original_name' => '6.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        # 7
        DB::table('file')->insert([
            'name' => '7.jpg',
            'mime' => 'image/jpeg',
            'original_name' => '7.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        # 8
        DB::table('file')->insert([
            'name' => '8.jpg',
            'mime' => 'image/jpeg',
            'original_name' => '8.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        # 9
        DB::table('file')->insert([
            'name' => '9.jpg',
            'mime' => 'image/jpeg',
            'original_name' => '9.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        # 10
        DB::table('file')->insert([
            'name' => '10.jpg',
            'mime' => 'image/jpeg',
            'original_name' => '10.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        # 11
        DB::table('file')->insert([
            'name' => '11.jpg',
            'mime' => 'image/jpeg',
            'original_name' => '11.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        # 12
        DB::table('file')->insert([
            'name' => '12.jpg',
            'mime' => 'image/jpeg',
            'original_name' => '12.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        # 13
        DB::table('file')->insert([
            'name' => '13.jpg',
            'mime' => 'image/jpeg',
            'original_name' => '13.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        # 14
        DB::table('file')->insert([
            'name' => '14.jpg',
            'mime' => 'image/jpeg',
            'original_name' => '14.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        # 15
        DB::table('file')->insert([
            'name' => '15.jpg',
            'mime' => 'image/jpeg',
            'original_name' => '15.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        # 16
        DB::table('file')->insert([
            'name' => '16.jpg',
            'mime' => 'image/jpeg',
            'original_name' => '16.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        # 17
        DB::table('file')->insert([
            'name' => '17.jpg',
            'mime' => 'image/jpeg',
            'original_name' => '17.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        # 18
        DB::table('file')->insert([
            'name' => '18.jpg',
            'mime' => 'image/jpeg',
            'original_name' => '18.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        # 19
        DB::table('file')->insert([
            'name' => '19.jpg',
            'mime' => 'image/jpeg',
            'original_name' => '19.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        # 20
        DB::table('file')->insert([
            'name' => '20.jpg',
            'mime' => 'image/jpeg',
            'original_name' => '20.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
