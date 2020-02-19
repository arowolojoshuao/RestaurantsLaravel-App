<?php

use Illuminate\Database\Seeder;

class FavoritesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('favorites')->delete();
        
        \DB::table('favorites')->insert(array (
            0 => 
            array (
                'id' => 3,
                'food_id' => 1,
                'user_id' => 18,
                'created_at' => '2019-08-30 15:31:52',
                'updated_at' => '2019-08-30 15:31:53',
            ),
            1 => 
            array (
                'id' => 14,
                'food_id' => 2,
                'user_id' => 18,
                'created_at' => '2019-10-09 12:42:45',
                'updated_at' => '2019-10-09 12:42:45',
            ),
            2 => 
            array (
                'id' => 15,
                'food_id' => 2,
                'user_id' => 19,
                'created_at' => '2019-10-15 15:30:23',
                'updated_at' => '2019-10-15 15:30:23',
            ),
            3 => 
            array (
                'id' => 16,
                'food_id' => 3,
                'user_id' => 1,
                'created_at' => '2019-10-17 22:22:26',
                'updated_at' => '2019-10-17 22:22:26',
            ),
            4 => 
            array (
                'id' => 25,
                'food_id' => 1,
                'user_id' => 1,
                'created_at' => '2019-10-18 12:40:22',
                'updated_at' => '2019-10-18 12:40:22',
            ),
        ));
        
        
    }
}