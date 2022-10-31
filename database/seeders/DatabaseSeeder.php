<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Concurso;
use App\Models\Colegio;
use App\Models\Laboratorio;
use App\Models\Problema;
use App\Models\User;
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
        DB::table('laboratorios')->delete();
		User::create(array(
			'rol' => 1,
			'nombre' => 'Joel',
			'apellido' => 'Gonzales Aguilar',
			'username' => 'master',
			'imagen'=>'20218513118.jpg',
            'email' => 'joel.gonzales@sistemas.edu.bo',
			'password' => Hash::make('master123456')
		));
		User::create(array(
			'rol' => 1,
			'nombre' => 'Angelica',
			'apellido' => 'Andrade Zeballos',
			'username' => 'andrade',
			'imagen'=>'20221115128.jpg',
            'email' => 'joel.gonzales@sistemas.edu.bo',
			'password' => Hash::make('master123456')
		));
        User::create(array(
			'rol' => 2,
			'nombre' => 'Roly',
			'apellido' => 'Guzman Coronel',
			'username' => 'rolygc',
			'imagen'=>'202214114639.jpg',
            'email' => 'roly.guzman@sistemas.edu.bo',
			'password' => Hash::make('rolygc123')
		));
        User::create(array(
			'rol' => 3,
			'nombre' => 'Miguel',
			'apellido' => 'Reynolds Salinas',
			'username' => 'reynolds',
            'email' => 'miguel.reynolds@sistemas.edu.bo',
			'imagen'=>'202210316312.jpg',
			'password' => Hash::make('reynolds123')
		));        
		User::create(array(
			'rol' => 3,
			'nombre' => 'Fernando',
			'apellido' => 'Ureña Merida',
			'username' => 'ureña123',
            'email' => 'fernando.ureña@sistemas.edu.bo',
			'imagen'=>'202210316315.jpg',
			'password' => Hash::make('reynolds123')
		));        
		Laboratorio::create(array(
			'aula' => 'LSIA-4',
			'jefe_labo' => 'Franklin Villanueva',
			'maquinas' => '25',
			'columnas'=>'6',
			'imagen'=>''
		));        
		Laboratorio::create(array(
			'aula' => 'LSIA-1',
			'jefe_labo' => 'Cesar Escalante',
			'maquinas' => '25',
			'columnas'=>'6',
			'imagen'=>''
		));        
		Laboratorio::create(array(
			'aula' => 'LSIB-4',
			'jefe_labo' => 'Fernando Ureña',
			'maquinas' => '20',
			'columnas'=>'4',
			'imagen'=>''
		));        		
		Laboratorio::create(array(
			'aula' => 'LSIB-1',
			'jefe_labo' => 'Roly Fernandez',
			'maquinas' => '30',
			'columnas'=>'6',
			'imagen'=>''
		));        
		Laboratorio::create(array(
			'aula' => 'LREDES',
			'jefe_labo' => 'Miguel Reynolds',
			'maquinas' => '15',
			'columnas'=>'6',
			'imagen'=>''
		));        
		Laboratorio::create(array(
			'aula' => 'LSIB-2',
			'jefe_labo' => 'Andy Cespedes',
			'maquinas' => '25',
			'columnas'=>'6',
			'imagen'=>''
		));
		Concurso::create(array(
			'titulo' => 'Competencia Colegio 2015',
			'fecha' => '2015-11-04',
			'hora'=> '3',
			'estado'=>'0',
			'imagen'=>''
		));        
		Concurso::create(array(
			'titulo' => 'Competencia Colegio 2016',
			'fecha' => '2016-11-04',
			'hora'=> '3',
			'estado'=>'0',
			'imagen'=>''
		));        
		Concurso::create(array(
			'titulo' => 'Competencia Colegio 2017',
			'fecha' => '2017-10-27',
			'hora'=> '3',
			'estado'=>'0',
			'imagen'=>''
		));        
		Concurso::create(array(
			'titulo' => 'Competencia Colegio 2018',
			'fecha' => '2018-10-26',
			'hora'=> '3',
			'estado'=>'0',
			'imagen'=>''
		));        	
		Concurso::create(array(
			'titulo' => 'Competencia Colegio 2019',
			'fecha' => '2019-10-25',
			'hora'=> '3',
			'estado'=>'0',
			'imagen'=>''
		));        
		Concurso::create(array(
			'titulo' => 'Competencia Colegio 2020',
			'fecha' => '2020-10-26',
			'hora'=> '3',
			'estado'=>'0',
			'imagen'=>''
		));        		
		Concurso::create(array(
			'titulo' => 'Competencia Colegio 2021',
			'fecha' => '2021-10-26',
			'hora'=> '3',
			'estado'=>'0',
			'imagen'=>'2021.jpeg'
		));        		
		Categoria::create(array(
			'titulo'=>'Nivel 1',
			'descripcion'=>'Estudiantes de 4to y 5to de Secundaria',
			'id_concurso'=>'1'
		));        		
		Categoria::create(array(
			'titulo'=>'Nivel 2',
			'descripcion'=>'Estudiantes de 6to de Secundaria',
			'id_concurso'=>'1'
		));        		
		Categoria::create(array(
			'titulo'=>'Nivel 1',
			'descripcion'=>'Estudiantes de 4to y 5to de Secundaria',
			'id_concurso'=>'2'
		));        		
		Categoria::create(array(
			'titulo'=>'Nivel 2',
			'descripcion'=>'Estudiantes de 6to de Secundaria',
			'id_concurso'=>'2'
		));		
		Categoria::create(array(
			'titulo'=>'Nivel 1',
			'descripcion'=>'Estudiantes de 3ro, 4to y 5to de Secundaria',
			'id_concurso'=>'3'
		));        		
		Categoria::create(array(
			'titulo'=>'Nivel 2',
			'descripcion'=>'Estudiantes de 6to de Secundaria',
			'id_concurso'=>'3'
		));        		
		Categoria::create(array(
			'titulo'=>'Nivel Basico',
			'descripcion'=>'Estudiantes de 4to y 5to de Secundaria',
			'id_concurso'=>'3'
		));        		
		Categoria::create(array(
			'titulo'=>'Nivel Avanzado',
			'descripcion'=>'Estudiantes de 4to 5to y 6to de Secundaria',
			'id_concurso'=>'3'
		));        		
		Colegio::create(array(
			'codigo'=>'0',
			'nombre'=>'NO DISPONIBLE',
			'color'=>'#ff0000',
		));
		Colegio::create(array(
			'codigo'=>'1',
			'nombre'=>'NINGUNO',
			'color'=>'#000000',
		));
		Colegio::create(array(
			'codigo'=>'2',
			'nombre'=>'ADOLFO BALLIVIAN 1',
			'color'=>'#000FFF',
		));
		Colegio::create(array(
			'codigo'=>'3',
			'nombre'=>'ADVENTISTA ELENA G. DE WHITE',
			'color'=>'#14c237',
		));
		Colegio::create(array(
			'codigo'=>'4',
			'nombre'=>'ALCIRA CARDONA TORRICO 2',
			'color'=>'#6e741a',
		));
		Colegio::create(array(
			'codigo'=>'5',
			'nombre'=>'ALEMAN',
			'color'=>'#565252',
		));
		Colegio::create(array(
			'codigo'=>'6',
			'nombre'=>'AMERICANO',
			'color'=>'#0f6635',
		));
		Colegio::create(array(
			'codigo'=>'7',
			'nombre'=>'ANGLO AMERICANO',
			'color'=>'#8e4380',
		));
		Colegio::create(array(
			'codigo'=>'8',
			'nombre'=>'ANICETO ARCE SECUNDARIA',
			'color'=>'#7600d6',
		));
		Colegio::create(array(
			'codigo'=>'9',
			'nombre'=>'ANTOFAGASTA',
			'color'=>'#7887c4',
		));
		Colegio::create(array(
			'codigo'=>'10',
			'nombre'=>'ANTONIO JOSE DE SAINZ',
			'color'=>'#072083',
		));
		Colegio::create(array(
			'codigo'=>'11',
			'nombre'=>'ARRIETA',
			'color'=>'#098b30',
		));
		Colegio::create(array(
			'codigo'=>'12',
			'nombre'=>'BETHANIA',
			'color'=>'#8a8ca8',
		));
		Colegio::create(array(
			'codigo'=>'13',
			'nombre'=>'BOLIVIA',
			'color'=>'#64aa4b',
		));
		Colegio::create(array(
			'codigo'=>'14',
			'nombre'=>'BOLIVIA DE VINTO SECUNDARIA',
			'color'=>'#d64cab',
		));
		Colegio::create(array(
			'codigo'=>'15',
			'nombre'=>'CARMEN GUZMAN DE MIER 1',
			'color'=>'#7a0000',
		));
		Colegio::create(array(
			'codigo'=>'16',
			'nombre'=>'CATOLICO SAN FRANCISCO',
			'color'=>'#552a02',
		));
		Colegio::create(array(
			'codigo'=>'17',
			'nombre'=>'CENTRO DE INFORMATICA SAN MIGUEL',
			'color'=>'#32568f',
		));
		Colegio::create(array(
			'codigo'=>'18',
			'nombre'=>'COMIBOL ORURO 2',
			'color'=>'#12378c',
		));
		Colegio::create(array(
			'codigo'=>'19',
			'nombre'=>'DON BOSCO',
			'color'=>'#e0efdc',
		));
		Colegio::create(array(
			'codigo'=>'20',
			'nombre'=>'DONATO VASQUEZ',
			'color'=>'#afd643',
		));
		Colegio::create(array(
			'codigo'=>'21',
			'nombre'=>'EJERCITO NACIONAL SECUNDARIO',
			'color'=>'#000000',
		));
		Colegio::create(array(
			'codigo'=>'22',
			'nombre'=>'EVANGELICO  WILLIAM BOOTH',
			'color'=>'#000000',
		));
		Colegio::create(array(
			'codigo'=>'23',
			'nombre'=>'EVANGELICO FILADELFIA',
			'color'=>'#000000',
		));
		Colegio::create(array(
			'codigo'=>'24',
			'nombre'=>'FERROVIARIA SECUNDARIA',
			'color'=>'#000000',
		));
		Colegio::create(array(
			'codigo'=>'25',
			'nombre'=>'FRANCISCO FAJARDO 2',
			'color'=>'#000000',
		));
		Colegio::create(array(
			'codigo'=>'26',
			'nombre'=>'GENOVEVA JIMENEZ',
			'color'=>'#000000',
		));
		Colegio::create(array(
			'codigo'=>'27',
			'nombre'=>'GUIDO VILLAGÓMEZ SECUNDARIO',
			'color'=>'#000000',
		));
		Colegio::create(array(
			'codigo'=>'28',
			'nombre'=>'HIJOS DEL SOL 2',
			'color'=>'#000000',
		));
		Colegio::create(array(
			'codigo'=>'29',
			'nombre'=>'IGNACIO LEON  2',
			'color'=>'#000000',
		));
		Colegio::create(array(
			'codigo'=>'30',
			'nombre'=>'ILDEFONSO MURGUIA',
			'color'=>'#000000',
		));
		Colegio::create(array(
			'codigo'=>'31',
			'nombre'=>'INSCO SECUNDARIA',
			'color'=>'#000000',
		));
		Colegio::create(array(
			'codigo'=>'32',
			'nombre'=>'JESUS DE NAZARETH  2',
			'color'=>'#000000',
		));
		Colegio::create(array(
			'codigo'=>'33',
			'nombre'=>'JESUS DE NAZARETH SECUNDARIA',
			'color'=>'#000000',
		));
		Colegio::create(array(
			'codigo'=>'34',
			'nombre'=>'JESUS-MARIA 2',
			'color'=>'#000000',
		));
		Colegio::create(array(
			'codigo'=>'35',
			'nombre'=>'JHON FITZGERALD KENNEDY 2',
			'color'=>'#000000',
		));
		Colegio::create(array(
			'codigo'=>'36',
			'nombre'=>'JHON FITZGERALD KENNEDY 3',
			'color'=>'#000000',
		));
		Colegio::create(array(
			'codigo'=>'37',
			'nombre'=>'JORGE OBLITAS SECUNDARIA',
			'color'=>'#000000',
		));
		Colegio::create(array(
			'codigo'=>'38',
			'nombre'=>'JOSE MARIA SIERRA GALVARRO',
			'color'=>'#000000',
		));
		Colegio::create(array(
			'codigo'=>'39',
			'nombre'=>'JUAN LECHIN OQUENDO',
			'color'=>'#000000',
		));
		Colegio::create(array(
			'codigo'=>'40',
			'nombre'=>'JUAN MISAEL SARACHO SECUNDARIA',
			'color'=>'#ff0000',
		));
		Colegio::create(array(
			'codigo'=>'41',
			'nombre'=>'JUAN PABLO SECUNDARIA',
			'color'=>'#000000',
		));
		Colegio::create(array(
			'codigo'=>'42',
			'nombre'=>'JUANA AZURDUY DE PADILLA SECUNDARIA',
			'color'=>'#000000',
		));
		Colegio::create(array(
			'codigo'=>'43',
			'nombre'=>'LA KANTUTA 3',
			'color'=>'#000000',
		));
		Colegio::create(array(
			'codigo'=>'44',
			'nombre'=>'LA SALLE',
			'color'=>'#000000',
		));
		Colegio::create(array(
			'codigo'=>'45',
			'nombre'=>'LA SALLE TARDE',
			'color'=>'#000000',
		));
		Colegio::create(array(
			'codigo'=>'46',
			'nombre'=>'LANI',
			'color'=>'#000000',
		));
		Colegio::create(array(
			'codigo'=>'47',
			'nombre'=>'LOS ANGELES DE NAZARIA IGNACIA',
			'color'=>'#000000',
		));
		Colegio::create(array(
			'codigo'=>'48',
			'nombre'=>'LUIS MARIO CAREAGA 2',
			'color'=>'#000000',
		));
		Colegio::create(array(
			'codigo'=>'49',
			'nombre'=>'MARCELO QUIROGA SANTA CRUZ',
			'color'=>'#000000',
		));
		Colegio::create(array(
			'codigo'=>'50',
			'nombre'=>'MARCOS BELTRAN AVILA SECUNDARIA',
			'color'=>'#000000',
		));
		Colegio::create(array(
			'codigo'=>'51',
			'nombre'=>'MARIA QUIROZ SECUNDARIA',
			'color'=>'#000000',
		));
		Colegio::create(array(
			'codigo'=>'52',
			'nombre'=>'MARISCAL SUCRE SECUNDARIO',
			'color'=>'#000000',
		));
		Colegio::create(array(
			'codigo'=>'53',
			'nombre'=>'MISAEL PACHECO LOMA SECUNDARIO',
			'color'=>'#000000',
		));
		Colegio::create(array(
			'codigo'=>'54',
			'nombre'=>'NACIONAL BOLIVIA',
			'color'=>'#000000',
		));
		Colegio::create(array(
			'codigo'=>'55',
			'nombre'=>'NACIONAL MIXTO HUAJARA',
			'color'=>'#000000',
		));
		Colegio::create(array(
			'codigo'=>'56',
			'nombre'=>'NACIONAL SAN JOSE',
			'color'=>'#000000',
		));
		Colegio::create(array(
			'codigo'=>'57',
			'nombre'=>'NACIONES UNIDAS',
			'color'=>'#000000',
		));
		Colegio::create(array(
			'codigo'=>'58',
			'nombre'=>'NINO QUIRQUINCHO FELIZ',
			'color'=>'#000000',
		));
		Colegio::create(array(
			'codigo'=>'59',
			'nombre'=>'NUESTRA SENORA DEL SOCAVON 2',
			'color'=>'#000000',
		));
		Colegio::create(array(
			'codigo'=>'60',
			'nombre'=>'ORURO SECUNDARIA',
			'color'=>'#000000',
		));
		Colegio::create(array(
			'codigo'=>'61',
			'nombre'=>'OSCAR UNZAGA DE LA VEGA 2',
			'color'=>'#000000',
		));
		Colegio::create(array(
			'codigo'=>'62',
			'nombre'=>'PANTALEON DALENCE 1',
			'color'=>'#000000',
		));
		Colegio::create(array(
			'codigo'=>'63',
			'nombre'=>'PANTALEON DALENCE JIMENEZ',
			'color'=>'#000000',
		));
		Colegio::create(array(
			'codigo'=>'64',
			'nombre'=>'REEKIE',
			'color'=>'#000000',
		));
		Colegio::create(array(
			'codigo'=>'65',
			'nombre'=>'ROTARIA ORURO OTTAWA',
			'color'=>'#000000',
		));
		Colegio::create(array(
			'codigo'=>'66',
			'nombre'=>'SAN IGNACIO DE LOYOLA',
			'color'=>'#000000',
		));
		Colegio::create(array(
			'codigo'=>'67',
			'nombre'=>'SAN MIGUEL',
			'color'=>'#af3e0d',
		));
		Colegio::create(array(
			'codigo'=>'68',
			'nombre'=>'SANTA CLAUDINA THEVENET',
			'color'=>'#000000',
		));
		Colegio::create(array(
			'codigo'=>'69',
			'nombre'=>'SANTA MARÍA MAGDALENA POSTEL',
			'color'=>'#000000',
		));
		Colegio::create(array(
			'codigo'=>'70',
			'nombre'=>'SANTA ROSA 2',
			'color'=>'#000000',
		));
		Colegio::create(array(
			'codigo'=>'71',
			'nombre'=>'SEBASTIAN PAGADOR 2',
			'color'=>'#000000',
		));
		Colegio::create(array(
			'codigo'=>'72',
			'nombre'=>'SIMÓN BOLÍVAR SECUNDARIA',
			'color'=>'#0ac2ff',
		));
		Colegio::create(array(
			'codigo'=>'73',
			'nombre'=>'UNIÓN  BOLIVIA  JAPÓN',
			'color'=>'#000000',
		));
		Colegio::create(array(
			'codigo'=>'74',
			'nombre'=>'VIRGEN DEL MAR 3',
			'color'=>'#fafafa',
		));
		
		
    }
}
