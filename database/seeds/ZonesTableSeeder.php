<?php

use Illuminate\Database\Seeder;

class ZonesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('zones')->delete();
        
        \DB::table('zones')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Qender',
                'lat' => NULL,
                'lng' => NULL,
                'city_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Qender',
                'lat' => NULL,
                'lng' => NULL,
                'city_id' => 2,
                'created_at' => '2018-05-14 20:38:44',
                'updated_at' => '2018-05-14 20:39:14',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Peraj',
                'lat' => NULL,
                'lng' => NULL,
                'city_id' => 1,
                'created_at' => '2018-05-14 20:40:29',
                'updated_at' => '2018-05-14 20:40:29',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Ndrecaj',
                'lat' => NULL,
                'lng' => NULL,
                'city_id' => 1,
                'created_at' => '2018-05-14 20:40:36',
                'updated_at' => '2018-05-14 20:40:36',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Mokset',
                'lat' => NULL,
                'lng' => NULL,
                'city_id' => 1,
                'created_at' => '2018-05-14 20:40:43',
                'updated_at' => '2018-05-14 20:40:43',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Gashaj',
                'lat' => NULL,
                'lng' => NULL,
                'city_id' => 1,
                'created_at' => '2018-05-14 20:40:50',
                'updated_at' => '2018-05-14 20:40:50',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Aliaj',
                'lat' => NULL,
                'lng' => NULL,
                'city_id' => 1,
                'created_at' => '2018-05-14 20:40:57',
                'updated_at' => '2018-05-14 20:40:57',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Ferme',
                'lat' => NULL,
                'lng' => NULL,
                'city_id' => 1,
                'created_at' => '2018-05-14 20:41:03',
                'updated_at' => '2018-05-14 20:41:03',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Pjetroshan',
                'lat' => NULL,
                'lng' => NULL,
                'city_id' => 1,
                'created_at' => '2018-05-14 20:41:11',
                'updated_at' => '2018-05-14 20:41:11',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Kamice',
                'lat' => NULL,
                'lng' => NULL,
                'city_id' => 2,
                'created_at' => '2018-05-14 20:41:53',
                'updated_at' => '2018-05-14 20:41:53',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Sterbeq',
                'lat' => NULL,
                'lng' => NULL,
                'city_id' => 2,
                'created_at' => '2018-05-14 20:42:42',
                'updated_at' => '2018-05-14 20:42:42',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Kaldrun',
                'lat' => NULL,
                'lng' => NULL,
                'city_id' => 2,
                'created_at' => '2018-05-14 20:42:52',
                'updated_at' => '2018-05-14 20:42:52',
            ),
            12 => 
            array (
                'id' => 14,
                'name' => 'Kisha',
                'lat' => NULL,
                'lng' => NULL,
                'city_id' => 4,
                'created_at' => '2018-05-14 20:44:49',
                'updated_at' => '2018-05-14 20:44:49',
            ),
            13 => 
            array (
                'id' => 15,
                'name' => 'Dajçi',
                'lat' => NULL,
                'lng' => NULL,
                'city_id' => 4,
                'created_at' => '2018-05-14 20:45:00',
                'updated_at' => '2018-05-14 20:45:00',
            ),
            14 => 
            array (
                'id' => 16,
                'name' => 'Deçkaj',
                'lat' => NULL,
                'lng' => NULL,
                'city_id' => 4,
                'created_at' => '2018-05-14 20:45:10',
                'updated_at' => '2018-05-14 20:45:10',
            ),
            15 => 
            array (
                'id' => 17,
                'name' => 'Lulashpepaj',
                'lat' => NULL,
                'lng' => NULL,
                'city_id' => 4,
                'created_at' => '2018-05-14 20:45:22',
                'updated_at' => '2018-05-14 20:45:22',
            ),
            16 => 
            array (
                'id' => 18,
                'name' => 'Kolçekaj',
                'lat' => NULL,
                'lng' => NULL,
                'city_id' => 4,
                'created_at' => '2018-05-14 20:46:12',
                'updated_at' => '2018-05-14 20:46:12',
            ),
            17 => 
            array (
                'id' => 19,
                'name' => 'Dogana',
                'lat' => NULL,
                'lng' => NULL,
                'city_id' => 4,
                'created_at' => '2018-05-14 20:46:29',
                'updated_at' => '2018-05-14 20:46:29',
            ),
            18 => 
            array (
                'id' => 20,
                'name' => 'Kushe',
                'lat' => NULL,
                'lng' => NULL,
                'city_id' => 4,
                'created_at' => '2018-05-14 20:46:39',
                'updated_at' => '2018-05-14 20:46:39',
            ),
            19 => 
            array (
                'id' => 21,
                'name' => 'Bardhaj',
                'lat' => NULL,
                'lng' => NULL,
                'city_id' => 4,
                'created_at' => '2018-05-14 20:46:47',
                'updated_at' => '2018-05-14 20:46:47',
            ),
            20 => 
            array (
                'id' => 22,
                'name' => 'Brigje',
                'lat' => NULL,
                'lng' => NULL,
                'city_id' => 4,
                'created_at' => '2018-05-14 20:47:02',
                'updated_at' => '2018-05-14 20:47:02',
            ),
            21 => 
            array (
                'id' => 23,
                'name' => 'Skaq',
                'lat' => NULL,
                'lng' => NULL,
                'city_id' => 1,
                'created_at' => '2018-05-14 20:47:53',
                'updated_at' => '2018-05-14 20:47:53',
            ),
            22 => 
            array (
                'id' => 24,
                'name' => 'Rranx Veshtit',
                'lat' => NULL,
                'lng' => NULL,
                'city_id' => 1,
                'created_at' => '2018-05-14 20:48:25',
                'updated_at' => '2018-05-14 20:48:25',
            ),
            23 => 
            array (
                'id' => 25,
                'name' => 'Vukpalaj',
                'lat' => NULL,
                'lng' => NULL,
                'city_id' => 1,
                'created_at' => '2018-05-14 20:48:41',
                'updated_at' => '2018-05-14 20:48:41',
            ),
            24 => 
            array (
                'id' => 26,
                'name' => 'Jeran',
                'lat' => NULL,
                'lng' => NULL,
                'city_id' => 1,
                'created_at' => '2018-05-14 20:49:06',
                'updated_at' => '2018-05-14 20:49:06',
            ),
            25 => 
            array (
                'id' => 27,
                'name' => 'Gradec',
                'lat' => NULL,
                'lng' => NULL,
                'city_id' => 1,
                'created_at' => '2018-05-14 20:49:19',
                'updated_at' => '2018-05-14 20:49:19',
            ),
        ));
        
        
    }
}