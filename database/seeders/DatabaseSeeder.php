<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;


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

        User::create([
            'first_name' => 'Michael',
            'last_name' => 'Oluwaseun',
            'user_name' => 'Michaelseun',
            'phone_number' => '09096784147',
            'email' => 'seunmichael68@gmail.com',
            'password' => Hash::make('12345678'),
            'password1' => Hash::make('12345678')
        ]);
    }
}
