<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	Model::unguard();
        $this->call(UsersTableSeeder::class);
        /*foreach ($i=0; $i<100; $i++) 
        {
        	DB::table('users')->inset([
        		'name' => str_random(10),
        		'email' => str_random(10).'gmail.com',
        		'password' => bcrypt('secret')

        	]);
        }*/
        Model::reguard();
    }
}
