<?php

use Illuminate\Database\Seeder;

class LangsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('langs')->delete();
        
        \DB::table('langs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'label' => 'Italian',
                'file' => 'it',
                'logo' => 'flag-icon-it',
                'created_at' => '2018-05-10 09:30:29',
                'updated_at' => '2018-05-11 07:49:58',
            ),
            1 => 
            array (
                'id' => 2,
                'label' => 'Albanian',
                'file' => 'al',
                'logo' => 'flag-icon-al',
                'created_at' => '2018-05-10 09:35:02',
                'updated_at' => '2018-05-11 07:50:05',
            ),
            2 => 
            array (
                'id' => 4,
                'label' => 'English',
                'file' => 'en',
                'logo' => 'flag-icon-us',
                'created_at' => '2018-05-10 11:29:13',
                'updated_at' => '2018-05-11 07:50:13',
            ),
        ));
        
        
    }
}