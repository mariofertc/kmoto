<?php

use Illuminate\Database\Seeder;

class MotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(App\Moto::class, 5)->create();
    }
}
