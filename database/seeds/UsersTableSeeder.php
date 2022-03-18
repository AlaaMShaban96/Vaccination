<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        factory(App\User::class, 10)->create([
            'city_id' => $this->getRandomCityId()
        ]);
    }

    private function getRandomCityId() {
        $user = \App\City::inRandomOrder()->first();
        return $user->id;
    }
        //  factory(App\User::class, 10)->create()->each(function ($user) {
        //     // Seed the relation with one address
        //     $address = factory(App\City::class)->make();
        //     $user->user()->save($address);

        //     // Seed the relation with 5 purchases
        //     // $purchases = factory(App\CustomerPurchase::class, 5)->make();
        //     // $customer->city()->save($purchases);
        // });
    // }
}
