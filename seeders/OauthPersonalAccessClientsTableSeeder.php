<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OauthPersonalAccessClientsTableSeeder extends Seeder
{
	public function run()
{
		$rows = [	
			[
				'id' => '1',
				'client_id' => '1',
				'created_at' => '2018-02-12 13:22:27',
				'updated_at' => '2018-02-12 13:22:27',

			],

		];
		foreach ($rows as $row) {
			\DB::table('OauthPersonalAccessClients')->insert($row);
		}
	}
}