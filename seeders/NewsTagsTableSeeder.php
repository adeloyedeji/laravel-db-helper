<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NewsTagsTableSeeder extends Seeder
{
	public function run()
{
		$rows = [	
			[
				'id' => '1',
				'news_id' => '1',
				'tag' => 'Bootstrap',
				'created_at' => '2018-09-17 02:17:00',
				'updated_at' => '2018-09-17 02:17:00',

			],

			[
				'id' => '2',
				'news_id' => '1',
				'tag' => 'HTML5',
				'created_at' => '2018-09-17 02:17:00',
				'updated_at' => '2018-09-17 02:17:00',

			],

			[
				'id' => '3',
				'news_id' => '1',
				'tag' => 'Wordpress',
				'created_at' => '2018-09-17 02:17:00',
				'updated_at' => '2018-09-17 02:17:00',

			],

			[
				'id' => '4',
				'news_id' => '2',
				'tag' => 'CSS3',
				'created_at' => '2018-09-17 02:17:00',
				'updated_at' => '2018-09-17 02:17:00',

			],

			[
				'id' => '5',
				'news_id' => '2',
				'tag' => 'Creative',
				'created_at' => '2018-09-17 02:17:00',
				'updated_at' => '2018-09-17 02:17:00',

			],

			[
				'id' => '6',
				'news_id' => '2',
				'tag' => 'Multipurpose',
				'created_at' => '2018-09-17 02:17:00',
				'updated_at' => '2018-09-17 02:17:00',

			],

			[
				'id' => '7',
				'news_id' => '3',
				'tag' => 'Bootstrap',
				'created_at' => '2018-09-17 02:17:00',
				'updated_at' => '2018-09-17 02:17:00',

			],

			[
				'id' => '8',
				'news_id' => '3',
				'tag' => 'HTML5',
				'created_at' => '2018-09-17 02:17:00',
				'updated_at' => '2018-09-17 02:17:00',

			],

			[
				'id' => '9',
				'news_id' => '3',
				'tag' => 'Wordpress',
				'created_at' => '2018-09-17 02:17:00',
				'updated_at' => '2018-09-17 02:17:00',

			],

			[
				'id' => '10',
				'news_id' => '3',
				'tag' => 'Wordpress',
				'created_at' => '2018-09-17 02:17:00',
				'updated_at' => '2018-09-17 02:17:00',

			],

		];
		foreach ($rows as $row) {
			DB::table('NewsTags')->insert($row);
		}
	}
}