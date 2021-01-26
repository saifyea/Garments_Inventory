<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
         $faker = Faker::create();
    	foreach (range(1,10) as $index) {
	        DB::table('products')->insert([
	            'prod_name' => $faker->prod_name,
	        ]);
	}
    }
}
