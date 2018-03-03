<?php

use Illuminate\Database\Seeder;
use App\Certification;

class CertificationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $certification1 = new Certification();
      $certification1->name = 'AMECA';
      $certification1->description = 'Automotive Manufactures Equipment Compliance Agency, Inc. Es la agencia de cumplimiento de equipos de fabricación de automóviles. Nuestros productos están certificados por AMECA, la certificación AMECA es un requerimiento para las compañías que quieren importar materiales de fricción hacia los Estados Unidos.';
      $certification1->image = 'Ameca-01.svg';
      $certification1->save();

      $certification2 = new Certification();
      $certification2->name = 'ISO 9001';
      $certification2->description = 'La fabricación de nuestros productos High Power Brake están certificados bajo la norma ISO/TS 16949:2009 y la ISO 9001';
      $certification2->image = 'BSI-01.svg';
      $certification2->save();

      $certification3 = new Certification();
      $certification3->name = 'INEN 2185:2012';
      $certification3->description = 'Esta norma establece los requisitos que debe cumplir y los ensayos a los cuales debe someterse el material de fricción empleado en los sistemas de frenos de los vehículos automotores. Esta norma se aplica a los revestimientos de frenos y a los ensambles de pastillas y zapatas.';
      $certification3->image = 'INEN-01.svg';
      $certification3->save();
      
      $certification4 = new Certification();
      $certification4->name = 'LINK TEST';
      $certification4->description = 'Las pruebas de fricción efectuadas por LINK garantizan a los conductores la más alta seguridad y resistencia. Es un laboratorio de acreditación mundial para pruebas en coeficiente de fricción en pastillas de freno y zapatas de freno.';
      $certification4->image = 'LINK-01.svg';
      $certification4->save();

      $certification5 = new Certification();
      $certification5->name = 'ISO/TS 16949';
      $certification5->description = 'La fabricación de nuestros productos High Power Brake están certificados bajo la norma ISO/TS 16949:2009 y la ISO 9001';
      $certification5->image = 'ISO_16949-01.svg';
      $certification5->save();

      $certification6 = new Certification();
      $certification6->name = 'ECE-R90 by VCA';
      $certification6->description = 'La certificación ECE R90 es un requisito para todos los productos de freno que se comercializan en la Unión Europea y otros países que han adoptado las regulaciones ECE.';
      $certification6->image = 'VCA-01.svg';
      $certification6->save();

    }
}
