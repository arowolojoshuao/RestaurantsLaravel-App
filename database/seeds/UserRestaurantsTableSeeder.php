<?php

use Illuminate\Database\Seeder;

class UserRestaurantsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_restaurants')->delete();
        
        \DB::table('user_restaurants')->insert(array (
            0 => 
            array (
                'user_id' => 1,
                'restaurant_id' => 2,
            ),
            1 => 
            array (
                'user_id' => 1,
                'restaurant_id' => 3,
            ),
            2 => 
            array (
                'user_id' => 1,
                'restaurant_id' => 4,
            ),
            3 => 
            array (
                'user_id' => 18,
                'restaurant_id' => 1,
            ),
        ));
        
        
    }
}