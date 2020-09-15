<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReceiversTableSeeder extends Seeder
{
	public function run()
{
		$rows = [	
			[
				'id' => '1',
				'user_id' => '1',
				'message_id' => '1',
				'status' => '1',
				'created_at' => '2018-12-18 15:23:36',
				'updated_at' => '2018-12-18 15:23:36',

			],

			[
				'id' => '2',
				'user_id' => '2',
				'message_id' => '2',
				'status' => '1',
				'created_at' => '2018-12-18 15:24:20',
				'updated_at' => '2018-12-18 15:24:20',

			],

			[
				'id' => '3',
				'user_id' => '1',
				'message_id' => '3',
				'status' => '1',
				'created_at' => '2018-12-18 15:52:26',
				'updated_at' => '2018-12-18 15:52:26',

			],

			[
				'id' => '4',
				'user_id' => '1',
				'message_id' => '4',
				'status' => '1',
				'created_at' => '2018-12-18 15:53:52',
				'updated_at' => '2018-12-18 15:53:52',

			],

			[
				'id' => '5',
				'user_id' => '1',
				'message_id' => '5',
				'status' => '1',
				'created_at' => '2018-12-18 15:53:59',
				'updated_at' => '2018-12-18 15:53:59',

			],

			[
				'id' => '6',
				'user_id' => '5',
				'message_id' => '6',
				'status' => '1',
				'created_at' => '2019-01-17 15:15:53',
				'updated_at' => '2019-01-17 15:15:53',

			],

		];
		foreach ($rows as $row) {
			DB::table('Receivers')->insert($row);
		}
	}
}