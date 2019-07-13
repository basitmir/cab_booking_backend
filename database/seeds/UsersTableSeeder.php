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
        DB::table('users')->insert([
            'userName' => 'user',
            'email'=>'user@user.com',
            'password' => bcrypt('user@user.com'),
            'active'=>1,
            'activation_token'=>'',
            'whichUser'=>"user"
        ]);
        DB::table('users')->insert([
            'userName' => 'user1',
            'email'=>'user1@user1.com',
            'password' => bcrypt('user@user1.com'),
            'active'=>1,
            'activation_token'=>'',
            'whichUser'=>"user"
        ]);
        DB::table('users')->insert([
            'userName' => 'driver',
            'email'=>'driver@driver.com',
            'password' => bcrypt('driver@driver.com'),
            'state' =>'JandK',
            'city' =>'Srinagar',
            'zip' => '190002',
            'gender'=>'Male',
            'cabNumber'=> 'JKO1A 9879',
            'address'=> 'Dargah',
            'age'=> 24,
            'experience'=> 3.3,
            'phone'=>9898989898,
            'vacancy' => 3,
            'active'=>1,
            'activation_token'=>'',
            'whichUser'=>"driver"
        ]);
        DB::table('users')->insert([
            'userName' => 'driver1',
            'email'=>'driver1@driver1.com',
            'password' => bcrypt('driver1@driver1.com'),
            'state' =>'JandK',
            'city' =>'Budgam',
            'zip' => '190004',
            'gender'=>'Female',
            'cabNumber'=> 'JKO1A 9329',
            'address'=> 'Naseem Bagh',
            'age'=> 25,
            'experience'=> 3.5,
            'phone'=>9898989898,
            'vacancy' => 2,
            'active'=>1,
            'activation_token'=>'',
            'whichUser'=>"driver"
        ]);
    }
}
