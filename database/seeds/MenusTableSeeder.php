<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'label' => 'Home',
                'url' => 'home',
                'icon' => 'fas fa-home',
                'parent' => NULL,
                'right' => 0,
                'sort' => 0,
                'created_at' => '2018-05-02 16:44:12',
                'updated_at' => '2018-05-10 07:37:43',
            ),
            1 => 
            array (
                'id' => 2,
                'label' => 'Management',
                'url' => NULL,
                'icon' => 'fas fa-cogs',
                'parent' => NULL,
                'right' => 1,
                'sort' => 0,
                'created_at' => '2018-05-02 16:49:01',
                'updated_at' => '2018-05-10 07:37:43',
            ),
            2 => 
            array (
                'id' => 3,
                'label' => 'Users',
                'url' => 'users',
                'icon' => 'fas fa-users',
                'parent' => 2,
                'right' => 1,
                'sort' => 2,
                'created_at' => '2018-05-02 16:49:29',
                'updated_at' => '2018-05-10 07:37:43',
            ),
            3 => 
            array (
                'id' => 4,
                'label' => 'Menus',
                'url' => 'menus',
                'icon' => 'fas fa-indent',
                'parent' => 2,
                'right' => 1,
                'sort' => 0,
                'created_at' => '2018-05-07 09:33:51',
                'updated_at' => '2018-05-10 07:37:43',
            ),
            4 => 
            array (
                'id' => 6,
                'label' => 'Roles',
                'url' => 'roles',
                'icon' => 'fas fa-shield-alt',
                'parent' => 2,
                'right' => 1,
                'sort' => 1,
                'created_at' => '2018-05-08 09:46:49',
                'updated_at' => '2018-05-10 07:37:43',
            ),
            5 => 
            array (
                'id' => 7,
                'label' => 'Languages',
                'url' => 'langs',
                'icon' => 'far fa-flag',
                'parent' => 2,
                'right' => 1,
                'sort' => 3,
                'created_at' => '2018-05-10 07:37:36',
                'updated_at' => '2018-05-10 07:38:36',
            ),
        ));
        
        
    }
}