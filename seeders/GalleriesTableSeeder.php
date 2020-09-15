<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GalleriesTableSeeder extends Seeder
{
	public function run()
{
		$rows = [	
			[
				'id' => '1',
				'image' => 'images/gallery/01.jpg',
				'group' => 'pharmacy',
				'title' => 'Meet the CEO',
				'created_at' => '2018-12-11 11:31:27',
				'updated_at' => '2018-12-11 11:31:27',

			],

			[
				'id' => '2',
				'image' => 'images/gallery/02.jpg',
				'group' => 'medical laboratory',
				'title' => 'What's up',
				'created_at' => '2018-12-11 11:31:27',
				'updated_at' => '2018-12-11 11:31:27',

			],

			[
				'id' => '3',
				'image' => 'images/gallery/03.jpg',
				'group' => 'super market',
				'title' => 'Meet the CEO',
				'created_at' => '2018-12-11 11:32:15',
				'updated_at' => '2018-12-11 11:32:15',

			],

			[
				'id' => '4',
				'image' => 'images/gallery/04.jpg',
				'group' => 'staff',
				'title' => 'What's up',
				'created_at' => '2018-12-11 11:32:15',
				'updated_at' => '2018-12-11 11:32:15',

			],

			[
				'id' => '5',
				'image' => 'images/gallery/05.jpg',
				'group' => 'pharmacy',
				'title' => 'What's sup',
				'created_at' => '2018-12-11 11:33:39',
				'updated_at' => '2018-12-11 11:33:39',

			],

			[
				'id' => '6',
				'image' => 'images/gallery/06.jpg',
				'group' => 'staff',
				'title' => 'Meet the Boss',
				'created_at' => '2018-12-11 11:33:39',
				'updated_at' => '2018-12-11 11:33:39',

			],

			[
				'id' => '7',
				'image' => 'images/gallery/07.jpg',
				'group' => 'medical laboratory',
				'title' => 'What's sup',
				'created_at' => '2018-12-11 11:34:11',
				'updated_at' => '2018-12-11 11:34:11',

			],

			[
				'id' => '8',
				'image' => 'images/gallery/08.jpg',
				'group' => 'super market',
				'title' => 'Meet the Boss',
				'created_at' => '2018-12-11 11:34:11',
				'updated_at' => '2018-12-11 11:34:11',

			],

		];
		foreach ($rows as $row) {
			DB::table('Galleries')->insert($row);
		}
	}
}