<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $role_cashier = Role::where('name', 'cashier')->first();
        // $role_manager  = Role::where('name', 'admin')->first();
 
        $manager = new User();
        $manager->name = 'Admin Name';
        $manager->email = 'admin@example.com';
        $manager->password = bcrypt('123456');
        $manager->role = 'admin';
        $manager->save();
        // $manager->roles()->attach($role_manager);

        $cashier = new User();
        $cashier->name = 'Cashier Name';
        $cashier->email = 'cashier@example.com';
        $cashier->password = bcrypt('123456');
        $cashier->role = 'cashier';
        $cashier->save();
        // $cashier->roles()->attach($role_cashier);
 

    }
}
