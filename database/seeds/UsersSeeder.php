<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role' => 'administrador',
            'name' => 'administrador',
            'rut' => '11111111-1',
            'email' => 'admin01@gmail.com',
            'password' => Hash::make('administrador'),
            'telephone' => '948902385',
            'idServicios' => 1,
            'image' => null,

            

        ]);
        
    }
}
