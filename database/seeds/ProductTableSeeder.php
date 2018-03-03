<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$product1 = new Product();
      $product1->title = 'PASTILLAS DE FRENO';
      $product1->subtitle = 'HIGH POWER BRAKE PADS CARBON PERFORMANCE';
      $product1->link = '/carbon-performance';
      $product1->description = '<p>Brindando el máximo rendimiento y la experiencia de frenado más segura, nuestras pastillas de freno <i>carbon performance</i> están compuestas de material de fricción de primera calidad, proporcionando una resistencia térmica óptima para todo tipo de condiciones de manejo y clima. Además promueve una mejor transferencia de calor entregando una excelente calidad en el frenado todo el tiempo.</p>';
      $product1->characteristics = '<ul><li>Entre 20000 y 30000 km de duración.</li><li>Coeficiente de fricción: FF.</li><li>Material 100% libre de asbestos</li><li>Resistencia a altas y bajas temperaturas.</li><li>Excelente desempeño en lluvia.</li><li>Frenado silencioso y sin vibración.</li><li>Material resistente para ciudades montañosas y de gran altitud sobre el nivel del mar.</li><li>Económico y confiable.</li><li>Excelente desempeño de carbono.</li></ul>';
      $product1->home_image = 'Pastilla_de_freno_1-01.svg';
      $product1->header_image = 'Banner_Productos_1-01.svg';
      $product1->description_image = 'Producto_caja_2-01.svg';
      $product1->save();

      $product2 = new Product();
      $product2->title = 'PASTILLAS DE FRENO';
      $product2->subtitle = 'HIGH POWER BRAKE PADS CERAMIC ORGANIC';
      $product2->link = '/ceramic-organic';
      $product2->description = '<p>Con la mejor tecnología y por la preocupación por los problemas ambientales, disponemos de nuestras pastillas de freno cerámica orgánica serie SS Eco-friendly, compuestas por materiales naturales y orgánicos que son amigables con el ser humado y con nuestro planeta. Debido a la composición de sus materiales su frenado es silencioso y sin vibración.</p>';
      $product2->characteristics = '<ul><li>Entre 20000 y 30000 km de duración.</li><li>Coeficiente de fricción: FF.</li><li>Material 100% libre de asbestos</li><li>Excelente resistencia al calor.</li><li>Excelente capacidad anti-polvo para ruedas y neumáticos más limpios.</li><li>Este tipo de pastillas de freno son más suaves, lo que ayuda a reducir el ruido significativamente al frenar y sin vibraciones.</li><li>Serie SS compuesta por materiales naturales y orgánicos.</li><li>Eco-friendly / Amigable con el medio ambiente</li><li>Pastilla de freno cerámica-orgánica.</li></ul>';
      $product2->home_image = 'Pastilla_de_freno_2-01.svg';
      $product2->header_image = 'Banner_Productos_3-01.svg';
      $product2->description_image = 'Producto_caja_5-01.svg';
      $product2->save();

      $product3 = new Product();
      $product3->title = 'ZAPATAS DE FRENO';
      $product3->subtitle = 'HIGH POWER BRAKE SHOE';
      $product3->link = '/brake-shoe';
      $product3->description = '<p>Las zapatas de freno se fabrican bajo las mejores especificaciones técnicas, asegurando lo último en potencia para el frenado del vehículo y rendimiento duradero. En combinación con materiales de fricción de alta calidad, nuestras zapatas de freno mejorarán las capacidades de frenado de su vehículo y eliminará la vibración.</p>';
      $product3->characteristics = '<ul><li>De 35000 a 45000 km de duración.</li><li>Coeficiente de fricción: FF.</li><li>Material 100% libre de asbestos</li><li>Resistencia a altas y bajas temperaturas.</li><li>Frenado silencioso y sin vibración.</li><li>Optimiza todo el sistema de frenado.</li></ul>';
      $product3->home_image = 'Zapata_de_freno-01.svg';
      $product3->header_image = 'Banner_Productos_2-01.svg';
      $product3->description_image = 'Producto_caja_3-01.svg';
      $product3->save();

      $product4 = new Product();
      $product4->title = 'DISCOS DE FRENO';
      $product4->subtitle = 'HIGH POWER BRAKE DISCS';
      $product4->link = '#';
      $product4->description = 'PRÓXIMAMENTE';
      $product4->characteristics = 'N/A';
      $product4->home_image = 'Proximamente-01.svg';
      $product4->header_image = '';
      $product4->description_image = '';
      $product4->save();
    }
}
