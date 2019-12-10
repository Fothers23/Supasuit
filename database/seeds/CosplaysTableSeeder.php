<?php

use Illuminate\Database\Seeder;
use App\Cosplay;
use App\Component;
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
    	factory(Cosplay::class, 10)->create()->each(function ($cosplay) {
            $cosplay->components()->save(factory(Component::class)->make());
        });

        factory(Component::class, 10)->create();

        factory(User::class, 10)->create()->each(function ($user) {
            $user->cosplays()->save(factory(Cosplay::class)->make());
        });
    }
}
