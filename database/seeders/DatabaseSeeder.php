<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'raed',
            'email' => 'raed@gmail.com',
            'password' => 'raedLaravel',
        ]);
        DB::table('users')->insert([
            'name' => 'iman',
            'email' => 'iman@gmail.com',
            'password' => 'imanLaravel',
        ]);

        // Générer les utilisateurs avec des recettes
        \App\Models\User::factory(5)->has(\App\Models\Recipe::factory()->count(5))->create();
    }
}
