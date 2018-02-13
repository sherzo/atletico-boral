<?php

use Illuminate\Database\Seeder;

class GeneralPositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $positions = ['ATAQUE', 'MEDIO CAMPO', 'DEFENSA'];

        foreach ($positions as $position) {
        	\DB::table('general_positions')->insert( array (
        		'function' => $position,
        	));
        }
    }
}
