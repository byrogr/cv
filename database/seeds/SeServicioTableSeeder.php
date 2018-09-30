<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Servicio;


class SeServicioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Servicio::create(array(
            'nombre' => 'EL DELEITE DE LOS DIOSES',
            'descripcion' => 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.',
            'duracion' => 4,
            'inicio' => '8 am',
            'fin' => '12 pm',
            'precio' => rand(25, 150),
            'rank' => 4,
            'video' => '93sjjr6YTzE',
            'proveedor' => 'Pachamama SA',
            'departamento_id' => 1,
            'localidad' => 'Namora',
            'slug' => str_slug('EL DELEITE DE LOS DIOSES'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ));

        Servicio::create(array(
            'nombre' => 'SURFING EN CABALLITO DE TOTORA (TUP)',
            'descripcion' => 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.',
            'duracion' => 4,
            'inicio' => '3 pm',
            'fin' => '7 pm',
            'precio' => rand(25, 150),
            'rank' => 5,
            'video' => '93sjjr6YTzE',
            'proveedor' => 'Pachamama SA',
            'departamento_id' => 1,
            'localidad' => 'Namora',
            'slug' => str_slug('SURFING EN CABALLITO DE TOTORA (TUP)'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ));

        Servicio::create(array(
            'nombre' => 'EL ATARDECER CON DECIMAS Y AL SON DEL CAJON',
            'descripcion' => 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.',
            'duracion' => 4,
            'inicio' => '3 pm',
            'fin' => '7 pm',
            'precio' => rand(25, 150),
            'rank' => 4,
            'video' => '93sjjr6YTzE',
            'proveedor' => 'Pachamama SA',
            'departamento_id' => 1,
            'localidad' => 'Namora',
            'slug' => str_slug('EL ATARDECER CON DECIMAS Y AL SON DEL CAJON'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ));

        Servicio::create(array(
            'nombre' => 'TALLER DE MARINERA NORTEÑA',
            'descripcion' => 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.',
            'duracion' => 4,
            'inicio' => '5 pm',
            'fin' => '9 pm',
            'precio' => rand(25, 150),
            'rank' => 5,
            'video' => '93sjjr6YTzE',
            'proveedor' => 'Pachamama SA',
            'departamento_id' => 1,
            'localidad' => 'La Encañada',
            'slug' => str_slug('TALLER DE MARINERA NORTEÑA'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ));

        Servicio::create(array(
            'nombre' => 'PARTICIPACION EN LA COMPARSA DE LOS DIABLICOS DE TUCUME',
            'descripcion' => 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.',
            'duracion' => 4,
            'inicio' => '8 am',
            'fin' => '12 pm',
            'precio' => rand(25, 150),
            'rank' => 4,
            'video' => '93sjjr6YTzE',
            'proveedor' => 'Pachamama SA',
            'departamento_id' => 1,
            'localidad' => 'La Encañada',
            'slug' => str_slug('PARTICIPACION EN LA COMPARSA DE LOS DIABLICOS DE TUCUME'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ));

        Servicio::create(array(
            'nombre' => 'PROCESO ARTESANAL DEL ALGODÓN NATIVO',
            'descripcion' => 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.',
            'duracion' => 4,
            'inicio' => '8 am',
            'fin' => '12 pm',
            'precio' => rand(25, 150),
            'rank' => 4,
            'video' => '93sjjr6YTzE',
            'proveedor' => 'Pachamama SA',
            'departamento_id' => 1,
            'localidad' => 'La Encañada',
            'slug' => str_slug('PROCESO ARTESANAL DEL ALGODÓN NATIVO'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ));










    }
}
