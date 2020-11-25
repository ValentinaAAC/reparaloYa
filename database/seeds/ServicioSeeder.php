<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ServicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('servicios')->insert([
            'nombre' => 'Computacion',
            'categoria' => 'Computacion',
            'descripcion' => 'Limpieza, gestión de de cables, cambio de pasta térmica, upgrade, formateo, istalación de software, etc.',
        ]);

        DB::table('servicios')->insert([
            'nombre' => 'Access Point',
            'categoria' => 'Acces Point',
            'descripcion' => 'Instalación de acces point, configuración de router, levantamiento de servicios, grupo hogar etc.',
        ]);

        DB::table('servicios')->insert([
            'nombre' => 'Impresoras y Scanner',
            'categoria' => 'Impresoras y Scanner',
            'descripcion' => 'Mantención, limpieza de inyectores y cabezales, cambio de almohadilla, hard reset etc.',
        ]);

        DB::table('servicios')->insert([
            'nombre' => 'Gasfiteria',
            'categoria' => 'Gasfiteria',
            'descripcion' => 'Instalar, mantener y reparar las tuberías, calefont, fugas de agua y gas, etc.',
        ]);

        DB::table('servicios')->insert([
            'nombre' => 'Servicio de electricidad',
            'categoria' => 'Servicio de electricidad',
            'descripcion' => 'Instalación de enchufes, lámparas, instalaciones de tableros eléctricos, fallas eléctricas y reparaciones cortocircuitos, sobrecargas, recableado, etc.',
        ]);

        DB::table('servicios')->insert([
            'nombre' => 'Linea Blanca',
            'categoria' => 'Linea Blanca',
            'descripcion' => 'Reparacion y mantencion de lavadora, resfrigerador, microondas, etc.',
        ]);

        DB::table('servicios')->insert([
            'nombre' => 'Electro',
            'categoria' => 'Electro',
            'descripcion' => 'Mantención y reparación de televisión, audio, HIFI.',
        ]);

        DB::table('servicios')->insert([
            'nombre' => 'Climatizacion',
            'categoria' => 'Climatizacion',
            'descripcion' => 'Instalación, mantenimiento y programación de equipo de climatización y aires acondicionado para el hogar.',
        ]);


    }
}
