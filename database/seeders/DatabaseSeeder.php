<?php

namespace Database\Seeders;

use App\Models\User;
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
         User::factory()->create(['name' => 'Brayan Vilchez Daga','email'=>'brayandaga5@gmail.com','username'=>'brayandaga5']);

         User::factory()->times(5)->hasTweets(5)->create();
    }
}
