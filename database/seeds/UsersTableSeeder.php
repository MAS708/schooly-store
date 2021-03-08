<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'name' => 'admin',
                'email' => 'admin@schooly.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Cjo2z5yklBdQAfi1nBILA.CGMgo17evyqxvIn1Xs1mGpM.hCr9eWW',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2021-03-06 10:50:36',
                'updated_at' => '2021-03-06 11:35:03',
            ),
        ));
        
        
    }
}