<?php

use Illuminate\Database\Seeder;

class PlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('places')->insert(array (
            'place' => 'CANCHAS FEDENADOR',
        ));

        \DB::table('places')->insert(array (
            'place' => 'CANCHAS COLEGIO TÉCNICO SIMÓN BOLÍVAR',
        ));

        \DB::table('places')->insert(array (
            'place' => 'CANCHAS SINTÉTICAS FÚTBOL PLAZA',
        ));

        \DB::table('places')->insert(array (
            'place' => 'ESTADIO RAMÓN UNAMUNO',
        ));

        \DB::table('places')->insert(array (
            'place' => 'CANCHA CHINO GÓMEZ',
        ));
    }
}
