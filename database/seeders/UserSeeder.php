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
        ]);


        User::factory(5)->create();        
        
    }
}
