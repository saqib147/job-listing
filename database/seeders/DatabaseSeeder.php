<?php

namespace Database\Seeders;

use App\Models\Listing;
use App\Models\User;
use Database\Factories\ListingFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();
        Listing::factory(6)->create();

        // Listing::create([
        //     'title'=> 'Laravel Developer',
        //     'tags'=> 'laravel, php',
        //     'company'=> 'Acme Corporation',
        //     'location'=> 'Lahore',
        //     'email' => 'test@gmail.com',
        //     'website' => 'https://example.com',
        //     'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        // ]);
        // Listing::create([
        //     'title'=> 'Full-Stack Engineer',
        //     'tags'=> 'laravel, php, javascript',
        //     'company'=> 'Acme Corporation',
        //     'location'=> 'Lahore',
        //     'email'=>'new@gmail.com',
        //     'website'=>'https://example.com',
        //     'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        // ]);

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }

}
