<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Helper\TokenGenerator;

class TeacherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    /*
    #1
        DB::table('teacher')->insert([
            'name_th' => '',
            'name_en' => '',
            'doctor_degree' => '',
            'master_degree' => '',
            'bachelor_degree' => '',
            'email' => '',
            'website' => '',
            'position' => '',
            'expertise' => '',
            'image' => ,
            'token' => $generator->generate(6),
            'password' => password_hash('1', PASSWORD_DEFAULT),
            'status' => 'duty',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
     */

    /*
    Rank value
    หัวหน้าภาควิชา = 100
    รองหัวหน้าภาควิชา = 50
    ศ = 40
    รศ = 30
    ผศ = 20
    อ.ดร. = 10
    อ = 5
    */

    public function run()
    {
        $generator = new TokenGenerator();

        #1
        DB::table('teacher')->insert([
            'name_th' => 'ผศ.วิสูตร วรสง่าศิลป์',
            'name_en' => 'Asst.Prof.Wisoot Worasangasilp',
            'doctor_degree' => '',
            'master_degree' => 'M.Sc. (Computing and Information Science) Roosevelt University, USA (1988)',
            'bachelor_degree' => 'วศ.บ. (วิศวกรรมโยธา) มหาวิทยาลัยขอนแก่น (2524)',
            'email' => 'worasangasilp_w@su.ac.th',
            'website' => '',
            'position' => '',
            'rank' => 20,
            'expertise' => 'Database, Artificial Intelligence',
            'image' => 1,
            'token' => $generator->generate(6),
            'password' => password_hash('1', PASSWORD_DEFAULT),
            'status' => 'duty',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #2
        DB::table('teacher')->insert([
            'name_th' => 'อ.ดร.ทัศนวรรณ ศูนย์กลาง',
            'name_en' => 'Dr.Tasanawan Soonklang',
            'doctor_degree' => 'Ph.D. (Electronics and Electrical Engineering) University of Southampton, UK (2551)',
            'master_degree' => 'วท.ม. (วิทยาศาสตร์คอมพิวเตอร์) จุฬาลงกรณ์มหาวิทยาลัย (2544)',
            'bachelor_degree' => 'วท.บ. (วิทยาการคอมพิวเตอร์) เกียรตินิยมอันดับสอง มหาวิทยาลัยศิลปากร (2539)',
            'email' => 'soonklang_t@su.ac.th',
            'website' => 'http://www.cp.su.ac.th/~tasanawa',
            'position' => '',
            'rank' => 10,
            'expertise' => 'Natural Language Processing, Machine Learning',
            'image' => 2,
            'token' => $generator->generate(6),
            'password' => password_hash('2', PASSWORD_DEFAULT),
            'status' => 'duty',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #3
        DB::table('teacher')->insert([
            'name_th' => 'อ.ดร.ภิญโญ แท้ประสาทสิทธิ์',
            'name_en' => 'Dr.Pinyo Taeprasartsit',
            'doctor_degree' => 'Ph.D. (Computer Science and Engineering) The Pennsylvania State University, USA (2554)',
            'master_degree' => 'M.Sc. (Computer Science and Engineering) The Pennsylvania State University, USA (2549)',
            'bachelor_degree' => 'วศ.บ. (วิศวกรรมคอมพิวเตอร์) เกียรตินิยมอันดับสอง จุฬาลงกรณ์มหาวิทยาลัย (2544)',
            'email' => 'pinyotae@gmail.com และ pinyo@su.ac.th',
            'website' => 'http://www.cp.su.ac.th/~pinyotae/',
            'position' => '',
            'rank' => 10,
            'expertise' => 'Medical Image Processing, Computer Vision, Pattern Recognition, Machine Learning, High Performance Computing',
            'image' => 3,
            'token' => $generator->generate(6),
            'password' => password_hash('3', PASSWORD_DEFAULT),
            'status' => 'duty',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #4
        DB::table('teacher')->insert([
            'name_th' => 'อ.ดร.กรัญญา สิทธิสงวน',
            'name_en' => 'Dr.Karanya Sitdhisanguan',
            'doctor_degree' => 'ปร.ด (เทคโนโลยีสารสนเทศ ) สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง (2555)',
            'master_degree' => 'M.Sc. (Applied Computer Science and Technology) Azusa Pacific University, USA (2541)',
            'bachelor_degree' => 'ศ.บ. (ออกแบบภายใน) มหาวิทยาลัยรังสิต (2536)',
            'email' => 'kasaa@yahoo.com',
            'website' => '',
            'position' => '',
            'rank' => 10,
            'expertise' => 'Augmented/Virtual Reality, Human Computer Interaction, Game Design and Development, Ubiquitous Computing',
            'image' => 4,
            'token' => $generator->generate(6),
            'password' => password_hash('4', PASSWORD_DEFAULT),
            'status' => 'duty',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #5
        DB::table('teacher')->insert([
            'name_th' => 'อ.ดร.คทา ประดิษฐวงศ์',
            'name_en' => 'Dr.Kata Praditwong',
            'doctor_degree' => 'Ph.D. (Computer Science) University of Birmingham, UK (2551)',
            'master_degree' => 'วท.ม. (วิทยาศาสตร์คอมพิวเตอร์) จุฬาลงกรณ์มหาวิทยาลัย (2544)',
            'bachelor_degree' => 'วท.บ. (วิทยาการคอมพิวเตอร์) เกียรตินิยมอันดับสอง มหาวิทยาลัยศิลปากร (2539)',
            'email' => 'praditwong_k@su.ac.th',
            'website' => '',
            'position' => '',
            'rank' => 10,
            'expertise' => 'Evolutionary Algorithms, Metaheuristics, Optimization',
            'image' => 5,
            'token' => $generator->generate(6),
            'password' => password_hash('5', PASSWORD_DEFAULT),
            'status' => 'duty',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #6
        DB::table('teacher')->insert([
            'name_th' => 'ผศ.บัณฑิต ภูริชิติพร',
            'name_en' => 'Asst.Prof.Bandid Bhurichitiporn',
            'doctor_degree' => '',
            'master_degree' => 'พบ.ม. (สถิติประยุกต์) สาขาคอมพิวเตอร์ สถาบันบัณฑิตพัฒนบริหารศาสตร์ (2533)',
            'bachelor_degree' => 'วท.บ. (คณิตศาสตร์) มหาวิทยาลัยศิลปากร (2528)',
            'email' => 'bhurichitiporn_b@su.ac.th',
            'website' => '',
            'position' => '',
            'rank' => 20,
            'expertise' => 'Discrete Computational Structure, Mathematics',
            'image' => 6,
            'token' => $generator->generate(6),
            'password' => password_hash('6', PASSWORD_DEFAULT),
            'status' => 'duty',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #7
        DB::table('teacher')->insert([
            'name_th' => 'ผศ.ดร.ปานใจ ธารทัศนวงศ์',
            'name_en' => 'Asst.Prof.Dr.Panjai Tantatsanawong',
            'doctor_degree' => 'Ph.D. (Computer Science) Asian Institute of Technology, Thailand (2000)',
            'master_degree' => 'วท.ม. (วิทยาศาสตร์คอมพิวเตอร์) จุฬาลงกรณ์มหาวิทยาลัย (2535)',
            'bachelor_degree' => 'วท.บ. (สาธารณสุขศาสตร์) มหาวิทยาลัยมหิดล (2527)',
            'email' => 'tantatsanawong_p@su.ac.th',
            'website' => '',
            'position' => '',
            'rank' => 25,
            'expertise' => 'Software Engineering, Computer Networks',
            'image' => 7,
            'token' => $generator->generate(6),
            'password' => password_hash('7', PASSWORD_DEFAULT),
            'status' => 'duty',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #8
        DB::table('teacher')->insert([
            'name_th' => 'อ.ดร.รัชดาพร คณาวงษ์',
            'name_en' => 'Dr.Ratchadaporn Kanawong',
            'doctor_degree' => 'Ph.D. (Computer Science) University of Missouri-Columbia, USA (2012)',
            'master_degree' => 'วศ.ม. (วิศวกรรมคอมพิวเตอร์) มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าเจ้าธนบุรี (2545)',
            'bachelor_degree' => 'วท.บ. (วิทยาการคอมพิวเตอร์) มหาวิทยาลัยศิลปากร (2539)',
            'email' => 'kanawong_r@su.ac.th',
            'website' => 'http://www.cp.su.ac.th/~kanawong',
            'position' => '',
            'rank' => 10,
            'expertise' => 'Image Processing, Computer Vision, Machine Learning',
            'image' => 8,
            'token' => $generator->generate(6),
            'password' => password_hash('8', PASSWORD_DEFAULT),
            'status' => 'duty',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #9
        DB::table('teacher')->insert([
            'name_th' => 'ผศ.สุจิตรา อดุลย์เกษม',
            'name_en' => 'Asst.Prof.Suchitra Adulkasem',
            'doctor_degree' => '',
            'master_degree' => 'M.Sc. (Computer Science) Asian Institute of Technology, Thailand (2535)',
            'bachelor_degree' => 'ศษ.บ. (คณิตศาสตร์) มหาวิทยาลัยเชียงใหม่ (2526)',
            'email' => 'adulkasem_s@su.ac.th',
            'website' => '',
            'position' => '',
            'rank' => 20,
            'expertise' => 'Access Control and Security, Database Application and Information Technology, Medical Image and Information Processing',
            'image' => 9,
            'token' => $generator->generate(6),
            'password' => password_hash('9', PASSWORD_DEFAULT),
            'status' => 'duty',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        # 10
        DB::table('teacher')->insert([
            'name_th' => 'อ.ดร.สุนีย์ พงษ์พินิจภิญโญ',
            'name_en' => 'Dr.Sunee Pongpinigpinyo',
            'doctor_degree' => 'วศ.ด. (วิศวกรรมคอมพิวเตอร์) จุฬาลงกรณ์มหาวิทยาลัย (2549)',
            'master_degree' => 'M.Sc. (Computer Science) Tasmania University, Australia (2539)',
            'bachelor_degree' => 'วท.บ. (สถิติ) เกียรตินิยมอันดับสอง มหาวิทยาลัยศิลปากร (2530)',
            'email' => 'sunee@cp.su.ac.th',
            'website' => '',
            'position' => '',
            'rank' => 10,
            'expertise' => 'Data Mining, Web Mining and Data Warehouse, Decision Support System and Knowledge Engineering, Geographic Information System',
            'image' => 10,
            'token' => $generator->generate(6),
            'password' => password_hash('10', PASSWORD_DEFAULT),
            'status' => 'duty',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #11
        DB::table('teacher')->insert([
            'name_th' => 'อ.ดร.วีณาวดี ม่วงอ้น',
            'name_en' => 'Dr.Weenawadee Muangon',
            'doctor_degree' => 'ปร.ด.(วิทยาการคอมพิวเตอร์) มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง (2556)',
            'master_degree' => 'วท.ม. (วิทยาการคอมพิวเตอร์) มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง (2549)',
            'bachelor_degree' => 'วท.บ. (คณิตศาสตร์ประยุกต์) มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง (2544)',
            'email' => 'weenawadee@hotmail.com',
            'website' => '',
            'position' => '',
            'rank' => 10,
            'expertise' => 'Case-Base Reasoning for Design Patterns Retrieval, Case-Base Reasoning, Information Retrieval, Software Engineering',
            'image' => 11,
            'token' => $generator->generate(6),
            'password' => password_hash('11', PASSWORD_DEFAULT),
            'status' => 'duty',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #12
        DB::table('teacher')->insert([
            'name_th' => 'อ.ดร.วัสรา รอดเหตุภัย',
            'name_en' => 'Dr.Wasara Rodhetbhai',
            'doctor_degree' => 'Ph.D. (Computer Science) University of Southampton, UK (2552)',
            'master_degree' => 'วศ.ม. (วิศวกรรมคอมพิวเตอร์) มหาวิทยาลัยเกษตรศาสตร์ (2545)',
            'bachelor_degree' => 'วท.บ. (วิทยาการคอมพิวเตอร์) เกียรตินิยมอันดับสอง มหาวิทยาลัยศิลปากร (2539)',
            'email' => 'wasara@cp.su.ac.th',
            'website' => '',
            'position' => '',
            'rank' => 10,
            'expertise' => 'Multimedia Retrieval, Web/Internet Technology, Distributed Systems',
            'image' => 12,
            'token' => $generator->generate(6),
            'password' => password_hash('12', PASSWORD_DEFAULT),
            'status' => 'duty',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #13
        DB::table('teacher')->insert([
            'name_th' => 'อ.เสฐลัทธ์ รอดเหตุภัย',
            'name_en' => 'Sethalat Rodhetbhai',
            'doctor_degree' => '',
            'master_degree' => 'วศ.ม. (วิศวกรรมคอมพิวเตอร์) มหาวิทยาลัยเกษตรศาสตร์ (2545)',
            'bachelor_degree' => 'วท.บ. (วิทยาการคอมพิวเตอร์) เกียรตินิยมอันดับสอง มหาวิทยาลัยศิลปากร (2537)',
            'email' => 'sethalat@cp.su.ac.th',
            'website' => 'http://www.cp.su.ac.th/~sethalat',
            'position' => '',
            'rank' => 5,
            'expertise' => 'Computer Networks, Distributed Systems, Ubiquitous and Mobile Computing',
            'image' => 13,
            'token' => $generator->generate(6),
            'password' => password_hash('13', PASSWORD_DEFAULT),
            'status' => 'duty',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #14
        DB::table('teacher')->insert([
            'name_th' => 'อ.ดร.เสาวลักษณ์ อร่ามพงศานุวัต',
            'name_en' => 'Dr.Saowalak Arampongsanuwat',
            'doctor_degree' => 'ปร.ด. (เทคโนโลยีสารสนเทศ) มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ (2557)',
            'master_degree' => 'วท.ม. (เทคโนโลยีสารสนเทศ) สถาบันเทคโนโลยีพระจอมเกล้าพระนครเหนือ (2546)',
            'bachelor_degree' => 'วท.บ. (วิทยาการคอมพิวเตอร์) มหาวิทยาลัยศิลปากร (2544)',
            'email' => 'arampongsanuwat_s@su.ac.th',
            'website' => 'http://www.cp.su.ac.th/~saowalak',
            'position' => '',
            'rank' => 10,
            'expertise' => 'Artificial Intelligence, Data Mining, Business Intelligence',
            'image' => 14,
            'token' => $generator->generate(6),
            'password' => password_hash('14', PASSWORD_DEFAULT),
            'status' => 'duty',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #15
        DB::table('teacher')->insert([
            'name_th' => 'อ.ดร.อรวรรณ เชาวลิต',
            'name_en' => 'Dr.Orawan Chaowalit',
            'doctor_degree' => 'Ph.D. (Computer Science) National Institute of Development Administration, Thailand (2557)',
            'master_degree' => 'วท.ม. (วิทยาการคอมพิวเตอร์) มหาวิทยาลัยธรรมศาสตร์ (2547)',
            'bachelor_degree' => 'วท.บ. (วิทยาการคอมพิวเตอร์) มหาวิทยาลัยศิลปากร (2539)',
            'email' => 'chaowalit_o@su.ac.th',
            'website' => 'http://www.cp.su.ac.th/~orawan/',
            'position' => '',
            'rank' => 10,
            'expertise' => 'Database Application and Design, Data Warehouse and Application, Enterprise Application Programing and Design, System Analysis and Design',
            'image' => 15,
            'token' => $generator->generate(6),
            'password' => password_hash('15', PASSWORD_DEFAULT),
            'status' => 'duty',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #16
        DB::table('teacher')->insert([
            'name_th' => 'อ.โอภาส วงษ์ทวีทรัพย์',
            'name_en' => 'Opas Wongtaweesap',
            'doctor_degree' => '',
            'master_degree' => 'วท.ม. (วิทยาศาสตร์คอมพิวเตอร์) จุฬาลงกรณ์มหาวิทยาลัย (2550)',
            'bachelor_degree' => 'วท.บ. (วิทยาการคอมพิวเตอร์) เกียรตินิยมอันดับสอง มหาวิทยาลัยศิลปากร (2546)',
            'email' => 'oatcomster@gmail.com',
            'website' => 'http://web.sc.su.ac.th/oatcom, http://twitter.com/OaTCoM',
            'position' => '',
            'rank' => 5,
            'expertise' => 'Knowledge and Information Engineering, Data Mining, KM, Visualization, Pattern Recognition, NLP, Cognitive, Emotional Analysis and Behaviour',
            'image' => 16,
            'token' => $generator->generate(6),
            'password' => password_hash('16', PASSWORD_DEFAULT),
            'status' => 'duty',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #17
        DB::table('teacher')->insert([
            'name_th' => 'อ.อภิเษก หงษ์วิทยากร',
            'name_en' => 'Apisake Hongwitayakorn',
            'doctor_degree' => '',
            'master_degree' => 'M.EngSci. (Computer Engineering) University of Adelaide, Australia (2546)',
            'bachelor_degree' => 'วศ.บ. (คอมพิวเตอร์) มหาวิทยาลัยสงขลานครินทร์ (2536)',
            'email' => 'hongwitayakorn_a@cp.su.ac.th',
            'website' => 'http://www.cp.su.ac.th/~apisake',
            'position' => 'รองหัวหน้าภาควิชา',
            'rank' => 50,
            'expertise' => 'Digital System Design, Memory Architecture, Embedded System, Microarchitecture Design Techniques',
            'image' => 17,
            'token' => $generator->generate(6),
            'password' => password_hash('17', PASSWORD_DEFAULT),
            'status' => 'duty',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #18
        DB::table('teacher')->insert([
            'name_th' => 'อ.ดร.กฤษณะ สีพนมวัน',
            'name_en' => 'Dr.Kristsana Seepanomwan',
            'doctor_degree' => 'Ph.D. (Computing) Plymouth University, UK (2559)',
            'master_degree' => 'วท.ม. (วิทยาการคอมพิวเตอร์) สถาบันเทคโนโลยีพระจอมเกล้าพระนครเหนือ (2550)',
            'bachelor_degree' => 'วท.บ. (วิทยาการคอมพิวเตอร์) สถาบันราชภัฏนครปฐม (2542)',
            'email' => 'seepanomwan_k@su.ac.th',
            'website' => 'http://www.cp.su.ac.th/~kns',
            'position' => '',
            'rank' => 10,
            'expertise' => 'Robotics, Wireless Communication',
            'image' => 18,
            'token' => $generator->generate(6),
            'password' => password_hash('18', PASSWORD_DEFAULT),
            'status' => 'duty',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #19
        DB::table('teacher')->insert([
            'name_th' => 'อ.ดร.ณัฐโชติ พรหมฤทธิ์',
            'name_en' => 'Dr.Nuttachot Promrit',
            'doctor_degree' => 'ปร.ด. (เทคโนโลยีสารสนเทศ) มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ (2558)',
            'master_degree' => 'วท.ม. (เทคโนโลยีสารสนเทศ) สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง (2548)',
            'bachelor_degree' => 'วท.บ. (วิทยาการคอมพิวเตอร์) มหาวิทยาลัยทักษิณ (2542)',
            'email' => 'nuttachot@hotmail.com',
            'website' => 'http://www.cp.su.ac.th/~npromrit',
            'position' => 'หัวหน้าภาควิชา',
            'rank' => 100,
            'expertise' => 'Network Management, Computer and Network Security',
            'image' => 19,
            'token' => $generator->generate(6),
            'password' => password_hash('19', PASSWORD_DEFAULT),
            'status' => 'duty',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #20
        DB::table('teacher')->insert([
            'name_th' => 'อ.ดร.สิรักข์ แก้วจำนงค์',
            'name_en' => 'Dr.Sirak Kaewjamnong',
            'doctor_degree' => 'Ph.D. (Computer Science) Lancaster University, UK (2015)',
            'master_degree' => 'วศ.ม. (วิศวกรรมคอมพิวเตอร์) มหาวิทยาลัยเกษตรศาสตร์ (2544)',
            'bachelor_degree' => 'วท.บ. (วิทยาการคอมพิวเตอร์) สถาบันเทคโนโลยีราชมงคล (2540)',
            'email' => 'ksirak@gmail.com',
            'website' => 'http:/www.cp.su.ac.th/~sirak',
            'position' => '',
            'rank' => 10,
            'expertise' => 'Computer Network Architectures, Algorithms and Protocols',
            'image' => 20,
            'token' => $generator->generate(6),
            'password' => password_hash('20', PASSWORD_DEFAULT),
            'status' => 'duty',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        #21
        DB::table('teacher')->insert([
            'name_th' => 'อ.ดร.สัจจาภรณ์ ไวจรรยา',
            'name_en' => 'Dr.Sajjaporn Waijanya',
            'doctor_degree' => 'ปร.ด. (เทคโนโลยีสารสนเทศ) มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ (2557)',
            'master_degree' => 'วท.ม. (วิทยาศาสตร์คอมพิวเตอร์) มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ (2550)',
            'bachelor_degree' => 'วท.บ. (เทคโนโลยีสารสนเทศ) มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าธนบุรี (2541)',
            'email' => 'sajjaporn.w@gmail.com',
            'website' => '',
            'position' => '',
            'rank' => 10,
            'expertise' => '',
            'image' => 21,
            'token' => $generator->generate(6),
            'password' => password_hash('21', PASSWORD_DEFAULT),
            'status' => 'duty',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
