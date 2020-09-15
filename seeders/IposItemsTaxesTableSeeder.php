<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IposItemsTaxesTableSeeder extends Seeder
{
	public function run()
{
		$rows = [	
			[
				'item_id' => '142',
				'name' => 'Tax 1',
				'percent' => '8.000',

			],

			[
				'item_id' => '142',
				'name' => 'Tax 2',
				'percent' => '10.000',

			],

		];
		foreach ($rows as $row) {
			DB::table('IposItemsTaxes')->insert($row);
		}
	}
}