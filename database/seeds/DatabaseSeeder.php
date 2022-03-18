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
        $this->call(CitiesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        // factory(App\User::class, 10)->create()->each(function ($user) {
            // Seed the relation with one address
            // $address = factory(App\City::class)->make();
            // $user->user()->save($address);

            // Seed the relation with 5 purchases
            // $purchases = factory(App\CustomerPurchase::class, 5)->make();
            // $customer->city()->save($purchases);
        // });
    }
}
