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
        $pack = new Pack();

        $pack->name = 'America Latina';
        $pack->destination = 'Brasile';
        $pack->description = 'Un viaggio in Brasile';
        $pack->price = '10000';

        $pack->save();
    }
}
