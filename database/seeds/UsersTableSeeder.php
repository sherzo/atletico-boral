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
        \DB::table('users')->insert( array (
    		'url' => 'https://fb-s-b-a.akamaihd.net/h-ak-fbx/v/t1.0-1/c0.16.160.160/p160x160/18118947_10209485210232209_6534970919716306034_n.jpg?oh=747f3e136f6af317185e10b41baab031&oe=5A357177&__gda__=1512195624_b669ddad865c94b8a7e89e3bcb357376',
    		'name' => 'Saul',
    		'email' => 'sherzo-b@hotmail.com',
    		'password' => bcrypt('sherzo'),
    		'role_id' => 1,
    		'secret_question' => '',
    		'secret_answer' => '',
        ));

        \DB::table('users')->insert( array (
            'url' => 'https://camo.githubusercontent.com/a46e11f1754269d31b848b450856d081a1b02461/68747470733a2f2f662e636c6f75642e6769746875622e636f6d2f6173736574732f32383831382f313633323038372f38353063613031612d353737322d313165332d386565652d3230613131636136353334662e706e67',
            'name' => 'Jesus Eduardo',
            'email' => 'mtr_1101@hotmail.com',
            'password' => bcrypt('123456'),
            'role_id' => 1,
            'secret_question' => '',
            'secret_answer' => '',
        ));

        $users = factory(App\User::class, 9)->create();
    }
}
