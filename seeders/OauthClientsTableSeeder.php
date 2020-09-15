<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OauthClientsTableSeeder extends Seeder
{
	public function run()
{
		$rows = [	
			[
				'id' => '1',
				'user_id' => '',
				'name' => 'Laravel Personal Access Client',
				'secret' => 'WVOwrC7OHi5pQKLPX3GkagczFolRMRYRdiAZxq1s',
				'redirect' => 'http://localhost',
				'personal_access_client' => '1',
				'password_client' => '0',
				'revoked' => '0',
				'created_at' => '2018-02-12 13:22:27',
				'updated_at' => '2018-02-12 13:22:27',

			],

			[
				'id' => '2',
				'user_id' => '',
				'name' => 'Laravel Password Grant Client',
				'secret' => 'h0XIzkYh1p64xZbrJi3l5wfHDl3xiM41LVMlBP30',
				'redirect' => 'http://localhost',
				'personal_access_client' => '0',
				'password_client' => '1',
				'revoked' => '0',
				'created_at' => '2018-02-12 13:22:27',
				'updated_at' => '2018-02-12 13:22:27',

			],

		];
		foreach ($rows as $row) {
			DB::table('OauthClients')->insert($row);
		}
	}
}