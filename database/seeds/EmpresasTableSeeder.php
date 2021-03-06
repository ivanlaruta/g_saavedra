<?php

use Illuminate\Database\Seeder;

class EmpresasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empresas')->delete();
        		
		DB::table('empresas')->insert([
			'nombre' => 'TOYOSA S.A. ',
			'nombre_corto' => 'TOYOSA',
			'nit' => '1030029024',
			'matricula' => '13129',
			'gerente' => '8',
			'objeto' => 'Importaciones y Exportaciones, venta de vehículos, accesorios y repuestos.',
			'nat_juridica' => 'Sociedad Comercial. Sociedad Anónima.',
			'tipo' => 'automotriz',
			'ubicacion' => 'Santa Cruz - Bolivia',
		]);

		DB::table('empresas')->insert([
			'nombre' => 'TOYOTA BOLIVIA S.A. ',
			'nombre_corto' => 'TOYOTA',
			'nit' => '1008467028',
			'matricula' => '13534',
			'gerente' => '1',
			'objeto' => 'COMERCIO GENERAL, IMPORTACIONES Y EXPORTACIONES Y REPRESENTACIONES',
			'nat_juridica' => 'Sociedad Comercial. Sociedad Anónima.',
			'tipo' => 'automotriz',
			'ubicacion' => 'La Paz - Bolivia',
		]);

		DB::table('empresas')->insert([
			'nombre' => 'CONSARQ S.A. ',
			'nombre_corto' => 'CONSARQ',
			'nit' => '141483027',
			'matricula' => '43825',
			'gerente' => '1',
			'objeto' => 'CONSTRUCCION - INMOBILIARIA',
			'nat_juridica' => 'Sociedad Comercial. Sociedad Anónima.',
			'tipo' => 'inmobiliaria',
			'ubicacion' => 'Cochabamba - Bolivia',
		]);

		DB::table('empresas')->insert([
			'nombre' => 'OCORO S.A.',
			'nombre_corto' => 'OCORO',
			'nit' => '0',
			'matricula' => '0',
			'gerente' => '1',
			'objeto' => 'inmobiliaria',
			'nat_juridica' => 'Sociedad Comercial. Sociedad Anónima.',
			'tipo' => 'inmobiliaria',
			'ubicacion' => 'Santa Cruz - Bolivia',
		]);

		DB::table('empresas')->insert([
			'nombre' => 'TERSA S.A.',
			'nombre_corto' => 'TERSA',
			'nit' => '136463026',
			'matricula' => '118342',
			'gerente' => '18',
			'objeto' => 'servicios',
			'nat_juridica' => 'Sociedad Comercial. Sociedad Anónima.',
			'tipo' => 'servicios',
			'ubicacion' => 'La Paz - Bolivia',
		]);

		DB::table('empresas')->insert([
			'nombre' => 'ATLANTIDA S.A.',
			'nombre_corto' => 'ATLANTIDA',
			'nit' => '0',
			'matricula' => '0',
			'gerente' => '19',
			'objeto' => 'IMPORTACIONES EXPORTACIONES',
			'nat_juridica' => 'Sociedad Comercial. Sociedad Anónima.',
			'tipo' => 'automotriz',
			'ubicacion' => 'Iquique - Chile',
		]);

		DB::table('empresas')->insert([
			'nombre' => 'INTERMEX S.A.',
			'nombre_corto' => 'INTERMEX',
			'nit' => '0',
			'matricula' => '0',
			'gerente' => '19',
			'objeto' => 'IMPORTACIONES EXPORTACIONES',
			'nat_juridica' => 'Sociedad Comercial. Sociedad Anónima.',
			'tipo' => 'automotriz',
			'ubicacion' => 'Cochabamba - Bolivia',
		]);

		DB::table('empresas')->insert([
			'nombre' => 'CROWN LTDA. ',
			'nombre_corto' => 'CROWN',
			'nit' => '1023113020',
			'matricula' => '7169',
			'gerente' => '20',
			'objeto' => 'Importaciones y Exportaciones, venta de vehículos, accesorios y repuestos.',
			'nat_juridica' => 'Sociedad Comercial - Sociedad de Responsabilidad Limitada',
			'tipo' => 'automotriz',
			'ubicacion' => 'Cochabamba - Bolivia',
		]);

		DB::table('empresas')->insert([
			'nombre' => 'TOCARS BROKERS S.R.L.',
			'nombre_corto' => 'TOCARS',
			'nit' => '0',
			'matricula' => '0',
			'gerente' => '1',
			'objeto' => 'venta de vehículos, accesorios y repuestos.',
			'nat_juridica' => 'Sociedad Comercial - Sociedad de Responsabilidad Limitada',
			'tipo' => 'automotriz',
			'ubicacion' => 'La Paz - Bolivia',
		]);

		DB::table('empresas')->insert([
			'nombre' => 'CASA IDEAL S.R.L.',
			'nombre_corto' => 'CASA IDEAL',
			'nit' => '0',
			'matricula' => '0',
			'gerente' => '21',
			'objeto' => 'FABRICACION MATERIAL DE CONSTRUCCION',
			'nat_juridica' => 'Sociedad Comercial - Sociedad de Responsabilidad Limitada',
			'tipo' => 'inmobiliaria',
			'ubicacion' => 'Santa Cruz - Bolivia',
		]);

		DB::table('empresas')->insert([
			'nombre' => 'CENTROS COMERCIALES DE BOLIVIA S.R.L.',
			'nombre_corto' => 'CENTROS COMERCIALES DE BOLIVIA',
			'nit' => '0',
			'matricula' => '0',
			'gerente' => '1',
			'objeto' => 'inmobiliaria',
			'nat_juridica' => 'Sociedad Comercial - Sociedad de Responsabilidad Limitada',
			'tipo' => 'inmobiliaria',
			'ubicacion' => 'Santa Cruz - Bolivia',
		]);

		DB::table('empresas')->insert([
			'nombre' => 'WORLD TRADE CENTER BOLIVIA',
			'nombre_corto' => 'WORLD TRADE CENTER',
			'nit' => '344116022',
			'matricula' => '373697',
			'gerente' => '22',
			'objeto' => 'inmobiliaria',
			'nat_juridica' => 'Sociedad Comercial. Sociedad Anónima.',
			'tipo' => 'inmobiliaria',
			'ubicacion' => 'La Paz - Bolivia',
		]);

		DB::table('empresas')->insert([
			'nombre' => 'RAINBOW CONSTRUCTIONS SRL',
			'nombre_corto' => 'RAINBOW',
			'nit' => '318526023',
			'matricula' => '353564',
			'gerente' => '1',
			'objeto' => 'Construcción y Comercialización de Edificios de departamentos y viviendas.',
			'nat_juridica' => 'Sociedad Comercial - Sociedad de Responsabilidad Limitada',
			'tipo' => 'inmobiliaria',
			'ubicacion' => 'Santa Cruz - Bolivia',
		]);

		DB::table('empresas')->insert([
			'nombre' => 'INMOBILIARIA CASA DE CAMPO S.A.',
			'nombre_corto' => 'CASA DE CAMPO',
			'nit' => '124759026',
			'matricula' => '13459',
			'gerente' => '1',
			'objeto' => 'Inmobiliaria, Servicios Generales.',
			'nat_juridica' => 'Sociedad Comercial. Sociedad Anónima.',
			'tipo' => 'inmobiliaria',
			'ubicacion' => 'Santa Cruz - Bolivia',
		]);
    }
}

