<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('news')->insert([
            [
                'id' => '1',
                'title' => 'El Sevilla gana la Champions League',
                'pub_date' => '2024-10-22 11:30:12',
                'description' => 'Vence por 5-0 al Real Betis',
                'link' => 'https://www.marca.com/sevilla',
                'url_image' => 'https://sandbox.aulapragmatica.es/commons/img/demo.png',
                'source_id' => '123',
            ],
            [
                'id' => '2',
                'title' => 'El Sevilla alcanza la final de la Champions',
                'pub_date' => '2024-10-23 12:30:00',
                'description' => 'Se enfrenta al Real Madrid',
                'link' => 'https://www.marca.com/sevilla/final',
                'url_image' => 'https://sandbox.aulapragmatica.es/commons/img/demo2.png',
                'source_id' => '123',
            ],
            [
                'id' => '3',
                'title' => 'El Sevilla celebra su victoria en la liga',
                'pub_date' => '2024-10-24 14:00:00',
                'description' => 'Victoria crucial en la última jornada',
                'link' => 'https://www.marca.com/sevilla/celebracion',
                'url_image' => 'https://sandbox.aulapragmatica.es/commons/img/demo3.png',
                'source_id' => '123',
            ],
            [
                'id' => '4',
                'title' => 'Sevilla ficha a un nuevo delantero estrella',
                'pub_date' => '2024-10-25 09:45:00',
                'description' => 'Un fichaje prometedor para la próxima temporada',
                'link' => 'https://www.marca.com/sevilla/fichaje',
                'url_image' => 'https://sandbox.aulapragmatica.es/commons/img/demo4.png',
                'source_id' => '123',
            ],
            [
                'id' => '5',
                'title' => 'El Sevilla inaugura su nuevo estadio',
                'pub_date' => '2024-10-26 17:30:00',
                'description' => 'El estadio más moderno de Europa',
                'link' => 'https://www.marca.com/sevilla/estadio',
                'url_image' => 'https://sandbox.aulapragmatica.es/commons/img/demo5.png',
                'source_id' => '123',
            ],
            [
                'id' => '6',
                'title' => 'Sevilla presenta su nueva equipación',
                'pub_date' => '2024-10-27 13:00:00',
                'description' => 'Diseño inspirado en la tradición andaluza',
                'link' => 'https://www.marca.com/sevilla/equipacion',
                'url_image' => 'https://sandbox.aulapragmatica.es/commons/img/demo6.png',
                'source_id' => '123',
            ],
            [
                'id' => '7',
                'title' => 'El Sevilla lidera la tabla de posiciones',
                'pub_date' => '2024-10-28 19:00:00',
                'description' => 'Un comienzo de temporada impresionante',
                'link' => 'https://www.marca.com/sevilla/lider',
                'url_image' => 'https://sandbox.aulapragmatica.es/commons/img/demo7.png',
                'source_id' => '123',
            ],
            [
                'id' => '8',
                'title' => 'Sevilla refuerza su defensa con un nuevo fichaje',
                'pub_date' => '2024-10-29 11:15:00',
                'description' => 'Fortaleciendo la línea defensiva para la Champions',
                'link' => 'https://www.marca.com/sevilla/defensa',
                'url_image' => 'https://sandbox.aulapragmatica.es/commons/img/demo8.png',
                'source_id' => '123',
            ],
            [
                'id' => '9',
                'title' => 'El Sevilla lanza su campaña de abonados',
                'pub_date' => '2024-10-30 08:45:00',
                'description' => 'Nuevos precios y beneficios para los seguidores',
                'link' => 'https://www.marca.com/sevilla/abonados',
                'url_image' => 'https://sandbox.aulapragmatica.es/commons/img/demo9.png',
                'source_id' => '123',
            ],
            [
                'id' => '10',
                'title' => 'Sevilla renueva contrato con su capitán',
                'pub_date' => '2024-10-31 15:30:00',
                'description' => 'El alma del equipo por tres temporadas más',
                'link' => 'https://www.marca.com/sevilla/capitan',
                'url_image' => 'https://sandbox.aulapragmatica.es/commons/img/demo10.png',
                'source_id' => '123',
            ],
        ]);
    }
}
