<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Chanachai',
                'email' => 'Chanachai_mig@hotmail.com',
                'password' => '$2y$10$MWmtPXrW4kjhk8fV3GSvpuATiNu7O4KmteWzYbl81Y5BKY3d.KRIy',
                'role' => 'admin',
                'remember_token' => NULL,
                'created_at' => '2017-06-09 18:49:22',
                'updated_at' => '2017-06-09 18:49:22',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Tester',
                'email' => 'tester@su',
                'password' => '$2y$10$WDWRAug5LJmBHVVoQ3MIa.cmHLeRr9EaPHnM.dw0gFJ6SKO3La.Ja',
                'role' => 'admin',
                'remember_token' => NULL,
                'created_at' => '2017-06-09 18:49:23',
                'updated_at' => '2017-06-09 18:49:23',
            ),
        ));

        $teachers = \App\Teacher::all();
        $count = 3;
        foreach ($teachers as $teacher){
            DB::table('users')->insert([
                'name' => $teacher->name_th,
                'email' => $teacher->email,
                'password' => $teacher->password,
                'role' => 'teacher',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            $teacher->user_id = $count;
            $teacher->save();
            $count++;
        }
        
    }
}