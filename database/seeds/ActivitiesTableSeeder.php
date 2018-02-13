<?php

use Illuminate\Database\Seeder;

class ActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	$activities = ['CUMPLEAÑOS PROFESORES', 'DÍA DE LA MADRE', 'DÍA DEL PADRE', 'FESTIVIDADES DIARIAS', 'COMITÉ DE PADRES DE FAMILIA'];

        foreach ($activities as $activity) {
	        \DB::table('activities')->insert(array (
		        'name'       => $activity,
		        'created_at' => date('Y-m-d H:m:s'),
           		'updated_at' => date('Y-m-d H:m:s'),
		    ));
        }
    	

    }
}
