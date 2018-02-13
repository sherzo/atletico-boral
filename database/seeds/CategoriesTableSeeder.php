<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {		
		$categories = ['INFANTIL', 'SUB-8', 'SUB-10', 'SUB-12', 'SUB-14', 'SUB-16', 'SUB-18', 'SUB-20'];

		foreach ($categories as $category) {
	        \DB::table('categories')->insert(array (
	            'category' => $category,
	        ));
		}
    }
}
