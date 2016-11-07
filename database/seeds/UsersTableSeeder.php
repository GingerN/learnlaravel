<?php

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
        /*DB::table('users')->insert([
        	'name' =>  str_random(10),
        	'email' => str_random(10).'@test.com',
        	'password' => bcrypt('123456'),
        	'role_id' => 2,
        ]);*/

        $user = new App\User;
        $user->name = 'GingerN';
        $user->email = 'test@test.com';
        $user->password = bcrypt('123456');
        $user->role_id = 1;
        $user->is_active = 1;
        $user->save();

        $user = new App\User;
        $user->name = str_random(10);
        $user->email = str_random(10).'@test.com';
        $user->password = bcrypt('123456');
        $user->role_id = 2;
        $user->save();
    }
}
