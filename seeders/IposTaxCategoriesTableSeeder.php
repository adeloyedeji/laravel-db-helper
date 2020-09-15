<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IposTaxCategoriesTableSeeder extends Seeder
{
	public function run()
{
		$rows = [	
			[
				'tax_category_id' => '0',
				'tax_category' => 'Standard',
				'tax_group_sequence' => '10',

			],

			[
				'tax_category_id' => '1',
				'tax_category' => 'Service',
				'tax_group_sequence' => '12',

			],

			[
				'tax_category_id' => '2',
				'tax_category' => 'Alcohol',
				'tax_group_sequence' => '11',

			],

		];
		foreach ($rows as $row) {
			DB::table('IposTaxCategories')->insert($row);
		}
	}
}