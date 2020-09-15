<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PricesTableSeeder extends Seeder
{
	public function run()
{
		$rows = [	
			[
				'id' => '1',
				'title' => 'Blood Test',
				'price' => '150',
				'categories' => 'laboratory',
				'created_at' => '2018-11-27 13:17:44',
				'updated_at' => '2018-11-27 13:17:44',

			],

			[
				'id' => '2',
				'title' => 'Treadmill Stress Test',
				'price' => '150',
				'categories' => 'treatment',
				'created_at' => '2018-11-27 13:17:44',
				'updated_at' => '2018-11-27 13:17:44',

			],

			[
				'id' => '3',
				'title' => 'Urine Test',
				'price' => '150',
				'categories' => 'investigations',
				'created_at' => '2018-11-27 13:18:15',
				'updated_at' => '2018-11-27 13:18:15',

			],

			[
				'id' => '4',
				'title' => 'Allergy Test',
				'price' => '150',
				'categories' => 'laboratory',
				'created_at' => '2018-11-27 13:18:15',
				'updated_at' => '2018-11-27 13:18:15',

			],

			[
				'id' => '5',
				'title' => 'Blood Test',
				'price' => '150',
				'categories' => 'treatment',
				'created_at' => '2018-11-27 13:18:47',
				'updated_at' => '2018-11-27 13:18:47',

			],

			[
				'id' => '6',
				'title' => 'Treadmill Stress Test',
				'price' => '150',
				'categories' => 'investigations',
				'created_at' => '2018-11-27 13:18:47',
				'updated_at' => '2018-11-27 13:18:47',

			],

			[
				'id' => '7',
				'title' => 'Allergy Test',
				'price' => '150',
				'categories' => 'laboratory',
				'created_at' => '2018-11-27 13:19:20',
				'updated_at' => '2018-11-27 13:19:20',

			],

			[
				'id' => '8',
				'title' => 'Urine Test',
				'price' => '230',
				'categories' => 'treatment',
				'created_at' => '2018-11-27 13:19:20',
				'updated_at' => '2018-11-28 13:47:15',

			],

		];
		foreach ($rows as $row) {
			\DB::table('Prices')->insert($row);
		}
	}
}