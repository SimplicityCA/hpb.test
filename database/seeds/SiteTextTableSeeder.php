<?php

use Illuminate\Database\Seeder;
use App\SiteText;

class SiteTextTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $text1 = new SiteText();
        $text1->title = 'QUIÉNES SOMOS';
        $text1->description = 'La vejez de una empresa se mide en su capacidad para renovarse ante las exigencias del nuevo mercado, es por eso que la empresa <strong>IMPORTADORA DÁVILA</strong> está renovando e innovando su marca de frenos <strong>HIGH POWER BRAKE</strong>, queremos que nuestra marca se especialice en todo el sistema de frenado, aquí recibirás la mejor asesoría para adquirir nuestros productos de acuerdo a tus necesidades de manejo. Nosotros te explicaremos a detalle todo lo que quieras conocer de nuestros productos, sus características, certificaciones y especificaciones técnicas.';
        $text1->image = 'quienes_somos_01.svg';
        $text1->location = 'HOME';
        $text1->save();

        $text2 = new SiteText();
        $text2->title = 'CERTIFICACIONES DE <strong>NUESTROS PRODUCTOS</strong>';
        $text2->description = 'Para asegurar que nuestros productos brinden lo último en seguridad y confianza, aplicamos nuestros productos en las pruebas y ensayos más rigurosos, sin comprometer la calidad y la seguridad. Nuestros productos <strong>HIGH POWER BRAKE</strong> ofrecen un rendimiento privilegiado para que la experiencia de frenado sea más segura en todo tipo de condiciones de manejo y clima. La marca <strong>HIGH POWER BRAKE</strong> posee varias certificaciones para sus productos, a continuación explicamos cada una de ellas:';
        $text2->image = '';
        $text2->location = 'HOME';
        $text2->save();

        $text3 = new SiteText();
        $text3->title = 'CONVIÉRTETE EN CLIENTE';
        $text3->description = 'Si quieres formar parte de nuestros clientes a nivel nacional, debes de tener un almacén de repuestos que compre al por mayor, y si deseas abrir un nuevo almacén, nosotros te brindaremos la mejor asesoría. Por favor llena el formulario a continuación:';
        $text3->image = 'productos-01-clientes.svg';
        $text3->location = 'CLIENTS';
        $text3->save();

        $text4 = new SiteText();
        $text4->title = '01';
        $text4->description = 'Al rectificar o pulir los discos asegúrese que la superficie tenga acabado no direccional sin surcos.';
        $text4->image = 'tip_1-01.svg';
        $text4->location = 'TIPS';
        $text4->save();

        $text5 = new SiteText();
        $text5->title = '02';
        $text5->description = 'Antes de instalar un disco limpie ambas caras con agua a temperatura ambiente y/o limpiador no detergente.';
        $text5->image = 'tip_2-01.svg';
        $text5->location = 'TIPS';
        $text5->save();

        $text6 = new SiteText();
        $text6->title = '03';
        $text6->description = 'No toque la superficie de fricción con las manos u objetos contaminados con lubricantes o similares.';
        $text6->image = 'tip_3-01.svg';
        $text6->location = 'TIPS';
        $text6->save();

        $text7 = new SiteText();
        $text7->title = '04';
        $text7->description = 'Lubrique con el producto adecuado las guías, correderas y si es necesario la placa metálica de los tacos de freno.';
        $text7->image = 'tip_4-01.svg';
        $text7->location = 'TIPS';
        $text7->save();

        $text8= new SiteText();
        $text8->title = '05';
        $text8->description = 'Revise detalladamente todos  los componentes del sistema, incluso mordazas, pistones, o-rings, guías, clip retenedores y demás herrajes; sustituya los que halle desgastados.';
        $text8->image = 'tip_5-01.svg';
        $text8->location = 'TIPS';
        $text8->save();

        $text9 = new SiteText();
        $text9->title = '06';
        $text9->description = 'Abra el drenaje o purga y luego comprima los pistones del caliper; no golpee los tacos con martillos metálicos para ajustarlos en su sitio.';
        $text9->image = 'tip_6-01.svg';
        $text9->location = 'TIPS';
        $text9->save();

        $text10 = new SiteText();
        $text10->title = '07';
        $text10->description = 'Apriete las tuercas alternadamente en estrella con el órden sugerido.';
        $text10->image = 'tip_7-01.svg';
        $text10->location = 'TIPS';
        $text10->save();

        $text11 = new SiteText();
        $text11->title = '08';
        $text11->description = 'Compruebe si existe calentamiento excesivo, principalmente en el eje delantero.';
        $text11->image = 'tip_8-01.svg';
        $text11->location = 'TIPS';
        $text11->save();

        $text12 = new SiteText();
        $text12->title = '09';
        $text12->description = 'Una temperatura muy alta puede indicar un esfuerzo de frenado desbalanceado.';
        $text12->image = 'tip_9-01.svg';
        $text12->location = 'TIPS';
        $text12->save();
    }
}
