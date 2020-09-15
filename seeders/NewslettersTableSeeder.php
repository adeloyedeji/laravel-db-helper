<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NewslettersTableSeeder extends Seeder
{
	public function run()
{
		$rows = [	
			[
				'id' => '1',
				'email' => 'cookies@gmail.com',
				'created_at' => '2019-01-30 09:45:55',
				'updated_at' => '2019-01-30 09:45:55',

			],

			[
				'id' => '2',
				'email' => 'cookies@gmail.com',
				'created_at' => '2019-01-30 09:47:41',
				'updated_at' => '2019-01-30 09:47:41',

			],

			[
				'id' => '3',
				'email' => 'ikbenezer@gmail.com',
				'created_at' => '2019-01-30 09:48:53',
				'updated_at' => '2019-01-30 09:48:53',

			],

		];
		foreach ($rows as $row) {
			\DB::table('Newsletters')->insert($row);
		}
	}
}