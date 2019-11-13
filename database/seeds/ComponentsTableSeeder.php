<?php

use Illuminate\Database\Seeder;
use App\Component;
use App\Cosplay;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Component::class, 10)->create()->each(function ($component) {
            $component->cosplays()->save(factory(Cosplay::class)->make());
        });
    }
}
