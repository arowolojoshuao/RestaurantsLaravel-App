<?php

use Illuminate\Database\Seeder;

class FoodOrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('food_orders')->delete();
        
        \DB::table('food_orders')->insert(array (
            0 => 
            array (
                'id' => 1,
                'price' => 1.0,
                'quantity' => 3,
                'food_id' => 1,
                'order_id' => 1,
                'created_at' => NULL,
                'updated_at' => '2019-09-03 20:28:46',
            ),
            1 => 
            array (
                'id' => 2,
                'price' => 2.0,
                'quantity' => 5,
                'food_id' => 1,
                'order_id' => 1,
                'created_at' => NULL,
                'updated_at' => '2019-09-03 20:29:38',
            ),
            2 => 
            array (
                'id' => 3,
                'price' => 23.0,
                'quantity' => 3,
                'food_id' => 2,
                'order_id' => 2,
                'created_at' => '2019-09-03 20:30:22',
                'updated_at' => '2019-09-03 20:30:22',
            ),
            3 => 
            array (
                'id' => 4,
                'price' => 15.0,
                'quantity' => 1,
                'food_id' => 2,
                'order_id' => 4,
                'created_at' => '2019-09-27 14:57:08',
                'updated_at' => '2019-09-27 14:57:08',
            ),
            4 => 
            array (
                'id' => 5,
                'price' => 15.0,
                'quantity' => 4,
                'food_id' => 2,
                'order_id' => 4,
                'created_at' => '2019-09-27 14:57:09',
                'updated_at' => '2019-09-27 14:57:09',
            ),
            5 => 
            array (
                'id' => 6,
                'price' => 11.0,
                'quantity' => 5,
                'food_id' => 1,
                'order_id' => 4,
                'created_at' => '2019-09-27 14:57:09',
                'updated_at' => '2019-09-27 14:57:09',
            ),
            6 => 
            array (
                'id' => 7,
                'price' => 15.0,
                'quantity' => 1,
                'food_id' => 2,
                'order_id' => 5,
                'created_at' => '2019-09-27 14:58:40',
                'updated_at' => '2019-09-27 14:58:40',
            ),
            7 => 
            array (
                'id' => 8,
                'price' => 15.0,
                'quantity' => 4,
                'food_id' => 2,
                'order_id' => 5,
                'created_at' => '2019-09-27 14:58:40',
                'updated_at' => '2019-09-27 14:58:40',
            ),
            8 => 
            array (
                'id' => 9,
                'price' => 11.0,
                'quantity' => 5,
                'food_id' => 1,
                'order_id' => 5,
                'created_at' => '2019-09-27 14:58:40',
                'updated_at' => '2019-09-27 14:58:40',
            ),
            9 => 
            array (
                'id' => 10,
                'price' => 15.0,
                'quantity' => 1,
                'food_id' => 2,
                'order_id' => 6,
                'created_at' => '2019-09-27 15:10:23',
                'updated_at' => '2019-09-27 15:10:23',
            ),
            10 => 
            array (
                'id' => 11,
                'price' => 15.0,
                'quantity' => 4,
                'food_id' => 2,
                'order_id' => 6,
                'created_at' => '2019-09-27 15:10:23',
                'updated_at' => '2019-09-27 15:10:23',
            ),
            11 => 
            array (
                'id' => 12,
                'price' => 11.0,
                'quantity' => 5,
                'food_id' => 1,
                'order_id' => 6,
                'created_at' => '2019-09-27 15:10:23',
                'updated_at' => '2019-09-27 15:10:23',
            ),
            12 => 
            array (
                'id' => 13,
                'price' => 11.0,
                'quantity' => 1,
                'food_id' => 1,
                'order_id' => 7,
                'created_at' => '2019-09-27 15:12:17',
                'updated_at' => '2019-09-27 15:12:17',
            ),
            13 => 
            array (
                'id' => 14,
                'price' => 11.0,
                'quantity' => 1,
                'food_id' => 1,
                'order_id' => 8,
                'created_at' => '2019-09-27 15:26:59',
                'updated_at' => '2019-09-27 15:27:00',
            ),
            14 => 
            array (
                'id' => 15,
                'price' => 11.0,
                'quantity' => 1,
                'food_id' => 1,
                'order_id' => 9,
                'created_at' => '2019-09-27 15:29:18',
                'updated_at' => '2019-09-27 15:29:18',
            ),
            15 => 
            array (
                'id' => 16,
                'price' => 11.0,
                'quantity' => 1,
                'food_id' => 1,
                'order_id' => 10,
                'created_at' => '2019-09-27 15:30:10',
                'updated_at' => '2019-09-27 15:30:10',
            ),
            16 => 
            array (
                'id' => 17,
                'price' => 11.0,
                'quantity' => 1,
                'food_id' => 1,
                'order_id' => 11,
                'created_at' => '2019-09-27 15:34:55',
                'updated_at' => '2019-09-27 15:34:55',
            ),
            17 => 
            array (
                'id' => 18,
                'price' => 11.0,
                'quantity' => 1,
                'food_id' => 1,
                'order_id' => 12,
                'created_at' => '2019-09-27 15:35:26',
                'updated_at' => '2019-09-27 15:35:26',
            ),
            18 => 
            array (
                'id' => 19,
                'price' => 15.0,
                'quantity' => 1,
                'food_id' => 2,
                'order_id' => 13,
                'created_at' => '2019-09-27 21:05:16',
                'updated_at' => '2019-09-27 21:05:16',
            ),
            19 => 
            array (
                'id' => 20,
                'price' => 11.0,
                'quantity' => 1,
                'food_id' => 1,
                'order_id' => 14,
                'created_at' => '2019-09-27 21:16:46',
                'updated_at' => '2019-09-27 21:16:46',
            ),
            20 => 
            array (
                'id' => 21,
                'price' => 15.0,
                'quantity' => 1,
                'food_id' => 2,
                'order_id' => 15,
                'created_at' => '2019-10-09 17:03:21',
                'updated_at' => '2019-10-09 17:03:21',
            ),
            21 => 
            array (
                'id' => 22,
                'price' => 24.0,
                'quantity' => 1,
                'food_id' => 1,
                'order_id' => 15,
                'created_at' => '2019-10-09 17:03:21',
                'updated_at' => '2019-10-09 17:03:22',
            ),
            22 => 
            array (
                'id' => 23,
                'price' => 21.0,
                'quantity' => 1,
                'food_id' => 2,
                'order_id' => 16,
                'created_at' => '2019-10-11 21:37:42',
                'updated_at' => '2019-10-11 21:37:42',
            ),
            23 => 
            array (
                'id' => 24,
                'price' => 21.0,
                'quantity' => 3,
                'food_id' => 2,
                'order_id' => 17,
                'created_at' => '2019-10-11 21:51:38',
                'updated_at' => '2019-10-11 21:51:38',
            ),
            24 => 
            array (
                'id' => 25,
                'price' => 21.0,
                'quantity' => 4,
                'food_id' => 2,
                'order_id' => 18,
                'created_at' => '2019-10-11 22:06:37',
                'updated_at' => '2019-10-11 22:06:38',
            ),
            25 => 
            array (
                'id' => 26,
                'price' => 15.0,
                'quantity' => 2,
                'food_id' => 2,
                'order_id' => 19,
                'created_at' => '2019-10-12 17:54:37',
                'updated_at' => '2019-10-12 17:54:37',
            ),
            26 => 
            array (
                'id' => 27,
                'price' => 15.0,
                'quantity' => 2,
                'food_id' => 2,
                'order_id' => 20,
                'created_at' => '2019-10-12 17:55:36',
                'updated_at' => '2019-10-12 17:55:36',
            ),
            27 => 
            array (
                'id' => 28,
                'price' => 16.0,
                'quantity' => 3,
                'food_id' => 1,
                'order_id' => 21,
                'created_at' => '2019-10-12 18:08:48',
                'updated_at' => '2019-10-12 18:08:49',
            ),
            28 => 
            array (
                'id' => 29,
                'price' => 11.0,
                'quantity' => 1,
                'food_id' => 1,
                'order_id' => 22,
                'created_at' => '2019-10-12 18:17:36',
                'updated_at' => '2019-10-12 18:17:36',
            ),
            29 => 
            array (
                'id' => 30,
                'price' => 11.0,
                'quantity' => 1,
                'food_id' => 1,
                'order_id' => 23,
                'created_at' => '2019-10-12 18:20:21',
                'updated_at' => '2019-10-12 18:20:21',
            ),
            30 => 
            array (
                'id' => 31,
                'price' => 11.0,
                'quantity' => 1,
                'food_id' => 1,
                'order_id' => 24,
                'created_at' => '2019-10-12 18:21:12',
                'updated_at' => '2019-10-12 18:21:12',
            ),
            31 => 
            array (
                'id' => 32,
                'price' => 11.0,
                'quantity' => 1,
                'food_id' => 1,
                'order_id' => 25,
                'created_at' => '2019-10-12 18:24:58',
                'updated_at' => '2019-10-18 11:51:26',
            ),
            32 => 
            array (
                'id' => 33,
                'price' => 11.0,
                'quantity' => 1,
                'food_id' => 1,
                'order_id' => 26,
                'created_at' => '2019-10-12 20:28:38',
                'updated_at' => '2019-10-12 20:28:38',
            ),
            33 => 
            array (
                'id' => 34,
                'price' => 11.0,
                'quantity' => 5,
                'food_id' => 1,
                'order_id' => 27,
                'created_at' => '2019-10-12 20:42:27',
                'updated_at' => '2019-10-12 20:42:27',
            ),
            34 => 
            array (
                'id' => 35,
                'price' => 15.0,
                'quantity' => 1,
                'food_id' => 2,
                'order_id' => 28,
                'created_at' => '2019-10-12 20:44:03',
                'updated_at' => '2019-10-18 11:51:19',
            ),
            35 => 
            array (
                'id' => 36,
                'price' => 15.0,
                'quantity' => 3,
                'food_id' => 2,
                'order_id' => 29,
                'created_at' => '2019-10-15 17:00:43',
                'updated_at' => '2019-10-15 17:00:43',
            ),
            36 => 
            array (
                'id' => 37,
                'price' => 22.0,
                'quantity' => 2,
                'food_id' => 1,
                'order_id' => 30,
                'created_at' => '2019-10-18 12:53:54',
                'updated_at' => '2019-10-18 12:53:55',
            ),
            37 => 
            array (
                'id' => 38,
                'price' => 21.0,
                'quantity' => 1,
                'food_id' => 2,
                'order_id' => 30,
                'created_at' => '2019-10-18 12:53:55',
                'updated_at' => '2019-10-18 12:53:55',
            ),
            38 => 
            array (
                'id' => 39,
                'price' => 8.0,
                'quantity' => 2,
                'food_id' => 3,
                'order_id' => 30,
                'created_at' => '2019-10-18 12:53:55',
                'updated_at' => '2019-10-18 12:53:55',
            ),
        ));
        
        
    }
}