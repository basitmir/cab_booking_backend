<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email'=>'admin@admin.com',
            'password' => '$2y$10$QHmp5FsrtIXfWYq1IRIzgulp.LfyXqqLqyS/pLvHD2xob0LIyLGxm',
            'active'=>1,
            'activation_token'=>'',
        ]);
    }

}
