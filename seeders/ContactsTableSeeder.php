<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
	public function run()
{
		$rows = [	
			[
				'id' => '3',
				'name' => 'cookies',
				'email' => 'cookies@gmail.com',
				'phone' => '08132364215',
				'message' => 'pls i wanna what it takes to be a superman, like i...',
				'created_at' => '2019-01-14 10:17:40',
				'updated_at' => '2019-01-14 10:17:40',

			],

			[
				'id' => '4',
				'name' => 'ikeri ebenezer',
				'email' => 'ikbenezer@gmail.com',
				'phone' => '08132364213',
				'message' => 'good work',
				'created_at' => '2019-01-14 10:25:43',
				'updated_at' => '2019-01-14 10:25:43',

			],

			[
				'id' => '5',
				'name' => 'tito',
				'email' => 'tito@test.com',
				'phone' => '08132364215',
				'message' => 'vbnnfgn nfmfv',
				'created_at' => '2019-02-24 01:44:18',
				'updated_at' => '2019-02-24 01:44:18',

			],

			[
				'id' => '6',
				'name' => 'JOHN BOSCO',
				'email' => 'jbosco@gmail.com',
				'phone' => '09057321337',
				'message' => 'TEST MESSAGE',
				'created_at' => '2019-07-26 16:26:49',
				'updated_at' => '2019-07-26 16:26:49',

			],

		];
		foreach ($rows as $row) {
			\DB::table('Contacts')->insert($row);
		}
	}
}