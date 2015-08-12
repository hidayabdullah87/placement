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
        factory('App\User')->create([ 'name' => 'Didi', 'email' => 'hidayah@gmail.com' ]);
        factory('App\User', 100)->create();
    }
}
