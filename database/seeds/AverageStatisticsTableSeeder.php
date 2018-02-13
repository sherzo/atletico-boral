<?php

use Illuminate\Database\Seeder;

class AverageStatisticsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statistics = ['ENTRADA', 'ENTRADAS CON ÉXITO', 'DUELOS', 'DUELOS GANADOS', 'DUELOS AÉREOS GANADOS', 'DESPEJES', 'TIROS BLOQUEADOS', 'INTERCEPCIONES', 'ASISTENCIAS', 'PASOS TOTALES', 'PRECISIÓN DE PASE', 'PASES/90 MIN', 'TOQUES/90 MIN', 'TOTAL CENTROS', 'PRECISIÓN DE CENTROS', 'GOLES', 'MINUTOS/GOL', 'PRECISIÓN DE TIRO', 'GOLES CON EL PIE DERECHO', 'GOLES CON EL PIE IZQUIERDO', 'GOLES DE CABEZA', 'GOLES DENTRO DEL ÁREA', 'GOLES FUERA DEL ÁREA', 'OTROS GOLES', 'DRIVES CON ÉXITO', 'FUERAS DE JUEGO', 'TARJETAS AMARILLAS', 'TARJETAS AMARILLAS/ROJAS', 'TARJETAS ROJAS', 'FALTAS COMETIDAS', 'FALTAS A FAVOR'];

        for($i = 0; $i <= 7; $i++) {
	        \DB::table('average_statistics')->insert(array (
		        'gs_id'  => 1,
		        'action' => $statistics[$i],
		    ));
    	}

    	for($i = 8; $i <= 14; $i++) {
	        \DB::table('average_statistics')->insert(array (
		        'gs_id'  => 2,
		        'action' => $statistics[$i],
		    ));
    	}

    	for($i = 15; $i <= 25; $i++) {
	        \DB::table('average_statistics')->insert(array (
		        'gs_id'  => 3,
		        'action' => $statistics[$i],
		    ));
    	}

    	for($i = 26; $i <= 30; $i++) {
	        \DB::table('average_statistics')->insert(array (
		        'gs_id'  => 4,
		        'action' => $statistics[$i],
		    ));
    	}
    }
}
