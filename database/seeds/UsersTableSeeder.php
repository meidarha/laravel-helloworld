<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'username' => 'adi1',
            'password' => bcrypt('password'),
            'fullname' => 'meidar hadi',
            'active' => true,
            
        ]);
    }
}

