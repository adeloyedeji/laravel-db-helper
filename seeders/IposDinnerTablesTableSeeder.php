<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IposDinnerTablesTableSeeder extends Seeder
{
	public function run()
{
		$rows = [	
			[
				'dinner_table_id' => '1',
				'name' => 'Delivery',
				'status' => '0',
				'deleted' => '0',

			],

			[
				'dinner_table_id' => '2',
				'name' => 'Take Away',
				'status' => '0',
				'deleted' => '0',

			],

		];
		foreach ($rows as $row) {
			\DB::table('IposDinnerTables')->insert($row);
		}
	}
}