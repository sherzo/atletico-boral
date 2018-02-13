<?php

use Illuminate\Database\Seeder;

class TournamentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$preparatories = ['COPA INTERBARRIAL INVERNAL', 
    					'TORNEO VACACIONAL FEDENADOR',
    					'TORNEO FEDELIGAS GUAYAS',
    					'COPA MUCHO LOTE',
    					'COPA PUERTO HONDO',
    					'COPA SAMBOCITY',
    					'COPA AGUIRRE ABAD',
    					'COPA PROSPERINA',
    					true => 'COPA FUTBOL PLAZA'];

        $oficiales = ['COPA INTERBARRIAL DE VERANO',
                      'COPA HERBALIFE',
                      'TORNEO ASO-AMATEUR',
                      'TORNEO INTERESCUELAS',];

    	foreach ($preparatories as $key => $t) {
                
                $organizer = $key === true ? 'CLUB DEPORTIVO FORMATIVO ATLETICO BORAL' : 'OTRO CLUB DEPORTIVO';
                
                $anfitrion = $key === true ? true : false;
                
            \DB::table('tournaments')->insert(array (
                'category_id' => '1',
                'name'        => $t,
	            'organizer'   => $organizer,
                'anfitrion'   => $anfitrion, 
	        ));
    	}

        foreach ($oficiales as $key => $t) {
            \DB::table('tournaments')->insert(array (
                'category_id' => '2',
                'name'        => $t,
                'organizer'   => 'OTRO CLUB DEPORTIVO',
                'anfitrion'   => false, 
            ));
        }
    }
}
