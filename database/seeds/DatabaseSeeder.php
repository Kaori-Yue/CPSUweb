<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TeacherTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        // $this->call(BlogTableSeeder::class);
        // $this->call(TagTableSeeder::class);
        // $this->call(BlogTagTableSeeder::class);
        $this->call(ImageTableSeeder::class);
        $this->call(FileTableSeeder::class);
        $this->call(CurriculaTableSeeder::class);
        $this->call(StudentTableSeeder::class);
        $this->call(StaffTableSeeder::class);
        $this->call(DocumentTableSeeder::class);
        $this->call(ResearchTableSeeder::class);
        $this->call(ResearchOwnerTableSeeder::class);
        $this->call(ResearchUserTableSeeder::class);
    }
}
