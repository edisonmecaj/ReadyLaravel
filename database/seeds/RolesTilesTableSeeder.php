<?php

use Illuminate\Database\Seeder;

class RolesTilesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles_tiles')->delete();
        
        \DB::table('roles_tiles')->insert(array (
            0 => 
            array (
                'id' => 3,
                'tile_id' => 2,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 5,
                'tile_id' => 3,
                'role_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 6,
                'tile_id' => 2,
                'role_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 7,
                'tile_id' => 2,
                'role_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 8,
                'tile_id' => 1,
                'role_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 9,
                'tile_id' => 1,
                'role_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 10,
                'tile_id' => 1,
                'role_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}