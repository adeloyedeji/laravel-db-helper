<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
	public function run()
{
		$rows = [	
			[
				'id' => '1',
				'name' => 'Pharmaceuticals',
				'icon' => '',
				'created_at' => '',
				'updated_at' => '',

			],

			[
				'id' => '2',
				'name' => 'Toiletries',
				'icon' => '',
				'created_at' => '',
				'updated_at' => '',

			],

			[
				'id' => '5',
				'name' => 'Pastry & Beverages',
				'icon' => '',
				'created_at' => '',
				'updated_at' => '',

			],

			[
				'id' => '6',
				'name' => 'Bags & Toys',
				'icon' => '',
				'created_at' => '',
				'updated_at' => '',

			],

			[
				'id' => '7',
				'name' => 'Accessories',
				'icon' => '',
				'created_at' => '',
				'updated_at' => '',

			],

			[
				'id' => '8',
				'name' => 'Stationery',
				'icon' => '',
				'created_at' => '',
				'updated_at' => '',

			],

			[
				'id' => '9',
				'name' => 'Drinks & Wines',
				'icon' => '',
				'created_at' => '',
				'updated_at' => '',

			],

			[
				'id' => '11',
				'name' => 'Cosmetics',
				'icon' => '',
				'created_at' => '',
				'updated_at' => '',

			],

		];
		foreach ($rows as $row) {
			DB::table('Categories')->insert($row);
		}
	}
}