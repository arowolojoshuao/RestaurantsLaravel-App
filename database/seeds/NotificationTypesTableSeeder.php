<?php

use Illuminate\Database\Seeder;

class NotificationTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('notification_types')->delete();
        
        \DB::table('notification_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'type' => 'Order Done',
                'created_at' => '2019-09-04 13:06:13',
                'updated_at' => '2019-09-04 13:06:13',
            ),
            1 => 
            array (
                'id' => 2,
                'type' => 'Payment Done',
                'created_at' => '2019-09-04 13:06:35',
                'updated_at' => '2019-09-04 13:06:35',
            ),
            2 => 
            array (
                'id' => 3,
                'type' => 'New Foods',
                'created_at' => '2019-09-04 13:07:10',
                'updated_at' => '2019-09-04 13:07:10',
            ),
        ));
        
        
    }
}