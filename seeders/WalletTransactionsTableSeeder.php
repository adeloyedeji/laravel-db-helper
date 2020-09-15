<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WalletTransactionsTableSeeder extends Seeder
{
	public function run()
{
		$rows = [	
			[
				'id' => '1',
				'wallet_id' => '2',
				'type' => 'Credit',
				'amount' => '37000',
				'created_at' => '2020-02-25 14:35:07',
				'updated_at' => '2020-02-25 14:35:07',

			],

			[
				'id' => '2',
				'wallet_id' => '2',
				'type' => 'Debit',
				'amount' => '4420',
				'created_at' => '2020-02-25 14:35:20',
				'updated_at' => '2020-02-25 14:35:20',

			],

			[
				'id' => '3',
				'wallet_id' => '1',
				'type' => 'Debit',
				'amount' => '7017',
				'created_at' => '2020-03-02 19:57:08',
				'updated_at' => '2020-03-02 19:57:08',

			],

			[
				'id' => '4',
				'wallet_id' => '2',
				'type' => 'Debit',
				'amount' => '2150',
				'created_at' => '2020-03-18 15:03:33',
				'updated_at' => '2020-03-18 15:03:33',

			],

			[
				'id' => '5',
				'wallet_id' => '3',
				'type' => 'Credit',
				'amount' => '300000',
				'created_at' => '2020-04-15 12:05:56',
				'updated_at' => '2020-04-15 12:05:56',

			],

			[
				'id' => '6',
				'wallet_id' => '2',
				'type' => 'Debit',
				'amount' => '19600',
				'created_at' => '2020-04-15 12:53:36',
				'updated_at' => '2020-04-15 12:53:36',

			],

			[
				'id' => '14',
				'wallet_id' => '3',
				'type' => 'Debit',
				'amount' => '400',
				'created_at' => '2020-04-15 20:11:12',
				'updated_at' => '2020-04-15 20:11:12',

			],

			[
				'id' => '15',
				'wallet_id' => '3',
				'type' => 'Debit',
				'amount' => '3',
				'created_at' => '2020-04-28 12:21:30',
				'updated_at' => '2020-04-28 12:21:30',

			],

			[
				'id' => '16',
				'wallet_id' => '7',
				'type' => 'Debit',
				'amount' => '10000',
				'created_at' => '2020-06-08 13:28:47',
				'updated_at' => '2020-06-08 13:28:47',

			],

			[
				'id' => '17',
				'wallet_id' => '7',
				'type' => 'Debit',
				'amount' => '10000',
				'created_at' => '2020-06-08 14:02:33',
				'updated_at' => '2020-06-08 14:02:33',

			],

			[
				'id' => '18',
				'wallet_id' => '7',
				'type' => 'Debit',
				'amount' => '10000',
				'created_at' => '2020-06-09 13:52:27',
				'updated_at' => '2020-06-09 13:52:27',

			],

		];
		foreach ($rows as $row) {
			DB::table('WalletTransactions')->insert($row);
		}
	}
}