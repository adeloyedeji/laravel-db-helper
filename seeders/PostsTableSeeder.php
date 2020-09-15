<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
	public function run()
{
		$rows = [	
			[
				'id' => '9',
				'user_id' => '4',
				'name' => 'mike',
				'comment' => 'i hope this works fo rme',
				'created_at' => '2018-12-28 14:22:46',
				'updated_at' => '2018-12-28 14:22:46',

			],

			[
				'id' => '3',
				'user_id' => '4',
				'name' => 'mike',
				'comment' => 'nice work',
				'created_at' => '2018-12-27 22:30:14',
				'updated_at' => '2018-12-27 22:30:14',

			],

			[
				'id' => '6',
				'user_id' => '4',
				'name' => 'mike',
				'comment' => 'better',
				'created_at' => '2018-12-27 22:54:43',
				'updated_at' => '2018-12-27 22:54:43',

			],

			[
				'id' => '12',
				'user_id' => '5',
				'name' => 'kinlue',
				'comment' => 'ok hjkjhgfcdfghjkjhgfcghjk',
				'created_at' => '2019-01-16 11:11:35',
				'updated_at' => '2019-01-16 11:11:35',

			],

			[
				'id' => '13',
				'user_id' => '6',
				'name' => 'jude',
				'comment' => 'cool',
				'created_at' => '2019-01-16 11:48:14',
				'updated_at' => '2019-01-16 11:48:14',

			],

			[
				'id' => '14',
				'user_id' => '6',
				'name' => 'jude',
				'comment' => 'sweet like sugar yellow like fanta everybody like pawpaw',
				'created_at' => '2019-01-16 11:55:21',
				'updated_at' => '2019-01-16 11:55:21',

			],

			[
				'id' => '15',
				'user_id' => '5',
				'name' => 'Biggy',
				'comment' => 'jbgft',
				'created_at' => '2019-03-10 17:46:11',
				'updated_at' => '2019-03-10 17:46:11',

			],

		];
		foreach ($rows as $row) {
			DB::table('Posts')->insert($row);
		}
	}
}