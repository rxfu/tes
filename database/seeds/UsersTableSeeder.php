<?php

use App\Entities\User;
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
    	User::create([
        	'username' => 'admin',
        	'name' => '管理员',
        	'email' => 'admin@mailbox.gxnu.edu.cn',
        	'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        	'remember_token' => str_random(10),
        ]);
    }
}
