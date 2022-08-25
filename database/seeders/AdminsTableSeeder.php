<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Hash;
class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //   admins
            DB::table('admins')->insert([
                [
    'full_name'=>'david admin',
    'email'=>'davies@godigital.com',
    'password'=>Hash::make('meme'),
     ]]);
    
        }
}
