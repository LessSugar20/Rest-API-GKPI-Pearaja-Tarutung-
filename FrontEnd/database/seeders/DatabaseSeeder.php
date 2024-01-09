<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    
     public function run(): void
    {

        $this->call([
            AlkitabSeeder::class,
        ]);

        $role = Role::create([
            'name' => 'admin',
            'guard_name' => 'web'
        ]);
        
        $role = Role::create([
            'name' => 'sekretariat',
            'guard_name' => 'web'
        ]);


        $user1 = User::create([
            'id' => '1',
            'username' => 'admin',
            'fullname' => 'admin',
            'password' => Hash::make('admin123')
        ]);
        $user1->assignRole('admin');

        User::create([
            'id' => '2',
            'username' => 'user1',
            'fullname' => 'rian',
            'password' => Hash::make('user1')
        ]);

    }
}
