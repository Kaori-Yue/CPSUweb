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
        DB::table('tag')->insert([
            'name' => 'hackaton',
            'slug' => 'hackaton',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('tag')->insert([
            'name' => 'competition',
            'slug' => 'competition',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);



        DB::table('tag')->insert([
            'name' => 'olympic',
            'slug' => 'olympic',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);



        DB::table('tag')->insert([
            'name' => 'itpec',
            'slug' => 'itpec',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('tag')->insert([
            'name' => 'test',
            'slug' => 'test',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);



        DB::table('tag')->insert([
            'name' => 'graduate-student',
            'slug' => 'graduate-student',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);



        DB::table('tag')->insert([
            'name' => 'nsc',
            'slug' => 'nsc',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        $mock = 'lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem';
        for ($i = 1; $i <= 20; $i++){
            $num = rand(1, 5);
            $is_featured = rand(0, 1);
            if($num == 1){
                DB::table('blog')->insert([
                    'title' => 'Lambda Mini Hackaton '.$i,
                    'slug' => 'lambda-mini-hackaton-'.$i,
                    'content' => $mock,
                    'cover' => 22,
                    'status' => 'publish',
                    'publish_at' => Carbon::now(),
                    'category_id' => 1,
                    'user_id' => 1,
                    'featured' => $is_featured,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ]);

                DB::table('blog_tag')->insert([
                    'blog_id' => $i,
                    'tag_id' => 1,
                ]);

                DB::table('blog_tag')->insert([
                    'blog_id' => $i,
                    'tag_id' => 2,
                ]);
            }

            elseif ($num == 2){
                DB::table('blog')->insert([
                    'title' => 'Olympic 2555'.$i,
                    'slug' => 'olympic-2555'.$i,
                    'content' => $mock,
                    'cover' => 23,
                    'status' => 'publish',
                    'publish_at' => Carbon::now(),
                    'category_id' => 1,
                    'user_id' => 1,
                    'featured' => $is_featured,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ]);

                DB::table('blog_tag')->insert([
                    'blog_id' => $i,
                    'tag_id' => 2,
                ]);

                DB::table('blog_tag')->insert([
                    'blog_id' => $i,
                    'tag_id' => 3,
                ]);
            }

            elseif ($num == 3){
                DB::table('blog')->insert([
                    'title' => 'โครงการสอบมาตรฐานวิชาชีพ IT ระดับภูมิภาคอาเซียน'.$i,
                    'slug' => 'ITPEC'.$i,
                    'content' => $mock,
                    'cover' => 24,
                    'status' => 'publish',
                    'publish_at' => Carbon::now(),
                    'category_id' => 1,
                    'user_id' => 1,
                    'featured' => $is_featured,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ]);

                DB::table('blog_tag')->insert([
                    'blog_id' => $i,
                    'tag_id' => 4,
                ]);

                DB::table('blog_tag')->insert([
                    'blog_id' => $i,
                    'tag_id' => 5,
                ]);
            }

            elseif ($num == 4){
                DB::table('blog')->insert([
                    'title' => 'เปิดรับนักศึกษาปริญาโท และปริญญาเอก '.$i,
                    'slug' => 'graduate-student'.$i,
                    'content' => $mock,
                    'cover' => 25,
                    'status' => 'publish',
                    'publish_at' => Carbon::now(),
                    'category_id' => 1,
                    'user_id' => 1,
                    'featured' => $is_featured,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ]);

                DB::table('blog_tag')->insert([
                    'blog_id' => $i,
                    'tag_id' => 6,
                ]);
            }

            elseif ($num == 5){
                DB::table('blog')->insert([
                    'title' => 'การแข่งขัน NSC 2012'.$i,
                    'slug' => 'การแข่งขัน-NSC-2012'.$i,
                    'content' => $mock,
                    'cover' => 26,
                    'status' => 'publish',
                    'publish_at' => Carbon::now(),
                    'category_id' => 1,
                    'user_id' => 1,
                    'featured' => $is_featured,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ]);

                DB::table('blog_tag')->insert([
                    'blog_id' => $i,
                    'tag_id' => 7,
                ]);

                DB::table('blog_tag')->insert([
                    'blog_id' => $i,
                    'tag_id' => 2,
                ]);
            }

        }

    }
}
