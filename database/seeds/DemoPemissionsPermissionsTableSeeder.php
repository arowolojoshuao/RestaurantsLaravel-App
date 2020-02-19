<?php

use Illuminate\Database\Seeder;

class DemoPemissionsPermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 140,
                'name' => 'permissions.index',
                'guard_name' => 'web',
                'created_at' => '2018-07-21 18:37:03',
                'updated_at' => '2018-07-21 18:37:03',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 141,
                'name' => 'permissions.create',
                'guard_name' => 'web',
                'created_at' => '2018-07-21 18:37:03',
                'updated_at' => '2018-07-21 18:37:03',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 142,
                'name' => 'permissions.store',
                'guard_name' => 'web',
                'created_at' => '2018-07-21 18:37:03',
                'updated_at' => '2018-07-21 18:37:03',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 143,
                'name' => 'permissions.show',
                'guard_name' => 'web',
                'created_at' => '2018-07-21 18:37:03',
                'updated_at' => '2018-07-21 18:37:03',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 144,
                'name' => 'permissions.edit',
                'guard_name' => 'web',
                'created_at' => '2018-07-21 18:37:03',
                'updated_at' => '2018-07-21 18:37:03',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 145,
                'name' => 'permissions.update',
                'guard_name' => 'web',
                'created_at' => '2018-07-21 18:37:03',
                'updated_at' => '2018-07-21 18:37:03',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 146,
                'name' => 'permissions.destroy',
                'guard_name' => 'web',
                'created_at' => '2018-07-21 18:37:03',
                'updated_at' => '2018-07-21 18:37:03',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 147,
                'name' => 'roles.index',
                'guard_name' => 'web',
                'created_at' => '2018-07-21 18:37:03',
                'updated_at' => '2018-07-21 18:37:03',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 148,
                'name' => 'roles.create',
                'guard_name' => 'web',
                'created_at' => '2018-07-21 18:37:03',
                'updated_at' => '2018-07-21 18:37:03',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 149,
                'name' => 'roles.store',
                'guard_name' => 'web',
                'created_at' => '2018-07-21 18:37:03',
                'updated_at' => '2018-07-21 18:37:03',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 150,
                'name' => 'roles.show',
                'guard_name' => 'web',
                'created_at' => '2018-07-21 18:37:04',
                'updated_at' => '2018-07-21 18:37:04',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 151,
                'name' => 'roles.edit',
                'guard_name' => 'web',
                'created_at' => '2018-07-21 18:37:04',
                'updated_at' => '2018-07-21 18:37:04',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 152,
                'name' => 'roles.update',
                'guard_name' => 'web',
                'created_at' => '2018-07-21 18:37:04',
                'updated_at' => '2018-07-21 18:37:04',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 153,
                'name' => 'roles.destroy',
                'guard_name' => 'web',
                'created_at' => '2018-07-21 18:37:04',
                'updated_at' => '2018-07-21 18:37:04',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 154,
                'name' => 'users.index',
                'guard_name' => 'web',
                'created_at' => '2018-07-21 18:37:04',
                'updated_at' => '2018-07-21 18:37:04',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 155,
                'name' => 'users.create',
                'guard_name' => 'web',
                'created_at' => '2018-07-21 18:37:04',
                'updated_at' => '2018-07-21 18:37:04',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 156,
                'name' => 'users.store',
                'guard_name' => 'web',
                'created_at' => '2018-07-21 18:37:04',
                'updated_at' => '2018-07-21 18:37:04',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 157,
                'name' => 'users.show',
                'guard_name' => 'web',
                'created_at' => '2018-07-21 18:37:04',
                'updated_at' => '2018-07-21 18:37:04',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 158,
                'name' => 'users.edit',
                'guard_name' => 'web',
                'created_at' => '2018-07-21 18:37:04',
                'updated_at' => '2018-07-21 18:37:04',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 159,
                'name' => 'users.update',
                'guard_name' => 'web',
                'created_at' => '2018-07-21 18:37:04',
                'updated_at' => '2018-07-21 18:37:04',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 160,
                'name' => 'users.destroy',
                'guard_name' => 'web',
                'created_at' => '2018-07-21 18:37:04',
                'updated_at' => '2018-07-21 18:37:04',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 161,
                'name' => 'users.profile',
                'guard_name' => 'web',
                'created_at' => '2018-07-21 18:53:20',
                'updated_at' => '2018-07-21 18:53:20',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 162,
                'name' => 'medias.create',
                'guard_name' => 'web',
                'created_at' => '2018-07-21 18:53:20',
                'updated_at' => '2018-07-21 18:53:20',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 165,
                'name' => 'medias.delete',
                'guard_name' => 'web',
                'created_at' => '2018-07-21 18:53:21',
                'updated_at' => '2018-07-21 18:53:21',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 166,
                'name' => 'medias',
                'guard_name' => 'web',
                'created_at' => '2018-07-21 18:53:21',
                'updated_at' => '2018-07-21 18:53:21',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 167,
                'name' => 'medias.delete-all',
                'guard_name' => 'web',
                'created_at' => '2018-07-21 18:53:21',
                'updated_at' => '2018-07-21 18:53:21',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 168,
                'name' => 'dashboard',
                'guard_name' => 'web',
                'created_at' => '2018-07-21 18:53:21',
                'updated_at' => '2018-07-21 18:53:21',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 171,
                'name' => 'app-settings',
                'guard_name' => 'web',
                'created_at' => '2018-07-21 18:53:21',
                'updated_at' => '2018-07-21 18:53:21',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 172,
                'name' => 'customFields.index',
                'guard_name' => 'web',
                'created_at' => '2018-07-24 18:14:03',
                'updated_at' => '2018-07-24 18:14:03',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 173,
                'name' => 'customFields.create',
                'guard_name' => 'web',
                'created_at' => '2018-07-24 18:14:03',
                'updated_at' => '2018-07-24 18:14:03',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 174,
                'name' => 'customFields.store',
                'guard_name' => 'web',
                'created_at' => '2018-07-24 18:14:03',
                'updated_at' => '2018-07-24 18:14:03',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 175,
                'name' => 'customFields.show',
                'guard_name' => 'web',
                'created_at' => '2018-07-24 18:14:03',
                'updated_at' => '2018-07-24 18:14:03',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 176,
                'name' => 'customFields.edit',
                'guard_name' => 'web',
                'created_at' => '2018-07-24 18:14:03',
                'updated_at' => '2018-07-24 18:14:03',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 177,
                'name' => 'customFields.update',
                'guard_name' => 'web',
                'created_at' => '2018-07-24 18:14:04',
                'updated_at' => '2018-07-24 18:14:04',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 178,
                'name' => 'customFields.destroy',
                'guard_name' => 'web',
                'created_at' => '2018-07-24 18:14:04',
                'updated_at' => '2018-07-24 18:14:04',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 179,
                'name' => 'users.login-as-user',
                'guard_name' => 'web',
                'created_at' => '2018-07-29 16:49:09',
                'updated_at' => '2018-07-29 16:49:09',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 187,
                'name' => 'restaurants.index',
                'guard_name' => 'web',
                'created_at' => '2019-08-27 18:14:44',
                'updated_at' => '2019-08-27 18:14:44',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 188,
                'name' => 'restaurants.create',
                'guard_name' => 'web',
                'created_at' => '2019-08-27 18:14:44',
                'updated_at' => '2019-08-27 18:14:44',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 189,
                'name' => 'restaurants.store',
                'guard_name' => 'web',
                'created_at' => '2019-08-27 18:14:44',
                'updated_at' => '2019-08-27 18:14:44',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 190,
                'name' => 'restaurants.show',
                'guard_name' => 'web',
                'created_at' => '2019-08-27 18:14:44',
                'updated_at' => '2019-08-27 18:14:44',
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 191,
                'name' => 'restaurants.edit',
                'guard_name' => 'web',
                'created_at' => '2019-08-27 18:14:44',
                'updated_at' => '2019-08-27 18:14:44',
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 192,
                'name' => 'restaurants.update',
                'guard_name' => 'web',
                'created_at' => '2019-08-27 18:14:44',
                'updated_at' => '2019-08-27 18:14:44',
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 193,
                'name' => 'restaurants.destroy',
                'guard_name' => 'web',
                'created_at' => '2019-08-27 18:14:45',
                'updated_at' => '2019-08-27 18:14:45',
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 194,
                'name' => 'categories.index',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:32',
                'updated_at' => '2019-08-29 21:53:32',
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 195,
                'name' => 'categories.create',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:32',
                'updated_at' => '2019-08-29 21:53:32',
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 196,
                'name' => 'categories.store',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:33',
                'updated_at' => '2019-08-29 21:53:33',
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 197,
                'name' => 'categories.show',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:33',
                'updated_at' => '2019-08-29 21:53:33',
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 198,
                'name' => 'categories.edit',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:33',
                'updated_at' => '2019-08-29 21:53:33',
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 199,
                'name' => 'categories.update',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:33',
                'updated_at' => '2019-08-29 21:53:33',
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 200,
                'name' => 'categories.destroy',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:33',
                'updated_at' => '2019-08-29 21:53:33',
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'id' => 201,
                'name' => 'faq_categories.index',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:33',
                'updated_at' => '2019-08-29 21:53:33',
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 202,
                'name' => 'faq_categories.create',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:33',
                'updated_at' => '2019-08-29 21:53:33',
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'id' => 203,
                'name' => 'faq_categories.store',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:33',
                'updated_at' => '2019-08-29 21:53:33',
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'id' => 204,
                'name' => 'faq_categories.show',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:33',
                'updated_at' => '2019-08-29 21:53:33',
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'id' => 205,
                'name' => 'faq_categories.edit',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:34',
                'updated_at' => '2019-08-29 21:53:34',
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'id' => 206,
                'name' => 'faq_categories.update',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:34',
                'updated_at' => '2019-08-29 21:53:34',
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'id' => 207,
                'name' => 'faq_categories.destroy',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:34',
                'updated_at' => '2019-08-29 21:53:34',
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'id' => 208,
                'name' => 'order_statuses.index',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:34',
                'updated_at' => '2019-08-29 21:53:34',
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'id' => 209,
                'name' => 'order_statuses.create',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:34',
                'updated_at' => '2019-08-29 21:53:34',
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'id' => 210,
                'name' => 'order_statuses.store',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:34',
                'updated_at' => '2019-08-29 21:53:34',
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'id' => 211,
                'name' => 'order_statuses.show',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:34',
                'updated_at' => '2019-08-29 21:53:34',
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'id' => 212,
                'name' => 'order_statuses.edit',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:34',
                'updated_at' => '2019-08-29 21:53:34',
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'id' => 213,
                'name' => 'order_statuses.update',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:34',
                'updated_at' => '2019-08-29 21:53:34',
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'id' => 214,
                'name' => 'order_statuses.destroy',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:34',
                'updated_at' => '2019-08-29 21:53:34',
                'deleted_at' => NULL,
            ),
            64 => 
            array (
                'id' => 215,
                'name' => 'foods.index',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:34',
                'updated_at' => '2019-08-29 21:53:34',
                'deleted_at' => NULL,
            ),
            65 => 
            array (
                'id' => 216,
                'name' => 'foods.create',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:34',
                'updated_at' => '2019-08-29 21:53:34',
                'deleted_at' => NULL,
            ),
            66 => 
            array (
                'id' => 217,
                'name' => 'foods.store',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:34',
                'updated_at' => '2019-08-29 21:53:34',
                'deleted_at' => NULL,
            ),
            67 => 
            array (
                'id' => 218,
                'name' => 'foods.show',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:34',
                'updated_at' => '2019-08-29 21:53:34',
                'deleted_at' => NULL,
            ),
            68 => 
            array (
                'id' => 219,
                'name' => 'foods.edit',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:35',
                'updated_at' => '2019-08-29 21:53:35',
                'deleted_at' => NULL,
            ),
            69 => 
            array (
                'id' => 220,
                'name' => 'foods.update',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:35',
                'updated_at' => '2019-08-29 21:53:35',
                'deleted_at' => NULL,
            ),
            70 => 
            array (
                'id' => 221,
                'name' => 'foods.destroy',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:35',
                'updated_at' => '2019-08-29 21:53:35',
                'deleted_at' => NULL,
            ),
            71 => 
            array (
                'id' => 222,
                'name' => 'galleries.index',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:35',
                'updated_at' => '2019-08-29 21:53:35',
                'deleted_at' => NULL,
            ),
            72 => 
            array (
                'id' => 223,
                'name' => 'galleries.create',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:35',
                'updated_at' => '2019-08-29 21:53:35',
                'deleted_at' => NULL,
            ),
            73 => 
            array (
                'id' => 224,
                'name' => 'galleries.store',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:35',
                'updated_at' => '2019-08-29 21:53:35',
                'deleted_at' => NULL,
            ),
            74 => 
            array (
                'id' => 225,
                'name' => 'galleries.show',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:35',
                'updated_at' => '2019-08-29 21:53:35',
                'deleted_at' => NULL,
            ),
            75 => 
            array (
                'id' => 226,
                'name' => 'galleries.edit',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:35',
                'updated_at' => '2019-08-29 21:53:35',
                'deleted_at' => NULL,
            ),
            76 => 
            array (
                'id' => 227,
                'name' => 'galleries.update',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:35',
                'updated_at' => '2019-08-29 21:53:35',
                'deleted_at' => NULL,
            ),
            77 => 
            array (
                'id' => 228,
                'name' => 'galleries.destroy',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:35',
                'updated_at' => '2019-08-29 21:53:35',
                'deleted_at' => NULL,
            ),
            78 => 
            array (
                'id' => 229,
                'name' => 'food_reviews.index',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:35',
                'updated_at' => '2019-08-29 21:53:35',
                'deleted_at' => NULL,
            ),
            79 => 
            array (
                'id' => 230,
                'name' => 'food_reviews.create',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:35',
                'updated_at' => '2019-08-29 21:53:35',
                'deleted_at' => NULL,
            ),
            80 => 
            array (
                'id' => 231,
                'name' => 'food_reviews.store',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:35',
                'updated_at' => '2019-08-29 21:53:35',
                'deleted_at' => NULL,
            ),
            81 => 
            array (
                'id' => 232,
                'name' => 'food_reviews.show',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:36',
                'updated_at' => '2019-08-29 21:53:36',
                'deleted_at' => NULL,
            ),
            82 => 
            array (
                'id' => 233,
                'name' => 'food_reviews.edit',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:36',
                'updated_at' => '2019-08-29 21:53:36',
                'deleted_at' => NULL,
            ),
            83 => 
            array (
                'id' => 234,
                'name' => 'food_reviews.update',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:36',
                'updated_at' => '2019-08-29 21:53:36',
                'deleted_at' => NULL,
            ),
            84 => 
            array (
                'id' => 235,
                'name' => 'food_reviews.destroy',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:36',
                'updated_at' => '2019-08-29 21:53:36',
                'deleted_at' => NULL,
            ),
            85 => 
            array (
                'id' => 236,
                'name' => 'orders.index',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:36',
                'updated_at' => '2019-08-29 21:53:36',
                'deleted_at' => NULL,
            ),
            86 => 
            array (
                'id' => 237,
                'name' => 'orders.create',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:36',
                'updated_at' => '2019-08-29 21:53:36',
                'deleted_at' => NULL,
            ),
            87 => 
            array (
                'id' => 238,
                'name' => 'orders.store',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:36',
                'updated_at' => '2019-08-29 21:53:36',
                'deleted_at' => NULL,
            ),
            88 => 
            array (
                'id' => 239,
                'name' => 'orders.show',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:36',
                'updated_at' => '2019-08-29 21:53:36',
                'deleted_at' => NULL,
            ),
            89 => 
            array (
                'id' => 240,
                'name' => 'orders.edit',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:36',
                'updated_at' => '2019-08-29 21:53:36',
                'deleted_at' => NULL,
            ),
            90 => 
            array (
                'id' => 241,
                'name' => 'orders.update',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:36',
                'updated_at' => '2019-08-29 21:53:36',
                'deleted_at' => NULL,
            ),
            91 => 
            array (
                'id' => 242,
                'name' => 'orders.destroy',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:36',
                'updated_at' => '2019-08-29 21:53:36',
                'deleted_at' => NULL,
            ),
            92 => 
            array (
                'id' => 243,
                'name' => 'carts.index',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:36',
                'updated_at' => '2019-08-29 21:53:36',
                'deleted_at' => NULL,
            ),
            93 => 
            array (
                'id' => 244,
                'name' => 'carts.create',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:37',
                'updated_at' => '2019-08-29 21:53:37',
                'deleted_at' => NULL,
            ),
            94 => 
            array (
                'id' => 245,
                'name' => 'carts.store',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:37',
                'updated_at' => '2019-08-29 21:53:37',
                'deleted_at' => NULL,
            ),
            95 => 
            array (
                'id' => 246,
                'name' => 'carts.show',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:37',
                'updated_at' => '2019-08-29 21:53:37',
                'deleted_at' => NULL,
            ),
            96 => 
            array (
                'id' => 247,
                'name' => 'carts.edit',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:37',
                'updated_at' => '2019-08-29 21:53:37',
                'deleted_at' => NULL,
            ),
            97 => 
            array (
                'id' => 248,
                'name' => 'carts.update',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:37',
                'updated_at' => '2019-08-29 21:53:37',
                'deleted_at' => NULL,
            ),
            98 => 
            array (
                'id' => 249,
                'name' => 'carts.destroy',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:37',
                'updated_at' => '2019-08-29 21:53:37',
                'deleted_at' => NULL,
            ),
            99 => 
            array (
                'id' => 250,
                'name' => 'nutrition.index',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:37',
                'updated_at' => '2019-08-29 21:53:37',
                'deleted_at' => NULL,
            ),
            100 => 
            array (
                'id' => 251,
                'name' => 'nutrition.create',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:37',
                'updated_at' => '2019-08-29 21:53:37',
                'deleted_at' => NULL,
            ),
            101 => 
            array (
                'id' => 252,
                'name' => 'nutrition.store',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:37',
                'updated_at' => '2019-08-29 21:53:37',
                'deleted_at' => NULL,
            ),
            102 => 
            array (
                'id' => 253,
                'name' => 'nutrition.show',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:37',
                'updated_at' => '2019-08-29 21:53:37',
                'deleted_at' => NULL,
            ),
            103 => 
            array (
                'id' => 254,
                'name' => 'nutrition.edit',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:38',
                'updated_at' => '2019-08-29 21:53:38',
                'deleted_at' => NULL,
            ),
            104 => 
            array (
                'id' => 255,
                'name' => 'nutrition.update',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:38',
                'updated_at' => '2019-08-29 21:53:38',
                'deleted_at' => NULL,
            ),
            105 => 
            array (
                'id' => 256,
                'name' => 'nutrition.destroy',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:38',
                'updated_at' => '2019-08-29 21:53:38',
                'deleted_at' => NULL,
            ),
            106 => 
            array (
                'id' => 257,
                'name' => 'extras.index',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:38',
                'updated_at' => '2019-08-29 21:53:38',
                'deleted_at' => NULL,
            ),
            107 => 
            array (
                'id' => 258,
                'name' => 'extras.create',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:38',
                'updated_at' => '2019-08-29 21:53:38',
                'deleted_at' => NULL,
            ),
            108 => 
            array (
                'id' => 259,
                'name' => 'extras.store',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:38',
                'updated_at' => '2019-08-29 21:53:38',
                'deleted_at' => NULL,
            ),
            109 => 
            array (
                'id' => 260,
                'name' => 'extras.show',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:38',
                'updated_at' => '2019-08-29 21:53:38',
                'deleted_at' => NULL,
            ),
            110 => 
            array (
                'id' => 261,
                'name' => 'extras.edit',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:38',
                'updated_at' => '2019-08-29 21:53:38',
                'deleted_at' => NULL,
            ),
            111 => 
            array (
                'id' => 262,
                'name' => 'extras.update',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:38',
                'updated_at' => '2019-08-29 21:53:38',
                'deleted_at' => NULL,
            ),
            112 => 
            array (
                'id' => 263,
                'name' => 'extras.destroy',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:38',
                'updated_at' => '2019-08-29 21:53:38',
                'deleted_at' => NULL,
            ),
            113 => 
            array (
                'id' => 264,
                'name' => 'favorites.index',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:38',
                'updated_at' => '2019-08-29 21:53:38',
                'deleted_at' => NULL,
            ),
            114 => 
            array (
                'id' => 265,
                'name' => 'favorites.create',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:38',
                'updated_at' => '2019-08-29 21:53:38',
                'deleted_at' => NULL,
            ),
            115 => 
            array (
                'id' => 266,
                'name' => 'favorites.store',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:39',
                'updated_at' => '2019-08-29 21:53:39',
                'deleted_at' => NULL,
            ),
            116 => 
            array (
                'id' => 267,
                'name' => 'favorites.show',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:39',
                'updated_at' => '2019-08-29 21:53:39',
                'deleted_at' => NULL,
            ),
            117 => 
            array (
                'id' => 268,
                'name' => 'favorites.edit',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:39',
                'updated_at' => '2019-08-29 21:53:39',
                'deleted_at' => NULL,
            ),
            118 => 
            array (
                'id' => 269,
                'name' => 'favorites.update',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:39',
                'updated_at' => '2019-08-29 21:53:39',
                'deleted_at' => NULL,
            ),
            119 => 
            array (
                'id' => 270,
                'name' => 'favorites.destroy',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:39',
                'updated_at' => '2019-08-29 21:53:39',
                'deleted_at' => NULL,
            ),
            120 => 
            array (
                'id' => 271,
                'name' => 'notifications.index',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:39',
                'updated_at' => '2019-08-29 21:53:39',
                'deleted_at' => NULL,
            ),
            121 => 
            array (
                'id' => 272,
                'name' => 'notifications.create',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:39',
                'updated_at' => '2019-08-29 21:53:39',
                'deleted_at' => NULL,
            ),
            122 => 
            array (
                'id' => 273,
                'name' => 'notifications.store',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:39',
                'updated_at' => '2019-08-29 21:53:39',
                'deleted_at' => NULL,
            ),
            123 => 
            array (
                'id' => 274,
                'name' => 'notifications.show',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:39',
                'updated_at' => '2019-08-29 21:53:39',
                'deleted_at' => NULL,
            ),
            124 => 
            array (
                'id' => 275,
                'name' => 'notifications.edit',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:39',
                'updated_at' => '2019-08-29 21:53:39',
                'deleted_at' => NULL,
            ),
            125 => 
            array (
                'id' => 276,
                'name' => 'notifications.update',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:39',
                'updated_at' => '2019-08-29 21:53:39',
                'deleted_at' => NULL,
            ),
            126 => 
            array (
                'id' => 277,
                'name' => 'notifications.destroy',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:39',
                'updated_at' => '2019-08-29 21:53:39',
                'deleted_at' => NULL,
            ),
            127 => 
            array (
                'id' => 278,
                'name' => 'payments.index',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:40',
                'updated_at' => '2019-08-29 21:53:40',
                'deleted_at' => NULL,
            ),
            128 => 
            array (
                'id' => 279,
                'name' => 'payments.create',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:40',
                'updated_at' => '2019-08-29 21:53:40',
                'deleted_at' => NULL,
            ),
            129 => 
            array (
                'id' => 280,
                'name' => 'payments.store',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:40',
                'updated_at' => '2019-08-29 21:53:40',
                'deleted_at' => NULL,
            ),
            130 => 
            array (
                'id' => 281,
                'name' => 'payments.show',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:40',
                'updated_at' => '2019-08-29 21:53:40',
                'deleted_at' => NULL,
            ),
            131 => 
            array (
                'id' => 282,
                'name' => 'payments.edit',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:40',
                'updated_at' => '2019-08-29 21:53:40',
                'deleted_at' => NULL,
            ),
            132 => 
            array (
                'id' => 283,
                'name' => 'payments.update',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:40',
                'updated_at' => '2019-08-29 21:53:40',
                'deleted_at' => NULL,
            ),
            133 => 
            array (
                'id' => 284,
                'name' => 'payments.destroy',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:40',
                'updated_at' => '2019-08-29 21:53:40',
                'deleted_at' => NULL,
            ),
            134 => 
            array (
                'id' => 285,
                'name' => 'faqs.index',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:40',
                'updated_at' => '2019-08-29 21:53:40',
                'deleted_at' => NULL,
            ),
            135 => 
            array (
                'id' => 286,
                'name' => 'faqs.create',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:40',
                'updated_at' => '2019-08-29 21:53:40',
                'deleted_at' => NULL,
            ),
            136 => 
            array (
                'id' => 287,
                'name' => 'faqs.store',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:41',
                'updated_at' => '2019-08-29 21:53:41',
                'deleted_at' => NULL,
            ),
            137 => 
            array (
                'id' => 288,
                'name' => 'faqs.show',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:41',
                'updated_at' => '2019-08-29 21:53:41',
                'deleted_at' => NULL,
            ),
            138 => 
            array (
                'id' => 289,
                'name' => 'faqs.edit',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:41',
                'updated_at' => '2019-08-29 21:53:41',
                'deleted_at' => NULL,
            ),
            139 => 
            array (
                'id' => 290,
                'name' => 'faqs.update',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:41',
                'updated_at' => '2019-08-29 21:53:41',
                'deleted_at' => NULL,
            ),
            140 => 
            array (
                'id' => 291,
                'name' => 'faqs.destroy',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:41',
                'updated_at' => '2019-08-29 21:53:41',
                'deleted_at' => NULL,
            ),
            141 => 
            array (
                'id' => 292,
                'name' => 'cart_extras.index',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:41',
                'updated_at' => '2019-08-29 21:53:41',
                'deleted_at' => NULL,
            ),
            142 => 
            array (
                'id' => 293,
                'name' => 'cart_extras.create',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:41',
                'updated_at' => '2019-08-29 21:53:41',
                'deleted_at' => NULL,
            ),
            143 => 
            array (
                'id' => 294,
                'name' => 'cart_extras.store',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:41',
                'updated_at' => '2019-08-29 21:53:41',
                'deleted_at' => NULL,
            ),
            144 => 
            array (
                'id' => 295,
                'name' => 'cart_extras.show',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:41',
                'updated_at' => '2019-08-29 21:53:41',
                'deleted_at' => NULL,
            ),
            145 => 
            array (
                'id' => 296,
                'name' => 'cart_extras.edit',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:41',
                'updated_at' => '2019-08-29 21:53:41',
                'deleted_at' => NULL,
            ),
            146 => 
            array (
                'id' => 297,
                'name' => 'cart_extras.update',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:41',
                'updated_at' => '2019-08-29 21:53:41',
                'deleted_at' => NULL,
            ),
            147 => 
            array (
                'id' => 298,
                'name' => 'cart_extras.destroy',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:42',
                'updated_at' => '2019-08-29 21:53:42',
                'deleted_at' => NULL,
            ),
            148 => 
            array (
                'id' => 299,
                'name' => 'user_restaurants.index',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:42',
                'updated_at' => '2019-08-29 21:53:42',
                'deleted_at' => NULL,
            ),
            149 => 
            array (
                'id' => 300,
                'name' => 'user_restaurants.create',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:42',
                'updated_at' => '2019-08-29 21:53:42',
                'deleted_at' => NULL,
            ),
            150 => 
            array (
                'id' => 301,
                'name' => 'user_restaurants.store',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:42',
                'updated_at' => '2019-08-29 21:53:42',
                'deleted_at' => NULL,
            ),
            151 => 
            array (
                'id' => 302,
                'name' => 'user_restaurants.show',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:42',
                'updated_at' => '2019-08-29 21:53:42',
                'deleted_at' => NULL,
            ),
            152 => 
            array (
                'id' => 303,
                'name' => 'user_restaurants.edit',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:42',
                'updated_at' => '2019-08-29 21:53:42',
                'deleted_at' => NULL,
            ),
            153 => 
            array (
                'id' => 304,
                'name' => 'user_restaurants.update',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:42',
                'updated_at' => '2019-08-29 21:53:42',
                'deleted_at' => NULL,
            ),
            154 => 
            array (
                'id' => 305,
                'name' => 'user_restaurants.destroy',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:42',
                'updated_at' => '2019-08-29 21:53:42',
                'deleted_at' => NULL,
            ),
            155 => 
            array (
                'id' => 306,
                'name' => 'restaurant_reviews.index',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:42',
                'updated_at' => '2019-08-29 21:53:42',
                'deleted_at' => NULL,
            ),
            156 => 
            array (
                'id' => 307,
                'name' => 'restaurant_reviews.create',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:42',
                'updated_at' => '2019-08-29 21:53:42',
                'deleted_at' => NULL,
            ),
            157 => 
            array (
                'id' => 308,
                'name' => 'restaurant_reviews.store',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:43',
                'updated_at' => '2019-08-29 21:53:43',
                'deleted_at' => NULL,
            ),
            158 => 
            array (
                'id' => 309,
                'name' => 'restaurant_reviews.show',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:43',
                'updated_at' => '2019-08-29 21:53:43',
                'deleted_at' => NULL,
            ),
            159 => 
            array (
                'id' => 310,
                'name' => 'restaurant_reviews.edit',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:43',
                'updated_at' => '2019-08-29 21:53:43',
                'deleted_at' => NULL,
            ),
            160 => 
            array (
                'id' => 311,
                'name' => 'restaurant_reviews.update',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:43',
                'updated_at' => '2019-08-29 21:53:43',
                'deleted_at' => NULL,
            ),
            161 => 
            array (
                'id' => 312,
                'name' => 'restaurant_reviews.destroy',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:43',
                'updated_at' => '2019-08-29 21:53:43',
                'deleted_at' => NULL,
            ),
            162 => 
            array (
                'id' => 313,
                'name' => 'food_orders.index',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:43',
                'updated_at' => '2019-08-29 21:53:43',
                'deleted_at' => NULL,
            ),
            163 => 
            array (
                'id' => 314,
                'name' => 'food_orders.create',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:43',
                'updated_at' => '2019-08-29 21:53:43',
                'deleted_at' => NULL,
            ),
            164 => 
            array (
                'id' => 315,
                'name' => 'food_orders.store',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:43',
                'updated_at' => '2019-08-29 21:53:43',
                'deleted_at' => NULL,
            ),
            165 => 
            array (
                'id' => 316,
                'name' => 'food_orders.show',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:44',
                'updated_at' => '2019-08-29 21:53:44',
                'deleted_at' => NULL,
            ),
            166 => 
            array (
                'id' => 317,
                'name' => 'food_orders.edit',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:44',
                'updated_at' => '2019-08-29 21:53:44',
                'deleted_at' => NULL,
            ),
            167 => 
            array (
                'id' => 318,
                'name' => 'food_orders.update',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:44',
                'updated_at' => '2019-08-29 21:53:44',
                'deleted_at' => NULL,
            ),
            168 => 
            array (
                'id' => 319,
                'name' => 'food_orders.destroy',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:44',
                'updated_at' => '2019-08-29 21:53:44',
                'deleted_at' => NULL,
            ),
            169 => 
            array (
                'id' => 320,
                'name' => 'food_order_extras.index',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:44',
                'updated_at' => '2019-08-29 21:53:44',
                'deleted_at' => NULL,
            ),
            170 => 
            array (
                'id' => 321,
                'name' => 'food_order_extras.create',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:44',
                'updated_at' => '2019-08-29 21:53:44',
                'deleted_at' => NULL,
            ),
            171 => 
            array (
                'id' => 322,
                'name' => 'food_order_extras.store',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:44',
                'updated_at' => '2019-08-29 21:53:44',
                'deleted_at' => NULL,
            ),
            172 => 
            array (
                'id' => 323,
                'name' => 'food_order_extras.show',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:44',
                'updated_at' => '2019-08-29 21:53:44',
                'deleted_at' => NULL,
            ),
            173 => 
            array (
                'id' => 324,
                'name' => 'food_order_extras.edit',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:45',
                'updated_at' => '2019-08-29 21:53:45',
                'deleted_at' => NULL,
            ),
            174 => 
            array (
                'id' => 325,
                'name' => 'food_order_extras.update',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:45',
                'updated_at' => '2019-08-29 21:53:45',
                'deleted_at' => NULL,
            ),
            175 => 
            array (
                'id' => 326,
                'name' => 'food_order_extras.destroy',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:45',
                'updated_at' => '2019-08-29 21:53:45',
                'deleted_at' => NULL,
            ),
            176 => 
            array (
                'id' => 327,
                'name' => 'favorite_extras.index',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:45',
                'updated_at' => '2019-08-29 21:53:45',
                'deleted_at' => NULL,
            ),
            177 => 
            array (
                'id' => 328,
                'name' => 'favorite_extras.create',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:45',
                'updated_at' => '2019-08-29 21:53:45',
                'deleted_at' => NULL,
            ),
            178 => 
            array (
                'id' => 329,
                'name' => 'favorite_extras.store',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:45',
                'updated_at' => '2019-08-29 21:53:45',
                'deleted_at' => NULL,
            ),
            179 => 
            array (
                'id' => 330,
                'name' => 'favorite_extras.show',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:45',
                'updated_at' => '2019-08-29 21:53:45',
                'deleted_at' => NULL,
            ),
            180 => 
            array (
                'id' => 331,
                'name' => 'favorite_extras.edit',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:45',
                'updated_at' => '2019-08-29 21:53:45',
                'deleted_at' => NULL,
            ),
            181 => 
            array (
                'id' => 332,
                'name' => 'favorite_extras.update',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:45',
                'updated_at' => '2019-08-29 21:53:45',
                'deleted_at' => NULL,
            ),
            182 => 
            array (
                'id' => 333,
                'name' => 'favorite_extras.destroy',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:45',
                'updated_at' => '2019-08-29 21:53:45',
                'deleted_at' => NULL,
            ),
            183 => 
            array (
                'id' => 334,
                'name' => 'faqCategories.index',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:46',
                'updated_at' => '2019-08-29 21:53:46',
                'deleted_at' => NULL,
            ),
            184 => 
            array (
                'id' => 335,
                'name' => 'faqCategories.create',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:46',
                'updated_at' => '2019-08-29 21:53:46',
                'deleted_at' => NULL,
            ),
            185 => 
            array (
                'id' => 336,
                'name' => 'faqCategories.store',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:46',
                'updated_at' => '2019-08-29 21:53:46',
                'deleted_at' => NULL,
            ),
            186 => 
            array (
                'id' => 337,
                'name' => 'faqCategories.show',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:46',
                'updated_at' => '2019-08-29 21:53:46',
                'deleted_at' => NULL,
            ),
            187 => 
            array (
                'id' => 338,
                'name' => 'faqCategories.edit',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:46',
                'updated_at' => '2019-08-29 21:53:46',
                'deleted_at' => NULL,
            ),
            188 => 
            array (
                'id' => 339,
                'name' => 'faqCategories.update',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:46',
                'updated_at' => '2019-08-29 21:53:46',
                'deleted_at' => NULL,
            ),
            189 => 
            array (
                'id' => 340,
                'name' => 'faqCategories.destroy',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:46',
                'updated_at' => '2019-08-29 21:53:46',
                'deleted_at' => NULL,
            ),
            190 => 
            array (
                'id' => 341,
                'name' => 'orderStatuses.index',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:46',
                'updated_at' => '2019-08-29 21:53:46',
                'deleted_at' => NULL,
            ),
            191 => 
            array (
                'id' => 342,
                'name' => 'orderStatuses.create',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:47',
                'updated_at' => '2019-08-29 21:53:47',
                'deleted_at' => NULL,
            ),
            192 => 
            array (
                'id' => 343,
                'name' => 'orderStatuses.store',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:47',
                'updated_at' => '2019-08-29 21:53:47',
                'deleted_at' => NULL,
            ),
            193 => 
            array (
                'id' => 344,
                'name' => 'orderStatuses.show',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:47',
                'updated_at' => '2019-08-29 21:53:47',
                'deleted_at' => NULL,
            ),
            194 => 
            array (
                'id' => 345,
                'name' => 'orderStatuses.edit',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:47',
                'updated_at' => '2019-08-29 21:53:47',
                'deleted_at' => NULL,
            ),
            195 => 
            array (
                'id' => 346,
                'name' => 'orderStatuses.update',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:47',
                'updated_at' => '2019-08-29 21:53:47',
                'deleted_at' => NULL,
            ),
            196 => 
            array (
                'id' => 347,
                'name' => 'orderStatuses.destroy',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:47',
                'updated_at' => '2019-08-29 21:53:47',
                'deleted_at' => NULL,
            ),
            197 => 
            array (
                'id' => 348,
                'name' => 'foodReviews.index',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:47',
                'updated_at' => '2019-08-29 21:53:47',
                'deleted_at' => NULL,
            ),
            198 => 
            array (
                'id' => 349,
                'name' => 'foodReviews.create',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:47',
                'updated_at' => '2019-08-29 21:53:47',
                'deleted_at' => NULL,
            ),
            199 => 
            array (
                'id' => 350,
                'name' => 'foodReviews.store',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:47',
                'updated_at' => '2019-08-29 21:53:47',
                'deleted_at' => NULL,
            ),
            200 => 
            array (
                'id' => 351,
                'name' => 'foodReviews.show',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:48',
                'updated_at' => '2019-08-29 21:53:48',
                'deleted_at' => NULL,
            ),
            201 => 
            array (
                'id' => 352,
                'name' => 'foodReviews.edit',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:48',
                'updated_at' => '2019-08-29 21:53:48',
                'deleted_at' => NULL,
            ),
            202 => 
            array (
                'id' => 353,
                'name' => 'foodReviews.update',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:48',
                'updated_at' => '2019-08-29 21:53:48',
                'deleted_at' => NULL,
            ),
            203 => 
            array (
                'id' => 354,
                'name' => 'foodReviews.destroy',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:48',
                'updated_at' => '2019-08-29 21:53:48',
                'deleted_at' => NULL,
            ),
            204 => 
            array (
                'id' => 355,
                'name' => 'cartExtras.index',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:48',
                'updated_at' => '2019-08-29 21:53:48',
                'deleted_at' => NULL,
            ),
            205 => 
            array (
                'id' => 356,
                'name' => 'cartExtras.create',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:48',
                'updated_at' => '2019-08-29 21:53:48',
                'deleted_at' => NULL,
            ),
            206 => 
            array (
                'id' => 357,
                'name' => 'cartExtras.store',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:48',
                'updated_at' => '2019-08-29 21:53:48',
                'deleted_at' => NULL,
            ),
            207 => 
            array (
                'id' => 358,
                'name' => 'cartExtras.show',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:48',
                'updated_at' => '2019-08-29 21:53:48',
                'deleted_at' => NULL,
            ),
            208 => 
            array (
                'id' => 359,
                'name' => 'cartExtras.edit',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:48',
                'updated_at' => '2019-08-29 21:53:48',
                'deleted_at' => NULL,
            ),
            209 => 
            array (
                'id' => 360,
                'name' => 'cartExtras.update',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:48',
                'updated_at' => '2019-08-29 21:53:48',
                'deleted_at' => NULL,
            ),
            210 => 
            array (
                'id' => 361,
                'name' => 'cartExtras.destroy',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:49',
                'updated_at' => '2019-08-29 21:53:49',
                'deleted_at' => NULL,
            ),
            211 => 
            array (
                'id' => 362,
                'name' => 'userRestaurants.index',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:49',
                'updated_at' => '2019-08-29 21:53:49',
                'deleted_at' => NULL,
            ),
            212 => 
            array (
                'id' => 363,
                'name' => 'userRestaurants.create',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:49',
                'updated_at' => '2019-08-29 21:53:49',
                'deleted_at' => NULL,
            ),
            213 => 
            array (
                'id' => 364,
                'name' => 'userRestaurants.store',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:49',
                'updated_at' => '2019-08-29 21:53:49',
                'deleted_at' => NULL,
            ),
            214 => 
            array (
                'id' => 365,
                'name' => 'userRestaurants.show',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:49',
                'updated_at' => '2019-08-29 21:53:49',
                'deleted_at' => NULL,
            ),
            215 => 
            array (
                'id' => 366,
                'name' => 'userRestaurants.edit',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:49',
                'updated_at' => '2019-08-29 21:53:49',
                'deleted_at' => NULL,
            ),
            216 => 
            array (
                'id' => 367,
                'name' => 'userRestaurants.update',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:49',
                'updated_at' => '2019-08-29 21:53:49',
                'deleted_at' => NULL,
            ),
            217 => 
            array (
                'id' => 368,
                'name' => 'userRestaurants.destroy',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:49',
                'updated_at' => '2019-08-29 21:53:49',
                'deleted_at' => NULL,
            ),
            218 => 
            array (
                'id' => 369,
                'name' => 'restaurantReviews.index',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:49',
                'updated_at' => '2019-08-29 21:53:49',
                'deleted_at' => NULL,
            ),
            219 => 
            array (
                'id' => 370,
                'name' => 'restaurantReviews.create',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:50',
                'updated_at' => '2019-08-29 21:53:50',
                'deleted_at' => NULL,
            ),
            220 => 
            array (
                'id' => 371,
                'name' => 'restaurantReviews.store',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:50',
                'updated_at' => '2019-08-29 21:53:50',
                'deleted_at' => NULL,
            ),
            221 => 
            array (
                'id' => 372,
                'name' => 'restaurantReviews.show',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:50',
                'updated_at' => '2019-08-29 21:53:50',
                'deleted_at' => NULL,
            ),
            222 => 
            array (
                'id' => 373,
                'name' => 'restaurantReviews.edit',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:50',
                'updated_at' => '2019-08-29 21:53:50',
                'deleted_at' => NULL,
            ),
            223 => 
            array (
                'id' => 374,
                'name' => 'restaurantReviews.update',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:50',
                'updated_at' => '2019-08-29 21:53:50',
                'deleted_at' => NULL,
            ),
            224 => 
            array (
                'id' => 375,
                'name' => 'restaurantReviews.destroy',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:50',
                'updated_at' => '2019-08-29 21:53:50',
                'deleted_at' => NULL,
            ),
            225 => 
            array (
                'id' => 376,
                'name' => 'foodOrders.index',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:50',
                'updated_at' => '2019-08-29 21:53:50',
                'deleted_at' => NULL,
            ),
            226 => 
            array (
                'id' => 377,
                'name' => 'foodOrders.create',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:50',
                'updated_at' => '2019-08-29 21:53:50',
                'deleted_at' => NULL,
            ),
            227 => 
            array (
                'id' => 378,
                'name' => 'foodOrders.store',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:51',
                'updated_at' => '2019-08-29 21:53:51',
                'deleted_at' => NULL,
            ),
            228 => 
            array (
                'id' => 379,
                'name' => 'foodOrders.show',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:51',
                'updated_at' => '2019-08-29 21:53:51',
                'deleted_at' => NULL,
            ),
            229 => 
            array (
                'id' => 380,
                'name' => 'foodOrders.edit',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:51',
                'updated_at' => '2019-08-29 21:53:51',
                'deleted_at' => NULL,
            ),
            230 => 
            array (
                'id' => 381,
                'name' => 'foodOrders.update',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:51',
                'updated_at' => '2019-08-29 21:53:51',
                'deleted_at' => NULL,
            ),
            231 => 
            array (
                'id' => 382,
                'name' => 'foodOrders.destroy',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:51',
                'updated_at' => '2019-08-29 21:53:51',
                'deleted_at' => NULL,
            ),
            232 => 
            array (
                'id' => 383,
                'name' => 'foodOrderExtras.index',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:51',
                'updated_at' => '2019-08-29 21:53:51',
                'deleted_at' => NULL,
            ),
            233 => 
            array (
                'id' => 384,
                'name' => 'foodOrderExtras.create',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:51',
                'updated_at' => '2019-08-29 21:53:51',
                'deleted_at' => NULL,
            ),
            234 => 
            array (
                'id' => 385,
                'name' => 'foodOrderExtras.store',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:51',
                'updated_at' => '2019-08-29 21:53:51',
                'deleted_at' => NULL,
            ),
            235 => 
            array (
                'id' => 386,
                'name' => 'foodOrderExtras.show',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:51',
                'updated_at' => '2019-08-29 21:53:51',
                'deleted_at' => NULL,
            ),
            236 => 
            array (
                'id' => 387,
                'name' => 'foodOrderExtras.edit',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:51',
                'updated_at' => '2019-08-29 21:53:51',
                'deleted_at' => NULL,
            ),
            237 => 
            array (
                'id' => 388,
                'name' => 'foodOrderExtras.update',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:52',
                'updated_at' => '2019-08-29 21:53:52',
                'deleted_at' => NULL,
            ),
            238 => 
            array (
                'id' => 389,
                'name' => 'foodOrderExtras.destroy',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:52',
                'updated_at' => '2019-08-29 21:53:52',
                'deleted_at' => NULL,
            ),
            239 => 
            array (
                'id' => 390,
                'name' => 'favoriteExtras.index',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:52',
                'updated_at' => '2019-08-29 21:53:52',
                'deleted_at' => NULL,
            ),
            240 => 
            array (
                'id' => 391,
                'name' => 'favoriteExtras.create',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:52',
                'updated_at' => '2019-08-29 21:53:52',
                'deleted_at' => NULL,
            ),
            241 => 
            array (
                'id' => 392,
                'name' => 'favoriteExtras.store',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:52',
                'updated_at' => '2019-08-29 21:53:52',
                'deleted_at' => NULL,
            ),
            242 => 
            array (
                'id' => 393,
                'name' => 'favoriteExtras.show',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:52',
                'updated_at' => '2019-08-29 21:53:52',
                'deleted_at' => NULL,
            ),
            243 => 
            array (
                'id' => 394,
                'name' => 'favoriteExtras.edit',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:52',
                'updated_at' => '2019-08-29 21:53:52',
                'deleted_at' => NULL,
            ),
            244 => 
            array (
                'id' => 395,
                'name' => 'favoriteExtras.update',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:52',
                'updated_at' => '2019-08-29 21:53:52',
                'deleted_at' => NULL,
            ),
            245 => 
            array (
                'id' => 396,
                'name' => 'favoriteExtras.destroy',
                'guard_name' => 'web',
                'created_at' => '2019-08-29 21:53:52',
                'updated_at' => '2019-08-29 21:53:52',
                'deleted_at' => NULL,
            ),
            246 => 
            array (
                'id' => 397,
                'name' => 'notification_types.index',
                'guard_name' => 'web',
                'created_at' => '2019-09-04 10:41:50',
                'updated_at' => '2019-09-04 10:41:50',
                'deleted_at' => NULL,
            ),
            247 => 
            array (
                'id' => 398,
                'name' => 'notification_types.create',
                'guard_name' => 'web',
                'created_at' => '2019-09-04 10:41:50',
                'updated_at' => '2019-09-04 10:41:50',
                'deleted_at' => NULL,
            ),
            248 => 
            array (
                'id' => 399,
                'name' => 'notification_types.store',
                'guard_name' => 'web',
                'created_at' => '2019-09-04 10:41:50',
                'updated_at' => '2019-09-04 10:41:50',
                'deleted_at' => NULL,
            ),
            249 => 
            array (
                'id' => 400,
                'name' => 'notification_types.show',
                'guard_name' => 'web',
                'created_at' => '2019-09-04 10:41:51',
                'updated_at' => '2019-09-04 10:41:51',
                'deleted_at' => NULL,
            ),
            250 => 
            array (
                'id' => 401,
                'name' => 'notification_types.edit',
                'guard_name' => 'web',
                'created_at' => '2019-09-04 10:41:51',
                'updated_at' => '2019-09-04 10:41:51',
                'deleted_at' => NULL,
            ),
            251 => 
            array (
                'id' => 402,
                'name' => 'notification_types.update',
                'guard_name' => 'web',
                'created_at' => '2019-09-04 10:41:51',
                'updated_at' => '2019-09-04 10:41:51',
                'deleted_at' => NULL,
            ),
            252 => 
            array (
                'id' => 403,
                'name' => 'notification_types.destroy',
                'guard_name' => 'web',
                'created_at' => '2019-09-04 10:41:51',
                'updated_at' => '2019-09-04 10:41:51',
                'deleted_at' => NULL,
            ),
            253 => 
            array (
                'id' => 404,
                'name' => 'notificationTypes.index',
                'guard_name' => 'web',
                'created_at' => '2019-09-04 10:41:51',
                'updated_at' => '2019-09-04 10:41:51',
                'deleted_at' => NULL,
            ),
            254 => 
            array (
                'id' => 405,
                'name' => 'notificationTypes.create',
                'guard_name' => 'web',
                'created_at' => '2019-09-04 10:41:51',
                'updated_at' => '2019-09-04 10:41:51',
                'deleted_at' => NULL,
            ),
            255 => 
            array (
                'id' => 406,
                'name' => 'notificationTypes.store',
                'guard_name' => 'web',
                'created_at' => '2019-09-04 10:41:52',
                'updated_at' => '2019-09-04 10:41:52',
                'deleted_at' => NULL,
            ),
            256 => 
            array (
                'id' => 407,
                'name' => 'notificationTypes.show',
                'guard_name' => 'web',
                'created_at' => '2019-09-04 10:41:52',
                'updated_at' => '2019-09-04 10:41:52',
                'deleted_at' => NULL,
            ),
            257 => 
            array (
                'id' => 408,
                'name' => 'notificationTypes.edit',
                'guard_name' => 'web',
                'created_at' => '2019-09-04 10:41:52',
                'updated_at' => '2019-09-04 10:41:52',
                'deleted_at' => NULL,
            ),
            258 => 
            array (
                'id' => 409,
                'name' => 'notificationTypes.update',
                'guard_name' => 'web',
                'created_at' => '2019-09-04 10:41:52',
                'updated_at' => '2019-09-04 10:41:52',
                'deleted_at' => NULL,
            ),
            259 => 
            array (
                'id' => 410,
                'name' => 'notificationTypes.destroy',
                'guard_name' => 'web',
                'created_at' => '2019-09-04 10:41:52',
                'updated_at' => '2019-09-04 10:41:52',
                'deleted_at' => NULL,
            ),
            260 => 
            array (
                'id' => 411,
                'name' => 'payments.byMonth',
                'guard_name' => 'web',
                'created_at' => '2019-10-22 17:35:45',
                'updated_at' => '2019-10-22 17:35:45',
                'deleted_at' => NULL,
            ),
            261 => 
            array (
                'id' => 412,
                'name' => 'currencies.index',
                'guard_name' => 'web',
                'created_at' => '2019-10-22 17:39:33',
                'updated_at' => '2019-10-22 17:39:33',
                'deleted_at' => NULL,
            ),
            262 => 
            array (
                'id' => 413,
                'name' => 'currencies.create',
                'guard_name' => 'web',
                'created_at' => '2019-10-22 17:39:33',
                'updated_at' => '2019-10-22 17:39:33',
                'deleted_at' => NULL,
            ),
            263 => 
            array (
                'id' => 414,
                'name' => 'currencies.store',
                'guard_name' => 'web',
                'created_at' => '2019-10-22 17:39:33',
                'updated_at' => '2019-10-22 17:39:33',
                'deleted_at' => NULL,
            ),
            264 => 
            array (
                'id' => 415,
                'name' => 'currencies.show',
                'guard_name' => 'web',
                'created_at' => '2019-10-22 17:39:34',
                'updated_at' => '2019-10-22 17:39:34',
                'deleted_at' => NULL,
            ),
            265 => 
            array (
                'id' => 416,
                'name' => 'currencies.edit',
                'guard_name' => 'web',
                'created_at' => '2019-10-22 17:39:35',
                'updated_at' => '2019-10-22 17:39:35',
                'deleted_at' => NULL,
            ),
            266 => 
            array (
                'id' => 417,
                'name' => 'currencies.update',
                'guard_name' => 'web',
                'created_at' => '2019-10-22 17:39:37',
                'updated_at' => '2019-10-22 17:39:37',
                'deleted_at' => NULL,
            ),
            267 => 
            array (
                'id' => 418,
                'name' => 'currencies.destroy',
                'guard_name' => 'web',
                'created_at' => '2019-10-22 17:39:37',
                'updated_at' => '2019-10-22 17:39:37',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}