<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Nine;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
// use\APP\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
       // User::factory(10)->create();
        Nine::factory(50)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Nine::factory()->create([
            'lastname'=>'abdul',
            'firstname'=>'lincoln',
            'email'=> 'lincoln@gmail.com',
            'password'=>'lincoln004',

        ]);
        Nine::factory()->create([
            'lastname'=>'cse',
            'firstname'=>'computer',
            'email'=> 'csen@gmail.com',
            'password'=>'computer004',

        ]);
        Nine::factory()->create([
            'lastname'=>'semester',
            'firstname'=>'four',
            'email'=> 'semes@gmail.com',
            'password'=>'semester004',

        ]);
    }
}
