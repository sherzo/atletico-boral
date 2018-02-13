<?php

use Illuminate\Database\Seeder;

class TabsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tabs = ['ACERCA DE', 'HISTORIA', 'FILOSOFÍA', 'MISIÓN', 'VISIÓN', 'OBJETIVOS', 'METAS', 'INSTALACIONES DEPORTIVAS', 'FORMACIÓN DEPORTIVA', 'CATEGORÍAS INFANTO-JUVENIL', 'CATEGORÍAS FEMENINAS', 'ESCUELA DE FORMACIÓN DE ARQUEROS', 'VACACIONALES MULTI-DICIPLINAS', 'PROGRAMAS PARA ADULTOS', 'TORNEOS DEL ANFITRIÓN (INTER ESCOLARES, TORNEOS ABIERTOS)', 'TORNEO INFANTO-JUVENIL', 'TRYOUTS'];

        foreach ($tabs as $tab) 
        {
        	\DB::table('tabs')->insert(array (
        		'url'        => '',
        		'title'      => $tab,
        		'content'    => '',
        		'created_at' => date('Y-m-d H:m:s'),
           		'updated_at' => date('Y-m-d H:m:s'),
        	));
        }
    }
}
