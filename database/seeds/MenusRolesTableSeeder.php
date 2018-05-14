<?php

use Illuminate\Database\Seeder;

class MenusRolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus_roles')->delete();
        
        \DB::table('menus_roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'menu_id' => 1,
                'role_id' => 1,
                'created_at' => '2018-05-02 16:54:46',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 3,
                'menu_id' => 3,
                'role_id' => 1,
                'created_at' => '2018-05-02 16:54:53',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'menu_id' => 4,
                'role_id' => 1,
                'created_at' => '2018-05-07 09:58:30',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 5,
                'menu_id' => 2,
                'role_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 6,
                'menu_id' => 2,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 8,
                'menu_id' => 6,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 9,
                'menu_id' => 1,
                'role_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 10,
                'menu_id' => 1,
                'role_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 12,
                'menu_id' => 7,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 13,
                'menu_id' => 3,
                'role_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 14,
                'menu_id' => 8,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 15,
                'menu_id' => 9,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 16,
                'menu_id' => 2,
                'role_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 17,
                'menu_id' => 10,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 18,
                'menu_id' => 10,
                'role_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 19,
                'menu_id' => 10,
                'role_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}