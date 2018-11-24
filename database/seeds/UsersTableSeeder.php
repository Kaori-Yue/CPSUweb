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
            2 => 
            array (
                'id' => 3,
                'name' => 'Content Creater',
                'email' => 'content_create@su.ac.th',
                'password' => bcrypt('content_create'),
                'role' => 'admin',
                'remember_token' => NULL,
                'created_at' => '2017-06-09 18:49:23',
                'updated_at' => '2017-06-09 18:49:23',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'ผศ.วิสูตร วรสง่าศิลป์',
                'email' => 'worasangasilp_w@su.ac.th',
                'password' => '$2y$10$W4TBARCz1Dw0ZG4xlEooBOWpEEvmNMgeUKKenY4GKuLeLUTF9fkTe',
                'role' => 'teacher',
                'remember_token' => NULL,
                'created_at' => '2017-09-22 15:46:50',
                'updated_at' => '2017-09-22 15:46:50',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'อ.ดร.ทัศนวรรณ ศูนย์กลาง',
                'email' => 'soonklang_t@su.ac.th',
                'password' => '$2y$10$eOakQVDAPiRTlAlxyjy3JOKI8e3iXG62fXvAUttMHVJmSq4z9qZCq',
                'role' => 'teacher',
                'remember_token' => NULL,
                'created_at' => '2017-09-22 15:46:50',
                'updated_at' => '2017-09-22 15:46:50',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'อ.ดร.ภิญโญ แท้ประสาทสิทธิ์',
                'email' => 'pinyotae@gmail.com และ taeprasartsit_p@su.ac.th',
                'password' => '$2y$10$csm9AYayEaf9p/26Pf550e9Y5zkLvmpTJkY.JWpLDd4pLLHoF9NAu',
                'role' => 'teacher',
                'remember_token' => NULL,
                'created_at' => '2017-09-22 15:46:50',
                'updated_at' => '2017-09-22 15:46:50',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'อ.ดร.กรัญญา สิทธิสงวน',
                'email' => 'sitdhisanguan_k@su.ac.th',
                'password' => '$2y$10$kOgfZErYbv9Gy4L6zj11HOOhVUXJi8tKbpJDjm56gXd2DG8vo8jtO',
                'role' => 'teacher',
                'remember_token' => NULL,
                'created_at' => '2017-09-22 15:46:50',
                'updated_at' => '2017-09-22 15:46:50',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'ผศ.ดร.คทา ประดิษฐวงศ์',
                'email' => 'praditwong_k@su.ac.th',
                'password' => '$2y$10$1xhQu5xtPChL0u.UMVfGj.CMMoYqIDsdvLcm2lzvC6rACX3sQTr6y',
                'role' => 'teacher',
                'remember_token' => NULL,
                'created_at' => '2017-09-22 15:46:50',
                'updated_at' => '2017-09-22 15:46:50',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'ผศ.บัณฑิต ภูริชิติพร',
                'email' => 'bhurichitiporn_b@su.ac.th',
                'password' => '$2y$10$0Sf21.T1Hms7rXgPxykicOkWiY0/Qb1dDAEV4t4Uhe1TYnLbME/si',
                'role' => 'teacher',
                'remember_token' => NULL,
                'created_at' => '2017-09-22 15:46:50',
                'updated_at' => '2017-09-22 15:46:50',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'รศ.ดร.ปานใจ ธารทัศนวงศ์',
                'email' => 'tantatsanawong_p@su.ac.th',
                'password' => '$2y$10$elhDJaZY4VjfNvfJiJnlLeV.zLcXxl0Gc9khx./JaqVmHbrUnv03m',
                'role' => 'teacher',
                'remember_token' => NULL,
                'created_at' => '2017-09-22 15:46:50',
                'updated_at' => '2017-09-22 15:46:50',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'อ.ดร.รัชดาพร คณาวงษ์',
                'email' => 'kanawong_r@su.ac.th',
                'password' => '$2y$10$KHIr.jByhVJK0SWWMSIJIepHgZlEfEsDyiBlLppC44Zuyzmgl2CWa',
                'role' => 'teacher',
                'remember_token' => NULL,
                'created_at' => '2017-09-22 15:46:50',
                'updated_at' => '2017-09-22 15:46:50',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'ผศ.สุจิตรา อดุลย์เกษม',
                'email' => 'adulkasem_s@su.ac.th',
                'password' => '$2y$10$ay6jRbUzwnklvlIb7Zw3CefcFFvO9Dzl7aEEqDuCRx7zSEISb4r9a',
                'role' => 'teacher',
                'remember_token' => NULL,
                'created_at' => '2017-09-22 15:46:50',
                'updated_at' => '2017-09-22 15:46:50',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'อ.ดร.สุนีย์ พงษ์พินิจภิญโญ',
                'email' => 'pongpinigpinyo_s@su.ac.th',
                'password' => '$2y$10$IC7Kvs4qCeU94LSolgeR9uB3hxT4E.MFVraR65PnyhII88uiAQN1.',
                'role' => 'teacher',
                'remember_token' => NULL,
                'created_at' => '2017-09-22 15:46:50',
                'updated_at' => '2017-09-22 15:46:50',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'อ.ดร.วีณาวดี ม่วงอ้น',
                'email' => 'muangon_w@su.ac.th',
                'password' => '$2y$10$mdBVjkNmmL6Z/o.c8uF8JOJIDn.r.nJuNqMtOxuMmYBi4bO.wTq4a',
                'role' => 'teacher',
                'remember_token' => NULL,
                'created_at' => '2017-09-22 15:46:50',
                'updated_at' => '2017-09-22 15:46:50',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'อ.ดร.วัสรา รอดเหตุภัย',
                'email' => 'wasara@cp.su.ac.th',
                'password' => '$2y$10$bKRdrvwqbELO1xB0ietVC.a8k1bJnvRTWxibz770SNDGsshk7EG8.',
                'role' => 'teacher',
                'remember_token' => NULL,
                'created_at' => '2017-09-22 15:46:50',
                'updated_at' => '2017-09-22 15:46:50',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'อ.เสฐลัทธ์ รอดเหตุภัย',
                'email' => 'sethalat@cp.su.ac.th',
                'password' => '$2y$10$wMrbS.eSRrB6ELxOyAcMBev4H0E14Kv/13pEjnfg.pqzFYYLgqD4K',
                'role' => 'teacher',
                'remember_token' => NULL,
                'created_at' => '2017-09-22 15:46:50',
                'updated_at' => '2017-09-22 15:46:50',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'อ.ดร.เสาวลักษณ์ อร่ามพงศานุวัต',
                'email' => 'arampongsanuwat_s@su.ac.th',
                'password' => '$2y$10$kdD8tcL937pNXuFYXCG04eInLuNHEgeqIbjc04pyoy7Y0xJ.Zk1Zm',
                'role' => 'teacher',
                'remember_token' => NULL,
                'created_at' => '2017-09-22 15:46:50',
                'updated_at' => '2017-09-22 15:46:50',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'อ.ดร.อรวรรณ เชาวลิต',
                'email' => 'chaowalit_o@su.ac.th',
                'password' => '$2y$10$K74ht0lRfxE0yw1mlSO9wO9gPGIYLuXi.JjkyRB6/grn6LLY4n63u',
                'role' => 'teacher',
                'remember_token' => NULL,
                'created_at' => '2017-09-22 15:46:50',
                'updated_at' => '2017-09-22 15:46:50',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'อ.โอภาส วงษ์ทวีทรัพย์',
                'email' => 'oatcomster@gmail.com',
                'password' => '$2y$10$Vmrmqij2yzkUGoZrlMEqeutL4iBrdd1CQbjw4h9Uw8yIpckabX9Ry',
                'role' => 'teacher',
                'remember_token' => NULL,
                'created_at' => '2017-09-22 15:46:50',
                'updated_at' => '2017-09-22 15:46:50',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'อ.อภิเษก หงษ์วิทยากร',
                'email' => 'hongwitayakorn_a@cp.su.ac.th',
                'password' => '$2y$10$QVKLSwV7z5UKGqLld6nR5uycd9sISZQlSmlk8BbjF0CpkF95kxMx2',
                'role' => 'teacher',
                'remember_token' => NULL,
                'created_at' => '2017-09-22 15:46:50',
                'updated_at' => '2017-09-22 15:46:50',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'อ.ดร.กฤษณะ สีพนมวัน',
                'email' => 'seepanomwan_k@su.ac.th',
                'password' => '$2y$10$Dslo4QodvvFihmIY5YGHL.5uDzKJJbbN9176Xtpx8JnbpOWtT1XIO',
                'role' => 'teacher',
                'remember_token' => NULL,
                'created_at' => '2017-09-22 15:46:50',
                'updated_at' => '2017-09-22 15:46:50',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'อ.ดร.ณัฐโชติ พรหมฤทธิ์',
                'email' => 'promrit_n@su.ac.th',
                // 'password' => '$2y$10$ybUhhg6cpSPnFoqmwzu7b.gKrd1wGV6hwq5YEJIcxomOfMFBpv3MS',
                'password' => bcrypt('1234'),
                'role' => 'teacher',
                'remember_token' => NULL,
                'created_at' => '2017-09-22 15:46:50',
                'updated_at' => '2017-09-22 15:46:50',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'อ.ดร.สิรักข์ แก้วจำนงค์',
                'email' => 'kaewjamnong_s@su.ac.th',
                'password' => '$2y$10$GBe9XWFkYT7fCm1B5beXmOtlrYUakWvRQmHSHnx7GweUM/dTYDPnC',
                'role' => 'teacher',
                'remember_token' => NULL,
                'created_at' => '2017-09-22 15:46:50',
                'updated_at' => '2017-09-22 15:46:50',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'อ.ดร.สัจจาภรณ์ ไวจรรยา',
                'email' => 'sajjaporn.w@gmail.com',
                'password' => '$2y$10$7uV3wgluCDnlTa9Tm3QKa.BwbGQFVqa7O9U4HsTovqUMwSwaoBlou',
                'role' => 'teacher',
                'remember_token' => NULL,
                'created_at' => '2017-09-22 15:46:50',
                'updated_at' => '2017-09-22 15:46:50',
            ),
        ));
        
        
    }
}