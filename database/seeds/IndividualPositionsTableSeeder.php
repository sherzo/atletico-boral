<?php

use Illuminate\Database\Seeder;

class IndividualPositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $positions = ['CENTRAL', 'LATERAL', 'LIBRE POR BANDA', 'MEDIOCAMPISTA DEFENSIVO', 'MEDIOCAMPISTA CENTRAL', 'MEDIOCAMPISTA EXTERNO', 'MEDIOCAMPISTA OFENSIVO', 'MEDIA PUNTA DERECHA', 'SEGUNDO DELANTERO IZQUIERDO', 'PUNTERO', 'EXTREMO LATERAL', 'DELANTERO CENTRO', 'ARQUERO'];

     	for($i = 0; $i <= 2; $i++) {
     		\DB::table('individual_positions')->insert( array (
     			'gp_id'    => 1,
     			'position' => $positions[$i],
     		));
     	}

     	for($i = 3; $i <= 6; $i++) {
     		\DB::table('individual_positions')->insert( array (
     			'gp_id'    => 2,
     			'position' => $positions[$i],
     		));
     	}

     	for($i = 7; $i <= 12; $i++) {
     		\DB::table('individual_positions')->insert( array (
     			'gp_id'    => 3,
     			'position' => $positions[$i],
     		));
     	}

    }
}
