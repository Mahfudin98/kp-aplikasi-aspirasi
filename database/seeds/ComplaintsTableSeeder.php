<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ComplaintsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
    	foreach (range(1,500) as $index) {
	        DB::table('complaints')->insert([
                'name'          => $faker ->name,                
                'email'         => $faker->email,
                'fakultas'      => 'ft',
                'masukan'       => $faker->paragraph,  
                'tipe_masukan'  =>'umum',
                'created_at'    => $faker->date,              
	        ]);
	}
    }
}
