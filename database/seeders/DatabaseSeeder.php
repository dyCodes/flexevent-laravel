<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Create Admin account
        User::create([
            'name' => 'Yusuf Daudu',
            'email' => 'admin@yusufdaudu.tech',
            'password' => Hash::make('admin_2022'),
        ]);

        $this->call(SettingsTableSeeder::class);
    }
}
