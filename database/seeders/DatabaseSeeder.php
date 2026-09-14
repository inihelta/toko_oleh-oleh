<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        for ($i = 1; $i <= 100; $i++) {
            \App\Models\pesertalomba::Create([
                'nama_peserta' => 'Peserta ' . $i,
                'email' => 'peserta' . $i . '@example.com',
            ]);
        }
        // \App\Models\pesertalomba::Create([
        //     'nama_peserta' => 'John Doe',
        //     'email' => 'john.doe@example.com',
        // ]);
    }
}
