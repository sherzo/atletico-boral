<?php

use Illuminate\Database\Seeder;

class TournamentsTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['PREPARATORIOS', 'OFICIALES'];

        foreach ($types as $key => $type) {

        	\DB::table('tournaments_categories')->insert(array (
        		'name' => $type,
        		'created_at' => date('Y-m-d H:m:s'),
           		'updated_at' => date('Y-m-d H:m:s'),
        	));
        }
    }
}
