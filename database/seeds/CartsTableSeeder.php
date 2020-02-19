<?php

use Illuminate\Database\Seeder;

class CartsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('carts')->delete();
        
        \DB::table('carts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'food_id' => 2,
                'user_id' => 19,
                'quantity' => 1,
                'created_at' => '2019-10-15 15:29:10',
                'updated_at' => '2019-10-15 15:29:10',
            ),
            1 => 
            array (
                'id' => 11,
                'food_id' => 2,
                'user_id' => 19,
                'quantity' => 1,
                'created_at' => '2019-10-22 18:10:41',
                'updated_at' => '2019-10-22 18:10:41',
            ),
        ));
        
        
    }
}