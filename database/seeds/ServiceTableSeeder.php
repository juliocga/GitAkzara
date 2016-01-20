<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceTableSeeder extends Seeder
{
    public function run()
    {
        $namescorp = ['Celulitis'                => 'http://www.akzaraspa.com/wp-content/uploads/2014/09/IMG_9432-300x300.jpg',
                      'Flacidez'                 => 'http://www.akzaraspa.com/wp-content/uploads/2014/09/IMG_9450-300x300.jpg',
                      'Levantamiento de Gluteos' => 'http://www.akzaraspa.com/wp-content/uploads/2014/09/IMG_9406-300x300.jpg',
                      'Modelamiento y Reducción' => 'http://www.akzaraspa.com/wp-content/uploads/2014/09/IMG_9420-300x300.jpg',
                      'Post Quirurjicos'         => 'http://www.akzaraspa.com/wp-content/uploads/2014/09/post-quirurgicos-300x300.jpg ',
                      'Tonificación'             => 'http://www.akzaraspa.com/wp-content/uploads/2014/12/IMG_9415-300x300.jpg'];
        $namesfaci = ['Acné'             => 'http://www.akzaraspa.com/wp-content/uploads/2014/09/acne1-350x350.jpg',
                      'Alta Hidratación' => 'http://www.akzaraspa.com/wp-content/uploads/2014/09/IMG_1972-350x350.jpg',
                      'Limpieza Facial'  => 'http://www.akzaraspa.com/wp-content/uploads/2014/09/IMG_1961-350x350.jpg',
                      'Manchas'          => 'http://www.akzaraspa.com/wp-content/uploads/2014/09/IMG_9484-350x350.jpg',
                      'Rejuvenecimiento' => 'http://www.akzaraspa.com/wp-content/uploads/2014/09/IMG_9458-350x350.jpg'];
        $namesroom = ['Egyptian Room' => 'http://www.akzaraspa.com/wp-content/uploads/2014/09/ritual-egipcio-350x350.jpg',
                      'Hawaii Room'   => 'http://www.akzaraspa.com/wp-content/uploads/2014/09/Ritual-Hawaii-1024x649.jpg',
                      'Hindu Room'    => 'http://www.akzaraspa.com/wp-content/uploads/2014/09/sala-indu-350x350.jpg',
                      'Japanese Room' => 'http://www.akzaraspa.com/wp-content/uploads/2014/09/ritual-japones-350x350.jpg  '];
        $namesothe = ['Bronceo con Aerografo DHA' => 'http://www.akzaraspa.com/wp-content/uploads/2014/09/21-300x300.jpg',
                      'Depilación con cera'       => 'http://www.akzaraspa.com/wp-content/uploads/2015/09/IMG_9500-300x300.jpg',
                      'Spa Novias y 15 años'      => 'http://www.akzaraspa.com/wp-content/uploads/2015/09/IMG_95132-300x300.jpg',];

        foreach ($namescorp as $name => $urlimage) {
            DB::table('services')->insert(array(
                'name'     => $name,
                'type'     => 'corporal',
                'price'    => 80000,
                'length'   => 60,
                'urlimage' => $urlimage,
                'urlinfo'  => '#',
            ));
        }

        foreach ($namesfaci as $name => $urlimage) {
            DB::table('services')->insert(array(
                'name'     => $name,
                'type'     => 'facial',
                'price'    => 80000,
                'length'   => 60,
                'urlimage' => $urlimage,
                'urlinfo'  => '#',
            ));
        }

        foreach ($namesroom as $name => $urlimage) {
            DB::table('services')->insert(array(
                'name'     => $name,
                'type'     => 'room',
                'price'    => 80000,
                'length'   => 180,
                'urlimage' => $urlimage,
                'urlinfo'  => 'http://www.akzaraspa.com/salas-tematicas/ritual-egipcio/',
            ));
        }

        foreach ($namesothe as $name => $urlimage) {
            DB::table('services')->insert(array(
                'name'     => $name,
                'type'     => 'other',
                'price'    => 80000,
                'length'   => 60,
                'urlimage' => $urlimage,
                'urlinfo'  => '#',
            ));
        }
    }
}