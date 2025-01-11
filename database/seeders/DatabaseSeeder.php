<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'pouzivatel']);

        // Priradenie rolí k používateľom
        $admin = User::find(3); // Uisti sa, že používateľ s ID 3 existuje
        if ($admin) {
            $admin->assignRole('admin');
        }

        $user = User::find(5); // Uisti sa, že používateľ s ID 2 existuje
        if ($user) {
            $user->assignRole('pouzivatel');
        }
    }
}
