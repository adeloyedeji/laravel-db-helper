<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
	public function run()
{
		$rows = [	
			[
				'id' => '1',
				'user_id' => '2',
				'message' => 'hi',
				'type' => '1',
				'file_path' => '',
				'file_name' => '',
				'created_at' => '2018-12-18 15:23:36',
				'updated_at' => '2018-12-18 15:23:36',
				'status' => '1',

			],

			[
				'id' => '2',
				'user_id' => '1',
				'message' => 'how you',
				'type' => '1',
				'file_path' => '',
				'file_name' => '',
				'created_at' => '2018-12-18 15:24:20',
				'updated_at' => '2018-12-18 15:24:20',
				'status' => '1',

			],

			[
				'id' => '3',
				'user_id' => '2',
				'message' => 'file',
				'type' => '4',
				'file_path' => 'http://mainapp/uploads/chats/c6.jpg',
				'file_name' => 'c6.jpg',
				'created_at' => '2018-12-18 15:52:26',
				'updated_at' => '2018-12-18 15:52:26',
				'status' => '1',

			],

			[
				'id' => '4',
				'user_id' => '2',
				'message' => 'hi',
				'type' => '1',
				'file_path' => '',
				'file_name' => '',
				'created_at' => '2018-12-18 15:53:52',
				'updated_at' => '2018-12-18 15:53:52',
				'status' => '1',

			],

			[
				'id' => '5',
				'user_id' => '2',
				'message' => 'file',
				'type' => '4',
				'file_path' => 'http://mainapp/uploads/chats/cat-widget2.jpg',
				'file_name' => 'cat-widget2.jpg',
				'created_at' => '2018-12-18 15:53:59',
				'updated_at' => '2018-12-18 15:53:59',
				'status' => '1',

			],

			[
				'id' => '6',
				'user_id' => '9',
				'message' => 'hello',
				'type' => '1',
				'file_path' => '',
				'file_name' => '',
				'created_at' => '2019-01-17 15:15:53',
				'updated_at' => '2019-01-17 15:15:53',
				'status' => '1',

			],

		];
		foreach ($rows as $row) {
			\DB::table('Messages')->insert($row);
		}
	}
}