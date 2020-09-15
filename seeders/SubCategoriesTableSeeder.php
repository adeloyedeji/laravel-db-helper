<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SubCategoriesTableSeeder extends Seeder
{
	public function run()
{
		$rows = [	
			[
				'id' => '1',
				'category_id' => '1',
				'name' => 'Allergy',
				'icon' => '',
				'created_at' => '',
				'updated_at' => '',

			],

			[
				'id' => '2',
				'category_id' => '1',
				'name' => 'Anagesic',
				'icon' => '',
				'created_at' => '',
				'updated_at' => '',

			],

			[
				'id' => '3',
				'category_id' => '1',
				'name' => 'Antacid',
				'icon' => '',
				'created_at' => '',
				'updated_at' => '',

			],

			[
				'id' => '4',
				'category_id' => '1',
				'name' => 'Anti Biotics',
				'icon' => '',
				'created_at' => '',
				'updated_at' => '',

			],

			[
				'id' => '5',
				'category_id' => '1',
				'name' => 'Anti Diabetes',
				'icon' => '',
				'created_at' => '',
				'updated_at' => '',

			],

			[
				'id' => '6',
				'category_id' => '1',
				'name' => 'Anti Epileptic',
				'icon' => '',
				'created_at' => '',
				'updated_at' => '',

			],

			[
				'id' => '7',
				'category_id' => '1',
				'name' => 'Anti Malaria',
				'icon' => '',
				'created_at' => '',
				'updated_at' => '',

			],

			[
				'id' => '8',
				'category_id' => '1',
				'name' => 'Anti Poison',
				'icon' => '',
				'created_at' => '',
				'updated_at' => '',

			],

			[
				'id' => '9',
				'category_id' => '1',
				'name' => 'Asthmatic Drugs',
				'icon' => '',
				'created_at' => '',
				'updated_at' => '',

			],

			[
				'id' => '10',
				'category_id' => '1',
				'name' => 'Cough Syrup',
				'icon' => '',
				'created_at' => '',
				'updated_at' => '',

			],

			[
				'id' => '11',
				'category_id' => '1',
				'name' => 'Cream & Ointments',
				'icon' => '',
				'created_at' => '',
				'updated_at' => '',

			],

			[
				'id' => '12',
				'category_id' => '1',
				'name' => 'Multi-Vitamins',
				'icon' => '',
				'created_at' => '',
				'updated_at' => '',

			],

			[
				'id' => '13',
				'category_id' => '1',
				'name' => 'Deworming Drugs',
				'icon' => '',
				'created_at' => '',
				'updated_at' => '',

			],

			[
				'id' => '14',
				'category_id' => '1',
				'name' => 'Sex Enhancement',
				'icon' => '',
				'created_at' => '',
				'updated_at' => '',

			],

			[
				'id' => '15',
				'category_id' => '1',
				'name' => 'Surgicals',
				'icon' => '',
				'created_at' => '',
				'updated_at' => '',

			],

			[
				'id' => '16',
				'category_id' => '1',
				'name' => 'Anti Poison',
				'icon' => '',
				'created_at' => '',
				'updated_at' => '',

			],

		];
		foreach ($rows as $row) {
			DB::table('SubCategories')->insert($row);
		}
	}
}