<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Concurso;
use App\Models\Colegio;
use App\Models\Detalle;
use App\Models\Problema;
use App\Models\Product;
use App\Models\User;
use App\Models\Tipo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\User::factory(10)->create();
        DB::table('users')->delete();
		User::create(array(
			'rol' => 1,
			'nombre' => 'Joel',
			'apellido' => 'Gonzales Aguilar',
			'username' => 'master',
			'imagen'=>'20233721535.jpg',
			'password' => Hash::make('master123456')
		));
		User::create(array(
			'rol' => 1,
			'nombre' => 'Oscar',
			'apellido' => 'Choque Gonzales',
			'username' => 'oscar',
			'imagen'=>'202337215252.jpg',
			'password' => Hash::make('oscar123456')
		));
		Product::create(array(
			'nombre'=>'CALAMINA',
			'imagen'=>'20233123167.jpg',
			'lugar'=>'1'
		));
		Product::create(array(
			'nombre'=>'CLAVO',
			'imagen'=>'202331221831.jpg',
			'lugar'=>'1'
		));
		Product::create(array(
			'nombre'=>'ALAMBRE',
			'imagen'=>'202331231757.jpg',
			'lugar'=>'1'
		));
		Product::create(array(
			'nombre'=>'VIGAS',
			'imagen'=>'202331232325.jpg',
			'lugar'=>'0'
		));
		Product::create(array(
			'nombre'=>'LISTONES',
			'imagen'=>'202331232325.jpg',
			'lugar'=>'0'
		));
		Tipo::create(array(
			'id_producto'=>'1',
			'descripcion'=>'GALVANIZADO 3X4'
		));
		Tipo::create(array(
			'id_producto'=>'1',
			'descripcion'=>'GALVANIZADO 3X16'
		));
		Tipo::create(array(
			'id_producto'=>'1',
			'descripcion'=>'GALVANIZADO 3X8'
		));
		Tipo::create(array(
			'id_producto'=>'2',
			'descripcion'=>'3/4'
		));
		Tipo::create(array(
			'id_producto'=>'2',
			'descripcion'=>'3/8'
		));
		Tipo::create(array(
			'id_producto'=>'2',
			'descripcion'=>'3/16'
		));
		Detalle::create(array(
			'id_tipo'=>'1',
            'descripcion'=>'18',
            'cantidad'=>'200',
            'precio_compra'=>'15',
            'precio_venta'=>'18',
            'stock_minimo'=>'10',
		));
		Detalle::create(array(
			'id_tipo'=>'1',
            'descripcion'=>'12',
            'cantidad'=>'200',
            'precio_compra'=>'15',
            'precio_venta'=>'18',
            'stock_minimo'=>'10',
		));
		Detalle::create(array(
			'id_tipo'=>'1',
            'descripcion'=>'108',
            'cantidad'=>'200',
            'precio_compra'=>'15',
            'precio_venta'=>'18',
            'stock_minimo'=>'10',
		));
    }
}
