<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mock = 'lorem lorem lorem lorem lorem lorem lorem lorem ';
        DB::table('blog')->insert([
            'title' => 'test test test',
            'slug' => 'test-test-test',
            'content' => $mock,
            'cover' => 1,
            'status' => 'publish',
            'publish_at' => Carbon::now(),
            'category_id' => 1,
            'user_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
