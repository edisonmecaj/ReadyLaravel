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
                'avatar' => '5af6dfafcf209.png',
                'locale' => 'it',
                'remember_token' => 'Uh8qItnYiJf0Rnws1p3wbCB1ZXlMTzDa7lEsOLfMKF5G9eopLsU6rhd02CFa',
                'created_at' => '2018-04-30 16:43:36',
                'updated_at' => '2018-05-14 20:40:08',
            ),
            1 => 
            array (
                'id' => 2,
                'username' => 'vaseli',
                'fname' => 'Vasel',
                'lname' => 'Mecaj',
                'email' => 'vasel.mecaj@gmail.com',
                'password' => '$2y$10$hwKgUsAWrYmZi3g7H0bVgeA4RXkURPl7BYvm0zDRq2Zvd5XglIr/C',
                'role_id' => 6,
                'avatar' => NULL,
                'locale' => 'en',
                'remember_token' => NULL,
                'created_at' => '2018-05-13 21:11:54',
                'updated_at' => '2018-05-13 21:13:58',
            ),
            2 => 
            array (
                'id' => 3,
                'username' => 'rudi',
                'fname' => 'Rudi',
                'lname' => 'Rushaj',
                'email' => 'rudi.rushaj@gmail.com',
                'password' => '$2y$10$jb8Jk8XlKN/end/z0YKrP.U8RPedSCsZ6Vj9wNv.yuQu7qjUyCSgO',
                'role_id' => 5,
                'avatar' => NULL,
                'locale' => 'en',
                'remember_token' => NULL,
                'created_at' => '2018-05-13 21:12:11',
                'updated_at' => '2018-05-13 21:13:52',
            ),
        ));
        
        
    }
}