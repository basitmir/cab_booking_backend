<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon; 

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'userName' => 'admin',
            'email'=>'admin@admin.com',
            'password' => bcrypt('admin@admin.com'),
            'active'=>1,
            'activation_token'=>'',
            'whichUser'=>"admin"
        ]);
    }
}
