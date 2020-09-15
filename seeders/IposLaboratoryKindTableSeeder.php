<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IposLaboratoryKindTableSeeder extends Seeder
{
	public function run()
{
		$rows = [	
			[
				'lab_testkind_id' => '1',
				'lab_testkind_name' => 'single',
				'deleted' => '0',

			],

			[
				'lab_testkind_id' => '2',
				'lab_testkind_name' => 'special',
				'deleted' => '0',

			],

		];
		foreach ($rows as $row) {
			DB::table('IposLaboratoryKind')->insert($row);
		}
	}
}