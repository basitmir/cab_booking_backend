<?php

use Illuminate\Database\Seeder;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('addresses')->insert([
            'id' => 1,
            'addressUserId' => 1,
            'zip' => 190006,
            'address'=>'Naseem Bagh, Habak',
            'city'=>'Srinagar',
            'country'=>'India',
            'state'=>'J&k',
            'name'=>'Basit Mir',
            'phone'=>9858536852,
            'landMark'=>'Near Masjid Yasir',
            'created_at'=>now(),
        ]);
        
        DB::table('addresses')->insert([
            'id' => 2,
            'addressUserId' => 2,
            'zip' => 190003,
            'address'=>'Naseem Bagh, Habak',
            'city'=>'Srinagar',
            'country'=>'India',
            'state'=>'J&k',
            'name'=>'Sami',
            'phone'=>7889567946,
            'landMark'=>'Near Masjid',
            'created_at'=>now(),
        ]);
        
        DB::table('addresses')->insert([
            'id' => 3,
            'addressUserId' => 3,
            'zip' => 190006,
            'address'=>'Naseem',
            'city'=>'Srinagar',
            'country'=>'India',
            'state'=>'J&k',
            'name'=>'Mir',
            'phone'=>9858536852,
            'landMark'=>'Near Masjid',
            'created_at'=>now(),
        ]);
        
        DB::table('addresses')->insert([
            'id' => 4,
            'addressUserId' => 4,
            'zip' => 190005,
            'address'=>'Naseem Habak',
            'city'=>'Srinagar',
            'country'=>'India',
            'state'=>'J&k',
            'name'=>'Abdul',
            'phone'=>9858536852,
            'landMark'=>'Near Masjid Yasir',
            'created_at'=>now(),
        ]);
        
        DB::table('addresses')->insert([
            'id' => 5,
            'addressUserId' => 5,
            'zip' => 190003,
            'address'=>'Bagh',
            'city'=>'Srinagar',
            'country'=>'India',
            'state'=>'J&k',
            'name'=>'Basit Mir',
            'phone'=>9858536852,
            'landMark'=>'Near Masjid Yasir',
            'created_at'=>now(),
        ]);
    }
}
