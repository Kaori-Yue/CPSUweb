<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Helper\TokenGenerator;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $generator = new TokenGenerator();
        DB::table('student')->insert([
            'name' => 'ชนะไชย พุทธรักษา',
            'major' => 'it',
            'degree' => 'bachelor',
            'email' => 'Chanachai_mig@hotmail.com',
            'password' => password_hash('mig', PASSWORD_DEFAULT),
            'token' => $generator->generate(6),
            'image' => 22,
            'status' => 'enable',
            // todo get next year
            'valid_until' => new Carbon(Carbon::now()),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
