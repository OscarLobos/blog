<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Oscar Lobos Cabrera',
            'email' => 'oscarlobosc@gmail.com',
            'password' => Hash::make('1qaz2wsx'),
            'created_at' => now(),
            'updated_at' => now()
        ]); 

        User::factory(99)->create();
    }
}
