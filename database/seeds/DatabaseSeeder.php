<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CustomFieldsTableSeeder::class);
        $this->call(CustomFieldValuesTableSeeder::class);
        $this->call(AppSettingsTableSeeder::class);
        $this->call(RestaurantsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(FaqCategoriesTableSeeder::class);
        $this->call(OrderStatusesTableSeeder::class);
        $this->call(CurrenciesTableSeeder::class);
        $this->call(NotificationTypesTableSeeder::class);

        $this->call(FoodsTableSeeder::class);
        $this->call(GalleriesTableSeeder::class);
        $this->call(FoodReviewsTableSeeder::class);
        $this->call(RestaurantReviewsTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(CartsTableSeeder::class);
        $this->call(NutritionTableSeeder::class);
        $this->call(ExtrasTableSeeder::class);
        $this->call(NotificationsTableSeeder::class);
        $this->call(PaymentsTableSeeder::class);
        $this->call(FaqsTableSeeder::class);
        $this->call(FavoritesTableSeeder::class);

        $this->call(FoodOrdersTableSeeder::class);
        $this->call(CartExtrasTableSeeder::class);
        $this->call(UserRestaurantsTableSeeder::class);
        $this->call(FoodOrderExtrasTableSeeder::class);
        $this->call(FavoriteExtrasTableSeeder::class);

        $this->call(RolesTableSeeder::class);
        $this->call(DemoPemissionsPermissionsTableSeeder::class);
        $this->call(ModelHasPermissionsTableSeeder::class);
        $this->call(ModelHasRolesTableSeeder::class);
        $this->call(RoleHasPermissionsTableSeeder::class);

        $this->call(MediaTableSeeder::class);
        $this->call(UploadsTableSeeder::class);
    }
}
