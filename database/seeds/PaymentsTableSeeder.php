<?php

use Illuminate\Database\Seeder;

class PaymentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('payments')->delete();
        
        \DB::table('payments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'price' => 42.9,
                'description' => 'Michael E. Quinn Complete order #15',
                'user_id' => 1,
                'method' => 'Cash on Delivery',
                'status' => 'Waiting for Client',
                'created_at' => '2019-10-09 17:03:25',
                'updated_at' => '2019-10-09 17:08:36',
            ),
            1 => 
            array (
                'id' => 2,
                'price' => 23.1,
                'description' => 'Michael E. Quinn Complete order #16',
                'user_id' => 1,
                'method' => 'Cash on Delivery',
                'status' => 'Waiting for Client',
                'created_at' => '2019-08-11 21:37:48',
                'updated_at' => '2019-10-11 21:37:48',
            ),
            2 => 
            array (
                'id' => 3,
                'price' => 23.1,
                'description' => 'Michael E. Quinn Complete order #17',
                'user_id' => 1,
                'method' => 'Cash on Delivery',
                'status' => 'Waiting for Client',
                'created_at' => '2019-07-11 21:51:42',
                'updated_at' => '2019-10-11 21:51:42',
            ),
            3 => 
            array (
                'id' => 4,
                'price' => 92.4,
                'description' => 'Complete order #18',
                'user_id' => 19,
                'method' => 'Cash on Delivery',
                'status' => 'Waiting for Client',
                'created_at' => '2019-06-11 22:06:40',
                'updated_at' => '2019-10-11 22:06:40',
            ),
            4 => 
            array (
                'id' => 5,
                'price' => 12.1,
                'description' => 'Complete order #25',
                'user_id' => 18,
                'method' => 'Cash on Delivery',
                'status' => 'Waiting for Client',
                'created_at' => '2019-05-12 18:25:01',
                'updated_at' => '2019-10-12 18:25:01',
            ),
            5 => 
            array (
                'id' => 6,
                'price' => 12.1,
                'description' => 'Complete order #26',
                'user_id' => 19,
                'method' => 'Cash on Delivery',
                'status' => 'Waiting for Client',
                'created_at' => '2019-04-12 20:28:41',
                'updated_at' => '2019-10-12 20:28:41',
            ),
            6 => 
            array (
                'id' => 7,
                'price' => 60.5,
                'description' => 'Complete order #27',
                'user_id' => 20,
                'method' => 'Cash on Delivery',
                'status' => 'Waiting for Client',
                'created_at' => '2019-05-12 20:42:28',
                'updated_at' => '2019-10-12 20:42:28',
            ),
            7 => 
            array (
                'id' => 8,
                'price' => 16.5,
                'description' => 'Complete order #28',
                'user_id' => 20,
                'method' => 'Cash on Delivery',
                'status' => 'Waiting for Client',
                'created_at' => '2019-06-12 20:44:06',
                'updated_at' => '2019-10-12 20:44:06',
            ),
            8 => 
            array (
                'id' => 9,
                'price' => 49.5,
                'description' => 'Complete order #29',
                'user_id' => 20,
                'method' => 'Cash on Delivery',
                'status' => 'Waiting for Client',
                'created_at' => '2019-08-15 17:00:45',
                'updated_at' => '2019-10-15 17:00:45',
            ),
            9 => 
            array (
                'id' => 10,
                'price' => 89.1,
                'description' => 'Michael E. Quinn Complete order #30',
                'user_id' => 1,
                'method' => 'Cash on Delivery',
                'status' => 'Waiting for Client',
                'created_at' => '2019-10-18 12:53:55',
                'updated_at' => '2019-10-18 12:53:55',
            ),
        ));
        
        
    }
}