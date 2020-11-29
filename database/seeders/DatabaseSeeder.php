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
        \App\Models\User::create([
        	'name' => 'Arthur',
        	'email' => 'arthurvillar@gmail.com',
        	'password' => '$2y$10$/PI/7uB/QaMxJ12bPGCdb.pQ8zobgbcAto7TxkHih/Ez/c0Ap.h76'
        ]);
    }
}
