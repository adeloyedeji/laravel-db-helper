<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
	public function run()
{
		$rows = [	
			[
				'id' => '1',
				'name' => '',
				'created_at' => '2019-09-22 16:06:29',
				'updated_at' => '2019-09-22 16:06:29',
				'user_id' => '5',
				'blog_id' => '0',
				'body' => 'ok gfhjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj',

			],

			[
				'id' => '2',
				'name' => '',
				'created_at' => '2019-09-22 16:07:57',
				'updated_at' => '2019-09-22 16:07:57',
				'user_id' => '5',
				'blog_id' => '0',
				'body' => 'kkm uhuhuhu uhu',

			],

			[
				'id' => '3',
				'name' => '',
				'created_at' => '2019-09-22 16:17:57',
				'updated_at' => '2019-09-22 16:17:57',
				'user_id' => '5',
				'blog_id' => '0',
				'body' => 'gh',

			],

			[
				'id' => '4',
				'name' => '',
				'created_at' => '2019-09-22 16:25:12',
				'updated_at' => '2019-09-22 16:25:12',
				'user_id' => '5',
				'blog_id' => '0',
				'body' => 'nill',

			],

		];
		foreach ($rows as $row) {
			DB::table('Comments')->insert($row);
		}
	}
}