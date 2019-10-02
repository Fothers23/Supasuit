<?php

use Illuminate\Database\Seeder;
use App\User;
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
        factory(User::class, 10)->create()->each(function ($user) {
            $user->cosplays()->save(factory(Cosplay::class)->make());
        });
    }
}
