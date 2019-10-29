<?php

use Illuminate\Database\Seeder;

class SubscriptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect(config('subscription'))->each(function ($subscription, $name) {
            $subscription = collect($subscription);

            factory(App\Subscription::class)->create([
                'name' => $name,
                'price' => $subscription->get('price'),
                'description' => $subscription->get('description'),
            ]);
        });
    }
}
