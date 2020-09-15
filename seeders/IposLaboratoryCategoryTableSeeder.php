<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IposLaboratoryCategoryTableSeeder extends Seeder
{
	public function run()
{
		$rows = [	
			[
				'lab_category_id' => '1',
				'lab_category_name' => 'Chemistry',
				'deleted' => '0',

			],

			[
				'lab_category_id' => '2',
				'lab_category_name' => 'Microbiology',
				'deleted' => '0',

			],

			[
				'lab_category_id' => '3',
				'lab_category_name' => 'Haematology',
				'deleted' => '0',

			],

		];
		foreach ($rows as $row) {
			DB::table('IposLaboratoryCategory')->insert($row);
		}
	}
}