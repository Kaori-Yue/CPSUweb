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
            'name' => '1-1.jpg',
            'mime' => 'image/jpeg',
            'original_name' => '1-1.jpg',
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
            'name' => '3-1.jpg',
            'mime' => 'image/jpeg',
            'original_name' => '3-1.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        # 4
        DB::table('file')->insert([
            'name' => '4-1.jpg',
            'mime' => 'image/jpeg',
            'original_name' => '4-1.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        # 5
        DB::table('file')->insert([
            'name' => '5-1.jpg',
            'mime' => 'image/jpeg',
            'original_name' => '5-1.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        # 6
        DB::table('file')->insert([
            'name' => '6-1.jpg',
            'mime' => 'image/jpeg',
            'original_name' => '6-1.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        # 7
        DB::table('file')->insert([
            'name' => '7-1.jpg',
            'mime' => 'image/jpeg',
            'original_name' => '7-1.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        # 8
        DB::table('file')->insert([
            'name' => '8-1.jpg',
            'mime' => 'image/jpeg',
            'original_name' => '8-1.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        # 9
        DB::table('file')->insert([
            'name' => '9-1.jpg',
            'mime' => 'image/jpeg',
            'original_name' => '9-1.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        # 10
        DB::table('file')->insert([
            'name' => '10-1.jpg',
            'mime' => 'image/jpeg',
            'original_name' => '10-1.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        # 11
        DB::table('file')->insert([
            'name' => '11-1.jpg',
            'mime' => 'image/jpeg',
            'original_name' => '11-1.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        # 12
        DB::table('file')->insert([
            'name' => '12-1.jpg',
            'mime' => 'image/jpeg',
            'original_name' => '12-1.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        # 13
        DB::table('file')->insert([
            'name' => '13-1.jpg',
            'mime' => 'image/jpeg',
            'original_name' => '13-1.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        # 14
        DB::table('file')->insert([
            'name' => '14-1.jpg',
            'mime' => 'image/jpeg',
            'original_name' => '14-1.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        # 15
        DB::table('file')->insert([
            'name' => '15-1.jpg',
            'mime' => 'image/jpeg',
            'original_name' => '15-1.jpg',
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
            'name' => '17-1.jpg',
            'mime' => 'image/jpeg',
            'original_name' => '17-1.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        # 18
        DB::table('file')->insert([
            'name' => '18-1.jpg',
            'mime' => 'image/jpeg',
            'original_name' => '18-1.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        # 19
        DB::table('file')->insert([
            'name' => '19-1.jpg',
            'mime' => 'image/jpeg',
            'original_name' => '19-1.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        # 20
        DB::table('file')->insert([
            'name' => '20-1.jpg',
            'mime' => 'image/jpeg',
            'original_name' => '20-1.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        # 21
        DB::table('file')->insert([
            'name' => '21-1.jpg',
            'mime' => 'image/jpeg',
            'original_name' => '21-1.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        # 22
        DB::table('file')->insert([
            'name' => 'blog.jpg',
            'mime' => 'image/jpeg',
            'original_name' => 'blog.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        # 23
        DB::table('file')->insert([
            'name' => 'Olympic.jpg',
            'mime' => 'image/jpeg',
            'original_name' => 'Olympic.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        # 24
        DB::table('file')->insert([
            'name' => 'ITPE.jpg',
            'mime' => 'image/jpeg',
            'original_name' => 'ITPE.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        # 25
        DB::table('file')->insert([
            'name' => 'posterupdate.jpg',
            'mime' => 'image/jpeg',
            'original_name' => 'posterupdate.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        # 26
        DB::table('file')->insert([
            'name' => 'NSC2012_Price.jpg',
            'mime' => 'image/jpeg',
            'original_name' => 'NSC2012_Price.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
