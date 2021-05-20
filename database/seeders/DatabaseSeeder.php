<?php

namespace Database\Seeders;

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
         \App\Models\User::factory()->create(['name' => 'Brayan Vilchez Daga','email'=>'brayandaga5@gmail.com','username'=>'brayandaga5']);
    }
}
