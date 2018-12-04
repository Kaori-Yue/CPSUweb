<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ResearchOwnerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('research_owner')->insert([
            'teacher_id' => 19,
            'research_id' => 19,
            // 'created_at' => Carbon::now(),
            // 'updated_at' => Carbon::now(),
        ]);

        DB::table('research_owner')->insert([
            'teacher_id' => 19,
            'research_id' => 19,
            // 'created_at' => Carbon::now(),
            // 'updated_at' => Carbon::now(),
        ]);
        
    }
}


/*
            $table->increments('id');
            $table->integer('teacher_id')->unsigned();
            $table->integer('research_id')->unsigned();
            */