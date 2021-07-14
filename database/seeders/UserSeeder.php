<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
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
        $gab = User::firstOrCreate([
            'name'              => 'Gabriel Augusto Zambrano Cordero',
            'email'             => 'gabriel@sevinci.com',
            'email_verified_at' => now(),                   
            'password'          => Hash::make('password'),                            
            'remember_token'    => Str::random(10),
        ]);
    
        User::factory(10)->create();
    }
}
