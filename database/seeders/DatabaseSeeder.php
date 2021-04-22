<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Employee;
use Illuminate\Support\Str;

use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $admin = Role::create(['name' => 'admin']);
        $manager = Role::create(['name' => 'manager']);


        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
        ]);

        $user1 = User::create([
            'name' => 'Nancy Espinosa',
            'email' => 'nancy@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
        ]);

        $user2 = User::create([
            'name' => 'Felipe Muñoz',
            'email' => 'felipe@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
        ]); 

        $admin->assignRole($admin->id);
        $user1->assignRole($manager->id);
        $user2->assignRole($manager->id);

        Employee::factory(15)->create();
    }
}
