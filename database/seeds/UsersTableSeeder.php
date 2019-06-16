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
            'id'=> 1,
            'zip' => 190006,
            'address'=>'Naseem Bagh, Habak',
            'address2'=>'Naseem',
            'city'=>'Srinagar',
            'country'=>'India',
            'state'=>'J&k',
            'whichUser'=>'Customer',
            'userName'=>'Basit Mir',
            'phone'=>9858536852,
            'email'=>'user1@user.com',
            'password' => bcrypt('user@user.com'),
            'created_at'=>Carbon::now(),
        ]);
        DB::table('users')->insert([
            'id'=> 2,
            'zip' => 190006,
            'address'=>'Naseem Bagh, Habak',
            'address2'=>'Naseem',
            'city'=>'Srinagar',
            'country'=>'India',
            'state'=>'J&k',
            'whichUser'=>'Customer',
            'userName'=>'Basit Mir',
            'phone'=>9858536852,
            'email'=>'user2@user.com',
            'password' => bcrypt('user@user.com'),
            'created_at'=>Carbon::now(),
        ]);
        DB::table('users')->insert([
            'id'=> 3,
            'zip' => 190006,
            'address'=>'Naseem Bagh, Habak',
            'address2'=>'Naseem',
            'city'=>'Srinagar',
            'country'=>'India',
            'state'=>'J&k',
            'whichUser'=>'Customer',
            'userName'=>'Basit Mir',
            'phone'=>9858536852,
            'email'=>'user3@user.com',
            'password' => bcrypt('user@user.com'),
            'created_at'=>Carbon::now(),
        ]);
        DB::table('users')->insert([
            'id'=> 4,
            'zip' => 190006,
            'address'=>'Naseem Bagh, Habak',
            'address2'=>'Naseem',
            'city'=>'Srinagar',
            'country'=>'India',
            'state'=>'J&k',
            'whichUser'=>'Customer',
            'userName'=>'Basit Mir',
            'phone'=>9858536852,
            'email'=>'user4@user.com',
            'password' => bcrypt('user@user.com'),
            'created_at'=>Carbon::now(),
        ]);
        DB::table('users')->insert([
            'id'=> 5,
            'zip' => 190006,
            'address'=>'Naseem Bagh, Habak',
            'address2'=>'Naseem',
            'city'=>'Srinagar',
            'country'=>'India',
            'state'=>'J&k',
            'whichUser'=>'Customer',
            'userName'=>'Basit Mir',
            'phone'=>9858536852,
            'email'=>'user5@user.com',
            'password' => bcrypt('user@user.com'),
            'created_at'=>Carbon::now(),
        ]);
    }
}
