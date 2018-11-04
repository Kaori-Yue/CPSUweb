<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ResearchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 100; $i++) {
            DB::table('research')->insert([
                'name' => 'Research' . $i,
                'slug' => 'research[slug]' . $i,
                'description' => 'this tag for description in research' . $i,
                'owner' => 'owner' . $i,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
