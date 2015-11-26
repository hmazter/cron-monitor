<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // create 10 users with 3 monitors and 2 integrations each
        factory(\App\Models\User::class, 10)->create(['password' => bcrypt('password')])->each(function (\App\Models\User $user) {
            $user->monitors()->saveMany(
                factory(\App\Models\Monitor::class, 3)->make()
            );

            $user->integrations()->saveMany(
                factory(\App\Models\Integration::class, 2)->make()
            );
        });

        Model::reguard();
    }
}
