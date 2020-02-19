<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Olamide Joshua',
                'email' => 'admin@demo.com',
                'password' => '$2y$10$YOn/Xq6vfvi9oaixrtW8QuM2W0mawkLLqIxL.IoGqrsqOqbIsfBNu',
                'api_token' => 'PivvPlsQWxPl1bB5KrbKNBuraJit0PrUZekQUgtLyTRuyBq921atFtoR1HuA',
                'remember_token' => 'u5KlHn8RIhYU1kf1ghY7AzIrqTXk5ICjh1rnbUgfT19oqeSrNdmuo6i607vz',
                'created_at' => '2018-08-06 21:58:41',
                'updated_at' => '2019-09-27 06:49:45',
                'stripe_id' => NULL,
                'card_brand' => NULL,
                'card_last_four' => NULL,
                'trial_ends_at' => NULL,
            ),
            1 => 
            array (
                'id' => 18,
                'name' => 'Barbara Olusola',
                'email' => 'manager@demo.com',
                'password' => '$2y$10$YOn/Xq6vfvi9oaixrtW8QuM2W0mawkLLqIxL.IoGqrsqOqbIsfBNu',
                'api_token' => 'tVSfIKRSX2Yn8iAMoUS3HPls84ycS8NAxO2dj2HvePbbr4WHorp4gIFRmFwB',
                'remember_token' => 'lp7xfZrzETxQfuSVSQ57Y6pSdYEobbtiMr1bNemeaXKc36JReKJT1xSBPILO',
                'created_at' => '2018-08-14 16:06:28',
                'updated_at' => '2019-09-25 21:09:35',
                'stripe_id' => NULL,
                'card_brand' => NULL,
                'card_last_four' => NULL,
                'trial_ends_at' => NULL,
            ),
            2 => 
            array (
                'id' => 19,
                'name' => 'Charles Walley',
                'email' => 'client@demo.com',
                'password' => '$2y$10$EBubVy3wDbqNbHvMQwkj3OTYVitL8QnHvh/zV0ICVOaSbALy5dD0K',
                'api_token' => 'fXLu7VeYgXDu82SkMxlLPG1mCAXc4EBIx6O5isgYVIKFQiHah0xiOHmzNsBv',
                'remember_token' => 'RL6zXhJNvAg6MkEqzz1r7N5lcIcjjAiAxrmgy3Vto7DUUbLza2vwev8ICzx2',
                'created_at' => '2019-10-12 21:31:26',
                'updated_at' => '2019-10-12 21:31:26',
                'stripe_id' => NULL,
                'card_brand' => NULL,
                'card_last_four' => NULL,
                'trial_ends_at' => NULL,
            ),
            3 => 
            array (
                'id' => 20,
                'name' => 'Robert Brock',
                'email' => 'client1@demo.com',
                'password' => '$2y$10$pmdnepS1FhZUMqOaFIFnNO0spltJpziz3j13UqyEwShmLhokmuoei',
                'api_token' => 'Czrsk9rwD0c75NUPkzNXM2WvbxYHKj8p0nG29pjKT0PZaTgMVzuVyv4hOlte',
                'remember_token' => NULL,
                'created_at' => '2019-10-15 16:55:39',
                'updated_at' => '2019-10-16 18:31:46',
                'stripe_id' => NULL,
                'card_brand' => NULL,
                'card_last_four' => NULL,
                'trial_ends_at' => NULL,
            ),
        ));
    }
}