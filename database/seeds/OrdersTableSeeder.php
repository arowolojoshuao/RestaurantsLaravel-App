<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('orders')->delete();
        
        \DB::table('orders')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 20,
                'order_status_id' => 1,
                'hint' => NULL,
                'tax' => 5.0,
                'created_at' => '2019-08-30 15:41:34',
                'updated_at' => '2019-08-30 15:41:34',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 19,
                'order_status_id' => 1,
                'hint' => NULL,
                'tax' => 2.0,
                'created_at' => '2019-08-30 15:55:37',
                'updated_at' => '2019-08-30 15:55:37',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 18,
                'order_status_id' => 1,
                'hint' => NULL,
                'tax' => 10.0,
                'created_at' => '2019-09-27 14:45:24',
                'updated_at' => '2019-09-27 14:45:24',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 20,
                'order_status_id' => 1,
                'hint' => NULL,
                'tax' => 10.0,
                'created_at' => '2019-09-27 14:57:08',
                'updated_at' => '2019-09-27 14:57:08',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 1,
                'order_status_id' => 1,
                'hint' => NULL,
                'tax' => 10.0,
                'created_at' => '2019-09-27 14:58:40',
                'updated_at' => '2019-09-27 14:58:40',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 1,
                'order_status_id' => 1,
                'hint' => NULL,
                'tax' => 10.0,
                'created_at' => '2019-09-27 15:10:23',
                'updated_at' => '2019-09-27 15:10:23',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 1,
                'order_status_id' => 1,
                'hint' => NULL,
                'tax' => 10.0,
                'created_at' => '2019-09-27 15:12:17',
                'updated_at' => '2019-09-27 15:12:17',
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 1,
                'order_status_id' => 1,
                'hint' => NULL,
                'tax' => 10.0,
                'created_at' => '2019-09-27 15:26:59',
                'updated_at' => '2019-09-27 15:26:59',
            ),
            8 => 
            array (
                'id' => 9,
                'user_id' => 1,
                'order_status_id' => 1,
                'hint' => NULL,
                'tax' => 10.0,
                'created_at' => '2019-09-27 15:29:17',
                'updated_at' => '2019-01-27 15:29:17',
            ),
            9 => 
            array (
                'id' => 10,
                'user_id' => 1,
                'order_status_id' => 1,
                'hint' => NULL,
                'tax' => 10.0,
                'created_at' => '2019-09-27 15:30:10',
                'updated_at' => '2019-09-27 15:30:10',
            ),
            10 => 
            array (
                'id' => 11,
                'user_id' => 1,
                'order_status_id' => 1,
                'hint' => NULL,
                'tax' => 10.0,
                'created_at' => '2019-09-27 15:34:55',
                'updated_at' => '2019-02-27 15:34:55',
            ),
            11 => 
            array (
                'id' => 12,
                'user_id' => 1,
                'order_status_id' => 1,
                'hint' => NULL,
                'tax' => 10.0,
                'created_at' => '2019-09-27 15:35:26',
                'updated_at' => '2019-09-27 15:35:26',
            ),
            12 => 
            array (
                'id' => 13,
                'user_id' => 1,
                'order_status_id' => 1,
                'hint' => NULL,
                'tax' => 10.0,
                'created_at' => '2019-09-27 21:05:16',
                'updated_at' => '2019-09-27 21:05:16',
            ),
            13 => 
            array (
                'id' => 14,
                'user_id' => 1,
                'order_status_id' => 1,
                'hint' => NULL,
                'tax' => 10.0,
                'created_at' => '2019-09-27 21:16:46',
                'updated_at' => '2019-09-27 21:16:46',
            ),
            14 => 
            array (
                'id' => 15,
                'user_id' => 1,
                'order_status_id' => 1,
                'hint' => NULL,
                'tax' => 10.0,
                'created_at' => '2019-10-09 17:03:21',
                'updated_at' => '2019-03-09 17:03:21',
            ),
            15 => 
            array (
                'id' => 16,
                'user_id' => 1,
                'order_status_id' => 1,
                'hint' => NULL,
                'tax' => 10.0,
                'created_at' => '2019-10-11 21:37:42',
                'updated_at' => '2019-10-11 21:37:42',
            ),
            16 => 
            array (
                'id' => 17,
                'user_id' => 1,
                'order_status_id' => 1,
                'hint' => NULL,
                'tax' => 10.0,
                'created_at' => '2019-10-11 21:51:38',
                'updated_at' => '2019-06-11 21:51:38',
            ),
            17 => 
            array (
                'id' => 18,
                'user_id' => 1,
                'order_status_id' => 1,
                'hint' => NULL,
                'tax' => 10.0,
                'created_at' => '2019-10-11 22:06:37',
                'updated_at' => '2019-10-11 22:06:37',
            ),
            18 => 
            array (
                'id' => 19,
                'user_id' => 1,
                'order_status_id' => 1,
                'hint' => NULL,
                'tax' => 10.0,
                'created_at' => '2019-10-12 17:54:37',
                'updated_at' => '2019-04-12 17:54:37',
            ),
            19 => 
            array (
                'id' => 20,
                'user_id' => 1,
                'order_status_id' => 1,
                'hint' => NULL,
                'tax' => 10.0,
                'created_at' => '2019-10-12 17:55:36',
                'updated_at' => '2019-10-12 17:55:36',
            ),
            20 => 
            array (
                'id' => 21,
                'user_id' => 1,
                'order_status_id' => 1,
                'hint' => NULL,
                'tax' => 10.0,
                'created_at' => '2019-10-12 18:08:48',
                'updated_at' => '2019-10-12 18:08:48',
            ),
            21 => 
            array (
                'id' => 22,
                'user_id' => 1,
                'order_status_id' => 1,
                'hint' => NULL,
                'tax' => 10.0,
                'created_at' => '2019-10-12 18:17:36',
                'updated_at' => '2019-06-12 18:17:36',
            ),
            22 => 
            array (
                'id' => 23,
                'user_id' => 1,
                'order_status_id' => 1,
                'hint' => NULL,
                'tax' => 10.0,
                'created_at' => '2019-10-12 18:20:21',
                'updated_at' => '2019-10-12 18:20:21',
            ),
            23 => 
            array (
                'id' => 24,
                'user_id' => 1,
                'order_status_id' => 1,
                'hint' => NULL,
                'tax' => 10.0,
                'created_at' => '2019-10-12 18:21:12',
                'updated_at' => '2019-10-12 18:21:12',
            ),
            24 => 
            array (
                'id' => 25,
                'user_id' => 1,
                'order_status_id' => 1,
                'hint' => NULL,
                'tax' => 10.0,
                'created_at' => '2019-10-12 18:24:58',
                'updated_at' => '2019-10-12 18:24:58',
            ),
            25 => 
            array (
                'id' => 26,
                'user_id' => 1,
                'order_status_id' => 1,
                'hint' => NULL,
                'tax' => 10.0,
                'created_at' => '2019-10-12 20:28:38',
                'updated_at' => '2019-05-12 20:28:38',
            ),
            26 => 
            array (
                'id' => 27,
                'user_id' => 1,
                'order_status_id' => 1,
                'hint' => NULL,
                'tax' => 10.0,
                'created_at' => '2019-10-12 20:42:26',
                'updated_at' => '2019-05-12 20:42:26',
            ),
            27 => 
            array (
                'id' => 28,
                'user_id' => 1,
                'order_status_id' => 1,
                'hint' => NULL,
                'tax' => 10.0,
                'created_at' => '2019-10-12 20:44:03',
                'updated_at' => '2019-10-12 20:44:03',
            ),
            28 => 
            array (
                'id' => 29,
                'user_id' => 20,
                'order_status_id' => 1,
                'hint' => NULL,
                'tax' => 10.0,
                'created_at' => '2019-10-15 17:00:43',
                'updated_at' => '2019-10-15 17:00:43',
            ),
            29 => 
            array (
                'id' => 30,
                'user_id' => 1,
                'order_status_id' => 1,
                'hint' => NULL,
                'tax' => 10.0,
                'created_at' => '2019-10-18 12:53:54',
                'updated_at' => '2019-10-18 12:53:54',
            ),
        ));
        
        
    }
}