<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::trancate();
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'author']);
        Role::create(['name' => 'user']);
    }
}
