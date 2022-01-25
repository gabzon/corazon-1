<?php

namespace Database\Seeders;

use App\Models\Organization;
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
            'name'              => 'Gabriel Sevinci',
            'email'             => 'gabriel@sevinci.com',
            'email_verified_at' => now(),                   
            'password'          => Hash::make('password'),                            
            'remember_token'    => Str::random(10),
            'role'              => 'admin',
            'gender'            => 'male',
            'mobile'            => '+385 99 648 3693',
            'username'          => 'gabzon',
            'birthday'          => '1983-07-02',
            'is_super'          => true,
        ]);

        $gabriel = User::firstOrCreate([
            'name'              => 'Gabriel Zambrano',
            'email'             => 'gab.zambrano@gmail.com',
            'email_verified_at' => now(),                   
            'password'          => Hash::make('password'),                            
            'remember_token'    => Str::random(10),
            'role'              => 'admin',
            'gender'            => 'male',
            'mobile'            => '+41 76 571 4931',
            'username'          => 'gabzam',
            'birthday'          => '1983-07-02',
            'is_super'          => true,
        ]);
        
        $daniel = User::firstOrCreate([
            'name'              => 'Daniel Frančišković',
            'email'             => 'daniel.franciskovic@gmail.com',
            'email_verified_at' => now(),                   
            'password'          => '$2y$10$nEdRKHWq7toV7llkApM1bO3LPXv/AN.oSqREaBLOoRI.LL4nyD4vK',                            
            'remember_token'    => Str::random(10),
            'role'              => 'publisher',
            'gender'            => 'male',
            'username'          => 'frenk',
            'birthday'          => '2021-12-01',            
            'mobile'            => '123',
            'is_super'          => true,
        ]);

        
        // User::factory(10)->create();
        
    }
}


