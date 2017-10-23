<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\LancheNinja\Models\User::class,10)->create()->each(function ($u){

            $u->client()->save(factory(\LancheNinja\Models\Client::class)->make());

        });
    }
}
