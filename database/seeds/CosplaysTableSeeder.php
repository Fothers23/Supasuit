<?php

use Illuminate\Database\Seeder;
use App\Cosplay;
use App\User;

class CosplaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(Cosplay::class, 10)->create();
    }
}
