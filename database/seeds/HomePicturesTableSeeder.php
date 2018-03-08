<?php

use Illuminate\Database\Seeder;
use App\HomePicture;

class HomePicturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$banner1 = new HomePicture();
      $banner1->title = 'ESTAMOS EVOLUCIONANDO';
      $banner1->subtitle='La misma calidad de siempre con una nueva imagen';
      $banner1->image='Banner_Home_1-01.svg';
      $banner1->location = 'HOME';
      $banner1->save();

      $banner2 = new HomePicture();
      $banner2->title = 'TENEMOS LAS MEJORES CERTIFICACIONES';
      $banner2->subtitle='';
      $banner2->image='Banner_Home_2-01.svg';
      $banner2->location = 'HOME';
      $banner2->save();

      $banner3 = new HomePicture();
      $banner3->title = 'ESPECIALISTA EN SISTEMA DE FRENADO';
      $banner3->subtitle='';
      $banner3->image='Banner_Home_3-01.svg';
      $banner3->location = 'HOME';
      $banner3->save();

      $banner4 = new HomePicture();
      $banner4->title = 'SE PARTE DE NOSOTROS';
      $banner4->subtitle='HIGH POWER BRAKE';
      $banner4->image='banner-01-clientes.svg';
      $banner4->location = 'CLIENTS';
      $banner4->save();
    }
}
