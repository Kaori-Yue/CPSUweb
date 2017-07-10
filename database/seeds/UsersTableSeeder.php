<?php

use Illuminate\Database\Seeder;

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
                'role' => 'user',
                'remember_token' => NULL,
                'created_at' => '2017-06-09 18:49:22',
                'updated_at' => '2017-06-09 18:49:22',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'tester',
                'email' => 'tester@su',
                'password' => '$2y$10$WDWRAug5LJmBHVVoQ3MIa.cmHLeRr9EaPHnM.dw0gFJ6SKO3La.Ja',
                'role' => 'user',
                'remember_token' => NULL,
                'created_at' => '2017-06-09 18:49:23',
                'updated_at' => '2017-06-09 18:49:23',
            ),
        ));
        
        
    }
}