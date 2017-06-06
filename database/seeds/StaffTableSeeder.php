<?php

use Illuminate\Database\Seeder;

class StaffTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('staff')->delete();
        
        \DB::table('staff')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name_th' => 'ประวิม เหลืองสมานกุล',
                'name_en' => 'Prawim Luangsamankul',
                'position' => 'นักบริหารงานทั่วไป',
                'email' => 'prawim@cp.su.ac.th',
                'website' => 'http://www.cp.su.ac.th/~prawim',
                'image' => 27,
                'token' => 'wT40Ko',
                'password' => '$2y$10$pOa/DE4N.qHf8BOLJosDv.kYclK4.dwcc76ET71/Y9NLzsY5.jIYy',
                'status' => 'duty',
                'created_at' => '2017-06-07 02:38:56',
                'updated_at' => '2017-06-07 02:38:56',
            ),
            1 => 
            array (
                'id' => 2,
                'name_th' => 'กัลยา ตาทอง',
                'name_en' => 'Kalaya Tatong',
                'position' => 'นักบริหารงานทั่วไป',
                'email' => 'kalaya@cp.su.ac',
                'website' => NULL,
                'image' => 28,
                'token' => 'qxPWq6',
                'password' => '$2y$10$fykm61p4rXoHm3RH7RCAW./nGnN.AnfGiMhnM1yb1xT5YQUQmlK2W',
                'status' => 'duty',
                'created_at' => '2017-06-07 02:40:24',
                'updated_at' => '2017-06-07 02:57:07',
            ),
            2 => 
            array (
                'id' => 3,
                'name_th' => 'นพดล สุขกล่อมชีพ',
                'name_en' => 'Nopdon Sooklomcheep',
                'position' => 'นักคอมพิวเตอร์',
                'email' => 'nopdon@cp.su.ac.th',
                'website' => NULL,
                'image' => 29,
                'token' => 'JKYcuO',
                'password' => '$2y$10$iQMmHQaOmydIGgM2gXcSY.CQVXqg8kDl0/bfK5EeY71F/wfNqWlXK',
                'status' => 'duty',
                'created_at' => '2017-06-07 03:13:23',
                'updated_at' => '2017-06-07 03:13:23',
            ),
            3 => 
            array (
                'id' => 4,
                'name_th' => 'สานนท์ ยะหอม',
                'name_en' => 'Sanon Yahom',
                'position' => 'นักคอมพิวเตอร์',
                'email' => 'sanon@cp.su.ac.th',
                'website' => NULL,
                'image' => 30,
                'token' => 'SMXB1I',
                'password' => '$2y$10$ttPCnnPNjqvtxFSuQvQSReVmceaqMubKeKM1cNyDvF5Wpp2NAkQnC',
                'status' => 'duty',
                'created_at' => '2017-06-07 03:14:45',
                'updated_at' => '2017-06-07 03:14:45',
            ),
            4 => 
            array (
                'id' => 5,
                'name_th' => 'เจตสุภา แก้วมณีโชค',
                'name_en' => 'Jetsupa Kaewmaneechoke',
                'position' => 'นักการ',
                'email' => NULL,
                'website' => NULL,
                'image' => 31,
                'token' => 'T2HdkV',
                'password' => '$2y$10$9JuM3vpMKZCK1j31QIKtguITGatFotilbuYridP/PZBIsVTcon5Qm',
                'status' => 'duty',
                'created_at' => '2017-06-07 03:17:39',
                'updated_at' => '2017-06-07 03:17:39',
            ),
        ));
        
        
    }
}