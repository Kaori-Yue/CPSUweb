<?php

use Illuminate\Database\Seeder;

class ResearchTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('research')->delete();
        
        \DB::table('research')->insert(array (
            0 => 
            array (
                'id' => '1',
            'info' => 'ต้องตา วาระกิจ, สัจจาภรณ์ ไวจรรยา และ ณัฐโชติ พรหมฤทธิ์. (2561). “เขียนไทย แอปพลิเคชันฝึกเขียนภาษาไทยสำหรับชาวต่างชาติ.” ใน Proceedings รวมบทความวิจัยนำเสนอใน 6th ASEAN Undergraduate Conference in Computing (AUCC2018), สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง, กรุงเทพฯ, 23-25 มีนาคม, 2561, 150-157.',
                'publication' => '2561',
                'created_at' => '2018-12-14 18:35:40',
                'updated_at' => '2018-12-14 18:35:40',
            ),
            1 => 
            array (
                'id' => '2',
            'info' => 'ชาญวิทย์ ญาติตาอินทร์, สัจจาภรณ์ ไวจรรยา และ ณัฐโชติ พรหมฤทธิ์. (2561). “ระบบประมวลผลข้อความจากบทวิจารณ์ภาพยนตร์และความคิดเห็นของผู้ชม.” ใน Proceedings รวมบทความวิจัยนำเสนอใน 6th ASEAN Undergraduate Conference in Computing (AUCC2018), สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง, กรุงเทพฯ, 23-25 มีนาคม, 2561, 2471-2478.',
                'publication' => '2561',
                'created_at' => '2018-12-14 18:37:05',
                'updated_at' => '2018-12-14 18:37:05',
            ),
            2 => 
            array (
                'id' => '3',
            'info' => 'ภัทรกร สุขสงวน, สัจจาภรณ์ ไวจรรยา และ ณัฐโชติ พรหมฤทธิ์. (2561). “ระบบแนะนําภาพยนตร์จากบทวิจารณ์ด้วยวิธีการแบบหลากหลาย.” ใน Proceedings รวมบทความวิจัยนำเสนอใน 6th ASEAN Undergraduate Conference in Computing (AUCC2018), สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง, กรุงเทพฯ, 23-25 มีนาคม, 2561, 2463-2470.',
                'publication' => '2561',
                'created_at' => '2018-12-14 18:46:44',
                'updated_at' => '2018-12-14 18:46:44',
            ),
        ));
        
        
    }
}