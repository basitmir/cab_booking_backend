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
            'password' => '$2y$10$cyqMnZmYgtYQsAtwnK0EMuQ66URlYZo4kHvzyaYFnQ.9AwHNfQxP.',
            'active'=>1,
            'activation_token'=>'',
            'whichUser'=>"admin"
        ]);
    }
}
