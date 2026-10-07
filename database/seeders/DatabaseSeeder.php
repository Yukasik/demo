<?php

namespace Database\Seeders;

use App\Models\Pay;
use App\Models\Status;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'lastname' => 'Admin',
            'middlename' => 'Admin',
            'login' => 'Admin',
            'password' => Hash::make('KorokNET'),
            'tel' => '8(999)999-99-99',
            'role' => 'admin',
            'email' => 'admin@example.com',
        ]);

        Pay::create([
            'name'=>'Наличными',
        ]);

        Pay::create([
            'name'=>'Переводом по номеру телефона',
        ]);

        Status::create([
            'name'=> 'Новая',
        ]);

        Status::create([
            'name'=> 'Идет обучение',
        ]);

        Status::create([
            'name'=> 'Обучение завершено',
        ]);
    }
}
