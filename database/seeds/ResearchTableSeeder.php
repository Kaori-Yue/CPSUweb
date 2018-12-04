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

        /*
        factory(App\Research::class, 10)->create()->each(function ($research) {
            // Seed the relation with one address
            $address = factory(App\CustomerAddress::class)->make();
            $research->address()->save($address);

            // Seed the relation with 5 purchases
            $purchases = factory(App\CustomerPurchase::class, 5)->make();
            $research->purchases()->saveMany($purchases);
        });
        */


        for ($i = 1; $i <= 100; $i++) {
            DB::table('research')->insert([
                'name' => 'Research' . $i,
                'slug' => 'research[slug]' . $i,
                'description' => 'this tag for description in research' . $i,
                'owner' => $i,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
