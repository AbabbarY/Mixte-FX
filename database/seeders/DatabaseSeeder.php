<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use Database\Seeders\CategorySeeder;
// use Database\Seeders\OrderSeeder;
// use Database\Seeders\ProduitsSeeder;
// use Database\Seeders\AdminSeeder;
// use Database\Seeders\UserSeeder;
use Database\Seeders\shop_by_categorySeeder;


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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            UsersSeeder::class
        ]);
        $this->call([
            CategorySeeder::class
        ]);
        $this->call([
            ProduitsSeeder::class
        ]);
        $this->call([
            CommandSeeder::class
        ]);
        $this->call([
            AdminSeeder::class
        ]);
        $this->call([
            shop_by_categorySeeder::class
        ]);
    }
}
