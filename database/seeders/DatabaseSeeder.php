<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Вызываем дополнительные наполнители с использованием метода call

        $this->call([
        IndContractorsSeeder::class,
        EntContractorsSeeder::class
    ]);
    }
}

// Запуск наполнения базы класс Database\Seeders\DatabaseSeeder

// php artisan db:seed

// Запуск конкретного наполнителя

// php artisan db:seed --class=UserSeeder

// Вызов миграции со сбросом базы данных и запуском всех наполнителей, указанных в DataBaseSeeder

// php artisan migrate:fresh --seed

