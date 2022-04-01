<?php

use Illuminate\Database\Seeder;

class PackTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
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
