<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role' => 'dev',
                'label' => 'Developer',
                'level' => 99,
                'created_at' => '2018-04-30 16:43:15',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'role' => 'admin',
                'label' => 'Administrator',
                'level' => 50,
                'created_at' => '2018-04-30 16:43:26',
                'updated_at' => '2018-05-08 12:45:25',
            ),
            2 => 
            array (
                'id' => 3,
                'role' => 'manager',
                'label' => 'Manager',
                'level' => 20,
                'created_at' => '2018-05-08 12:45:35',
                'updated_at' => '2018-05-08 12:45:35',
            ),
            3 => 
            array (
                'id' => 4,
                'role' => 'basic',
                'label' => 'Basic User',
                'level' => 1,
                'created_at' => '2018-05-11 07:05:07',
                'updated_at' => '2018-05-11 07:05:07',
            ),
            4 => 
            array (
                'id' => 5,
                'role' => 'salesman',
                'label' => 'Salesman',
                'level' => 10,
                'created_at' => '2018-05-14 00:20:09',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'role' => 'technician',
                'label' => 'Technician',
                'level' => 5,
                'created_at' => '2018-05-14 00:20:09',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}