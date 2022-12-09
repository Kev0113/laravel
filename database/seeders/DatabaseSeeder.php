<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
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
        // \App\Models\User::factory(10)->create();
        DB::table('todo')->insert([
            'titre' => str::random(50),
            'date_limite' => time() + rand(1,10)*24*360,
            'description' => "blabla",
            'user_id' => 1
        ]);

        DB::table('users')->insert([
            'name' => "Kevin",
            'email' => "kevinlegrand0113@gmail.com",
            'password' => Hash::make("123"),
        ]);
    }
}
