<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Permission::create([
            'name' => 'view data' // id 1
        ]);
        \App\Models\Permission::create([
            'name' => 'create data' // id 2
        ]);
        \App\Models\Permission::create([
            'name' => 'edit data' // id 3
        ]);
        \App\Models\Permission::create([
            'name' => 'update data' // id 4
        ]);
        \App\Models\Permission::create([
            'name' => 'delete data' // id 5
        ]);
        
        $admin = \App\Models\Role::where('name', 'admin')->first();
        $admin->permissions()->attach([1, 2, 3, 4, 5]);
        
        $user = \App\Models\Role::where('name', 'user')->first();
        $user->permissions()->attach([1, 2, 3]);
    }
}
