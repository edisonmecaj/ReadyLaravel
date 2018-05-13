<?php

use Illuminate\Database\Seeder;

class LangsWordsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('langs_words')->delete();
        
        \DB::table('langs_words')->insert(array (
            0 => 
            array (
                'id' => 1,
                'lang_id' => 1,
                'key' => 'Management',
                'val' => 'Gestione',
                'created_at' => '2018-05-10 11:11:08',
                'updated_at' => '2018-05-11 07:47:51',
            ),
            1 => 
            array (
                'id' => 5,
                'lang_id' => 1,
                'key' => 'Translate',
                'val' => 'Traduci',
                'created_at' => '2018-05-10 11:17:29',
                'updated_at' => '2018-05-11 07:43:00',
            ),
            2 => 
            array (
                'id' => 6,
                'lang_id' => 2,
                'key' => 'Add new Language',
                'val' => 'Shto Gjuhe',
                'created_at' => '2018-05-10 11:18:21',
                'updated_at' => '2018-05-11 08:50:28',
            ),
            3 => 
            array (
                'id' => 7,
                'lang_id' => 2,
                'key' => 'Language',
                'val' => 'Gjuha',
                'created_at' => '2018-05-10 11:18:21',
                'updated_at' => '2018-05-11 07:57:05',
            ),
            4 => 
            array (
                'id' => 8,
                'lang_id' => 2,
                'key' => 'Actions',
                'val' => 'Veprime',
                'created_at' => '2018-05-10 11:18:21',
                'updated_at' => '2018-05-11 07:57:05',
            ),
            5 => 
            array (
                'id' => 9,
                'lang_id' => 2,
                'key' => 'Translate',
                'val' => 'Perkthe',
                'created_at' => '2018-05-10 11:18:21',
                'updated_at' => '2018-05-11 07:49:30',
            ),
            6 => 
            array (
                'id' => 10,
                'lang_id' => 2,
                'key' => 'Edit',
                'val' => 'Ndrysho',
                'created_at' => '2018-05-10 11:18:21',
                'updated_at' => '2018-05-11 07:57:05',
            ),
            7 => 
            array (
                'id' => 11,
                'lang_id' => 2,
                'key' => 'Delete',
                'val' => 'Fshij',
                'created_at' => '2018-05-10 11:18:21',
                'updated_at' => '2018-05-11 07:57:05',
            ),
            8 => 
            array (
                'id' => 12,
                'lang_id' => 2,
                'key' => 'Language Management',
                'val' => 'Administrim i Gjuhes',
                'created_at' => '2018-05-10 11:18:21',
                'updated_at' => '2018-05-11 08:50:28',
            ),
            9 => 
            array (
                'id' => 13,
                'lang_id' => 2,
                'key' => 'Management',
                'val' => 'Administrim',
                'created_at' => '2018-05-10 11:18:21',
                'updated_at' => '2018-05-11 08:50:28',
            ),
            10 => 
            array (
                'id' => 14,
                'lang_id' => 2,
                'key' => 'Menus',
                'val' => 'Menu',
                'created_at' => '2018-05-10 11:18:21',
                'updated_at' => '2018-05-11 08:50:28',
            ),
            11 => 
            array (
                'id' => 15,
                'lang_id' => 2,
                'key' => 'Roles',
                'val' => 'Rolet',
                'created_at' => '2018-05-10 11:18:21',
                'updated_at' => '2018-05-11 07:57:05',
            ),
            12 => 
            array (
                'id' => 16,
                'lang_id' => 2,
                'key' => 'Users',
                'val' => 'Perdoruesat',
                'created_at' => '2018-05-10 11:18:21',
                'updated_at' => '2018-05-11 07:57:05',
            ),
            13 => 
            array (
                'id' => 17,
                'lang_id' => 2,
                'key' => 'Languages',
                'val' => 'Gjuhet',
                'created_at' => '2018-05-10 11:18:21',
                'updated_at' => '2018-05-11 07:57:05',
            ),
            14 => 
            array (
                'id' => 18,
                'lang_id' => 2,
                'key' => 'Profile',
                'val' => 'Profili',
                'created_at' => '2018-05-10 11:18:21',
                'updated_at' => '2018-05-11 07:57:05',
            ),
            15 => 
            array (
                'id' => 19,
                'lang_id' => 2,
                'key' => 'Add new Menu',
                'val' => 'Shto Menu',
                'created_at' => '2018-05-10 11:18:27',
                'updated_at' => '2018-05-11 07:57:05',
            ),
            16 => 
            array (
                'id' => 20,
                'lang_id' => 2,
                'key' => 'Left Menu Items',
                'val' => 'Elemente te Menusë Majtas',
                'created_at' => '2018-05-10 11:18:27',
                'updated_at' => '2018-05-11 08:50:28',
            ),
            17 => 
            array (
                'id' => 21,
                'lang_id' => 2,
                'key' => 'Right Menu Items',
                'val' => 'Elemente te Menusë Djathtas',
                'created_at' => '2018-05-10 11:18:27',
                'updated_at' => '2018-05-11 08:50:28',
            ),
            18 => 
            array (
                'id' => 22,
                'lang_id' => 2,
                'key' => 'Save',
                'val' => 'Ruaj',
                'created_at' => '2018-05-10 11:18:27',
                'updated_at' => '2018-05-11 07:57:05',
            ),
            19 => 
            array (
                'id' => 23,
                'lang_id' => 2,
                'key' => 'Menu Management',
                'val' => 'Administrim i Menuse',
                'created_at' => '2018-05-10 11:18:27',
                'updated_at' => '2018-05-11 08:50:28',
            ),
            20 => 
            array (
                'id' => 24,
                'lang_id' => 2,
                'key' => 'Add new Role',
                'val' => 'Shto Rol',
                'created_at' => '2018-05-10 11:18:30',
                'updated_at' => '2018-05-11 07:57:05',
            ),
            21 => 
            array (
                'id' => 25,
                'lang_id' => 2,
                'key' => 'Role',
                'val' => 'Rol',
                'created_at' => '2018-05-10 11:18:30',
                'updated_at' => '2018-05-11 07:57:05',
            ),
            22 => 
            array (
                'id' => 26,
                'lang_id' => 2,
                'key' => 'Level',
                'val' => 'Nivelet',
                'created_at' => '2018-05-10 11:18:30',
                'updated_at' => '2018-05-11 07:57:05',
            ),
            23 => 
            array (
                'id' => 27,
                'lang_id' => 2,
                'key' => 'Roles Management',
                'val' => 'Administrim i Roleve',
                'created_at' => '2018-05-10 11:18:30',
                'updated_at' => '2018-05-11 08:50:28',
            ),
            24 => 
            array (
                'id' => 28,
                'lang_id' => 2,
                'key' => 'Add new User',
                'val' => 'Shto Perdorues',
                'created_at' => '2018-05-10 11:18:31',
                'updated_at' => '2018-05-11 07:57:05',
            ),
            25 => 
            array (
                'id' => 29,
                'lang_id' => 2,
                'key' => 'Username',
                'val' => 'Emri i Perdoruesit',
                'created_at' => '2018-05-10 11:18:31',
                'updated_at' => '2018-05-11 07:57:05',
            ),
            26 => 
            array (
                'id' => 30,
                'lang_id' => 2,
                'key' => 'Full Name',
                'val' => 'Emri i Plotë',
                'created_at' => '2018-05-10 11:18:31',
                'updated_at' => '2018-05-11 07:57:05',
            ),
            27 => 
            array (
                'id' => 31,
                'lang_id' => 2,
                'key' => 'eMail',
                'val' => 'eMail',
                'created_at' => '2018-05-10 11:18:31',
                'updated_at' => '2018-05-11 07:57:05',
            ),
            28 => 
            array (
                'id' => 32,
                'lang_id' => 2,
                'key' => 'User Management',
                'val' => 'Administrimi i Perdoruesve',
                'created_at' => '2018-05-10 11:18:31',
                'updated_at' => '2018-05-13 20:56:58',
            ),
            29 => 
            array (
                'id' => 61,
                'lang_id' => 1,
                'key' => 'Yes',
                'val' => 'Si',
                'created_at' => '2018-05-10 11:23:58',
                'updated_at' => '2018-05-11 07:41:50',
            ),
            30 => 
            array (
                'id' => 62,
                'lang_id' => 1,
                'key' => 'No',
                'val' => 'No',
                'created_at' => '2018-05-10 11:23:58',
                'updated_at' => '2018-05-11 07:41:50',
            ),
            31 => 
            array (
                'id' => 63,
                'lang_id' => 1,
                'key' => 'Language deleted successfully',
                'val' => 'Lingua cancellata con successo',
                'created_at' => '2018-05-10 11:23:59',
                'updated_at' => '2018-05-11 07:41:50',
            ),
            32 => 
            array (
                'id' => 64,
                'lang_id' => 1,
                'key' => 'Locale',
                'val' => 'Locale',
                'created_at' => '2018-05-10 11:29:02',
                'updated_at' => '2018-05-11 07:41:50',
            ),
            33 => 
            array (
                'id' => 65,
                'lang_id' => 1,
                'key' => 'Search',
                'val' => 'Cerca',
                'created_at' => '2018-05-10 11:29:02',
                'updated_at' => '2018-05-11 07:41:50',
            ),
            34 => 
            array (
                'id' => 66,
                'lang_id' => 1,
                'key' => 'Language created successfully',
                'val' => 'Lingua creata con successo',
                'created_at' => '2018-05-10 11:29:13',
                'updated_at' => '2018-05-11 07:41:50',
            ),
            35 => 
            array (
                'id' => 67,
                'lang_id' => 4,
                'key' => 'Add new Language',
                'val' => 'Add new Language',
                'created_at' => '2018-05-10 11:30:18',
                'updated_at' => '2018-05-10 11:30:18',
            ),
            36 => 
            array (
                'id' => 68,
                'lang_id' => 4,
                'key' => 'Language',
                'val' => 'Language',
                'created_at' => '2018-05-10 11:30:18',
                'updated_at' => '2018-05-10 11:30:18',
            ),
            37 => 
            array (
                'id' => 69,
                'lang_id' => 4,
                'key' => 'Actions',
                'val' => 'Actions',
                'created_at' => '2018-05-10 11:30:18',
                'updated_at' => '2018-05-10 11:30:18',
            ),
            38 => 
            array (
                'id' => 70,
                'lang_id' => 4,
                'key' => 'Translate',
                'val' => 'Translate',
                'created_at' => '2018-05-10 11:30:19',
                'updated_at' => '2018-05-10 11:30:19',
            ),
            39 => 
            array (
                'id' => 71,
                'lang_id' => 4,
                'key' => 'Edit',
                'val' => 'Edit',
                'created_at' => '2018-05-10 11:30:19',
                'updated_at' => '2018-05-10 11:30:19',
            ),
            40 => 
            array (
                'id' => 72,
                'lang_id' => 4,
                'key' => 'Delete',
                'val' => 'Delete',
                'created_at' => '2018-05-10 11:30:19',
                'updated_at' => '2018-05-10 11:30:19',
            ),
            41 => 
            array (
                'id' => 73,
                'lang_id' => 4,
                'key' => 'Language Management',
                'val' => 'Language Management',
                'created_at' => '2018-05-10 11:30:19',
                'updated_at' => '2018-05-10 11:30:19',
            ),
            42 => 
            array (
                'id' => 74,
                'lang_id' => 4,
                'key' => 'Management',
                'val' => 'Management',
                'created_at' => '2018-05-10 11:30:19',
                'updated_at' => '2018-05-11 07:50:48',
            ),
            43 => 
            array (
                'id' => 75,
                'lang_id' => 4,
                'key' => 'Menus',
                'val' => 'Menus',
                'created_at' => '2018-05-10 11:30:19',
                'updated_at' => '2018-05-10 11:30:19',
            ),
            44 => 
            array (
                'id' => 76,
                'lang_id' => 4,
                'key' => 'Roles',
                'val' => 'Roles',
                'created_at' => '2018-05-10 11:30:19',
                'updated_at' => '2018-05-10 11:30:19',
            ),
            45 => 
            array (
                'id' => 77,
                'lang_id' => 4,
                'key' => 'Users',
                'val' => 'Users',
                'created_at' => '2018-05-10 11:30:19',
                'updated_at' => '2018-05-10 11:30:19',
            ),
            46 => 
            array (
                'id' => 78,
                'lang_id' => 4,
                'key' => 'Languages',
                'val' => 'Languages',
                'created_at' => '2018-05-10 11:30:19',
                'updated_at' => '2018-05-10 11:30:19',
            ),
            47 => 
            array (
                'id' => 79,
                'lang_id' => 4,
                'key' => 'Profile',
                'val' => 'Profile',
                'created_at' => '2018-05-10 11:30:19',
                'updated_at' => '2018-05-10 11:30:19',
            ),
            48 => 
            array (
                'id' => 80,
                'lang_id' => 4,
                'key' => 'Logout',
                'val' => 'Logout',
                'created_at' => '2018-05-10 11:30:19',
                'updated_at' => '2018-05-10 11:30:19',
            ),
            49 => 
            array (
                'id' => 81,
                'lang_id' => 4,
                'key' => 'Add new Menu',
                'val' => 'Add new Menu',
                'created_at' => '2018-05-10 11:31:16',
                'updated_at' => '2018-05-10 11:31:16',
            ),
            50 => 
            array (
                'id' => 82,
                'lang_id' => 4,
                'key' => 'Left Menu Items',
                'val' => 'Left Menu Items',
                'created_at' => '2018-05-10 11:31:16',
                'updated_at' => '2018-05-10 11:31:16',
            ),
            51 => 
            array (
                'id' => 83,
                'lang_id' => 4,
                'key' => 'Right Menu Items',
                'val' => 'Right Menu Items',
                'created_at' => '2018-05-10 11:31:16',
                'updated_at' => '2018-05-10 11:31:16',
            ),
            52 => 
            array (
                'id' => 84,
                'lang_id' => 4,
                'key' => 'Save',
                'val' => 'Save',
                'created_at' => '2018-05-10 11:31:16',
                'updated_at' => '2018-05-10 11:31:16',
            ),
            53 => 
            array (
                'id' => 85,
                'lang_id' => 4,
                'key' => 'Menu Management',
                'val' => 'Menu Management',
                'created_at' => '2018-05-10 11:31:16',
                'updated_at' => '2018-05-10 11:31:16',
            ),
            54 => 
            array (
                'id' => 86,
                'lang_id' => 4,
                'key' => 'Add new Role',
                'val' => 'Add new Role',
                'created_at' => '2018-05-10 11:31:18',
                'updated_at' => '2018-05-10 11:31:18',
            ),
            55 => 
            array (
                'id' => 87,
                'lang_id' => 4,
                'key' => 'Role',
                'val' => 'Role',
                'created_at' => '2018-05-10 11:31:18',
                'updated_at' => '2018-05-10 11:31:18',
            ),
            56 => 
            array (
                'id' => 88,
                'lang_id' => 4,
                'key' => 'Level',
                'val' => 'Level',
                'created_at' => '2018-05-10 11:31:18',
                'updated_at' => '2018-05-10 11:31:18',
            ),
            57 => 
            array (
                'id' => 89,
                'lang_id' => 4,
                'key' => 'Roles Management',
                'val' => 'Roles Management',
                'created_at' => '2018-05-10 11:31:18',
                'updated_at' => '2018-05-10 11:31:18',
            ),
            58 => 
            array (
                'id' => 90,
                'lang_id' => 4,
                'key' => 'Add new User',
                'val' => 'Add new User',
                'created_at' => '2018-05-10 11:31:20',
                'updated_at' => '2018-05-10 11:31:20',
            ),
            59 => 
            array (
                'id' => 91,
                'lang_id' => 4,
                'key' => 'Username',
                'val' => 'Username',
                'created_at' => '2018-05-10 11:31:20',
                'updated_at' => '2018-05-10 11:31:20',
            ),
            60 => 
            array (
                'id' => 92,
                'lang_id' => 4,
                'key' => 'Full Name',
                'val' => 'Full Name',
                'created_at' => '2018-05-10 11:31:20',
                'updated_at' => '2018-05-10 11:31:20',
            ),
            61 => 
            array (
                'id' => 93,
                'lang_id' => 4,
                'key' => 'eMail',
                'val' => 'eMail',
                'created_at' => '2018-05-10 11:31:20',
                'updated_at' => '2018-05-10 11:31:20',
            ),
            62 => 
            array (
                'id' => 94,
                'lang_id' => 4,
                'key' => 'User Management',
                'val' => 'User Management',
                'created_at' => '2018-05-10 11:31:20',
                'updated_at' => '2018-05-10 11:31:20',
            ),
            63 => 
            array (
                'id' => 95,
                'lang_id' => 4,
                'key' => 'Edit Language',
                'val' => 'Edit Language',
                'created_at' => '2018-05-10 11:31:36',
                'updated_at' => '2018-05-10 11:31:36',
            ),
            64 => 
            array (
                'id' => 96,
                'lang_id' => 4,
                'key' => 'Label',
                'val' => 'Label',
                'created_at' => '2018-05-10 11:31:36',
                'updated_at' => '2018-05-10 11:31:36',
            ),
            65 => 
            array (
                'id' => 97,
                'lang_id' => 4,
                'key' => 'Locale',
                'val' => 'Locale',
                'created_at' => '2018-05-10 11:31:36',
                'updated_at' => '2018-05-10 11:31:36',
            ),
            66 => 
            array (
                'id' => 98,
                'lang_id' => 4,
                'key' => 'Icon',
                'val' => 'Icon',
                'created_at' => '2018-05-10 11:31:36',
                'updated_at' => '2018-05-10 11:31:36',
            ),
            67 => 
            array (
                'id' => 99,
                'lang_id' => 4,
                'key' => 'Cancel',
                'val' => 'Cancel',
                'created_at' => '2018-05-10 11:31:36',
                'updated_at' => '2018-05-10 11:31:36',
            ),
            68 => 
            array (
                'id' => 100,
                'lang_id' => 4,
                'key' => 'Search',
                'val' => 'Search',
                'created_at' => '2018-05-10 11:31:36',
                'updated_at' => '2018-05-10 11:31:36',
            ),
            69 => 
            array (
                'id' => 101,
                'lang_id' => 4,
                'key' => 'Language modified successfully',
                'val' => 'Language modified successfully',
                'created_at' => '2018-05-10 11:31:38',
                'updated_at' => '2018-05-10 11:31:38',
            ),
            70 => 
            array (
                'id' => 102,
                'lang_id' => 1,
                'key' => 'Language modified successfully',
                'val' => 'Lingua modificata con successo',
                'created_at' => '2018-05-10 11:31:47',
                'updated_at' => '2018-05-11 07:41:50',
            ),
            71 => 
            array (
                'id' => 103,
                'lang_id' => 1,
                'key' => 'Select Roles...',
                'val' => 'Seleziona Ruoli...',
                'created_at' => '2018-05-10 11:31:55',
                'updated_at' => '2018-05-11 07:41:50',
            ),
            72 => 
            array (
                'id' => 104,
                'lang_id' => 1,
                'key' => 'Menu modified successfully',
                'val' => 'Menu modificato con successo',
                'created_at' => '2018-05-10 11:31:56',
                'updated_at' => '2018-05-11 07:41:50',
            ),
            73 => 
            array (
                'id' => 105,
                'lang_id' => 1,
                'key' => 'Menu created successfully',
                'val' => 'Menu creato con successo',
                'created_at' => '2018-05-10 11:32:34',
                'updated_at' => '2018-05-11 07:41:50',
            ),
            74 => 
            array (
                'id' => 106,
                'lang_id' => 1,
                'key' => 'Menu deleted successfully',
                'val' => 'Menu cancellato con successo',
                'created_at' => '2018-05-10 11:32:47',
                'updated_at' => '2018-05-11 07:41:50',
            ),
            75 => 
            array (
                'id' => 107,
                'lang_id' => 1,
                'key' => 'EN',
                'val' => 'EN',
                'created_at' => '2018-05-10 12:12:54',
                'updated_at' => '2018-05-11 07:41:50',
            ),
            76 => 
            array (
                'id' => 108,
                'lang_id' => 2,
                'key' => 'EN',
                'val' => 'EN',
                'created_at' => '2018-05-10 12:12:54',
                'updated_at' => '2018-05-11 07:57:05',
            ),
            77 => 
            array (
                'id' => 109,
                'lang_id' => 4,
                'key' => 'EN',
                'val' => 'EN',
                'created_at' => '2018-05-10 12:12:54',
                'updated_at' => '2018-05-10 12:12:54',
            ),
            78 => 
            array (
                'id' => 110,
                'lang_id' => 1,
                'key' => 'Base',
                'val' => 'Base',
                'created_at' => '2018-05-10 12:48:29',
                'updated_at' => '2018-05-11 07:41:50',
            ),
            79 => 
            array (
                'id' => 111,
                'lang_id' => 2,
                'key' => 'Base',
                'val' => 'Anglisht',
                'created_at' => '2018-05-10 12:48:29',
                'updated_at' => '2018-05-11 07:57:05',
            ),
            80 => 
            array (
                'id' => 112,
                'lang_id' => 4,
                'key' => 'Base',
                'val' => 'Base',
                'created_at' => '2018-05-10 12:48:29',
                'updated_at' => '2018-05-10 12:48:29',
            ),
            81 => 
            array (
                'id' => 113,
                'lang_id' => 1,
                'key' => 'AL',
                'val' => 'SQ',
                'created_at' => '2018-05-10 12:53:39',
                'updated_at' => '2018-05-11 07:41:50',
            ),
            82 => 
            array (
                'id' => 114,
                'lang_id' => 2,
                'key' => 'AL',
                'val' => 'SQ',
                'created_at' => '2018-05-10 12:53:39',
                'updated_at' => '2018-05-11 07:57:05',
            ),
            83 => 
            array (
                'id' => 115,
                'lang_id' => 4,
                'key' => 'AL',
                'val' => 'AL',
                'created_at' => '2018-05-10 12:53:39',
                'updated_at' => '2018-05-10 12:53:39',
            ),
            84 => 
            array (
                'id' => 116,
                'lang_id' => 1,
                'key' => 'IT',
                'val' => 'IT',
                'created_at' => '2018-05-10 12:53:43',
                'updated_at' => '2018-05-11 07:41:50',
            ),
            85 => 
            array (
                'id' => 117,
                'lang_id' => 2,
                'key' => 'IT',
                'val' => 'IT',
                'created_at' => '2018-05-10 12:53:43',
                'updated_at' => '2018-05-11 07:57:05',
            ),
            86 => 
            array (
                'id' => 118,
                'lang_id' => 4,
                'key' => 'IT',
                'val' => 'IT',
                'created_at' => '2018-05-10 12:53:43',
                'updated_at' => '2018-05-10 12:53:43',
            ),
            87 => 
            array (
                'id' => 119,
                'lang_id' => 1,
                'key' => 'Translation',
                'val' => 'Traduzione',
                'created_at' => '2018-05-10 13:26:14',
                'updated_at' => '2018-05-11 07:41:50',
            ),
            88 => 
            array (
                'id' => 120,
                'lang_id' => 2,
                'key' => 'Translation',
                'val' => 'Perkthim',
                'created_at' => '2018-05-10 13:26:14',
                'updated_at' => '2018-05-11 07:49:30',
            ),
            89 => 
            array (
                'id' => 121,
                'lang_id' => 4,
                'key' => 'Translation',
                'val' => 'Translation',
                'created_at' => '2018-05-10 13:26:14',
                'updated_at' => '2018-05-10 13:26:14',
            ),
            90 => 
            array (
                'id' => 122,
                'lang_id' => 1,
                'key' => 'Add new Language',
                'val' => 'Aggiungi nuova Lingua',
                'created_at' => '2018-05-10 13:39:58',
                'updated_at' => '2018-05-11 07:37:32',
            ),
            91 => 
            array (
                'id' => 123,
                'lang_id' => 1,
                'key' => 'Language',
                'val' => 'Lingua',
                'created_at' => '2018-05-10 13:39:58',
                'updated_at' => '2018-05-11 07:37:32',
            ),
            92 => 
            array (
                'id' => 124,
                'lang_id' => 1,
                'key' => 'Actions',
                'val' => 'Azioni',
                'created_at' => '2018-05-10 13:39:58',
                'updated_at' => '2018-05-11 07:37:32',
            ),
            93 => 
            array (
                'id' => 125,
                'lang_id' => 1,
                'key' => 'Edit',
                'val' => 'Modifica',
                'created_at' => '2018-05-10 13:39:58',
                'updated_at' => '2018-05-11 07:37:32',
            ),
            94 => 
            array (
                'id' => 126,
                'lang_id' => 1,
                'key' => 'Delete',
                'val' => 'Elimina',
                'created_at' => '2018-05-10 13:39:58',
                'updated_at' => '2018-05-11 07:37:32',
            ),
            95 => 
            array (
                'id' => 127,
                'lang_id' => 1,
                'key' => 'Language Management',
                'val' => 'Gestione Lingue',
                'created_at' => '2018-05-10 13:39:58',
                'updated_at' => '2018-05-11 07:37:32',
            ),
            96 => 
            array (
                'id' => 128,
                'lang_id' => 1,
                'key' => 'Menus',
                'val' => 'Menu',
                'created_at' => '2018-05-10 13:39:58',
                'updated_at' => '2018-05-11 07:37:32',
            ),
            97 => 
            array (
                'id' => 129,
                'lang_id' => 1,
                'key' => 'Roles',
                'val' => 'Ruoli',
                'created_at' => '2018-05-10 13:39:58',
                'updated_at' => '2018-05-11 07:37:32',
            ),
            98 => 
            array (
                'id' => 130,
                'lang_id' => 1,
                'key' => 'Users',
                'val' => 'Utenti',
                'created_at' => '2018-05-10 13:39:58',
                'updated_at' => '2018-05-11 07:37:32',
            ),
            99 => 
            array (
                'id' => 131,
                'lang_id' => 1,
                'key' => 'Languages',
                'val' => 'Lingue',
                'created_at' => '2018-05-10 13:39:58',
                'updated_at' => '2018-05-11 07:37:32',
            ),
            100 => 
            array (
                'id' => 132,
                'lang_id' => 1,
                'key' => 'Profile',
                'val' => 'Profilo',
                'created_at' => '2018-05-10 13:39:58',
                'updated_at' => '2018-05-11 07:37:32',
            ),
            101 => 
            array (
                'id' => 133,
                'lang_id' => 1,
                'key' => 'Logout',
                'val' => 'Esci',
                'created_at' => '2018-05-10 13:40:06',
                'updated_at' => '2018-05-11 07:37:32',
            ),
            102 => 
            array (
                'id' => 134,
                'lang_id' => 2,
                'key' => 'Logout',
                'val' => 'Dil',
                'created_at' => '2018-05-10 13:40:06',
                'updated_at' => '2018-05-11 07:48:25',
            ),
            103 => 
            array (
                'id' => 135,
                'lang_id' => 1,
                'key' => 'Translations updated successfully',
                'val' => 'Traduzioni aggiornate con successo',
                'created_at' => '2018-05-10 14:35:18',
                'updated_at' => '2018-05-11 07:41:50',
            ),
            104 => 
            array (
                'id' => 136,
                'lang_id' => 2,
                'key' => 'Translations updated successfully',
                'val' => 'Perkthimet u ruajten me sukses',
                'created_at' => '2018-05-10 14:35:18',
                'updated_at' => '2018-05-11 07:57:05',
            ),
            105 => 
            array (
                'id' => 137,
                'lang_id' => 4,
                'key' => 'Translations updated successfully',
                'val' => 'Translations updated successfully',
                'created_at' => '2018-05-10 14:35:18',
                'updated_at' => '2018-05-10 14:35:18',
            ),
            106 => 
            array (
                'id' => 138,
                'lang_id' => 1,
                'key' => 'Login',
                'val' => 'Accedi',
                'created_at' => '2018-05-11 06:28:47',
                'updated_at' => '2018-05-11 07:37:31',
            ),
            107 => 
            array (
                'id' => 139,
                'lang_id' => 2,
                'key' => 'Login',
                'val' => 'Login',
                'created_at' => '2018-05-11 06:28:47',
                'updated_at' => '2018-05-11 07:57:05',
            ),
            108 => 
            array (
                'id' => 140,
                'lang_id' => 4,
                'key' => 'Login',
                'val' => 'Login',
                'created_at' => '2018-05-11 06:28:47',
                'updated_at' => '2018-05-11 06:28:47',
            ),
            109 => 
            array (
                'id' => 141,
                'lang_id' => 1,
                'key' => 'Password',
                'val' => 'Password',
                'created_at' => '2018-05-11 06:28:47',
                'updated_at' => '2018-05-11 07:41:50',
            ),
            110 => 
            array (
                'id' => 142,
                'lang_id' => 2,
                'key' => 'Password',
                'val' => 'Password',
                'created_at' => '2018-05-11 06:28:47',
                'updated_at' => '2018-05-11 07:57:05',
            ),
            111 => 
            array (
                'id' => 143,
                'lang_id' => 4,
                'key' => 'Password',
                'val' => 'Password',
                'created_at' => '2018-05-11 06:28:47',
                'updated_at' => '2018-05-11 06:28:47',
            ),
            112 => 
            array (
                'id' => 144,
                'lang_id' => 1,
                'key' => 'Remember Me',
                'val' => 'Ricordami',
                'created_at' => '2018-05-11 06:28:47',
                'updated_at' => '2018-05-11 07:37:31',
            ),
            113 => 
            array (
                'id' => 145,
                'lang_id' => 2,
                'key' => 'Remember Me',
                'val' => 'Me mbaj te loguar',
                'created_at' => '2018-05-11 06:28:47',
                'updated_at' => '2018-05-11 07:57:05',
            ),
            114 => 
            array (
                'id' => 146,
                'lang_id' => 4,
                'key' => 'Remember Me',
                'val' => 'Remember Me',
                'created_at' => '2018-05-11 06:28:47',
                'updated_at' => '2018-05-11 06:28:47',
            ),
            115 => 
            array (
                'id' => 147,
                'lang_id' => 1,
                'key' => 'Forgot Your Password?',
                'val' => 'Password Dimenticata?',
                'created_at' => '2018-05-11 06:28:47',
                'updated_at' => '2018-05-11 07:37:31',
            ),
            116 => 
            array (
                'id' => 148,
                'lang_id' => 2,
                'key' => 'Forgot Your Password?',
                'val' => 'Keni harruar Passwordin?',
                'created_at' => '2018-05-11 06:28:47',
                'updated_at' => '2018-05-11 07:57:05',
            ),
            117 => 
            array (
                'id' => 149,
                'lang_id' => 4,
                'key' => 'Forgot Your Password?',
                'val' => 'Forgot Your Password?',
                'created_at' => '2018-05-11 06:28:47',
                'updated_at' => '2018-05-11 06:28:47',
            ),
            118 => 
            array (
                'id' => 150,
                'lang_id' => 1,
                'key' => 'Register',
                'val' => 'Registrati',
                'created_at' => '2018-05-11 06:31:22',
                'updated_at' => '2018-05-11 07:37:31',
            ),
            119 => 
            array (
                'id' => 151,
                'lang_id' => 2,
                'key' => 'Register',
                'val' => 'Regjistrohu',
                'created_at' => '2018-05-11 06:31:22',
                'updated_at' => '2018-05-11 07:57:05',
            ),
            120 => 
            array (
                'id' => 152,
                'lang_id' => 4,
                'key' => 'Register',
                'val' => 'Register',
                'created_at' => '2018-05-11 06:31:22',
                'updated_at' => '2018-05-11 06:31:22',
            ),
            121 => 
            array (
                'id' => 153,
                'lang_id' => 1,
                'key' => 'Name',
                'val' => 'Nome',
                'created_at' => '2018-05-11 06:31:22',
                'updated_at' => '2018-05-11 07:41:50',
            ),
            122 => 
            array (
                'id' => 154,
                'lang_id' => 2,
                'key' => 'Name',
                'val' => 'Emri',
                'created_at' => '2018-05-11 06:31:22',
                'updated_at' => '2018-05-11 07:57:05',
            ),
            123 => 
            array (
                'id' => 155,
                'lang_id' => 4,
                'key' => 'Name',
                'val' => 'Name',
                'created_at' => '2018-05-11 06:31:22',
                'updated_at' => '2018-05-11 06:31:22',
            ),
            124 => 
            array (
                'id' => 156,
                'lang_id' => 1,
                'key' => 'E-Mail Address',
                'val' => 'Indirizzo eMail',
                'created_at' => '2018-05-11 06:31:22',
                'updated_at' => '2018-05-11 07:41:50',
            ),
            125 => 
            array (
                'id' => 157,
                'lang_id' => 2,
                'key' => 'E-Mail Address',
                'val' => 'Adresa eMail',
                'created_at' => '2018-05-11 06:31:22',
                'updated_at' => '2018-05-11 07:57:05',
            ),
            126 => 
            array (
                'id' => 158,
                'lang_id' => 4,
                'key' => 'E-Mail Address',
                'val' => 'E-Mail Address',
                'created_at' => '2018-05-11 06:31:22',
                'updated_at' => '2018-05-11 06:31:22',
            ),
            127 => 
            array (
                'id' => 159,
                'lang_id' => 1,
                'key' => 'Confirm Password',
                'val' => 'Conferma Password',
                'created_at' => '2018-05-11 06:31:22',
                'updated_at' => '2018-05-11 07:41:50',
            ),
            128 => 
            array (
                'id' => 160,
                'lang_id' => 2,
                'key' => 'Confirm Password',
                'val' => 'Konfirmo Password-in',
                'created_at' => '2018-05-11 06:31:22',
                'updated_at' => '2018-05-11 07:57:05',
            ),
            129 => 
            array (
                'id' => 161,
                'lang_id' => 4,
                'key' => 'Confirm Password',
                'val' => 'Confirm Password',
                'created_at' => '2018-05-11 06:31:22',
                'updated_at' => '2018-05-11 06:31:22',
            ),
            130 => 
            array (
                'id' => 162,
                'lang_id' => 1,
                'key' => 'Role created successfully',
                'val' => 'Ruolo creato con successo',
                'created_at' => '2018-05-11 07:05:07',
                'updated_at' => '2018-05-11 07:41:50',
            ),
            131 => 
            array (
                'id' => 163,
                'lang_id' => 2,
                'key' => 'Role created successfully',
                'val' => 'Roli u krijua me sukses',
                'created_at' => '2018-05-11 07:05:07',
                'updated_at' => '2018-05-11 07:57:05',
            ),
            132 => 
            array (
                'id' => 164,
                'lang_id' => 4,
                'key' => 'Role created successfully',
                'val' => 'Role created successfully',
                'created_at' => '2018-05-11 07:05:07',
                'updated_at' => '2018-05-11 07:05:07',
            ),
            133 => 
            array (
                'id' => 165,
                'lang_id' => 1,
                'key' => 'Edit Role',
                'val' => 'Modifica Ruolo',
                'created_at' => '2018-05-11 07:05:14',
                'updated_at' => '2018-05-11 07:37:32',
            ),
            134 => 
            array (
                'id' => 166,
                'lang_id' => 2,
                'key' => 'Edit Role',
                'val' => 'Modifiko Rolin',
                'created_at' => '2018-05-11 07:05:14',
                'updated_at' => '2018-05-11 07:57:05',
            ),
            135 => 
            array (
                'id' => 167,
                'lang_id' => 4,
                'key' => 'Edit Role',
                'val' => 'Edit Role',
                'created_at' => '2018-05-11 07:05:14',
                'updated_at' => '2018-05-11 07:05:14',
            ),
            136 => 
            array (
                'id' => 168,
                'lang_id' => 1,
                'key' => 'First Name',
                'val' => 'Nome',
                'created_at' => '2018-05-11 07:13:11',
                'updated_at' => '2018-05-11 07:41:50',
            ),
            137 => 
            array (
                'id' => 169,
                'lang_id' => 2,
                'key' => 'First Name',
                'val' => 'Emri',
                'created_at' => '2018-05-11 07:13:11',
                'updated_at' => '2018-05-11 07:57:05',
            ),
            138 => 
            array (
                'id' => 170,
                'lang_id' => 4,
                'key' => 'First Name',
                'val' => 'First Name',
                'created_at' => '2018-05-11 07:13:11',
                'updated_at' => '2018-05-11 07:13:11',
            ),
            139 => 
            array (
                'id' => 171,
                'lang_id' => 1,
                'key' => 'Last Name',
                'val' => 'Cognome',
                'created_at' => '2018-05-11 07:13:11',
                'updated_at' => '2018-05-11 07:41:50',
            ),
            140 => 
            array (
                'id' => 172,
                'lang_id' => 2,
                'key' => 'Last Name',
                'val' => 'Mbiemri',
                'created_at' => '2018-05-11 07:13:11',
                'updated_at' => '2018-05-11 07:57:05',
            ),
            141 => 
            array (
                'id' => 173,
                'lang_id' => 4,
                'key' => 'Last Name',
                'val' => 'Last Name',
                'created_at' => '2018-05-11 07:13:11',
                'updated_at' => '2018-05-11 07:13:11',
            ),
            142 => 
            array (
                'id' => 174,
                'lang_id' => 1,
                'key' => 'eMail Address',
                'val' => 'Indirizzo eMail',
                'created_at' => '2018-05-11 07:15:01',
                'updated_at' => '2018-05-11 07:41:50',
            ),
            143 => 
            array (
                'id' => 175,
                'lang_id' => 2,
                'key' => 'eMail Address',
                'val' => 'Adresa eMail',
                'created_at' => '2018-05-11 07:15:01',
                'updated_at' => '2018-05-11 07:57:05',
            ),
            144 => 
            array (
                'id' => 176,
                'lang_id' => 4,
                'key' => 'eMail Address',
                'val' => 'eMail Address',
                'created_at' => '2018-05-11 07:15:01',
                'updated_at' => '2018-05-11 07:15:01',
            ),
            145 => 
            array (
                'id' => 177,
                'lang_id' => 1,
                'key' => 'Select an image...',
                'val' => 'Seleziona un\'immagine...',
                'created_at' => '2018-05-11 07:16:44',
                'updated_at' => '2018-05-11 07:41:50',
            ),
            146 => 
            array (
                'id' => 178,
                'lang_id' => 2,
                'key' => 'Select an image...',
                'val' => 'Zgjidh nje imazh',
                'created_at' => '2018-05-11 07:16:44',
                'updated_at' => '2018-05-11 07:57:05',
            ),
            147 => 
            array (
                'id' => 179,
                'lang_id' => 4,
                'key' => 'Select an image...',
                'val' => 'Select an image...',
                'created_at' => '2018-05-11 07:16:44',
                'updated_at' => '2018-05-11 07:16:44',
            ),
            148 => 
            array (
                'id' => 180,
                'lang_id' => 1,
                'key' => 'Browse..',
                'val' => 'Sfoglia...',
                'created_at' => '2018-05-11 07:16:44',
                'updated_at' => '2018-05-11 07:41:50',
            ),
            149 => 
            array (
                'id' => 181,
                'lang_id' => 2,
                'key' => 'Browse..',
                'val' => 'Shfleto...',
                'created_at' => '2018-05-11 07:16:44',
                'updated_at' => '2018-05-11 07:57:05',
            ),
            150 => 
            array (
                'id' => 182,
                'lang_id' => 4,
                'key' => 'Browse..',
                'val' => 'Browse..',
                'created_at' => '2018-05-11 07:16:44',
                'updated_at' => '2018-05-11 07:16:44',
            ),
            151 => 
            array (
                'id' => 183,
                'lang_id' => 1,
                'key' => 'Change Profile Picture',
                'val' => 'Cambia Immagine Profilo',
                'created_at' => '2018-05-11 07:16:44',
                'updated_at' => '2018-05-11 07:41:50',
            ),
            152 => 
            array (
                'id' => 184,
                'lang_id' => 2,
                'key' => 'Change Profile Picture',
                'val' => 'Ndrysho Foton e Profilit',
                'created_at' => '2018-05-11 07:16:44',
                'updated_at' => '2018-05-11 07:57:05',
            ),
            153 => 
            array (
                'id' => 185,
                'lang_id' => 4,
                'key' => 'Change Profile Picture',
                'val' => 'Change Profile Picture',
                'created_at' => '2018-05-11 07:16:44',
                'updated_at' => '2018-05-11 07:16:44',
            ),
            154 => 
            array (
                'id' => 186,
                'lang_id' => 1,
                'key' => 'Profile Picture changed successfully',
                'val' => 'Immagine Profilo cambiata con successo',
                'created_at' => '2018-05-11 07:16:53',
                'updated_at' => '2018-05-11 07:41:50',
            ),
            155 => 
            array (
                'id' => 187,
                'lang_id' => 2,
                'key' => 'Profile Picture changed successfully',
                'val' => 'Foto-ja e Profilit u ndryshua me sukses',
                'created_at' => '2018-05-11 07:16:53',
                'updated_at' => '2018-05-11 08:50:28',
            ),
            156 => 
            array (
                'id' => 188,
                'lang_id' => 4,
                'key' => 'Profile Picture changed successfully',
                'val' => 'Profile Picture changed successfully',
                'created_at' => '2018-05-11 07:16:53',
                'updated_at' => '2018-05-11 07:16:53',
            ),
            157 => 
            array (
                'id' => 189,
                'lang_id' => 1,
                'key' => 'My Profile',
                'val' => 'Il mio Profilo',
                'created_at' => '2018-05-11 07:16:53',
                'updated_at' => '2018-05-11 07:41:50',
            ),
            158 => 
            array (
                'id' => 190,
                'lang_id' => 2,
                'key' => 'My Profile',
                'val' => 'Profili im',
                'created_at' => '2018-05-11 07:16:53',
                'updated_at' => '2018-05-11 08:50:28',
            ),
            159 => 
            array (
                'id' => 191,
                'lang_id' => 4,
                'key' => 'My Profile',
                'val' => 'My Profile',
                'created_at' => '2018-05-11 07:16:53',
                'updated_at' => '2018-05-11 07:16:53',
            ),
            160 => 
            array (
                'id' => 192,
                'lang_id' => 1,
                'key' => 'Change',
                'val' => 'Cambia',
                'created_at' => '2018-05-11 07:16:53',
                'updated_at' => '2018-05-11 07:41:50',
            ),
            161 => 
            array (
                'id' => 193,
                'lang_id' => 2,
                'key' => 'Change',
                'val' => 'Ndrysho',
                'created_at' => '2018-05-11 07:16:53',
                'updated_at' => '2018-05-11 08:50:28',
            ),
            162 => 
            array (
                'id' => 194,
                'lang_id' => 4,
                'key' => 'Change',
                'val' => 'Change',
                'created_at' => '2018-05-11 07:16:53',
                'updated_at' => '2018-05-11 07:16:53',
            ),
            163 => 
            array (
                'id' => 195,
                'lang_id' => 1,
                'key' => 'Change Password',
                'val' => 'Cambia Password',
                'created_at' => '2018-05-11 07:17:07',
                'updated_at' => '2018-05-11 07:41:50',
            ),
            164 => 
            array (
                'id' => 196,
                'lang_id' => 2,
                'key' => 'Change Password',
                'val' => 'Ndrysho Passwordin',
                'created_at' => '2018-05-11 07:17:07',
                'updated_at' => '2018-05-11 08:50:28',
            ),
            165 => 
            array (
                'id' => 197,
                'lang_id' => 4,
                'key' => 'Change Password',
                'val' => 'Change Password',
                'created_at' => '2018-05-11 07:17:07',
                'updated_at' => '2018-05-11 07:17:07',
            ),
            166 => 
            array (
                'id' => 198,
                'lang_id' => 1,
                'key' => 'Current Password',
                'val' => 'Password Attuale',
                'created_at' => '2018-05-11 07:17:07',
                'updated_at' => '2018-05-11 07:41:50',
            ),
            167 => 
            array (
                'id' => 199,
                'lang_id' => 2,
                'key' => 'Current Password',
                'val' => 'Passwordi Aktual',
                'created_at' => '2018-05-11 07:17:07',
                'updated_at' => '2018-05-11 08:50:28',
            ),
            168 => 
            array (
                'id' => 200,
                'lang_id' => 4,
                'key' => 'Current Password',
                'val' => 'Current Password',
                'created_at' => '2018-05-11 07:17:07',
                'updated_at' => '2018-05-11 07:17:07',
            ),
            169 => 
            array (
                'id' => 201,
                'lang_id' => 1,
                'key' => 'New Password',
                'val' => 'Nuova Password',
                'created_at' => '2018-05-11 07:17:07',
                'updated_at' => '2018-05-11 07:41:50',
            ),
            170 => 
            array (
                'id' => 202,
                'lang_id' => 2,
                'key' => 'New Password',
                'val' => 'Passwordi i ri',
                'created_at' => '2018-05-11 07:17:07',
                'updated_at' => '2018-05-11 08:50:28',
            ),
            171 => 
            array (
                'id' => 203,
                'lang_id' => 4,
                'key' => 'New Password',
                'val' => 'New Password',
                'created_at' => '2018-05-11 07:17:07',
                'updated_at' => '2018-05-11 07:17:07',
            ),
            172 => 
            array (
                'id' => 204,
                'lang_id' => 1,
                'key' => 'Repeat New Password',
                'val' => 'Ripeti Nuova Password',
                'created_at' => '2018-05-11 07:17:07',
                'updated_at' => '2018-05-11 07:41:50',
            ),
            173 => 
            array (
                'id' => 205,
                'lang_id' => 2,
                'key' => 'Repeat New Password',
                'val' => 'Perserit Passwordin e ri',
                'created_at' => '2018-05-11 07:17:07',
                'updated_at' => '2018-05-11 08:50:28',
            ),
            174 => 
            array (
                'id' => 206,
                'lang_id' => 4,
                'key' => 'Repeat New Password',
                'val' => 'Repeat New Password',
                'created_at' => '2018-05-11 07:17:07',
                'updated_at' => '2018-05-11 07:17:07',
            ),
            175 => 
            array (
                'id' => 207,
                'lang_id' => 1,
                'key' => 'The new password must be different from the old one',
                'val' => 'La nuova password deve essere diversa da quella attuale',
                'created_at' => '2018-05-11 07:17:13',
                'updated_at' => '2018-05-11 07:41:50',
            ),
            176 => 
            array (
                'id' => 208,
                'lang_id' => 2,
                'key' => 'The new password must be different from the old one',
                'val' => 'Passwordi i ri duhet te ndryshojë nga ai i vjetri',
                'created_at' => '2018-05-11 07:17:13',
                'updated_at' => '2018-05-11 08:50:28',
            ),
            177 => 
            array (
                'id' => 209,
                'lang_id' => 4,
                'key' => 'The new password must be different from the old one',
                'val' => 'The new password must be different from the old one',
                'created_at' => '2018-05-11 07:17:13',
                'updated_at' => '2018-05-11 07:17:13',
            ),
            178 => 
            array (
                'id' => 210,
                'lang_id' => 1,
                'key' => 'Password changed successfully',
                'val' => 'Password cambiata con successo',
                'created_at' => '2018-05-11 07:17:13',
                'updated_at' => '2018-05-11 07:41:50',
            ),
            179 => 
            array (
                'id' => 211,
                'lang_id' => 2,
                'key' => 'Password changed successfully',
                'val' => 'Passwordi u ndryshua me sukses',
                'created_at' => '2018-05-11 07:17:13',
                'updated_at' => '2018-05-11 08:50:28',
            ),
            180 => 
            array (
                'id' => 212,
                'lang_id' => 4,
                'key' => 'Password changed successfully',
                'val' => 'Password changed successfully',
                'created_at' => '2018-05-11 07:17:13',
                'updated_at' => '2018-05-11 07:17:13',
            ),
            181 => 
            array (
                'id' => 213,
                'lang_id' => 1,
                'key' => 'Delete User',
                'val' => 'Elimina Utente',
                'created_at' => '2018-05-11 07:18:24',
                'updated_at' => '2018-05-11 07:37:32',
            ),
            182 => 
            array (
                'id' => 214,
                'lang_id' => 2,
                'key' => 'Delete User',
                'val' => 'Fshij Perdorues',
                'created_at' => '2018-05-11 07:18:24',
                'updated_at' => '2018-05-11 08:50:28',
            ),
            183 => 
            array (
                'id' => 215,
                'lang_id' => 4,
                'key' => 'Delete User',
                'val' => 'Delete User',
                'created_at' => '2018-05-11 07:18:24',
                'updated_at' => '2018-05-11 07:18:24',
            ),
            184 => 
            array (
                'id' => 216,
                'lang_id' => 1,
                'key' => 'Do you want to delete the user ',
                'val' => 'Vuoi cancellare l\'utente',
                'created_at' => '2018-05-11 07:18:24',
                'updated_at' => '2018-05-11 07:37:32',
            ),
            185 => 
            array (
                'id' => 217,
                'lang_id' => 2,
                'key' => 'Do you want to delete the user ',
                'val' => 'Deshironi te fshini perdoruesin',
                'created_at' => '2018-05-11 07:18:24',
                'updated_at' => '2018-05-11 08:50:28',
            ),
            186 => 
            array (
                'id' => 218,
                'lang_id' => 4,
                'key' => 'Do you want to delete the user ',
                'val' => 'Do you want to delete the user',
                'created_at' => '2018-05-11 07:18:24',
                'updated_at' => '2018-05-11 07:50:33',
            ),
            187 => 
            array (
                'id' => 219,
                'lang_id' => 2,
                'key' => 'Yes',
                'val' => 'Po',
                'created_at' => '2018-05-11 07:18:24',
                'updated_at' => '2018-05-11 08:50:28',
            ),
            188 => 
            array (
                'id' => 220,
                'lang_id' => 4,
                'key' => 'Yes',
                'val' => 'Yes',
                'created_at' => '2018-05-11 07:18:24',
                'updated_at' => '2018-05-11 07:18:24',
            ),
            189 => 
            array (
                'id' => 221,
                'lang_id' => 2,
                'key' => 'No',
                'val' => 'Jo',
                'created_at' => '2018-05-11 07:18:24',
                'updated_at' => '2018-05-11 08:50:28',
            ),
            190 => 
            array (
                'id' => 222,
                'lang_id' => 4,
                'key' => 'No',
                'val' => 'No',
                'created_at' => '2018-05-11 07:18:24',
                'updated_at' => '2018-05-11 07:18:24',
            ),
            191 => 
            array (
                'id' => 223,
                'lang_id' => 1,
                'key' => 'Edit User',
                'val' => 'Modifica Utente',
                'created_at' => '2018-05-11 07:18:27',
                'updated_at' => '2018-05-11 07:37:32',
            ),
            192 => 
            array (
                'id' => 224,
                'lang_id' => 2,
                'key' => 'Edit User',
                'val' => 'Ndysho Perdoruesin',
                'created_at' => '2018-05-11 07:18:27',
                'updated_at' => '2018-05-11 08:50:28',
            ),
            193 => 
            array (
                'id' => 225,
                'lang_id' => 4,
                'key' => 'Edit User',
                'val' => 'Edit User',
                'created_at' => '2018-05-11 07:18:27',
                'updated_at' => '2018-05-11 07:18:27',
            ),
            194 => 
            array (
                'id' => 226,
                'lang_id' => 1,
                'key' => 'Select Role...',
                'val' => 'Seleziona Ruolo...',
                'created_at' => '2018-05-11 07:18:27',
                'updated_at' => '2018-05-11 07:41:50',
            ),
            195 => 
            array (
                'id' => 227,
                'lang_id' => 2,
                'key' => 'Select Role...',
                'val' => 'Zgjidh Rolin...',
                'created_at' => '2018-05-11 07:18:27',
                'updated_at' => '2018-05-11 08:50:28',
            ),
            196 => 
            array (
                'id' => 228,
                'lang_id' => 4,
                'key' => 'Select Role...',
                'val' => 'Select Role...',
                'created_at' => '2018-05-11 07:18:27',
                'updated_at' => '2018-05-11 07:18:27',
            ),
            197 => 
            array (
                'id' => 229,
                'lang_id' => 1,
                'key' => 'The username cannot contain spaces',
                'val' => 'Il nome utente non puo contenere spazi',
                'created_at' => '2018-05-11 07:18:29',
                'updated_at' => '2018-05-11 07:42:30',
            ),
            198 => 
            array (
                'id' => 230,
                'lang_id' => 2,
                'key' => 'The username cannot contain spaces',
                'val' => 'Emri i Perdoruesin nuk mund te permbaj hapsira',
                'created_at' => '2018-05-11 07:18:29',
                'updated_at' => '2018-05-11 08:50:28',
            ),
            199 => 
            array (
                'id' => 231,
                'lang_id' => 4,
                'key' => 'The username cannot contain spaces',
                'val' => 'The username cannot contain spaces',
                'created_at' => '2018-05-11 07:18:29',
                'updated_at' => '2018-05-11 07:18:29',
            ),
            200 => 
            array (
                'id' => 232,
                'lang_id' => 1,
                'key' => 'The specified role does not exist',
                'val' => 'Il ruolo specificato non esiste',
                'created_at' => '2018-05-11 07:18:29',
                'updated_at' => '2018-05-11 07:42:30',
            ),
            201 => 
            array (
                'id' => 233,
                'lang_id' => 2,
                'key' => 'The specified role does not exist',
                'val' => 'Roli qe keni zgjedhur nuk ekziston',
                'created_at' => '2018-05-11 07:18:29',
                'updated_at' => '2018-05-11 08:50:28',
            ),
            202 => 
            array (
                'id' => 234,
                'lang_id' => 4,
                'key' => 'The specified role does not exist',
                'val' => 'The specified role does not exist',
                'created_at' => '2018-05-11 07:18:29',
                'updated_at' => '2018-05-11 07:18:29',
            ),
            203 => 
            array (
                'id' => 235,
                'lang_id' => 1,
                'key' => 'User modified successfully',
                'val' => 'Utente modificato con successo',
                'created_at' => '2018-05-11 07:18:29',
                'updated_at' => '2018-05-11 07:42:30',
            ),
            204 => 
            array (
                'id' => 236,
                'lang_id' => 2,
                'key' => 'User modified successfully',
                'val' => 'Perdoruesi u ndryshua me sukses',
                'created_at' => '2018-05-11 07:18:29',
                'updated_at' => '2018-05-11 08:50:28',
            ),
            205 => 
            array (
                'id' => 237,
                'lang_id' => 4,
                'key' => 'User modified successfully',
                'val' => 'User modified successfully',
                'created_at' => '2018-05-11 07:18:29',
                'updated_at' => '2018-05-11 07:18:29',
            ),
            206 => 
            array (
                'id' => 238,
                'lang_id' => 1,
                'key' => 'Edit Menu',
                'val' => 'Modifica Menu',
                'created_at' => '2018-05-11 07:18:55',
                'updated_at' => '2018-05-11 07:37:32',
            ),
            207 => 
            array (
                'id' => 239,
                'lang_id' => 2,
                'key' => 'Edit Menu',
                'val' => 'Ndrysho Menunë',
                'created_at' => '2018-05-11 07:18:55',
                'updated_at' => '2018-05-11 08:50:28',
            ),
            208 => 
            array (
                'id' => 240,
                'lang_id' => 4,
                'key' => 'Edit Menu',
                'val' => 'Edit Menu',
                'created_at' => '2018-05-11 07:18:55',
                'updated_at' => '2018-05-11 07:18:55',
            ),
            209 => 
            array (
                'id' => 241,
                'lang_id' => 1,
                'key' => 'URL Address',
                'val' => 'Indirizzo URL',
                'created_at' => '2018-05-11 07:18:55',
                'updated_at' => '2018-05-11 07:37:32',
            ),
            210 => 
            array (
                'id' => 242,
                'lang_id' => 2,
                'key' => 'URL Address',
                'val' => 'Adresa URL',
                'created_at' => '2018-05-11 07:18:55',
                'updated_at' => '2018-05-11 08:50:28',
            ),
            211 => 
            array (
                'id' => 243,
                'lang_id' => 4,
                'key' => 'URL Address',
                'val' => 'URL Address',
                'created_at' => '2018-05-11 07:18:55',
                'updated_at' => '2018-05-11 07:18:55',
            ),
            212 => 
            array (
                'id' => 244,
                'lang_id' => 2,
                'key' => 'Select Roles...',
                'val' => 'Zgjidhni Rolet...',
                'created_at' => '2018-05-11 07:18:55',
                'updated_at' => '2018-05-11 08:50:28',
            ),
            213 => 
            array (
                'id' => 245,
                'lang_id' => 4,
                'key' => 'Select Roles...',
                'val' => 'Select Roles...',
                'created_at' => '2018-05-11 07:18:55',
                'updated_at' => '2018-05-11 07:18:55',
            ),
            214 => 
            array (
                'id' => 246,
                'lang_id' => 2,
                'key' => 'Menu modified successfully',
                'val' => 'Menu-ja u ndryshua me sukses',
                'created_at' => '2018-05-11 07:19:00',
                'updated_at' => '2018-05-11 08:50:28',
            ),
            215 => 
            array (
                'id' => 247,
                'lang_id' => 4,
                'key' => 'Menu modified successfully',
                'val' => 'Menu modified successfully',
                'created_at' => '2018-05-11 07:19:00',
                'updated_at' => '2018-05-11 07:19:00',
            ),
            216 => 
            array (
                'id' => 248,
                'lang_id' => 1,
                'key' => 'User deleted successfully',
                'val' => 'Utente cancellato con successo',
                'created_at' => '2018-05-11 07:19:14',
                'updated_at' => '2018-05-11 07:42:30',
            ),
            217 => 
            array (
                'id' => 249,
                'lang_id' => 2,
                'key' => 'User deleted successfully',
                'val' => 'Perdoruesi u fshij me sukses',
                'created_at' => '2018-05-11 07:19:14',
                'updated_at' => '2018-05-11 08:50:28',
            ),
            218 => 
            array (
                'id' => 250,
                'lang_id' => 4,
                'key' => 'User deleted successfully',
                'val' => 'User deleted successfully',
                'created_at' => '2018-05-11 07:19:14',
                'updated_at' => '2018-05-11 07:19:14',
            ),
            219 => 
            array (
                'id' => 251,
                'lang_id' => 1,
                'key' => 'Username',
                'val' => 'Nome Utente',
                'created_at' => '2018-05-11 07:37:31',
                'updated_at' => '2018-05-11 07:37:31',
            ),
            220 => 
            array (
                'id' => 252,
                'lang_id' => 1,
                'key' => 'Save',
                'val' => 'Salva',
                'created_at' => '2018-05-11 07:37:32',
                'updated_at' => '2018-05-11 07:37:32',
            ),
            221 => 
            array (
                'id' => 253,
                'lang_id' => 1,
                'key' => 'Cancel',
                'val' => 'Annulla',
                'created_at' => '2018-05-11 07:37:32',
                'updated_at' => '2018-05-11 07:37:32',
            ),
            222 => 
            array (
                'id' => 254,
                'lang_id' => 1,
                'key' => 'Role',
                'val' => 'Ruolo',
                'created_at' => '2018-05-11 07:37:32',
                'updated_at' => '2018-05-11 07:37:32',
            ),
            223 => 
            array (
                'id' => 255,
                'lang_id' => 1,
                'key' => 'Icon',
                'val' => 'Icona',
                'created_at' => '2018-05-11 07:37:32',
                'updated_at' => '2018-05-11 07:37:32',
            ),
            224 => 
            array (
                'id' => 256,
                'lang_id' => 1,
                'key' => 'Level',
                'val' => 'Livello',
                'created_at' => '2018-05-11 07:37:32',
                'updated_at' => '2018-05-11 07:37:32',
            ),
            225 => 
            array (
                'id' => 257,
                'lang_id' => 1,
                'key' => 'User',
                'val' => 'Utente',
                'created_at' => '2018-05-11 07:37:32',
                'updated_at' => '2018-05-11 07:37:32',
            ),
            226 => 
            array (
                'id' => 258,
                'lang_id' => 1,
                'key' => 'Menu',
                'val' => 'Menu',
                'created_at' => '2018-05-11 07:37:32',
                'updated_at' => '2018-05-11 07:37:32',
            ),
            227 => 
            array (
                'id' => 259,
                'lang_id' => 1,
                'key' => 'Label',
                'val' => 'Etichetta',
                'created_at' => '2018-05-11 07:37:32',
                'updated_at' => '2018-05-11 07:37:32',
            ),
            228 => 
            array (
                'id' => 260,
                'lang_id' => 1,
                'key' => 'Developer',
                'val' => 'Sviluppatore',
                'created_at' => '2018-05-11 07:37:32',
                'updated_at' => '2018-05-11 07:37:32',
            ),
            229 => 
            array (
                'id' => 261,
                'lang_id' => 1,
                'key' => 'Administrator',
                'val' => 'Amministratore',
                'created_at' => '2018-05-11 07:37:32',
                'updated_at' => '2018-05-11 07:37:32',
            ),
            230 => 
            array (
                'id' => 262,
                'lang_id' => 1,
                'key' => 'Full Name',
                'val' => 'Nome Completo',
                'created_at' => '2018-05-11 07:37:32',
                'updated_at' => '2018-05-11 07:37:32',
            ),
            231 => 
            array (
                'id' => 263,
                'lang_id' => 1,
                'key' => 'Menu Management',
                'val' => 'Gestione Menu',
                'created_at' => '2018-05-11 07:37:32',
                'updated_at' => '2018-05-11 07:37:32',
            ),
            232 => 
            array (
                'id' => 264,
                'lang_id' => 1,
                'key' => 'Roles Management',
                'val' => 'Gestione Ruoli',
                'created_at' => '2018-05-11 07:37:32',
                'updated_at' => '2018-05-11 07:37:32',
            ),
            233 => 
            array (
                'id' => 265,
                'lang_id' => 1,
                'key' => 'User Management',
                'val' => 'Gestione Utenti',
                'created_at' => '2018-05-11 07:37:32',
                'updated_at' => '2018-05-11 07:37:32',
            ),
            234 => 
            array (
                'id' => 266,
                'lang_id' => 1,
                'key' => 'Left Menu Items',
                'val' => 'Elementi Menu Sinistra',
                'created_at' => '2018-05-11 07:37:32',
                'updated_at' => '2018-05-11 07:37:32',
            ),
            235 => 
            array (
                'id' => 267,
                'lang_id' => 1,
                'key' => 'Right Menu Items',
                'val' => 'Elementi Menu Destra',
                'created_at' => '2018-05-11 07:37:32',
                'updated_at' => '2018-05-11 07:37:32',
            ),
            236 => 
            array (
                'id' => 268,
                'lang_id' => 1,
                'key' => 'Add new Menu',
                'val' => 'Aggiungi nuovo Menu',
                'created_at' => '2018-05-11 07:37:32',
                'updated_at' => '2018-05-11 07:37:32',
            ),
            237 => 
            array (
                'id' => 269,
                'lang_id' => 1,
                'key' => 'Add new Role',
                'val' => 'Aggiungi nuovo Ruolo',
                'created_at' => '2018-05-11 07:37:32',
                'updated_at' => '2018-05-11 07:37:32',
            ),
            238 => 
            array (
                'id' => 270,
                'lang_id' => 1,
                'key' => 'Add new User',
                'val' => 'Aggiungi nuovo Utente',
                'created_at' => '2018-05-11 07:37:32',
                'updated_at' => '2018-05-11 07:37:32',
            ),
            239 => 
            array (
                'id' => 271,
                'lang_id' => 1,
                'key' => 'Edit Language',
                'val' => 'Modifica Lingua',
                'created_at' => '2018-05-11 07:37:32',
                'updated_at' => '2018-05-11 07:37:32',
            ),
            240 => 
            array (
                'id' => 272,
                'lang_id' => 1,
                'key' => 'Delete Menu',
                'val' => 'Elimina Menu',
                'created_at' => '2018-05-11 07:37:32',
                'updated_at' => '2018-05-11 07:37:32',
            ),
            241 => 
            array (
                'id' => 273,
                'lang_id' => 1,
                'key' => 'Delete Role',
                'val' => 'Elimina Ruolo',
                'created_at' => '2018-05-11 07:37:32',
                'updated_at' => '2018-05-11 07:37:32',
            ),
            242 => 
            array (
                'id' => 274,
                'lang_id' => 1,
                'key' => 'Delete Language',
                'val' => 'Elimina Lingua',
                'created_at' => '2018-05-11 07:37:32',
                'updated_at' => '2018-05-11 07:37:32',
            ),
            243 => 
            array (
                'id' => 275,
                'lang_id' => 1,
                'key' => 'Do you want to delete the menu',
                'val' => 'Vuoi cancellare il menu',
                'created_at' => '2018-05-11 07:37:32',
                'updated_at' => '2018-05-11 07:37:32',
            ),
            244 => 
            array (
                'id' => 276,
                'lang_id' => 1,
                'key' => 'Do you want to delete the role',
                'val' => 'Vuoi cancellare il ruolo',
                'created_at' => '2018-05-11 07:37:32',
                'updated_at' => '2018-05-11 07:37:32',
            ),
            245 => 
            array (
                'id' => 277,
                'lang_id' => 1,
                'key' => 'Do you want to delete the language',
                'val' => 'Vuoi cancellare la lingua',
                'created_at' => '2018-05-11 07:37:32',
                'updated_at' => '2018-05-11 07:37:32',
            ),
            246 => 
            array (
                'id' => 278,
                'lang_id' => 2,
                'key' => 'Cancel',
                'val' => 'Anullo',
                'created_at' => '2018-05-11 07:48:05',
                'updated_at' => '2018-05-11 08:50:28',
            ),
            247 => 
            array (
                'id' => 279,
                'lang_id' => 2,
                'key' => 'Edit Language',
                'val' => 'Ndrysho Gjuhen',
                'created_at' => '2018-05-11 07:49:46',
                'updated_at' => '2018-05-11 08:50:28',
            ),
            248 => 
            array (
                'id' => 280,
                'lang_id' => 2,
                'key' => 'Label',
                'val' => 'Etiket',
                'created_at' => '2018-05-11 07:49:46',
                'updated_at' => '2018-05-11 08:50:28',
            ),
            249 => 
            array (
                'id' => 281,
                'lang_id' => 2,
                'key' => 'Locale',
                'val' => 'Kodi i Gjuhes',
                'created_at' => '2018-05-11 07:49:46',
                'updated_at' => '2018-05-11 11:08:41',
            ),
            250 => 
            array (
                'id' => 282,
                'lang_id' => 2,
                'key' => 'Icon',
                'val' => 'Ikona',
                'created_at' => '2018-05-11 07:49:46',
                'updated_at' => '2018-05-11 08:50:28',
            ),
            251 => 
            array (
                'id' => 283,
                'lang_id' => 2,
                'key' => 'Search',
                'val' => 'Kerko',
                'created_at' => '2018-05-11 07:49:46',
                'updated_at' => '2018-05-11 08:50:28',
            ),
            252 => 
            array (
                'id' => 284,
                'lang_id' => 2,
                'key' => 'Language modified successfully',
                'val' => 'Gjuha u ndryshua me sukses',
                'created_at' => '2018-05-11 07:49:58',
                'updated_at' => '2018-05-11 08:50:28',
            ),
            253 => 
            array (
                'id' => 285,
                'lang_id' => 1,
                'key' => 'English',
                'val' => 'Inglese',
                'created_at' => '2018-05-11 07:50:16',
                'updated_at' => '2018-05-11 07:51:02',
            ),
            254 => 
            array (
                'id' => 286,
                'lang_id' => 2,
                'key' => 'English',
                'val' => 'Anglisht',
                'created_at' => '2018-05-11 07:50:16',
                'updated_at' => '2018-05-11 08:50:28',
            ),
            255 => 
            array (
                'id' => 287,
                'lang_id' => 4,
                'key' => 'English',
                'val' => 'English',
                'created_at' => '2018-05-11 07:50:16',
                'updated_at' => '2018-05-11 07:50:16',
            ),
            256 => 
            array (
                'id' => 288,
                'lang_id' => 1,
                'key' => 'Italian',
                'val' => 'Italiano',
                'created_at' => '2018-05-11 07:50:57',
                'updated_at' => '2018-05-11 07:51:25',
            ),
            257 => 
            array (
                'id' => 289,
                'lang_id' => 2,
                'key' => 'Italian',
                'val' => 'Italisht',
                'created_at' => '2018-05-11 07:50:57',
                'updated_at' => '2018-05-11 08:50:28',
            ),
            258 => 
            array (
                'id' => 290,
                'lang_id' => 4,
                'key' => 'Italian',
                'val' => 'Italian',
                'created_at' => '2018-05-11 07:50:57',
                'updated_at' => '2018-05-11 07:50:57',
            ),
            259 => 
            array (
                'id' => 291,
                'lang_id' => 1,
                'key' => 'Albanian',
                'val' => 'Albanese',
                'created_at' => '2018-05-11 07:51:32',
                'updated_at' => '2018-05-11 08:39:09',
            ),
            260 => 
            array (
                'id' => 292,
                'lang_id' => 2,
                'key' => 'Albanian',
                'val' => 'Shqip',
                'created_at' => '2018-05-11 07:51:32',
                'updated_at' => '2018-05-11 08:50:28',
            ),
            261 => 
            array (
                'id' => 293,
                'lang_id' => 4,
                'key' => 'Albanian',
                'val' => 'Albanian',
                'created_at' => '2018-05-11 07:51:32',
                'updated_at' => '2018-05-11 07:51:32',
            ),
            262 => 
            array (
                'id' => 294,
                'lang_id' => 1,
                'key' => 'eMail',
                'val' => 'eMail',
                'created_at' => '2018-05-11 08:38:54',
                'updated_at' => '2018-05-11 08:39:09',
            ),
            263 => 
            array (
                'id' => 295,
                'lang_id' => 2,
                'key' => 'Language created successfully',
                'val' => 'Gjuha u krijua me sukses',
                'created_at' => '2018-05-11 09:44:23',
                'updated_at' => '2018-05-11 11:07:55',
            ),
            264 => 
            array (
                'id' => 296,
                'lang_id' => 4,
                'key' => 'Language created successfully',
                'val' => 'Language created successfully',
                'created_at' => '2018-05-11 09:44:23',
                'updated_at' => '2018-05-11 09:44:23',
            ),
            265 => 
            array (
                'id' => 298,
                'lang_id' => 1,
                'key' => 'Spanish',
                'val' => 'Spagnolo',
                'created_at' => '2018-05-11 10:39:28',
                'updated_at' => '2018-05-11 11:01:01',
            ),
            266 => 
            array (
                'id' => 299,
                'lang_id' => 2,
                'key' => 'Spanish',
                'val' => 'Spanjisht',
                'created_at' => '2018-05-11 10:39:28',
                'updated_at' => '2018-05-11 11:07:55',
            ),
            267 => 
            array (
                'id' => 300,
                'lang_id' => 4,
                'key' => 'Spanish',
                'val' => 'Spanish',
                'created_at' => '2018-05-11 10:39:29',
                'updated_at' => '2018-05-11 10:39:29',
            ),
            268 => 
            array (
                'id' => 302,
                'lang_id' => 2,
                'key' => 'Delete Language',
                'val' => 'Fshij Gjuhen',
                'created_at' => '2018-05-11 10:53:00',
                'updated_at' => '2018-05-11 11:07:55',
            ),
            269 => 
            array (
                'id' => 303,
                'lang_id' => 4,
                'key' => 'Delete Language',
                'val' => 'Delete Language',
                'created_at' => '2018-05-11 10:53:00',
                'updated_at' => '2018-05-11 10:53:00',
            ),
            270 => 
            array (
                'id' => 305,
                'lang_id' => 2,
                'key' => 'Do you want to delete the language ',
                'val' => 'Deshironi te fshini gjuhen',
                'created_at' => '2018-05-11 10:53:00',
                'updated_at' => '2018-05-11 11:07:55',
            ),
            271 => 
            array (
                'id' => 306,
                'lang_id' => 4,
                'key' => 'Do you want to delete the language ',
                'val' => 'Do you want to delete the language ',
                'created_at' => '2018-05-11 10:53:00',
                'updated_at' => '2018-05-11 10:53:00',
            ),
            272 => 
            array (
                'id' => 308,
                'lang_id' => 2,
                'key' => 'Language deleted successfully',
                'val' => 'Gjuha u fshi me sukses',
                'created_at' => '2018-05-11 10:53:02',
                'updated_at' => '2018-05-11 11:07:55',
            ),
            273 => 
            array (
                'id' => 309,
                'lang_id' => 4,
                'key' => 'Language deleted successfully',
                'val' => 'Language deleted successfully',
                'created_at' => '2018-05-11 10:53:02',
                'updated_at' => '2018-05-11 10:53:02',
            ),
            274 => 
            array (
                'id' => 506,
                'lang_id' => 1,
                'key' => 'Profile modified successfully',
                'val' => 'Profilo modificato con successo',
                'created_at' => '2018-05-11 10:58:02',
                'updated_at' => '2018-05-11 11:01:01',
            ),
            275 => 
            array (
                'id' => 507,
                'lang_id' => 2,
                'key' => 'Profile modified successfully',
                'val' => 'Profili u ndryshua me sukses',
                'created_at' => '2018-05-11 10:58:02',
                'updated_at' => '2018-05-11 11:07:55',
            ),
            276 => 
            array (
                'id' => 508,
                'lang_id' => 4,
                'key' => 'Profile modified successfully',
                'val' => 'Profile modified successfully',
                'created_at' => '2018-05-11 10:58:02',
                'updated_at' => '2018-05-11 10:58:02',
            ),
            277 => 
            array (
                'id' => 510,
                'lang_id' => 1,
                'key' => 'Change eMail',
                'val' => 'Cambia eMail',
                'created_at' => '2018-05-11 11:03:41',
                'updated_at' => '2018-05-11 11:08:22',
            ),
            278 => 
            array (
                'id' => 511,
                'lang_id' => 2,
                'key' => 'Change eMail',
                'val' => 'Ndryshoni eMail',
                'created_at' => '2018-05-11 11:03:41',
                'updated_at' => '2018-05-11 11:07:55',
            ),
            279 => 
            array (
                'id' => 512,
                'lang_id' => 4,
                'key' => 'Change eMail',
                'val' => 'Change eMail',
                'created_at' => '2018-05-11 11:03:42',
                'updated_at' => '2018-05-11 11:03:42',
            ),
            280 => 
            array (
                'id' => 514,
                'lang_id' => 1,
                'key' => 'Current eMail',
                'val' => 'eMail Attuale',
                'created_at' => '2018-05-11 11:03:42',
                'updated_at' => '2018-05-11 11:08:22',
            ),
            281 => 
            array (
                'id' => 515,
                'lang_id' => 2,
                'key' => 'Current eMail',
                'val' => 'eMaili Aktual',
                'created_at' => '2018-05-11 11:03:42',
                'updated_at' => '2018-05-11 11:07:55',
            ),
            282 => 
            array (
                'id' => 516,
                'lang_id' => 4,
                'key' => 'Current eMail',
                'val' => 'Current eMail',
                'created_at' => '2018-05-11 11:03:42',
                'updated_at' => '2018-05-11 11:03:42',
            ),
            283 => 
            array (
                'id' => 518,
                'lang_id' => 1,
                'key' => 'New eMail',
                'val' => 'Nuova eMail',
                'created_at' => '2018-05-11 11:03:42',
                'updated_at' => '2018-05-11 11:08:22',
            ),
            284 => 
            array (
                'id' => 519,
                'lang_id' => 2,
                'key' => 'New eMail',
                'val' => 'eMaili i ri',
                'created_at' => '2018-05-11 11:03:42',
                'updated_at' => '2018-05-11 11:07:55',
            ),
            285 => 
            array (
                'id' => 520,
                'lang_id' => 4,
                'key' => 'New eMail',
                'val' => 'New eMail',
                'created_at' => '2018-05-11 11:03:42',
                'updated_at' => '2018-05-11 11:03:42',
            ),
            286 => 
            array (
                'id' => 522,
                'lang_id' => 1,
                'key' => 'Repeat New eMail',
                'val' => 'Ripeti Nuova eMail',
                'created_at' => '2018-05-11 11:03:42',
                'updated_at' => '2018-05-11 11:08:22',
            ),
            287 => 
            array (
                'id' => 523,
                'lang_id' => 2,
                'key' => 'Repeat New eMail',
                'val' => 'Perserit eMailin e ri',
                'created_at' => '2018-05-11 11:03:42',
                'updated_at' => '2018-05-11 11:07:55',
            ),
            288 => 
            array (
                'id' => 524,
                'lang_id' => 4,
                'key' => 'Repeat New eMail',
                'val' => 'Repeat New eMail',
                'created_at' => '2018-05-11 11:03:42',
                'updated_at' => '2018-05-11 11:03:42',
            ),
            289 => 
            array (
                'id' => 525,
                'lang_id' => 1,
                'key' => 'Tiles',
                'val' => 'Schede',
                'created_at' => '2018-05-12 12:54:17',
                'updated_at' => '2018-05-12 12:54:43',
            ),
            290 => 
            array (
                'id' => 526,
                'lang_id' => 2,
                'key' => 'Tiles',
                'val' => 'Skeda',
                'created_at' => '2018-05-12 12:54:17',
                'updated_at' => '2018-05-12 12:54:55',
            ),
            291 => 
            array (
                'id' => 527,
                'lang_id' => 4,
                'key' => 'Tiles',
                'val' => 'Tiles',
                'created_at' => '2018-05-12 12:54:18',
                'updated_at' => '2018-05-12 12:54:18',
            ),
            292 => 
            array (
                'id' => 528,
                'lang_id' => 2,
                'key' => 'Developer',
                'val' => 'Programues',
                'created_at' => '2018-05-12 12:55:01',
                'updated_at' => '2018-05-12 12:55:40',
            ),
            293 => 
            array (
                'id' => 529,
                'lang_id' => 4,
                'key' => 'Developer',
                'val' => 'Developer',
                'created_at' => '2018-05-12 12:55:01',
                'updated_at' => '2018-05-12 12:55:01',
            ),
            294 => 
            array (
                'id' => 533,
                'lang_id' => 1,
                'key' => 'URL',
                'val' => 'URL',
                'created_at' => '2018-05-13 18:55:25',
                'updated_at' => '2018-05-13 20:07:45',
            ),
            295 => 
            array (
                'id' => 534,
                'lang_id' => 2,
                'key' => 'URL',
                'val' => 'URL',
                'created_at' => '2018-05-13 18:55:25',
                'updated_at' => '2018-05-13 20:55:22',
            ),
            296 => 
            array (
                'id' => 535,
                'lang_id' => 4,
                'key' => 'URL',
                'val' => 'URL',
                'created_at' => '2018-05-13 18:55:25',
                'updated_at' => '2018-05-13 18:55:25',
            ),
            297 => 
            array (
                'id' => 536,
                'lang_id' => 1,
                'key' => 'Color',
                'val' => 'Colore',
                'created_at' => '2018-05-13 18:55:25',
                'updated_at' => '2018-05-13 20:07:45',
            ),
            298 => 
            array (
                'id' => 537,
                'lang_id' => 2,
                'key' => 'Color',
                'val' => 'Ngjyra',
                'created_at' => '2018-05-13 18:55:25',
                'updated_at' => '2018-05-13 20:55:22',
            ),
            299 => 
            array (
                'id' => 538,
                'lang_id' => 4,
                'key' => 'Color',
                'val' => 'Color',
                'created_at' => '2018-05-13 18:55:25',
                'updated_at' => '2018-05-13 18:55:25',
            ),
            300 => 
            array (
                'id' => 539,
                'lang_id' => 1,
                'key' => 'Add new Tile',
                'val' => 'Aggiungi nuova Scheda',
                'created_at' => '2018-05-13 20:06:57',
                'updated_at' => '2018-05-13 20:08:11',
            ),
            301 => 
            array (
                'id' => 540,
                'lang_id' => 2,
                'key' => 'Add new Tile',
                'val' => 'Shto Skedë',
                'created_at' => '2018-05-13 20:06:57',
                'updated_at' => '2018-05-13 20:55:22',
            ),
            302 => 
            array (
                'id' => 541,
                'lang_id' => 4,
                'key' => 'Add new Tile',
                'val' => 'Add new Tile',
                'created_at' => '2018-05-13 20:06:57',
                'updated_at' => '2018-05-13 20:06:57',
            ),
            303 => 
            array (
                'id' => 542,
                'lang_id' => 1,
                'key' => 'Tiles Management',
                'val' => 'Gestione Schede',
                'created_at' => '2018-05-13 20:06:57',
                'updated_at' => '2018-05-13 20:07:45',
            ),
            304 => 
            array (
                'id' => 543,
                'lang_id' => 2,
                'key' => 'Tiles Management',
                'val' => 'Administrimi i Skeda-ve',
                'created_at' => '2018-05-13 20:06:57',
                'updated_at' => '2018-05-13 20:56:58',
            ),
            305 => 
            array (
                'id' => 544,
                'lang_id' => 4,
                'key' => 'Tiles Management',
                'val' => 'Tiles Management',
                'created_at' => '2018-05-13 20:06:57',
                'updated_at' => '2018-05-13 20:06:57',
            ),
            306 => 
            array (
                'id' => 545,
                'lang_id' => 1,
                'key' => 'Tickets',
                'val' => 'Difetti',
                'created_at' => '2018-05-13 20:16:25',
                'updated_at' => '2018-05-13 20:16:39',
            ),
            307 => 
            array (
                'id' => 546,
                'lang_id' => 2,
                'key' => 'Tickets',
                'val' => 'Defektet',
                'created_at' => '2018-05-13 20:16:25',
                'updated_at' => '2018-05-13 20:55:22',
            ),
            308 => 
            array (
                'id' => 547,
                'lang_id' => 4,
                'key' => 'Tickets',
                'val' => 'Tickets',
                'created_at' => '2018-05-13 20:16:25',
                'updated_at' => '2018-05-13 20:16:25',
            ),
            309 => 
            array (
                'id' => 548,
                'lang_id' => 1,
                'key' => 'Clients',
                'val' => 'Clienti',
                'created_at' => '2018-05-13 20:25:20',
                'updated_at' => '2018-05-13 20:50:49',
            ),
            310 => 
            array (
                'id' => 549,
                'lang_id' => 2,
                'key' => 'Clients',
                'val' => 'Klientat',
                'created_at' => '2018-05-13 20:25:20',
                'updated_at' => '2018-05-13 20:55:22',
            ),
            311 => 
            array (
                'id' => 550,
                'lang_id' => 4,
                'key' => 'Clients',
                'val' => 'Clients',
                'created_at' => '2018-05-13 20:25:20',
                'updated_at' => '2018-05-13 20:25:20',
            ),
            312 => 
            array (
                'id' => 551,
                'lang_id' => 1,
                'key' => 'Edit Tile',
                'val' => 'Modifica Scheda',
                'created_at' => '2018-05-13 20:36:49',
                'updated_at' => '2018-05-13 20:50:49',
            ),
            313 => 
            array (
                'id' => 552,
                'lang_id' => 2,
                'key' => 'Edit Tile',
                'val' => 'Ndrysho Skeden',
                'created_at' => '2018-05-13 20:36:49',
                'updated_at' => '2018-05-13 20:55:22',
            ),
            314 => 
            array (
                'id' => 553,
                'lang_id' => 4,
                'key' => 'Edit Tile',
                'val' => 'Edit Tile',
                'created_at' => '2018-05-13 20:36:49',
                'updated_at' => '2018-05-13 20:36:49',
            ),
            315 => 
            array (
                'id' => 554,
                'lang_id' => 1,
                'key' => 'Tile modified successfully',
                'val' => 'Scheda modificata con successo',
                'created_at' => '2018-05-13 20:45:32',
                'updated_at' => '2018-05-13 20:50:49',
            ),
            316 => 
            array (
                'id' => 555,
                'lang_id' => 2,
                'key' => 'Tile modified successfully',
                'val' => 'Skeda u ndryshua me sukses',
                'created_at' => '2018-05-13 20:45:32',
                'updated_at' => '2018-05-13 20:55:22',
            ),
            317 => 
            array (
                'id' => 556,
                'lang_id' => 4,
                'key' => 'Tile modified successfully',
                'val' => 'Tile modified successfully',
                'created_at' => '2018-05-13 20:45:32',
                'updated_at' => '2018-05-13 20:45:32',
            ),
            318 => 
            array (
                'id' => 560,
                'lang_id' => 1,
                'key' => 'Counter',
                'val' => 'Contatore',
                'created_at' => '2018-05-13 20:48:01',
                'updated_at' => '2018-05-13 20:50:49',
            ),
            319 => 
            array (
                'id' => 561,
                'lang_id' => 2,
                'key' => 'Counter',
                'val' => 'Numeratori',
                'created_at' => '2018-05-13 20:48:01',
                'updated_at' => '2018-05-13 20:55:22',
            ),
            320 => 
            array (
                'id' => 562,
                'lang_id' => 4,
                'key' => 'Counter',
                'val' => 'Counter',
                'created_at' => '2018-05-13 20:48:01',
                'updated_at' => '2018-05-13 20:48:01',
            ),
            321 => 
            array (
                'id' => 563,
                'lang_id' => 2,
                'key' => 'Do you want to delete the menu ',
                'val' => 'Deshironi te fshini menu-në',
                'created_at' => '2018-05-13 20:49:48',
                'updated_at' => '2018-05-13 20:55:22',
            ),
            322 => 
            array (
                'id' => 564,
                'lang_id' => 4,
                'key' => 'Do you want to delete the menu ',
                'val' => 'Do you want to delete the menu ',
                'created_at' => '2018-05-13 20:49:48',
                'updated_at' => '2018-05-13 20:49:48',
            ),
            323 => 
            array (
                'id' => 565,
                'lang_id' => 1,
                'key' => 'Tile created successfully',
                'val' => NULL,
                'created_at' => '2018-05-13 21:09:00',
                'updated_at' => '2018-05-13 21:09:00',
            ),
            324 => 
            array (
                'id' => 566,
                'lang_id' => 2,
                'key' => 'Tile created successfully',
                'val' => NULL,
                'created_at' => '2018-05-13 21:09:01',
                'updated_at' => '2018-05-13 21:09:01',
            ),
            325 => 
            array (
                'id' => 567,
                'lang_id' => 4,
                'key' => 'Tile created successfully',
                'val' => 'Tile created successfully',
                'created_at' => '2018-05-13 21:09:01',
                'updated_at' => '2018-05-13 21:09:01',
            ),
            326 => 
            array (
                'id' => 568,
                'lang_id' => 1,
                'key' => 'Employees',
                'val' => NULL,
                'created_at' => '2018-05-13 21:11:29',
                'updated_at' => '2018-05-13 21:11:29',
            ),
            327 => 
            array (
                'id' => 569,
                'lang_id' => 2,
                'key' => 'Employees',
                'val' => NULL,
                'created_at' => '2018-05-13 21:11:29',
                'updated_at' => '2018-05-13 21:11:29',
            ),
            328 => 
            array (
                'id' => 570,
                'lang_id' => 4,
                'key' => 'Employees',
                'val' => 'Employees',
                'created_at' => '2018-05-13 21:11:29',
                'updated_at' => '2018-05-13 21:11:29',
            ),
            329 => 
            array (
                'id' => 571,
                'lang_id' => 1,
                'key' => 'User created successfully',
                'val' => NULL,
                'created_at' => '2018-05-13 21:11:54',
                'updated_at' => '2018-05-13 21:11:54',
            ),
            330 => 
            array (
                'id' => 572,
                'lang_id' => 2,
                'key' => 'User created successfully',
                'val' => NULL,
                'created_at' => '2018-05-13 21:11:54',
                'updated_at' => '2018-05-13 21:11:54',
            ),
            331 => 
            array (
                'id' => 573,
                'lang_id' => 4,
                'key' => 'User created successfully',
                'val' => 'User created successfully',
                'created_at' => '2018-05-13 21:11:54',
                'updated_at' => '2018-05-13 21:11:54',
            ),
            332 => 
            array (
                'id' => 574,
                'lang_id' => 1,
                'key' => 'Role modified successfully',
                'val' => NULL,
                'created_at' => '2018-05-13 21:13:42',
                'updated_at' => '2018-05-13 21:13:42',
            ),
            333 => 
            array (
                'id' => 575,
                'lang_id' => 2,
                'key' => 'Role modified successfully',
                'val' => NULL,
                'created_at' => '2018-05-13 21:13:42',
                'updated_at' => '2018-05-13 21:13:42',
            ),
            334 => 
            array (
                'id' => 576,
                'lang_id' => 4,
                'key' => 'Role modified successfully',
                'val' => 'Role modified successfully',
                'created_at' => '2018-05-13 21:13:42',
                'updated_at' => '2018-05-13 21:13:42',
            ),
        ));
        
        
    }
}