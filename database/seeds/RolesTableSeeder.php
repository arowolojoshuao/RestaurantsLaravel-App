<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'admin',
                'guard_name' => 'web',
                'created_at' => '2018-07-21 15:37:56',
                'updated_at' => '2019-09-07 21:42:01',
                'deleted_at' => NULL,
                'default' => 0,
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'manager',
                'guard_name' => 'web',
                'created_at' => '2019-09-07 21:41:38',
                'updated_at' => '2019-09-07 21:41:38',
                'deleted_at' => NULL,
                'default' => 0,
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'client',
                'guard_name' => 'web',
                'created_at' => '2019-09-07 21:41:54',
                'updated_at' => '2019-09-07 21:41:54',
                'deleted_at' => NULL,
                'default' => 1,
            ),
        ));
        
        
    }
}