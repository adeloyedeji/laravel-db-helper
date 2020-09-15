<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NewsLikesTableSeeder extends Seeder
{
	public function run()
{
		$rows = [	
			[
				'id' => '1',
				'news_id' => '1',
				'created_at' => '2018-09-17 02:14:00',
				'updated_at' => '2018-09-17 02:14:00',

			],

			[
				'id' => '2',
				'news_id' => '1',
				'created_at' => '2018-09-17 02:14:00',
				'updated_at' => '2018-09-17 02:14:00',

			],

			[
				'id' => '3',
				'news_id' => '1',
				'created_at' => '2018-09-17 02:14:00',
				'updated_at' => '2018-09-17 02:14:00',

			],

			[
				'id' => '4',
				'news_id' => '1',
				'created_at' => '2018-09-17 02:14:00',
				'updated_at' => '2018-09-17 02:14:00',

			],

			[
				'id' => '5',
				'news_id' => '2',
				'created_at' => '2018-09-17 02:14:00',
				'updated_at' => '2018-09-17 02:14:00',

			],

			[
				'id' => '6',
				'news_id' => '2',
				'created_at' => '2018-09-17 02:14:00',
				'updated_at' => '2018-09-17 02:14:00',

			],

			[
				'id' => '7',
				'news_id' => '3',
				'created_at' => '2018-09-17 02:14:00',
				'updated_at' => '2018-09-17 02:14:00',

			],

			[
				'id' => '8',
				'news_id' => '2',
				'created_at' => '2018-09-17 02:14:00',
				'updated_at' => '2018-09-17 02:14:00',

			],

			[
				'id' => '9',
				'news_id' => '3',
				'created_at' => '2018-09-17 02:14:00',
				'updated_at' => '2018-09-17 02:14:00',

			],

			[
				'id' => '10',
				'news_id' => '3',
				'created_at' => '2018-09-17 02:14:00',
				'updated_at' => '2018-09-17 02:14:00',

			],

		];
		foreach ($rows as $row) {
			\DB::table('NewsLikes')->insert($row);
		}
	}
}