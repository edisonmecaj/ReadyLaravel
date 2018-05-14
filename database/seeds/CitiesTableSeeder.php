<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cities')->delete();
        
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Bajzë',
                'lat' => NULL,
                'lng' => NULL,
                'created_at' => '2018-05-14 18:31:11',
                'updated_at' => '2018-05-14 18:31:11',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Koplik',
                'lat' => NULL,
                'lng' => NULL,
                'created_at' => '2018-05-14 20:20:16',
                'updated_at' => '2018-05-14 20:20:16',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'Hot',
                'lat' => NULL,
                'lng' => NULL,
                'created_at' => '2018-05-14 20:43:23',
                'updated_at' => '2018-05-14 20:43:23',
            ),
        ));
        
        
    }
}