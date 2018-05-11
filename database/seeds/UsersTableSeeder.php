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
                'username' => 'edison',
                'fname' => 'Edison',
                'lname' => 'Mecaj',
                'email' => 'edisonmecaj@gmail.com',
                'password' => '$2y$10$LIVght.m/dMgqaODJ6BIUu7hRejVa5a6S/WlNfuEt4ypycwIFEwaq',
                'role_id' => 1,
                'avatar' => '5af3f512b79cb.png',
                'remember_token' => 'MWrwPweCggjnXEpogMyCdx1oinnwcmNhFL1SMEcWHOdLLfhUjrE3IGW91IEk',
                'created_at' => '2018-04-30 16:43:36',
                'updated_at' => '2018-05-10 07:30:26',
            ),
            1 => 
            array (
                'id' => 8,
                'username' => 'test1',
                'fname' => 'Test',
                'lname' => 'Prova',
                'email' => 'test@prova.com',
                'password' => '$2y$10$WM5TKYOHPoVs4wrvqtyXguPDB4GaHJmu1NJAZYCh1IsPIwKx1wve.',
                'role_id' => 2,
                'avatar' => '5af5436505611.png',
                'remember_token' => 'Hx41KJmq9uubC5LkufTSrn8tBfJVNWd7Cm3yId8fIQFLZRPv8MbkjHpXLUpd',
                'created_at' => '2018-05-11 07:16:41',
                'updated_at' => '2018-05-11 07:18:29',
            ),
        ));
        
        
    }
}