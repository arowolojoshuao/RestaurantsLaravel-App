<?php

use Illuminate\Database\Seeder;

class FoodOrderExtrasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('food_order_extras')->delete();
        
        \DB::table('food_order_extras')->insert(array (
            0 => 
            array (
                'food_order_id' => 1,
                'extra_id' => 1,
                'price' => 0.0,
            ),
            1 => 
            array (
                'food_order_id' => 2,
                'extra_id' => 3,
                'price' => 0.0,
            ),
            2 => 
            array (
                'food_order_id' => 3,
                'extra_id' => 2,
                'price' => 0.0,
            ),
            3 => 
            array (
                'food_order_id' => 13,
                'extra_id' => 1,
                'price' => 0.0,
            ),
            4 => 
            array (
                'food_order_id' => 13,
                'extra_id' => 3,
                'price' => 0.0,
            ),
            5 => 
            array (
                'food_order_id' => 14,
                'extra_id' => 1,
                'price' => 0.0,
            ),
            6 => 
            array (
                'food_order_id' => 14,
                'extra_id' => 3,
                'price' => 0.0,
            ),
            7 => 
            array (
                'food_order_id' => 22,
                'extra_id' => 2,
                'price' => 0.0,
            ),
            8 => 
            array (
                'food_order_id' => 22,
                'extra_id' => 3,
                'price' => 0.0,
            ),
            9 => 
            array (
                'food_order_id' => 23,
                'extra_id' => 4,
                'price' => 0.0,
            ),
            10 => 
            array (
                'food_order_id' => 24,
                'extra_id' => 4,
                'price' => 0.0,
            ),
            11 => 
            array (
                'food_order_id' => 25,
                'extra_id' => 4,
                'price' => 0.0,
            ),
            12 => 
            array (
                'food_order_id' => 28,
                'extra_id' => 2,
                'price' => 0.0,
            ),
            13 => 
            array (
                'food_order_id' => 32,
                'extra_id' => 5,
                'price' => 0.0,
            ),
            14 => 
            array (
                'food_order_id' => 35,
                'extra_id' => 3,
                'price' => 0.0,
            ),
            15 => 
            array (
                'food_order_id' => 37,
                'extra_id' => 1,
                'price' => 0.0,
            ),
            16 => 
            array (
                'food_order_id' => 37,
                'extra_id' => 3,
                'price' => 0.0,
            ),
            17 => 
            array (
                'food_order_id' => 38,
                'extra_id' => 4,
                'price' => 0.0,
            ),
        ));
        
        
    }
}