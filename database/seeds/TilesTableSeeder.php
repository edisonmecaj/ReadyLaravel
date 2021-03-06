<?php

use Illuminate\Database\Seeder;

class TilesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tiles')->delete();
        
        \DB::table('tiles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'label' => 'Tickets',
                'url' => 'tickets',
                'color' => 'danger',
                'icon' => 'fas fa-bug',
            'counter' => 'App\\Menu::all()->count()',
                'sort' => 0,
                'created_at' => NULL,
                'updated_at' => '2018-05-14 17:46:29',
            ),
            1 => 
            array (
                'id' => 2,
                'label' => 'Clients',
                'url' => 'clients',
                'color' => 'primary',
                'icon' => 'fas fa-users',
            'counter' => 'App\\User::all()->count()',
                'sort' => 1,
                'created_at' => NULL,
                'updated_at' => '2018-05-14 17:46:30',
            ),
            2 => 
            array (
                'id' => 3,
                'label' => 'Employees',
                'url' => 'users',
                'color' => 'warning',
                'icon' => 'fas fa-user-md',
            'counter' => 'App\\User::where(\'role_id\', \'>\', 2)->count()',
                'sort' => 2,
                'created_at' => '2018-05-13 21:09:00',
                'updated_at' => '2018-05-14 17:46:30',
            ),
        ));
        
        
    }
}