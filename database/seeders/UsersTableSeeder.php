<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
                'name' => 'PPSPM',
                'email' => 'ppspm@gmail.com',
                'password' => bcrypt('admin'),
                'role_id' => 1
        ]);
        
        \App\Models\User::create([
                'name' => 'Staff Keuangan 1',
                'email' => 'staff1@gmail.com',
                'password' => bcrypt('user'),
                'role_id' => 2
        ]);

        \App\Models\User::create([
            'name' => 'Staff Keuangan 2',
            'email' => 'staff2@gmail.com',
            'password' => bcrypt('user'),
            'role_id' => 2
    ]);
    }
}
