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
        \DB::table('roles')->insert(array (
        		'role' => '1',
        		'slug' => 'ADMIN',
        ));

        \DB::table('roles')->insert(array (
        		'role' => '2',
        		'slug' => 'USER',
        ));
    }
}
