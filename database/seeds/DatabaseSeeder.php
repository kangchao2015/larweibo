<?php

use Illuminate\Database\Seeder;
use illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

         $this->call(UsersTableSeeder::class);

        Model::reguard();
    }
}
