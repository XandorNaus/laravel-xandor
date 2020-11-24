<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'name' => "Nettt",
            'email' => "info@nettt.nl",
            'password' => Hash::make('Welkom@2020!'),
        ]);

        $this->call([
            productSeeder::class,
        ]);
    }
}
