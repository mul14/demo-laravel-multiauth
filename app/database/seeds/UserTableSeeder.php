<?php

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->insert([
            'username' => 'admin',
            'password' => Hash::make(1234)
        ]);
    }
}
