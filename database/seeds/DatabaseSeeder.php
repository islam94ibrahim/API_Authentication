<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'api_token' => str_random(5),
      	]);
      	DB::table('organizations')->insert([
            'name' => "Sleighdog",
            'account_created_date' => Carbon::now()->format('Y-m-d'),
      	]);
      	DB::table('organizations')->insert([
            'name' => "example",
            'account_created_date' => Carbon::now()->format('Y-m-d'),
      	]);
    }
}
