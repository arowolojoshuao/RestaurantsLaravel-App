<?php

use Illuminate\Database\Seeder;

class ExtrasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('extras')->delete();
        
        \DB::table('extras')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Tuna',
                'description' => '<p>Add some tuna</p>',
                'price' => 3.0,
                'food_id' => 1,
                'created_at' => '2019-08-30 11:39:50',
                'updated_at' => '2019-08-30 11:39:50',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Unagi',
                'description' => '<p>Add some Unagi</p>',
                'price' => 5.0,
                'food_id' => 1,
                'created_at' => '2019-08-30 11:40:47',
                'updated_at' => '2019-08-30 11:40:47',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Salmon',
                'description' => '<p>Add some Salmon</p>',
                'price' => 8.0,
                'food_id' => 7,
                'created_at' => '2019-08-30 11:41:34',
                'updated_at' => '2019-10-18 10:52:30',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Mozzarella',
                'description' => '<p>Add some mozzarella </p>',
                'price' => 6.0,
                'food_id' => 2,
                'created_at' => '2019-10-09 12:22:04',
                'updated_at' => '2019-10-16 18:50:53',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Mozzarella',
                'description' => 'Add some Mozzarella',
                'price' => 1.0,
                'food_id' => 3,
                'created_at' => '2019-10-17 22:10:01',
                'updated_at' => '2019-10-17 22:10:01',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Vegetable oil',
                'description' => '<p>Add some&nbsp;vegetable oil</p>',
                'price' => 2.0,
                'food_id' => 3,
                'created_at' => '2019-10-18 10:53:34',
                'updated_at' => '2019-10-18 10:53:34',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Vegetable oil',
                'description' => '<p>Add some vegetable oil</p>',
                'price' => 2.0,
                'food_id' => 4,
                'created_at' => '2019-10-18 10:54:11',
                'updated_at' => '2019-10-18 10:54:11',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Vegetable oil',
                'description' => '<p>Add some&nbsp;</p>',
                'price' => 2.0,
                'food_id' => 5,
                'created_at' => '2019-10-18 10:54:37',
                'updated_at' => '2019-10-18 10:54:37',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Tuna',
                'description' => '<p>Add some tuna</p>',
                'price' => 3.0,
                'food_id' => 3,
                'created_at' => '2019-10-18 11:38:44',
                'updated_at' => '2019-10-18 11:38:44',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Tuna',
                'description' => '<p>Add some tuna</p>',
                'price' => 3.0,
                'food_id' => 5,
                'created_at' => '2019-10-18 11:39:15',
                'updated_at' => '2019-10-18 11:39:15',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Mozzarella',
                'description' => '<p>Add some mozzarella</p>',
                'price' => 4.0,
                'food_id' => 7,
                'created_at' => '2019-10-18 11:39:46',
                'updated_at' => '2019-10-18 11:39:46',
            ),
        ));
        
        
    }
}