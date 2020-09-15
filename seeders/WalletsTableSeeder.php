<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WalletsTableSeeder extends Seeder
{
	public function run()
{
		$rows = [	
			[
				'id' => '1',
				'user_id' => '1',
				'balance' => '292983',
				'credit' => '100000',
				'created_at' => '2020-02-25 12:39:55',
				'updated_at' => '2020-03-02 19:57:08',

			],

			[
				'id' => '2',
				'user_id' => '2',
				'balance' => '63260',
				'credit' => '100',
				'created_at' => '2020-02-25 14:16:11',
				'updated_at' => '2020-04-15 12:53:36',

			],

			[
				'id' => '3',
				'user_id' => '3',
				'balance' => '299600',
				'credit' => '0',
				'created_at' => '2020-04-04 14:50:33',
				'updated_at' => '2020-04-15 20:11:12',

			],

			[
				'id' => '6',
				'user_id' => '10',
				'balance' => '0',
				'credit' => '0',
				'created_at' => '2020-04-27 18:20:52',
				'updated_at' => '2020-04-27 18:20:52',

			],

			[
				'id' => '7',
				'user_id' => '68',
				'balance' => '970000',
				'credit' => '0',
				'created_at' => '2020-06-08 12:35:56',
				'updated_at' => '2020-06-09 13:52:27',

			],

			[
				'id' => '10',
				'user_id' => '71',
				'balance' => '0',
				'credit' => '0',
				'created_at' => '2020-06-09 09:36:16',
				'updated_at' => '2020-06-09 09:36:16',

			],

			[
				'id' => '11',
				'user_id' => '72',
				'balance' => '0',
				'credit' => '0',
				'created_at' => '2020-06-09 14:06:27',
				'updated_at' => '2020-06-09 14:06:27',

			],

		];
		foreach ($rows as $row) {
			\DB::table('Wallets')->insert($row);
		}
	}
}