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
                        'password' => bcrypt('pass1'),
                        'role_id' => 1
                ]);

                \App\Models\User::create([
                        'name' => 'Staff Keuangan 1',
                        'email' => 'staff1@gmail.com',
                        'password' => bcrypt('password1'),
                        'role_id' => 2
                ]);

                \App\Models\User::create([
                        'name' => 'Staff Keuangan 2',
                        'email' => 'staff2@gmail.com',
                        'password' => bcrypt('password2'),
                        'role_id' => 2
                ]);

                \App\Models\User::create([
                        'name' => 'Staff Keuangan 3',
                        'email' => 'staff3@gmail.com',
                        'password' => bcrypt('password3'),
                        'role_id' => 2
                ]);

                \App\Models\User::create([
                        'name' => 'Staff Keuangan 4',
                        'email' => 'staff4@gmail.com',
                        'password' => bcrypt('password4'),
                        'role_id' => 2
                ]);

                \App\Models\User::create([
                        'name' => 'Staff Keuangan 5',
                        'email' => 'staff5@gmail.com',
                        'password' => bcrypt('password5'),
                        'role_id' => 2
                ]);
        }
}
