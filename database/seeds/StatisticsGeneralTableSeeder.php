<?php

use Illuminate\Database\Seeder;

class StatisticsGeneralTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$statistics = ['DEFENSA', 'DISTRIBUCIÓN', 'ATAQUE', 'DISCIPLINA'];

    	foreach($statistics as $statistic) {
	        \DB::table('general_statistics')->insert(array (
	        	'type' => $statistic,
	        ));
   		}
    }
}
