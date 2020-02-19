<?php

use Illuminate\Database\Seeder;

class NotificationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('notifications')->delete();
        
        \DB::table('notifications')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'New Notification Form hola',
                'notification_type_id' => 2,
                'user_id' => 1,
                'read' => 1,
                'created_at' => '2019-09-04 13:10:55',
                'updated_at' => '2019-09-04 13:10:55',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Notification from hola',
                'notification_type_id' => 1,
                'user_id' => 18,
                'read' => 0,
                'created_at' => '2019-10-09 12:45:59',
                'updated_at' => '2019-10-09 12:45:59',
            ),
        ));
        
        
    }
}