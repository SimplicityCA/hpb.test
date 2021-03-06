<?php

use Illuminate\Database\Seeder;
use App\Download;

class DownloadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$download1 = new Download();
    	$download1->name = 'Catálogo de Productos';
      $download1->file = 'catalogo_HiGH_POWER_BRAKE.pdf';
      $download1->save();

      $download2 = new Download();
    	$download2->name = 'Manual Técnico';
      $download2->file = 'manual_tecnico_HIGH_POWER_BRAKE.pdf';
      $download2->save();
    }
}
