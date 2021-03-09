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
                'avatar' => 'http://schooly-store.test/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Cjo2z5yklBdQAfi1nBILA.CGMgo17evyqxvIn1Xs1mGpM.hCr9eWW',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2021-03-06 10:50:36',
                'updated_at' => '2021-03-08 13:58:58',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 2,
                'name' => 'user 1',
                'email' => 'user1@schooly.com',
                'avatar' => 'http://schooly-store.test/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$xJacK/k89sSDbvDvqaMnC.KLEHOZr/YhqQMVSrvrTVhjggQgVhzpq',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2020-02-11 00:16:34',
                'updated_at' => '2020-02-19 17:25:45',
            ),
            2 => 
            array (
                'id' => 3,
                'role_id' => 2,
                'name' => 'user 2',
                'email' => 'user2@schooly.com',
                'avatar' => 'http://schooly-store.test/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$xJacK/k89sSDbvDvqaMnC.KLEHOZr/YhqQMVSrvrTVhjggQgVhzpq',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-02-11 00:16:34',
                'updated_at' => '2020-02-11 00:16:34',
            ),
            3 => 
            array (
                'id' => 4,
                'role_id' => 3,
                'name' => 'Seller 1',
                'email' => 'seller1@schooly.com',
                'avatar' => 'http://schooly-store.test/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$xJacK/k89sSDbvDvqaMnC.KLEHOZr/YhqQMVSrvrTVhjggQgVhzpq',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-02-11 00:16:34',
                'updated_at' => '2020-02-11 00:16:34',
            ),
            4 => 
            array (
                'id' => 5,
                'role_id' => 3,
                'name' => 'Seller 2',
                'email' => 'seller2@schooly.com',
                'avatar' => 'http://schooly-store.test/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$xJacK/k89sSDbvDvqaMnC.KLEHOZr/YhqQMVSrvrTVhjggQgVhzpq',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-02-11 00:16:34',
                'updated_at' => '2020-02-11 00:16:34',
            ),
        ));
        
        
    }
}