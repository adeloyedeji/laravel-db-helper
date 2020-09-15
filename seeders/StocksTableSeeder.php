<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StocksTableSeeder extends Seeder
{
	public function run()
{
		$rows = [	
			[
				'id' => '3',
				'product_id' => '53',
				'product_count' => '20',
				'created_at' => '2018-08-28 13:05:58',
				'updated_at' => '2018-08-28 13:05:58',

			],

			[
				'id' => '4',
				'product_id' => '57',
				'product_count' => '20',
				'created_at' => '2018-08-28 13:50:44',
				'updated_at' => '2018-08-28 13:50:44',

			],

			[
				'id' => '5',
				'product_id' => '58',
				'product_count' => '20',
				'created_at' => '2018-08-29 08:38:00',
				'updated_at' => '2018-08-29 08:38:00',

			],

		];
		foreach ($rows as $row) {
			\DB::table('Stocks')->insert($row);
		}
	}
}