<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # 32
        DB::table('file')->insert([
            'name' => 'curricula1.pdf',
            'mime' => 'application/pdf',
            'original_name' => 'curricula1.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        # 33
        DB::table('file')->insert([
            'name' => 'curricula2.pdf',
            'mime' => 'application/pdf',
            'original_name' => 'curricula2.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        # 34
        DB::table('file')->insert([
            'name' => 'curricula3.pdf',
            'mime' => 'application/pdf',
            'original_name' => 'curricula3.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #35
        DB::table('file')->insert([
            'name' => 'curricula4.pdf',
            'mime' => 'application/pdf',
            'original_name' => 'curricula4.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #36
        DB::table('file')->insert([
            'name' => '[1]MSK112.pdf',
            'mime' => 'application/pdf',
            'original_name' => '[1]MSK112.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #37
        DB::table('file')->insert([
            'name' => '[2]MSK110.pdf',
            'mime' => 'application/pdf',
            'original_name' => '[2]MSK110.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #38
        DB::table('file')->insert([
            'name' => '[3]MSK114.pdf',
            'mime' => 'application/pdf',
            'original_name' => '[3]MSK114.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #39
        DB::table('file')->insert([
            'name' => '[4]MSK106.pdf',
            'mime' => 'application/pdf',
            'original_name' => '[4]MSK106.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #40
        DB::table('file')->insert([
            'name' => '[5]MSK119.pdf',
            'mime' => 'application/pdf',
            'original_name' => '[5]MSK119.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #41
        DB::table('file')->insert([
            'name' => '[6]MSK113.pdf',
            'mime' => 'application/pdf',
            'original_name' => '[6]MSK113.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #42
        DB::table('file')->insert([
            'name' => '[7]MSK107.pdf',
            'mime' => 'application/pdf',
            'original_name' => '[7]MSK107.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #43
        DB::table('file')->insert([
            'name' => '[8]MSK101.pdf',
            'mime' => 'application/pdf',
            'original_name' => '[8]MSK101.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #44
        DB::table('file')->insert([
            'name' => '[9]MSK109.pdf',
            'mime' => 'application/pdf',
            'original_name' => '[9]MSK109.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #45
        DB::table('file')->insert([
            'name' => '[10]TRAN.pdf',
            'mime' => 'application/pdf',
            'original_name' => '[10]TRAN.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #46
        DB::table('file')->insert([
            'name' => '[11]MSK108.pdf',
            'mime' => 'application/pdf',
            'original_name' => '[11]MSK108.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #47
        DB::table('file')->insert([
            'name' => '[12]MSK104.pdf',
            'mime' => 'application/pdf',
            'original_name' => '[12]MSK104.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #48
        DB::table('file')->insert([
            'name' => '[13]MSK103.pdf',
            'mime' => 'application/pdf',
            'original_name' => '[13]MSK103.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #49
        DB::table('file')->insert([
            'name' => '[14]MSK121.pdf',
            'mime' => 'application/pdf',
            'original_name' => '[14]MSK121.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #50
        DB::table('file')->insert([
            'name' => '[15]MSK117.pdf',
            'mime' => 'application/pdf',
            'original_name' => '[15]MSK117.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #51
        DB::table('file')->insert([
            'name' => '[16]MSK111.pdf',
            'mime' => 'application/pdf',
            'original_name' => '[16]MSK111.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #52
        DB::table('file')->insert([
            'name' => '[17]MSK116.pdf',
            'mime' => 'application/pdf',
            'original_name' => '[17]MSK116.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #53
        DB::table('file')->insert([
            'name' => '[18]MSK115.pdf',
            'mime' => 'application/pdf',
            'original_name' => '[18]MSK115.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #54
        DB::table('file')->insert([
            'name' => '[1]CP00R.pdf',
            'mime' => 'application/pdf',
            'original_name' => '[1]CP00R.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #55
        DB::table('file')->insert([
            'name' => '[2]CP00X.pdf',
            'mime' => 'application/pdf',
            'original_name' => '[2]CP00X.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #56
        DB::table('file')->insert([
            'name' => '[3]CS00G.pdf',
            'mime' => 'application/pdf',
            'original_name' => '[3]CS00G.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #57
        DB::table('file')->insert([
            'name' => '[4]CS00G-55.pdf',
            'mime' => 'application/pdf',
            'original_name' => '[4]CS00G-55.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #58
        DB::table('file')->insert([
            'name' => '[5]IT00G.pdf',
            'mime' => 'application/pdf',
            'original_name' => '[5]IT00G.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #59
        DB::table('file')->insert([
            'name' => '[6]IT00G-55.pdf',
            'mime' => 'application/pdf',
            'original_name' => '[6]IT00G-55.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #60
        DB::table('file')->insert([
            'name' => '[7]CS01S-IT01S.pdf',
            'mime' => 'application/pdf',
            'original_name' => '[7]CS01S-IT01S.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #61
        DB::table('file')->insert([
            'name' => '[8]CS01D-IT01D-Template v1.4.dotx',
            'mime' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.template',
            'original_name' => '[8]CS01D-IT01D-Template v1.4.dotx',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #62
        DB::table('file')->insert([
            'name' => '[9]CS01D-IT01D-Example v1.4.pdf',
            'mime' => 'application/pdf',
            'original_name' => '[9]CS01D-IT01D-Example v1.4.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #63
        DB::table('file')->insert([
            'name' => '[10]CS02S-IT02S.pdf',
            'mime' => 'application/pdf',
            'original_name' => '[10]CS02S-IT02S.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #64
        DB::table('file')->insert([
            'name' => '[11]CS02D-IT02D-Template v1.4.dotx',
            'mime' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.template',
            'original_name' => '[11]CS02D-IT02D-Template v1.4.dotx',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #65
        DB::table('file')->insert([
            'name' => '[12]CS02R-IT02R.pdf',
            'mime' => 'application/pdf',
            'original_name' => '[12]CS02R-IT02R.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #66
        DB::table('file')->insert([
            'name' => '[1]CS03S-IT03S.pdf',
            'mime' => 'application/pdf',
            'original_name' => '[1]CS03S-IT03S.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #67
        DB::table('file')->insert([
            'name' => '[2]CS03D-IT03D-Template v1.4.dotx',
            'mime' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.template',
            'original_name' => '[2]CS03D-IT03D-Template v1.4.dotx',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #68
        DB::table('file')->insert([
            'name' => '[3]CS03R-IT03R.pdf',
            'mime' => 'application/pdf',
            'original_name' => '[3]CS03R-IT03R.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #69
        DB::table('file')->insert([
            'name' => '[4]CS04S-IT04S.pdf',
            'mime' => 'application/pdf',
            'original_name' => '[4]CS04S-IT04S.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #70
        DB::table('file')->insert([
            'name' => '[5]CS04D-IT04D-Template v1.4.dotx',
            'mime' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.template',
            'original_name' => '[5]CS04D-IT04D-Template v1.4.dotx',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #71
        DB::table('file')->insert([
            'name' => '[6]CS04R-IT04R.pdf',
            'mime' => 'application/pdf',
            'original_name' => '[6]CS04R-IT04R.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #72
        DB::table('file')->insert([
            'name' => '[7]CS05D-IT05D-Template v1.4.dotx',
            'mime' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.template',
            'original_name' => '[7]CS05D-IT05D-Template v1.4.dotx',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #73
        DB::table('file')->insert([
            'name' => '[8]CS05D-IT05D-CD v1.3.ppt',
            'mime' => 'application/vnd.ms-powerpoint',
            'original_name' => '[8]CS05D-IT05D-CD v1.3.ppt',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #74
        DB::table('file')->insert([
            'name' => '[9]CS05C-IT05C.pdf',
            'mime' => 'application/pdf',
            'original_name' => '[9]CS05C-IT05C.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

    }
}
