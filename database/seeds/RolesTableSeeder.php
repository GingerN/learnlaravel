<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new App\Role;
        $role->name = 'administrator';
        $role->save();

        $role = new App\Role;
        $role->name = 'author';
        $role->save();

        $role = new App\Role;
        $role->name = 'subscriber';
        $role->save();
    }
}
