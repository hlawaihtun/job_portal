<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
        	'name' => 'admin'
        ]);

        DB::table('roles')->insert([
        	'name' => 'employer'
        ]);

        DB::table('roles')->insert([
        	'name' => 'jobseeker'
        ]);
    }
}
