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
                'name' => 'Muhammad Luthfi Hardiansyah',
                'email' => 'luthfihrdy@gmail.com',
                'password' => bcrypt('admin'),
                'role_id' => 1
        ]);
        
        \App\Models\User::create([
                'name' => 'Additya Rivaldo',
                'email' => 'addit@gmail.com',
                'password' => bcrypt('user'),
                'role_id' => 2
        ]);

        \App\Models\User::create([
            'name' => 'Miftahuddin Fallah',
            'email' => 'miftah@gmail.com',
            'password' => bcrypt('user'),
            'role_id' => 2
    ]);
    }
}
