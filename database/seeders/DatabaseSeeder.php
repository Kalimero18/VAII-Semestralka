<?php
/** Táto tabuľka bola generovaná Laravelom, nie je to moja práca, pridal som sem však vytvorenie a priradenie rolí*/
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

        $admin = User::find(3);
        if ($admin) {
            $admin->assignRole('admin');
        }

        $user = User::find(5);
        if ($user) {
            $user->assignRole('pouzivatel');
        }
    }
}
