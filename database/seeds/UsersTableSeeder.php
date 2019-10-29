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
        factory(App\User::class)
            ->create([
                'name' => 'Casper Engelmann',
                'email' => 'me@casperengelmann.com',
                'email_verified_at' => now(),
                'password' => bcrypt('1234'),
            ]);

        factory(App\User::class, 10)
            ->create()
            ->each(function ($user) {
                $user->subscription()->associate(App\Subscription::all()->random());
                $user->save();
            });
    }
}
